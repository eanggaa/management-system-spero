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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('client');
            $table->string('end_user');
            $table->string('project_name');
            $table->string('no_penawaran');
            $table->string('jenis_pekerjaan');
            $table->string('progamming_language');
            $table->date('project_entry_date');
            $table->date('project_start_date');
            $table->date('project_completion_date');
            $table->string('status_aktif')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
