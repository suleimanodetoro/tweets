<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * the idea itself - string varchar
     * likes - integer default 0
     * created at - timestamp
     * updated at - timestamp
     * 
     * For now this is what we will start with
     */
    public function up(): void
    {
        Schema::create('ideas', function (Blueprint $table) {
            $table->id(); //key
            $table->string('content');
            $table->unsignedInteger('likes')->default(0);//unsigned so it defaults to zero
            $table->timestamps(); //will create created and updated at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ideas');
    }
};
