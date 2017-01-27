<?php

use Illuminate\Database\Seeder;

class GradeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createGrades();
    }

    private function createGrades()
    {
        factory(App\Entities\Grade::class)->create([
            'grade'  => 'ALF.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'TF.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'TN.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'CC.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'CF.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'CN.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'SG1.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'SG2.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'SGI.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'SO1.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'SO2.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'SOI.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'Sr.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'Sra.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'Lic.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'Dr.'
        ]);

        factory(App\Entities\Grade::class)->create([
            'grade'  => 'Dra.'
        ]);
    }
}
