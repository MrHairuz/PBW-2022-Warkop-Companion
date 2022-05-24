<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PesananFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id'                  => $this->faker->numberBetween(1, \App\Models\User::count()),
            'warkop_name'              => $this->faker->randomElement(['Warung Kopi', 'Cafe']) . " " . $this->faker->firstName() . " " . $this->faker->lastName(),
            'warkop_address'           => $this->faker->streetName . ", " . $this->faker->city,
            'jasa_desain_interior'     => $this->faker->boolean,
            'jasa_desain_branding'     => $this->faker->boolean,
            'jasa_desain_pencahayaan'  => $this->faker->boolean,
            'jasa_desain_exterior'     => $this->faker->boolean,
            'jasa_pengurusan_internet' => $this->faker->boolean,
            'persediaan_meja'          => $this->faker->numberBetween(1, 100),
            'persediaan_kursi'         => $this->faker->numberBetween(1, 400),
            'persediaan_lemari'        => $this->faker->numberBetween(1, 50),
            'persediaan_lampu'         => $this->faker->numberBetween(1, 50),
            'persediaan_kipas'         => $this->faker->numberBetween(1, 50),
            'persediaan_wire'          => $this->faker->numberBetween(1, 50),
        ];
    }
}
