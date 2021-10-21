<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class BiodatasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $biodatas = [
            ['name'=>'xCoeg', 'borndate'=>'20040114','gender' => 'Male', 'address' => 'Bandung', 'religion' => 'Islam', 'age' => 14 , 'hobby' => 'Fall'],
            ['name'=>'Rimannn', 'borndate'=>'20040609','gender' => 'Male', 'address' => 'Bandung', 'religion' => 'Islam', 'age' => 14 , 'hobby' => 'Trouble Maker'],
            ['name'=>'Jojo', 'borndate'=>'20040229','gender' => 'Male', 'address' => 'Bandung', 'religion' => 'Islam', 'age' => 14 , 'hobby' => 'Gelud'],
            ['name'=>'Fajarrr', 'borndate'=>'20040521','gender' => 'Male', 'address' => 'Bandung', 'religion' => 'Islam', 'age' => 14 , 'hobby' => 'Gelud'],
            ['name'=>'Adi', 'borndate'=>'20040114','gender' => 'Male', 'address' => 'Bandung', 'religion' => 'Islam', 'age' => 14 , 'hobby' => 'seuri' ],
            ];

            DB::table('biodatas')->insert($biodatas);
    }
}
