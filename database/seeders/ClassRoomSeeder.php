<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ClassRoom;

class ClassRoomSeeder extends Seeder
{
    /**
     * @return void
     */
    public function run()
    {
        $classes = ['X', 'XI', 'XII'];

        foreach ($classes as $class) {
            ClassRoom::create(['name' => $class]);
        }
    }
}
