<?php

namespace Database\Factories;

use App\Models\Outlet;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class PaketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_outlet' => $this->faker->randomElement(Outlet::select('id')->get()),
            'jenis' => $this->faker->randomElement(['kiloan', 'selimut', 'bed_cover', 'kaos', 'lain']),
            'nama_paket' => $this->faker->word(),
            'harga' => round($this->faker->numberBetween(10000, 250000)),
        ];
    }
}
