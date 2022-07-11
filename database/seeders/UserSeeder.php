<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
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
				// $datas = [];

				// DB::table('users')->insert($datas);
				$insert = User::insert([
					[
						'name' 		 => 'Admin Oke',
						'email' 	 => 'adminoke@gmail.com',
						'password' => Hash::make('adminoke'),
						'role'     => 'admin'
					],
					[
						'name' 		 => 'Kasir Oke',
						'email'    => 'kasiroke@gmail.com',
						'password' => Hash::make('kasiroke'),
						'role'     => 'user'
					]
				]);
    }
}
