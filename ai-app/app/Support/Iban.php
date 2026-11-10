<?php

namespace App\Support;

final class Iban
{
    /** Supprime tous les espaces et passe en majuscules. */
    public static function normalize(string $iban): string
    {
        return strtoupper(preg_replace('/\s+/', '', $iban));
    }

    /** Valide un IBAN selon ISO 13616 (fonction pure, sans effet de bord). */
    public static function isValid(string $iban): bool
    {
        $iban = self::normalize($iban);
        $length = strlen($iban);

        // 1. Longueur globale
        if ($length < 15 || $length > 34) {
            return false;
        }

        // 2. Structure : 2 lettres (pays) + 2 chiffres (clé) + lettres/chiffres
        if (!preg_match('/^[A-Z]{2}[0-9]{2}[A-Z0-9]+$/', $iban)) {
            return false;
        }

        // 3. Longueur spécifique à la France
        if (str_starts_with($iban, 'FR') && $length !== 27) {
            return false;
        }

        // 4. Modulo 97 : déplacer les 4 premiers caractères à la fin
        $rearranged = substr($iban, 4) . substr($iban, 0, 4);

        // Lettres -> 10..35 (A=10 ... Z=35)
        $numeric = '';
        foreach (str_split($rearranged) as $char) {
            $numeric .= ctype_alpha($char) ? (string) (ord($char) - 55) : $char;
        }

        return self::mod97($numeric) === 1;
    }

    /**
     * Reste de la division par 97 d'un très grand nombre donné sous forme
     * de chaîne, calculé par blocs (évite tout dépassement d'entier).
     */
    private static function mod97(string $number): int
    {
        $remainder = 0;
        foreach (str_split($number, 7) as $chunk) {
            $remainder = (int) ($remainder . $chunk) % 97;
        }

        return $remainder;
    }
}
