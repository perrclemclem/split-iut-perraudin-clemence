<?php

namespace Tests\Unit;

use App\Support\IbanValidator;
use PHPUnit\Framework\TestCase;

class IbanValidatorTest extends TestCase
{
    public function test_it_accepts_a_valid_french_iban(): void
    {
        $this->assertTrue(IbanValidator::isValid('FR76 3000 6000 0112 3456 7890 189'));
    }

    public function test_it_normalizes_lowercase_and_unspaced_input(): void
    {
        $this->assertTrue(IbanValidator::isValid('fr7630006000011234567890189'));
    }

    public function test_it_rejects_an_invalid_check_key(): void
    {
        $this->assertFalse(IbanValidator::isValid('FR00 3000 6000 0112 3456 7890 189'));
    }

    public function test_it_rejects_a_french_iban_with_the_wrong_length(): void
    {
        $this->assertFalse(IbanValidator::isValid('FR76 3000 6000 0112 3456 7890 18'));
    }

    public function test_it_rejects_special_characters(): void
    {
        $this->assertFalse(IbanValidator::isValid('FR76 3000-6000 0112 3456 7890 189'));
    }
}
