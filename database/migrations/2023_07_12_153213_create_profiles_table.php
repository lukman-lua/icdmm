<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('full_name')->nullable();
            $table->string('email')->nullable();
            $table->string('institusi')->nullable();
            $table->string('country')->nullable();
            $table->string('phone')->nullable();
            $table->string('payment')->nullable();
            $table->string('register_as')->nullable();
            $table->string('paper_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
