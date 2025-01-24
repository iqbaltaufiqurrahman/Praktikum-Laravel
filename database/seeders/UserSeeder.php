<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use faker\Factory as Faker;
 
class UserSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        //DB::table('users')->insert([
        //    'name' => Str::random(10),
        //    'email' => Str::random(10).'@example.com',
        //    'password' => Hash::make('password'),
        //]);

        //batch
        //for($i=1; $i <=10; $i++){
        //    DB::table('users')->insert([
        //        'name' => Str::random(10),
        //        'email' => Str::random(10).'@example.com',
        //        'password' => Hash::make('admin123'),
        //    ]);
        //}
        
        //batch with faker

        //Set locale
        $faker = Faker::create('id_ID');
        
        for($i=1; $i <=5; $i++){
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => Hash::make('passwordAdmin123'),
            ]);
        }
    }
}