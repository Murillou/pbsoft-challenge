<?php

namespace App\Rules;

use Bissolli\ValidadorCpfCnpj\CNPJ;
use Bissolli\ValidadorCpfCnpj\CPF;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class DocumentValidator implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $document = preg_replace("/\D/", '', $value);

        $isValid = match (strlen($document)) {
            11 => (new CPF($document))->isValid(),
            14 => (new CNPJ($document))->isValid(),
            default => false
        };

        if (!$isValid) {
            $fail("O campo {$attribute} deve conter um CPF ou CNPJ válido.");
        }
    }
}
