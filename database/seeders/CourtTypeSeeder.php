<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use faker\Factory as Faker;
 
class CourtTypeSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {   
        //batch with faker

        //Set locale
        $faker = Faker::create('id_ID');
        
        for($i=1; $i <=5; $i++){
            DB::table('court_types')->insert([
                'name' => 'Lapangan '. $i
            ]);
        }
    }
}