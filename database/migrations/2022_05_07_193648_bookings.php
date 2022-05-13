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
    
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
        $table->id();
        $table->string('email');
        $table->string('name_surname');
        $table->date('date');
        $table->string('service');
        $table->string('period');
        $table->string('persons');
        $table->string("payment_id");
        $table->string("status");
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
        Schema::dropIfExists('bookings');
    }
};
