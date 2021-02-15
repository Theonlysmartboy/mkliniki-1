<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_providers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('registration_details');
            $table->string('age');
            $table->string('gender', 20);
            $table->string('address');
            $table->string('email');
            $table->integer('telephone')->nullable(); 
            $table->string('website')->nullable();
            $table->tinyInteger('ward');
            $table->string('town');
            $table->tinyInteger('category');
            $table->tinyInteger('duration')->default(0);
           $table->timestamps();
           $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_providers');
    }
}
