<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createAdmins();
        $this->createUsers();
    }

    private function createAdmins(){
         User::factory()->count(100)->create([
            'role' => User::ADMIN_ROLE
        ]);
    }

    private function createUsers(){
        User::factory()->count(10000)->create();
    }
}
