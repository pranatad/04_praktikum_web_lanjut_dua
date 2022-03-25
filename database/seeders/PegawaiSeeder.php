<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
 
use Faker\Factory as Faker;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $faker = Faker::create('id_ID');
 
        
        for($x = 1; $x <= 10; $x++){
 
        	
        	\DB::table('pegawai')->insert([
        		'nama' => $faker->name,
        		'alamat' => $faker->address,
        	]);
 
        }
 
    }
}