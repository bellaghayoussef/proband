<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


$role = Role::create(['name' => 'admin']);
$permission = Permission::create(['name' => 'edit ']);
$role->givePermissionTo($permission);
$user = User::find(1);
$user->assignRole('admin');
    }
}
