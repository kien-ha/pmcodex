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
        Schema::table('networks', function (Blueprint $table) {
            $table->unsignedInteger('virtual_machine_id')->nullable();
            $table->foreign('virtual_machine_id')->references('id')->on('virtual_machines');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('networks', function (Blueprint $table) {
            $table->dropForeign(['virtual_machine_id']);
            $table->dropColumn('virtual_machine_id');
        });
    }
};
