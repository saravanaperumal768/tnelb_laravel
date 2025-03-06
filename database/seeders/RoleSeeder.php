<?php

namespace Database\Seeders;

use App\Models\Mst_Roles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $roles = ['supervisor', 'auditor', 'secretary', 'president'];

        foreach ($roles as $role) {
            Mst_Roles::create(['name' => $role]);
        }
    }
}
