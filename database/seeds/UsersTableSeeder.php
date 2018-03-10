<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    $User =
    [
      [
        'nama'     => 'Kisahnya ini Admin',
        'username' => 'admin',
        'password' => bcrypt('admin'),
      ],
    ];
    DB::table('users')->insert($User);
  }
}
