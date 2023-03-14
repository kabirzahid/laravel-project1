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
        Schema::create('kinggroups', function (Blueprint $table) {
            $table->id();
            $table->string('service_title');
            $table->string('service_subtitle');            
            $table->string('Product_title');
            $table->string('Product_subtitle');
            $table->string('About_title');
            $table->string('About_subtitle');
            $table->string('Team_title');
            $table->string('Team_subtitle');
            $table->string('Contact_title');
            $table->string('Contact_subtitle');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('king_groups');
    }
};
