<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;


class AdminRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Check if the role already exists
        $adminRole = Role::firstOrCreate(['name' => 'admin']);

        // Find the user by email
        $user = User::where('email', 'stevekamahertz@gmail.com')->first();

        if ($user) {
            // Assign the admin role to the user
            $user->assignRole($adminRole);

            $this->command->info("Admin role assigned to {$user->email}");
        } else {
            $this->command->warn("User with email 'admin@example.com' not found.");
        }
    }
}
