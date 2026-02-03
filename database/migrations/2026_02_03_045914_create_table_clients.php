<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id('id_client');
            $table->char('nik', 16)->unique();
            $table->string('nama', 100);
            $table->string('no_hp', 15)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('va', 50)->nullable();
            $table->string('nama_ibu_kandung', 100)->nullable();
            $table->text('alamat')->nullable();
            $table->string('faskes_pertama', 100)->nullable();
            $table->string('kelas', 20)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
