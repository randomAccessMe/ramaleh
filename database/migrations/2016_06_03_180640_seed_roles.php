<?php

use App\User;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Kodeine\Acl\Models\Eloquent\Role;

class SeedRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $role = new Role();
        $roleAdmin = $role->create([
            'name' => 'Administrator',
            'slug' => 'administrator',
            'description' => 'manage administration privileges'
        ]);

        $role = new Role();
        $roleGuest = $role->create([
            'name' => 'Guest',
            'slug' => 'guest',
            'description' => 'view admin area without influencing the database'
        ]);

        User::where('name', '=', 'administrator')->first()->assignRole($roleAdmin);
        User::where('name', '=', 'guest')->first()->assignRole($roleGuest);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        User::where('name', '=', 'administrator')->first()->revokeRole('administrator');
        User::where('name', '=', 'guest')->first()->revokeRole('guest');
    }
}
