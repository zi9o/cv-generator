<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class FiliereTableSeeder extends Seeder
{
	protected $table = 'filieres' ;

	public function getData()
	{
		$faker = Faker::create();
		foreach (range(1, 5) as $index) {
			$filiere = [
			            'code' => $faker->unique()->word(),
			            'designation' => $faker->sentence($nbWords = 3),
			            'created_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
			            'updated_at' => $faker->date($format = 'Y-m-d', $max = 'now')	
			        ];

			$filieres[] = $filiere;
		}

		return $filieres;
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
