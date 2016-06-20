<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuildRelationsBetweenTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('skills', function (Blueprint $table) {
            $table->integer('resume_id')->unsigned()->index()->after('id')->nullable();
            $table->foreign('resume_id')->references('id')->on('resumes');
        });
        Schema::table('jobs', function (Blueprint $table) {
            $table->integer('resume_id')->unsigned()->index()->after('id')->nullable();
            $table->foreign('resume_id')->references('id')->on('resumes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('skills', function (Blueprint $table) {
            $table->dropColumn('resume_id');
        });
        Schema::table('jobs', function (Blueprint $table) {
            $table->dropColumn('resume_id');
        });
    }
}
