<?php

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
       factory('conexaovida\Doador', 10)->create();
       
       factory('conexaovida\Orgaos', 10)->create();
    }
}
