<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(["name" => "Admin"]);
        $role2 = Role::create(["name" => "User"]);

        // Permissions Events
        Permission::create(["name" => "events.create"]);
        Permission::create(["name" => "events.edit"]);
        Permission::create(["name" => "events.delete"]);
        Permission::create(["name" => "events.index"]);
        // Permissions Products
        Permission::create(["name" => "products.create"]);
        Permission::create(["name" => "products.edit"]);
        Permission::create(["name" => "products.delete"]);
        Permission::create(["name" => "products.index"]);
        // Permissions Users
        Permission::create(["name" => "users.create"]);
        Permission::create(["name" => "users.edit"]);
        Permission::create(["name" => "users.delete"]);
        Permission::create(["name" => "users.index"]);

        $role1->givePermissionTo([
            "events.create",
            "events.edit",
            "events.delete",
            "events.index",
            "products.create",
            "products.edit",
            "products.delete",
            "products.index",
            "users.create",
            "users.edit",
            "users.delete",
            "users.index",
        ]);

        $role2->givePermissionTo(["events.index", "products.index"]);
    }
}