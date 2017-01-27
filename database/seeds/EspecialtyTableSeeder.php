<?php

use Illuminate\Database\Seeder;

class EspecialtyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createSpecialties();
    }

    private function createSpecialties()
    {
        factory(App\Entities\Especialty::class)->create([
            'especialty'  => 'CGON.'
        ]);

        factory(App\Entities\Especialty::class)->create([
            'especialty'  => 'DIM.'
        ]);

        factory(App\Entities\Especialty::class)->create([
            'especialty'  => 'DAEN.'
        ]);

        factory(App\Entities\Especialty::class)->create([
            'especialty'  => 'DEMN.'
        ]);

        factory(App\Entities\Especialty::class)->create([
            'especialty'  => 'CGEN.'
        ]);

        factory(App\Entities\Especialty::class)->create([
            'especialty'  => 'CGIM.'
        ]);

        factory(App\Entities\Especialty::class)->create([
            'especialty'  => 'CGONAD.'
        ]);

        factory(App\Entities\Especialty::class)->create([
            'especialty'  => 'CGONEL.'
        ]);

        factory(App\Entities\Especialty::class)->create([
            'especialty'  => 'CGONMQ.'
        ]);

        factory(App\Entities\Especialty::class)->create([
            'especialty'  => 'CGONCO.'
        ]);

        factory(App\Entities\Especialty::class)->create([
            'especialty'  => ''
        ]);
    }
}
