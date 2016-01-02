<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class FormationTableSeeder extends Seeder
{
    protected $table = 'formations' ;

    private function getData()
	{
		$faker = Faker::create();
		foreach (range(1, 15) as $index) {
			$formation = [
			            
			            'intitule' => $faker->sentence($nb = 3) ,
			            'diplome' => $faker->sentence($nb = 5) ,
			            'date_dedut' => $faker->date($format = 'Y-m-d', $max = 'now'),
			            'date_fin' => $faker->date($format = 'Y-m-d', $max = 'now'),
			            'mention' => $faker->randomElement($array = array ('abien', 'bien', 'très bien', 'excellent', 'honorable')),
			            'etablissement_id' => $faker->numberBetween($min = 1, $max = 3),
                		'cv_id' => $faker->numberBetween($min = 1, $max = 5),
                		'created_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
			            'updated_at' => $faker->date($format = 'Y-m-d', $max = 'now')	
			        
			        ];

			$formations[] = $formation;
		}

		return $formations;
	}

	/**
     * Run the database seeds.
     *
     * @return void
     */
	public function run()
	{
		if (!isset($this->table)) {
			throw new Exception("No table specified", 1);
			
		}

		DB::table($this->table)->delete() ;

		DB::table($this->table)->insert($this->getData());
	}
}
