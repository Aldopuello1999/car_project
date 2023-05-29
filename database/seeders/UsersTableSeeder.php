<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'lastname' => 'Admin ',
            'identification' => '1234091720',
            'username' => 'Admin',
            'email' => 'admin@argon.com',
            'password' => Hash::make('secret'),
            'profile' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            'state' => 1,
        ]);

        // DB::table('entities')->insert([
        //     'id' => 1,
        //     'name' => 'Sistema ',
        //     'state_entities' => '0',
        //     'code' => '0',
        //     'enum_salida' => 0,
        //     'enum_entrada' => 0,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        //     'state' => 1
        // ]);

        // DB::table('areas')->insert([
        //     'id' => 1,
        //     'name' => 'Sistema',
        //     'codigo' => '0',
        //     'entities_id'=> 1,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        //     'state' => 1
        // ]);
    }
}
