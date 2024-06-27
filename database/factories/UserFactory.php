<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),                            // Nama pengguna acak
            'email' => $this->faker->unique()->safeEmail(),           // Alamat email unik acak
            'email_verified_at' => now(),                             // Tanggal verifikasi email saat ini
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // Kata sandi default (hashed)
            'remember_token' => Str::random(10),                      // Token untuk fungsi remember me
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,  // Set email_verified_at menjadi null untuk email yang belum terverifikasi
        ]);
    }
}
