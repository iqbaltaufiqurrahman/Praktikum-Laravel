<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use faker\Factory as Faker;
 
class TransactionsSeeder extends Seeder
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
            DB::table('transactions')->insert([
                'user_id' => $faker->numberBetween(1, 5), //foreign key
                'name' => $faker->name,
                'address' => $faker->address,
                'phone' => $faker->phoneNumber,
                'date' => $faker->date,
                'court_id' => $faker->numberBetween(1, 5), //foreign key
                'starttime' => $faker->time(),
                'endtime' => $faker->time(),
                'costume' => $faker->boolean(),
                'shoes' => $faker->boolean(),
                'total' => $faker->numberBetween(100000, 1000000),
                'grandtotal' => $faker->numberBetween(100000, 1000000),
                'paytotal' => $faker->numberBetween(100000, 1000000)
            ]);
        }
    }
}