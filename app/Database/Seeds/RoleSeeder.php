<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $role = new Role;
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 100; $i++) {
            $role->save(
                [
                    'label'       =>    $faker->name,
                    'description' =>    $faker->email,
                    'created_at'  =>    Time::createFromTimestamp($faker->unixTime()),
                    'updated_at'  =>    Time::now()
                ]
            );
        }
    }
}
