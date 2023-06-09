<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DoadoresFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'cpf' => $this->faker->randomNumber(3).".".
                $this->faker->randomNumber(3).".".
                $this->faker->randomNumber(3).".".
                $this->faker->randomNumber(2),
            'telefone' => $this->faker->phoneNumber(),
            'data_nascimento' => '2002-01-01',
            'data_cadastro'  => $this->faker->date('YYYY-M-D'),
            'intervalo_doacao' => 'UNICO',
            'forma_pgto' => $this->faker->boolean(),
            'valor_doacao' => $this->faker->randomNumber(5),
            'endereco' => $this->faker->address()
        ];
    }
}
