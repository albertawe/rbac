<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
              $roles=[
                'admin',
                'distributor',
                'staff',
                'dealer',
                'directcustomer'
              ];
              $permissions=[
                'dashboard'=>['admin',
                  'distributor',
                  'staff',
                  'dealer',
                  'directcustomer'],
                'file-manager'=>['admin'],
                'permission-manager'=>['admin'],
                'product' => ['admin'],
                'tags' => ['admin']
              ];
              //create roles
              foreach ($roles as $role) {
                $rolesArray[$role]=Role::create(['name' => $role]);
              }
              //create permissions
              foreach ($permissions as $permission=>$authorized_roles) {
                //create permission
                Permission::create(['name' => $permission]);

                //authorize roles to those permissions
                foreach ($authorized_roles as $role) {
                  $rolesArray[$role]->givePermissionTo($permission);
                }
              }

    }
}
