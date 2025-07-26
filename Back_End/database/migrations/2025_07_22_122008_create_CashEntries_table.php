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
        Schema::create('Cash_Entries', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("Branch_id");

            $table->unsignedBigInteger("employee_id");

            $table->decimal("amount_lbp", 10, 2)->default(0);
            $table->decimal("amount_usd", 10, 2)->default(0);
            $table->decimal("extra_lbp", 10, 2)->default(0);
            $table->decimal("extra_usd", 10, 2)->default(0);
            
            $table->decimal("total", 10, 2)->default(0);
            $table->decimal("systematic", 10, 2)->default(0);
            $table->decimal("variance", 10, 2)->default(0);

            $table->timestamps();

            $table->foreign("employee_id")->references("id")->on("employees")->onDelete("cascade");
            $table->foreign("branch_id")->references("id")->on("branches")->onDelete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Cash_Entries');
    }
};
