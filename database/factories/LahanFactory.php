<?php

namespace Database\Factories;

use App\Models\Lahan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lahan>
 */
class LahanFactory extends Factory
{
    protected $model = Lahan::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'nama_lahan' => $this->faker->words(3, true),
            'luas_lahan' => $this->faker->randomFloat(2, 100, 50000),
            'kepemilikan' => $this->faker->randomElement(['Milik Sendiri', 'Sewa', 'Hibah']),
            'harga_perolehan_lahan' => $this->faker->randomFloat(2, 1000000, 100000000),
            'status' => 'aktif',
            'created_by' => 1,
            'date_created' => now(),
        ];
    }

    /**
     * Indicate that the lahan is inactive.
     */
    public function inactive(): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => 'non-aktif',
        ]);
    }
}