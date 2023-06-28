<?php

namespace Database\Seeders;

use App\Models\Hepatitis;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $hepatitis = ["Hepatitis A","Hepatitis B", "Hepatitis C", "Hepatitis D"];
        foreach ($hepatitis as $h) {
            Hepatitis::create([
                'nama' => $h
            ]);
        }
    }
}
