<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class StaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');

        // For receptionist
        Permission::create(['guard_name'=>'staff', 'name' => 'view booking information']);
        Permission::create(['guard_name'=>'staff','name' => 'view room status']);
        Permission::create(['guard_name'=>'staff','name' => 'view guest personal info']);
        Permission::create(['guard_name'=>'staff','name' => 'book room']);
        Permission::create(['guard_name'=>'staff','name' => 'edit guest preferences']);

        //For accountant
        Permission::create(['guard_name'=>'staff', 'name' => 'view budget']);
        Permission::create(['guard_name'=>'staff','name' => 'edit budget']);
        Permission::create(['guard_name'=>'staff','name' => 'view inventory']);
        Permission::create(['guard_name'=>'staff','name' => 'edit inventory']);

        //Maintenance
        Permission::create(['guard_name'=>'staff','name' => 'edit room status']);

        // create roles and assign existing permissions

        $role = Role::create(['guard_name' => 'staff','name' => 'receptionist']);
        $role->givePermissionTo('view booking information');
        $role->givePermissionTo('view room status');
        $role->givePermissionTo('view guest personal info');
        $role->givePermissionTo('book room');
        $role->givePermissionTo('edit guest preferences');

        $role = Role::create(['guard_name' => 'staff', 'name' => 'Accountant']);
        $role->givePermissionTo('view budget');
        $role->givePermissionTo('edit budget');
        $role->givePermissionTo('view inventory');
        $role->givePermissionTo('edit inventory');

        $role = Role::create(['guard_name' => 'staff', 'name' => 'Maintenance']);
        $role->givePermissionTo('view room status');
        $role->givePermissionTo('edit room status');
        $role->givePermissionTo('view booking information');
    }
}
