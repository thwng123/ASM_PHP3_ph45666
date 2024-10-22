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
        Schema::table('users', function (Blueprint $table) {
            $table->string('address')->nullable();    // Thêm cột address
            $table->string('phone')->nullable();      // Thêm cột phone
            $table->enum('role',['admin','user'])->default('user');  // Thêm cột role (mặc định là user)
            $table->boolean('is_active')->default(1); // Thêm cột is_active (mặc định là true)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('address');
            $table->dropColumn('phone');
            $table->dropColumn('role');
            $table->dropColumn('is_active');
        });
    }
};
