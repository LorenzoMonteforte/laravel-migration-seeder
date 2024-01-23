<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->tinyText("company");
            $table->tinyText("departure_station");
            $table->tinyText("arrival_station");
            $table->dateTime("departure_time");
            $table->dateTime("arrival_time");
            $table->string("train_code")->unique();
            $table->tinyInteger("carriages_number")->nullable()->unsigned();
            $table->boolean("in_time");
            $table->boolean("deleted");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
