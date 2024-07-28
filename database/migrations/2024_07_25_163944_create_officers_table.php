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
        Schema::create('officers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
           
            $table->unsignedBigInteger('department_id')->nullable();
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
           
            $table->unsignedBigInteger('degree_id')->nullable();
            $table->foreign('degree_id')->references('id')->on('degrees')->onDelete('cascade');
           
            $table->string('job_name')->nullable();
            $table->date('date_upgrade')->nullable();
            $table->string('religion')->nullable();
            $table->string('city')->nullable();
            $table->string('phone')->nullable();    
            $table->string('weapon_name')->nullable();        
            $table->enum('status',['exist','vacation','sick_leave','mission','mission_out'])->nullable();
            $table->string('vaction_note')->nullable();
            $table->text('note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('officers');
    }
};
