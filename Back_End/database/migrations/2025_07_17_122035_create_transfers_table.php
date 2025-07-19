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
        Schema::create('transfers', function (Blueprint $table) {
        $table->id();

        $table->unsignedBigInteger('from_branch_id');
        $table->unsignedBigInteger('to_branch_id');

        $table->decimal('amount', 10, 2);
        $table->enum('currency', ['LBP', 'USD']);
        $table->text('note')->nullable();
        $table->string('invoice_image', 255)->nullable();
        $table->date('transfer_date');

        $table->timestamps();

        $table->foreign('from_branch_id')->references('id')->on('branches')->onDelete('cascade');
        $table->foreign('to_branch_id')->references('id')->on('branches')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transfers');
    }
};
