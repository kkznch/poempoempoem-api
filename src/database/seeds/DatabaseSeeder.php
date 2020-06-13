<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        if (App::environment() === 'production') {
            // NOTE: 本番用マスタがあるならこっちに書く
        } else {
            $this->call([
                develop\UsersTableSeeder::class,
                develop\PoemsTableSeeder::class,
            ]);
        }
    }
}
