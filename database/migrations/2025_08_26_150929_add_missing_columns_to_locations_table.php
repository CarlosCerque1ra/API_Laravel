<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('locations', function (Blueprint $table) {
            if (!Schema::hasColumn('locations', 'description')) {
                $table->text('description')->nullable();
            }
            if (!Schema::hasColumn('locations', 'latitude')) {
                $table->decimal('latitude', 10, 8)->nullable();
            }
            if (!Schema::hasColumn('locations', 'longitude')) {
                $table->decimal('longitude', 11, 8)->nullable();
            }
            if (!Schema::hasColumn('locations', 'address')) {
                $table->string('address')->nullable();
            }
            if (!Schema::hasColumn('locations', 'category')) {
                $table->string('category')->nullable();
            }
        });
    }

    public function down()
    {
        Schema::table('locations', function (Blueprint $table) {
            $table->dropColumn(['description', 'latitude', 'longitude', 'address', 'category']);
        });
    }
};