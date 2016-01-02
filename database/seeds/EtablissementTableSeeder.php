<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EtablissementTableSeeder extends Seeder
{
    protected $table = 'etablissements' ;

    private function getData()
	{
		$faker = Faker::create();
		foreach (range(1, 3) as $index) {
			$etablissement = [
			            'code' => $faker->unique()->word(),
			            'designation' => $faker->company(),
			            'ville' => $faker->state(),
			            'created_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
			            'updated_at' => $faker->date($format = 'Y-m-d', $max = 'now')	
			        ];

			$etablissements[] = $etablissement;
		}

		return $etablissements;
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
