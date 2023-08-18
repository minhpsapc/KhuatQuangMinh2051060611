<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class FaketubesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
            DB::table('faketubes')->insert([
                'channelid' => $faker->uuid,
                'channelname' => $faker->word,
                'description' => $faker->sentence,
                'subscriberscount' => $faker->numberBetween(1000, 1000000),
                'url' => $faker->url,
                'createat' => now(),
                'updatedat' => now(),
            ]);
    }
}
}