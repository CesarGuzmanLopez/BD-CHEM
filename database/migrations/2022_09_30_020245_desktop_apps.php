<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('desktop_apps', function (Blueprint $table) {
            $table->id();
            $table->string('Name_app');
            $table->string('Version')->nullable();
            $table->string('Description')->nullable();
            $table->integer('ID_Alta')->nullable();
            $table->timestamps();
            $table->string('Location_name');
            $table->tinyInteger("Enabled");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('desktop_apps');
    }
};
