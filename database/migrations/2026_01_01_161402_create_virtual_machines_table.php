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
        Schema::create('virtual_machines', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedInteger("vmid")->unique();
            $table->uuid("vmgenid")->unique();
            $table->string("name");
            $table->unsignedSmallInteger("cores");
            $table->unsignedSmallInteger("ram");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('virtual_machines');
    }
};
