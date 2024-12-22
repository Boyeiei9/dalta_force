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
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('name'); // ชื่อตัวละคร
            $table->text('description'); // สตอรี่ตัวละคร
            $table->string('position'); // ตำแหน่งตัวละคร
            $table->string('gun'); // ปืนประจำตัวละคร
            $table->string('image')->nullable(); // ที่อยู่รูปภาพตัวละคร
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('characters');
    }
};
