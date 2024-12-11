<?php

namespace Database\Seeders;

use App\Models\Testimony;
use Illuminate\Database\Seeder;

class TestimonySeeder extends Seeder
{
    public function run(): void
    {
        //for 4 testimonies create
        $testimonies = array_map(fn ($item) => [
            'name' => fake()->company(),
            'title' => fake()->companySuffix(),
            'content' => fake()->realText(),
        ], range(1, 4));

        foreach ($testimonies as $testimony) {
            Testimony::updateOrCreate([
                'client_name' => $testimony['name'],
                'company_name' => $testimony['title'],
            ], [
                'feedback' => $testimony['content'],
            ]);
        }
    }
}
