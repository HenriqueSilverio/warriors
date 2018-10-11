<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class SpecialityWarriorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $specialityIds = DB::table('specialities')->pluck('id')->toArray();
        $warriorsIds   = DB::table('warriors')->pluck('id')->toArray();

        for($i = 0; $i < 2; $i++) {
            DB::table('speciality_warrior')->insert([
                'speciality_id' => $specialityIds[$i],
                'warrior_id'    => $warriorsIds[$i],
                'created_at'    => date('Y-m-d h:i:s'),
                'updated_at'    => date('Y-m-d h:i:s'),
            ]);
        }
    }
}
