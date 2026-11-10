<?php

namespace Tests\Unit;

use App\Support\Iban;
use PHPUnit\Framework\TestCase;

class IbanTest extends TestCase
{
    public function test_iban_francais_valide(): void
    {
        $this->assertTrue(Iban::isValid('FR76 3000 6000 0112 3456 7890 189'));
    }

    public function test_iban_valide_sans_espaces_et_en_minuscules(): void
    {
        $this->assertTrue(Iban::isValid('fr7630006000011234567890189'));
    }

    public function test_cle_invalide(): void
    {
        // Même IBAN, dernier chiffre modifié : modulo 97 != 1
        $this->assertFalse(Iban::isValid('FR76 3000 6000 0112 3456 7890 188'));
    }

    public function test_iban_fr_de_mauvaise_longueur(): void
    {
        // 26 caractères au lieu de 27
        $this->assertFalse(Iban::isValid('FR76 3000 6000 0112 3456 7890 18'));
    }

    public function test_caractere_special_refuse(): void
    {
        $this->assertFalse(Iban::isValid('FR76 3000 6000 0112 3456 7890 18$'));
    }
}
