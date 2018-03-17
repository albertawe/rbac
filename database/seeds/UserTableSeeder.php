<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user1=User::create(['name'=>'jennie','email'=>'jennie@gmail.com','password'=>bcrypt('1234')]);
      $user1->assignRole('admin');
      // $user1=User::create([‘name’=>’jennie’,’email’=>’jennie@gmail.com’,’password’=>bcrypt(‘1234);
      // $user1->assignRole(‘admin’);
    }
}
