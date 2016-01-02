<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class LoisirTableSeeder extends Seeder
{
    protected $table = 'loisirs' ;

    private function getData()
	{
		$faker = Faker::create();
		foreach (range(1, 15) as $index) {
			$loisir = [
			            'description' => $faker->text($maxNbChars = 200) ,
			            'cv_id' => $faker->numberBetween($min = 1, $max = 5),
                		'created_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
			            'updated_at' => $faker->date($format = 'Y-m-d', $max = 'now')	
			        
			        ];

			$loisirs[] = $loisir;
		}

		return $loisirs;
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
