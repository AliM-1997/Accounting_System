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
        Schema::create('payrolls', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('employees_id');
        
        $table->string('employee_position')->nullable();

        $table->decimal('basic_salary', 10, 2)->default(0);
        $table->decimal('advanced_salary', 10, 2)->default(0);
        $table->decimal('max_advanced_salary', 10, 2)->default(0);

        $table->decimal('deductions', 10, 2)->default(0);
        $table->decimal('discrepancy', 10, 2)->default(0);
        $table->decimal('additions', 10, 2)->default(0);
        $table->decimal('bonus', 10, 2)->default(0);

        $table->integer('off_days')->default(0);
        $table->integer('working_days')->default(0);

        $table->decimal('current_expensis',10,2)->default(0);
        $table->decimal('total_salary',10,2)->default(0);

        $table->timestamps();

        $table->foreign('employees_id')->references('id')->on('employees')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payrolls');
    }
};
