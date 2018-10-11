<?php

use Illuminate\Database\Seeder;

class TypesWarriorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Type::class, 2)->create()->each(function ($type) {
            $type->warriors()->save(factory(App\Models\Warrior::class)->make());
        });
    }
}
