<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ExperienceTableSeeder extends Seeder
{
    protected $table = 'experiences' ;

    private function getData()
	{
		$faker = Faker::create();
		foreach (range(1, 15) as $index) {
			$experience = [
			            
			            'intitule' => $faker->sentence($nb = 3) ,
			            'description' => $faker->text($maxNbChars = 200) ,
			            'organisation' => $faker->company($nbWords = 3),
			            'ville' => $faker->state(),
			            'date_dedut' => $faker->date($format = 'Y-m-d', $max = 'now'),
			            'date_fin' => $faker->date($format = 'Y-m-d', $max = 'now'),
			            'cv_id' => $faker->numberBetween($min = 1, $max = 5),
                		'created_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
			            'updated_at' => $faker->date($format = 'Y-m-d', $max = 'now')	
			        
			        ];

			$experiences[] = $experience;
		}

		return $experiences;
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
