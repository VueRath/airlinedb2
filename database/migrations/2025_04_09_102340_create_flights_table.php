<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->string('accomodation')->default('Economy');
            $table->string('origin')->default('Philippines');
            // $table->string('destination');
            $table->date('departure_date');
            $table->decimal('amount', 8, 2)->nullable();
            $table->string('payment_status')->default('pending');
            $table->string('passenger_name');
            $table->integer('age');
            $table->string('email');
            $table->string('contact');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
