<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;
use App\Models\Type;
use App\Models\Brand;
use App\Models\Modeles;
use App\Models\Size;
use App\Models\Color;
use App\Models\Certification;
use App\Models\CostType;

class DatabaseSeeder extends Seeder
{
    private $permissions = [
        'user-index', 'user-create', 'user-edit',
        'role-index', 'role-create', 'role-edit',
        'dashboard-index',
        'profle-update',
    ];

    private $types = [
        'Full Face', 'Half Face', 'Modular', 'Half Shell',
        'Open-Face', 'Cap', 'Dual Sport',
    ];

    private $brands = [
        'Studds', 'Vega', 'LS2', 'AXOR', 'MT', 'Steelbird', 'SKT', 'IBK', 'Others',
    ];

    private $modeles = [
        'THUNDER', 'BOLT', 'Others',
    ];

    private $sizes = [
        'XS', 'S', 'M', 'L', 'XL', 'XXL',
    ];
    private $colors = [
        'Blue', 'Red', 'Black', 'White', 'Pink', 'Pink', 'Grey', 'Yellow', 'Others',
    ];

    private $certifications = [
        'BSTI', 'ISI', 'DOT', 'ECE',
    ];

    private $costtypes = [
        'Labour', 'Storage', 'Rent', 'Utilities', 'Employee', 'Others',
    ];

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        foreach ($this->permissions as $permission) {
            Permission::create(['name' => $permission]);
        };

        foreach ($this->types as $type) {
            Type::create(['name' => $type]);
        };
        foreach ($this->brands as $brand) {
            Brand::create(['name' => $brand]);
        };
        foreach ($this->modeles as $modele) {
            Modeles::create(['name' => $modele]);
        };
        foreach ($this->sizes as $size) {
            Size::create(['name' => $size]);
        };
        foreach ($this->colors as $color) {
            Color::create(['name' => $color]);
        };
        foreach ($this->certifications as $certification) {
            Certification::create(['name' => $certification]);
        };

        foreach ($this->costtypes as $costtype) {
            CostType::create(['name' => $costtype]);
        };

        $user = User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('12345678'),
            'status' => "1",
        ]);

        $role = Role::create(['name' => 'superadmin']);
        $permissions = Permission::pluck('id', 'id')->all();

        $role->syncPermissions($permissions);
        $user->syncRoles([$role->id]);
    }
}
