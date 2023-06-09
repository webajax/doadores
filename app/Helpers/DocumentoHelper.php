<?php

namespace App\Helpers;

class DocumentoHelper
{
    public static function cpf(string $cpf): string
    {
        $cpf = self::apenasNumeros($cpf);
        $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
        return preg_replace('/(\d{3})(\d{3})(\d{3})(\d{2})/', '$1.$2.$3-$4', $cpf);
    }

    public static function cnpj(string $cnpj): string
    {
        $cnpj = self::apenasNumeros($cnpj);
        $cnpj = str_pad($cnpj, 13, '0', STR_PAD_LEFT);
        return preg_replace('/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/', '$1.$2.$3/$4-$5', $cnpj);
    }

    public static function cep(string $cep): string
    {
        $cep = str_pad($cep, 8, '0', STR_PAD_LEFT);
        return preg_replace('/(\d{2})(\d{3})(\d{3})/', '$1.$2-$3', $cep);
    }

    public static function apenasNumeros(string $documento): string
    {
        return strtr($documento, ['.' => '', ',' => '', '/' => '', '-' => '']);
    }

    public static function separarNomeSobrenome(?string $nomeCompleto): array
    {
        if (!$nomeCompleto) {
            return [null, null];
        }

        $nomeCompleto = preg_replace('/(\s\s+)/', ' ', $nomeCompleto);
        $explode = explode(' ', $nomeCompleto);

        return [
            array_shift($explode),
            implode(' ', $explode),
        ];
    }

    public static function cpfCnpj(string $documento): string
    {
        $documento = self::apenasNumeros($documento);

        if (strlen($documento) === 11) {
            return self::cpf($documento);
        }

        return self::cnpj($documento);
    }
}
