<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [[
            'id'             => 1,
            'name'           => 'Admin',
            'email'          => 'admin@admin.com',
            'password'       => '$2y$10$E829wW11cV8lLRPDiRaWT.EDJ5UAsbGcyPctyFDYOAdszC44JgXCa',
            'remember_token' => null,
            'created_at'     => '2019-08-28 15:25:56',
            'updated_at'     => '2019-08-28 15:25:56',
            'deleted_at'     => null,
        ]];

        User::insert($users);
    }
}
