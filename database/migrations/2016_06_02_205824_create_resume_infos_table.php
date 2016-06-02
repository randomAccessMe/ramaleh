<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResumeInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resume_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('address');
            $table->string('email');
            $table->string('phone');
            $table->text('summary');
            $table->timestamps();
        });

        \App\ResumeInfo::create([
            'name' => 'Rami AlMaleh',
            'address' => '568 E Columbia Ave. Apt 6, 48340',
            'email' => 'ramaleh91@gmail.com',
            'phone' => '(313) 283 8869',
            'summary' => 'Logical, Persistent, Curious, Analytical, Detail Oriented in my programming and generally as a person.',
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('resume_infos');
    }
}
