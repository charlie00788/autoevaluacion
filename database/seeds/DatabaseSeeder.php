<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(GradeTableSeeder::class);
        $this->call(EspecialtyTableSeeder::class);
        $this->call(CityTableSeeder::class);
        $this->call(UnityTableSeeder::class);
        $this->call(MonthTableSeeder::class);
        $this->call(PersonTableSeeder::class);
//        $this->call(UserTableSeeder::class);

        Model::reguard();
    }
}
