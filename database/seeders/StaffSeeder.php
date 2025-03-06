<?php

namespace Database\Seeders;

use App\Models\Mst_Roles;
use App\Models\Mst_Staffs_Tbl;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Mst_Staffs_Tbl::create([
            'name' => 'Secretary',
            'email' => 'secretary@tnelb.com',
            'password' => Hash::make('password123'),
            'roles_id' => Mst_Roles::where('name', 'secretary')->first()->id
        ]);

        Mst_Staffs_Tbl::create([
            'name' => 'Supervisor',
            'email' => 'supervisor@tnelb.com',
            'password' => Hash::make('password123'),
            'roles_id' => Mst_Roles::where('name', 'supervisor')->first()->id
        ]);

        Mst_Staffs_Tbl::create([
            'name' => 'Auditor',
            'email' => 'auditor@tnelb.com',
            'password' => Hash::make('password123'),
            'roles_id' => Mst_Roles::where('name', 'auditor')->first()->id
        ]);

        Mst_Staffs_Tbl::create([
            'name' => 'President',
            'email' => 'president@tnelb.com',
            'password' => Hash::make('password123'),
            'roles_id' => Mst_Roles::where('name', 'president')->first()->id
        ]);

        
    }
}
