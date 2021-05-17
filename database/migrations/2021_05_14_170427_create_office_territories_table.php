<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficeTerritoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('office_territories', function (Blueprint $table) {
            $table->id();
            $table->integer('owner_id');
            $table->integer('office_id');
            $table->char('office_address', 100);
            $table->char('office_hours', 100);
            $table->char('office_phone_number', 100);
            $table->char('assigned_zipcode', 100);
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
        Schema::dropIfExists('office_territories');
    }
}
