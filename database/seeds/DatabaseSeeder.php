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

        $this->call(UsersTableSeeder::class);
        $this->call(FiliereTableSeeder::class);
        $this->call(EtudiantTableSeeder::class);
        $this->call(CvTableSeeder::class);
        $this->call(EtablissementTableSeeder::class);
        $this->call(FormationTableSeeder::class);
        $this->call(ExperienceTableSeeder::class);
        $this->call(CompetenceTableSeeder::class);
        $this->call(LangueTableSeeder::class);
        $this->call(LoisirTableSeeder::class);

        Model::reguard();
    }
}
