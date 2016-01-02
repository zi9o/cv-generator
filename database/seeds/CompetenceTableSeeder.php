<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CompetenceTableSeeder extends Seeder
{
    protected $table = 'competences' ;

    private function getData()
	{
		$faker = Faker::create();
		foreach (range(1, 20) as $index) {
			$competence = [
			            
			            'intitule' => $faker->word() ,
			            'niveau' => $faker->numberBetween($min = 1, $max = 5),
                		'cv_id' => $faker->numberBetween($min = 1, $max = 5),
                		'created_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
			            'updated_at' => $faker->date($format = 'Y-m-d', $max = 'now')	
			        
			        ];

			$competences[] = $competence;
		}

		return $competences;
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
