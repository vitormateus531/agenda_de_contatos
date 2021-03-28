<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->firstName,
            'email' => $this->faker->email,
            'telefone_fixo' => $this->faker->phoneNumber,
            'celular' => $this->faker->phoneNumber, 
            'rede_social' => 'www.facebook.com.br/'.$this->faker->firstName,
            'id_user' => 1,
        ];
    }
}
