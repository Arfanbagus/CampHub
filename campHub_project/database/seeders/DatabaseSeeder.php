<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         // Membuat izin
         Permission::create(['name' => 'view posts']);
         Permission::create(['name' => 'create posts']);
         
         // Membuat peran
         $adminRole = Role::create(['name' => 'admin']);
         $userRole = Role::create(['name' => 'user']);
         
         // Memberikan izin kepada peran
         $adminRole->givePermissionTo('view posts');
         $adminRole->givePermissionTo('create posts');
         $userRole->givePermissionTo('view posts');
         
         // Menetapkan peran pada pengguna
         $user = User::find(1); // misal pengguna dengan ID 1
         $user->assignRole('admin');
         
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
