<?php

namespace Database\Seeders;

use App\Models\annance;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class annanceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {



        annance::factory(5)->create();
    }
}
