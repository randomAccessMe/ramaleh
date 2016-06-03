<?php

use App\User;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SeedUsers extends Migration
{



    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        User::create([
            'name' => 'administrator',
            'email'=> env('APP_ADMIN_EMAIL'),
            'password'=> bcrypt(env('APP_ADMIN_PASS')),
        ]);

        User::create([
            'name' => 'guest',
            'email' => 'guest@ramaleh.net',
            'password' => bcrypt('guest'),
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        User::where('name', '=', 'administrator')->first()->delete();
        User::where('name', '=', 'guest')->first()->delete();
    }
}
