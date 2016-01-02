<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

	protected $table = 'users' ;

	private function getData()
	{
		return [	                
					[
						'name' => 'dialloimrana',
			            'email' => 'dialloimran@gmail.com',
			            'password' => sha1('lelouma'),
			            'admin' => true,
					],

					[
						'name' => 'elfakhryzakaria',
			            'email' => 'elfakhry.zakaria@gmail.com',
			            'password' => sha1('zakaria'),
			            'admin' => false
					],

					[
						'name' => 'boudcharnawal',
			            'email' => 'boudchar.nawal@gmail.com',
			            'password' => sha1('nawal'),
			            'admin' => false
					]
			   ];
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
