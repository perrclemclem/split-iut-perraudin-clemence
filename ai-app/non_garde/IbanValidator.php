<?php

namespace App\Support;

class IbanValidator
{
    public static function isValid(string $iban): bool
    {
        $iban = strtoupper(preg_replace('/\s+/', '', $iban) ?? '');

        if (! preg_match('/^[A-Z]{2}[0-9]{2}[A-Z0-9]{11,30}$/', $iban)) {
            return false;
        }

        if (substr($iban, 0, 2) === 'FR' && strlen($iban) !== 27) {
            return false;
        }

        $rearrangedIban = substr($iban, 4).substr($iban, 0, 4);
        $remainder = 0;

        foreach (str_split($rearrangedIban) as $character) {
            $value = ctype_alpha($character)
                ? (string) (ord($character) - 55)
                : $character;

            foreach (str_split($value) as $digit) {
                $remainder = ($remainder * 10 + (int) $digit) % 97;
            }
        }

        return $remainder === 1;
    }
}
