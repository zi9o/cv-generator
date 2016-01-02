<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CvTableSeeder extends Seeder
{
    protected $table = 'cvs' ;

    private function getData()
	{
		$faker = Faker::create();
		foreach (range(1, 5) as $index) {
			$cv = [
			            'nom_cv' => $faker->word(),
			            'lienVideo' => $faker->mimeType(),
			            'etudiant_id' => $faker->numberBetween($min = 1, $max = 10),
                		'created_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
			            'updated_at' => $faker->date($format = 'Y-m-d', $max = 'now')	
			    ];

			$cvs[] = $cv;
		}

		return $cvs;
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
