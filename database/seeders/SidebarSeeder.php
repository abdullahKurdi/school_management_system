<?php

namespace Database\Seeders;

use App\Models\Permission;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SidebarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //for fake data for customer
        $faker = Factory::create();

        //Create seeder permission for main section in dashboard
        $manageDashboard = Permission::create([
            'name'              =>  'dashboard',
            'display_name'      =>  'Dashboard',
            'display_name_ar'   =>  'لوحة التحكم',
            'description'       =>  'Dashboard',
            'description_ar'    =>  'لوحة التحكم',
            'route'             =>  'index',
            'module'            =>  'index',
            'as'                =>  'index',
            'icon'              =>  'fas fa-home',
            'parent'            =>  '0',
            'parent_original'   =>  '0',
            'sidebar_link'      =>  '1',
            'appear'            =>  '1',
            'ordering'          =>  '1',
        ]);
        $manageMain->parent_show = $manageMain->id;
        $manageMain->save();



        //Create seeder permission for user management section in dashboard
        $manageUsers = Permission::create([
            'name'              =>  'manage_users',
            'display_name'      =>  'User Management',
            'display_name_ar'   =>  'ادارة المستخدمين',
            'description'       =>  'User Management',
            'description_ar'    =>  'ادارة المستخدمين',
            'route'             =>  'users',
            'module'            =>  'users',
            'as'                =>  'users.index',
            'icon'              =>  'fas fa-users',
            'parent'            =>  '0',
            'parent_original'   =>  '0',
            'sidebar_link'      =>  '1',
            'appear'            =>  '1',
            'ordering'          =>  '5',
        ]);
        $manageUsers->parent_show = $manageUsers->id;
        $manageUsers->save();


        $showRolesPermissions = Permission::create([
            'name'              =>  'show_roles_permissions',
            'display_name'      =>  'Roles & Permissions',
            'display_name_ar'   =>  'القواعد والصلاحيات',
            'description'       =>  'Roles & Permissions',
            'route'             =>  'roles_permissions',
            'module'            =>  'roles_permissions',
            'as'                =>  'roles_permissions.index',
            'icon'              =>  'fas fa-file-archive',
            'parent'            =>  $manageUsers->id,
            'parent_show'       =>  $manageUsers->id,
            'parent_original'   =>  $manageUsers->id,
            'sidebar_link'      =>  '1',
            'appear'            =>  '1',

        ]);
        $showUsers = Permission::create([
            'name'              =>  'show_users',
            'display_name'      =>  'Users',
            'display_name_ar'   =>  'المستخدمون',
            'description'       =>  'Users',
            'route'             =>  'users',
            'module'            =>  'users',
            'as'                =>  'users.index',
            'icon'              =>  'fas fa-file-user',
            'parent'            =>  $manageUsers->id,
            'parent_show'       =>  $manageUsers->id,
            'parent_original'   =>  $manageUsers->id,
            'sidebar_link'      =>  '1',
            'appear'            =>  '1',

        ]);

        $createRolesPermissions = Permission::create([
            'name'              =>  'create_roles_permissions',
            'display_name'      =>  'Create Role & Permissions',
            'description'       =>  'Create Role & Permissions',
            'route'             =>  'roles_permissions',
            'module'            =>  'roles_permissions',
            'as'                =>  'roles_permissions.create',
            'icon'              =>  null,
            'parent'            =>  $manageUsers->id,
            'parent_show'       =>  $manageUsers->id,
            'parent_original'   =>  $manageUsers->id,
            'sidebar_link'      =>  '1',
            'appear'            =>  '0',

        ]);
        $createUsers = Permission::create([
            'name'              =>  'create_users',
            'display_name'      =>  'Create User',
            'description'       =>  'Create User',
            'route'             =>  'users',
            'module'            =>  'users',
            'as'                =>  'users.create',
            'icon'              =>  null,
            'parent'            =>  $manageUsers->id,
            'parent_show'       =>  $manageUsers->id,
            'parent_original'   =>  $manageUsers->id,
            'sidebar_link'      =>  '1',
            'appear'            =>  '0',

        ]);

        $displayRolesPermissions = Permission::create([
            'name'              =>  'display_roles_permissions',
            'display_name'      =>  'Display Role & Permissions',
            'description'       =>  'Display Role & Permissions',
            'route'             =>  'roles_permissions',
            'module'            =>  'roles_permissions',
            'as'                =>  'roles_permissions.show',
            'icon'              =>  null,
            'parent'            =>  $manageUsers->id,
            'parent_show'       =>  $manageUsers->id,
            'parent_original'   =>  $manageUsers->id,
            'sidebar_link'      =>  '1',
            'appear'            =>  '0',

        ]);
        $displayUsers = Permission::create([
            'name'              =>  'display_users',
            'display_name'      =>  'Display User',
            'description'       =>  'Display User',
            'route'             =>  'display_users',
            'module'            =>  'display_users',
            'as'                =>  'display_users.show',
            'icon'              =>  null,
            'parent'            =>  $manageUsers->id,
            'parent_show'       =>  $manageUsers->id,
            'parent_original'   =>  $manageUsers->id,
            'sidebar_link'      =>  '1',
            'appear'            =>  '0',

        ]);

        $updateRolesPermissions = Permission::create([
            'name'              =>  'update_roles_permissions',
            'display_name'      =>  'Update Role & Permissions',
            'description'       =>  'Update Role & Permissions',
            'route'             =>  'roles_permissions',
            'module'            =>  'roles_permissions',
            'as'                =>  'roles_permissions.edit',
            'icon'              =>  null,
            'parent'            =>  $manageUsers->id,
            'parent_show'       =>  $manageUsers->id,
            'parent_original'   =>  $manageUsers->id,
            'sidebar_link'      =>  '1',
            'appear'            =>  '0',

        ]);
        $updateUsers = Permission::create([
            'name'              =>  'update_display_users',
            'display_name'      =>  'Update User',
            'description'       =>  'Update User',
            'route'             =>  'display_users',
            'module'            =>  'display_users',
            'as'                =>  'display_users.edit',
            'icon'              =>  null,
            'parent'            =>  $manageUsers->id,
            'parent_show'       =>  $manageUsers->id,
            'parent_original'   =>  $manageUsers->id,
            'sidebar_link'      =>  '1',
            'appear'            =>  '0',

        ]);

        $deleteRolesPermissions = Permission::create([
            'name'              =>  'delete_roles_permissions',
            'display_name'      =>  'Delete Role & Permissions',
            'description'       =>  'Delete Role & Permissions',
            'route'             =>  'roles_permissions',
            'module'            =>  'roles_permissions',
            'as'                =>  'roles_permissions.destroy',
            'icon'              =>  null,
            'parent'            =>  $manageUsers->id,
            'parent_show'       =>  $manageUsers->id,
            'parent_original'   =>  $manageUsers->id,
            'sidebar_link'      =>  '1',
            'appear'            =>  '0',

        ]);
        $deleteUsers = Permission::create([
            'name'              =>  'delete_display_users',
            'display_name'      =>  'Delete User',
            'description'       =>  'Delete User',
            'route'             =>  'display_users',
            'module'            =>  'display_users',
            'as'                =>  'display_users.destroy',
            'icon'              =>  null,
            'parent'            =>  $manageUsers->id,
            'parent_show'       =>  $manageUsers->id,
            'parent_original'   =>  $manageUsers->id,
            'sidebar_link'      =>  '1',
            'appear'            =>  '0',

        ]);

    }
}
