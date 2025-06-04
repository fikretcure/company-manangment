<?php

namespace Database\Seeders;

use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'G',
            'surname' => 'CODE',
            'email' => env('ADMIN_EMAIL', 'apps@fikretcure.dev'),
        ]);
        User::factory(4)->create();

        $this->call([
            CompanySeeder::class,
        ]);
    }
}
