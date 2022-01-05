<?php

namespace Database\Seeders;

use Database\Seeders\Seeds\SettingsSeeder;
use Database\Seeders\Seeds\InvoiceSettingsSeeder;
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
        $this->call([
            SettingsSeeder::class,
        ]);

    }
}
