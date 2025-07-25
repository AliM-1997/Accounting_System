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
        Schema::create('employees', function (Blueprint $table) {
        $table->id();
        $table->string('name', 100);
        $table->string('username', 100)->unique();
        $table->unsignedBigInteger('branch_id');
        $table->enum('role', ['manager', 'super_manager', 'employee'])->default('employee');
        $table->decimal('salary', 10, 2)->default(0.00);
        $table->string('phone', 20)->nullable();
        $table->string('location', 255)->nullable();
        $table->timestamps();

        $table->foreign('branch_id')->references('id')->on('branches')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
