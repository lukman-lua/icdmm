<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePapersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('papers', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('paper_code')->nullable();
            $table->string('full_name')->nullable();
            $table->string('tittle')->nullable();
            $table->string('email')->nullable();
            $table->string('co_authors_email')->nullable();
            $table->string('institusi')->nullable();
            $table->string('office_adress')->nullable();
            $table->string('research_area')->nullable();
            $table->string('paper_file')->nullable();
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
        Schema::dropIfExists('papers');
    }
}
