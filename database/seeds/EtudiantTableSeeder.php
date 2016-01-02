<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EtudiantTableSeeder extends Seeder
{
    protected $table = 'etudiants' ;

    private function getData()
	{
		$faker = Faker::create();
		foreach (range(1, 10) as $index) {
			$etudiant = [
						'cne' => $faker->postcode(),
			            'email' => $faker->freeEmail(),
			            'nom' => $faker->firstName($gender = 'male'|'female'),
		                'prenom' => $faker->lastName(),
			            'dateNaissance' => $faker->date($format = 'Y-m-d', $max = 'now'),			            
			            'photo' => $faker->imageUrl($width = 640, $height = 480),
						'telephone' => $faker->phoneNumber(),
			            'situation' => $faker->randomElement($array = array ('marié', 'celibataire', 'divorcé')),
			            'adresse'=> $faker->streetAddress(),
			            'filiere_id' => $faker->numberBetween($min = 1, $max = 5),
                		'created_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
			            'updated_at' => $faker->date($format = 'Y-m-d', $max = 'now')	
			        ];

			$etudiants[] = $etudiant;
		}

		return $etudiants;
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
