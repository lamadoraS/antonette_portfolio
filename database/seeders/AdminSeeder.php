<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
   
        DB::table('users')->insert([
            [
                'role' => 'admin',
                'name' => 'antonette',
                'email' => 'lozares@gmail.com',
                'password' => Hash::make('12345678'),
            ]
        ]);

        DB::table('profiles')->insert ([
                [ 
            'title'=> 'Aspiring Student',      
            'name' => 'Antonette L. Lozares',
            'birthday' => '2003-06-14',
            'email' => 'antonette@gmail.com',
            'phone' => '09631157992',
            'address' => 'Marangog Hilongos, Leyte',
            'age' => '20',
            'degree' => 'graduate',
            
            ]
             ]);

    }
}

