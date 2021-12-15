<?php
declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table): void {
            $table->unsignedSmallInteger('id', true);
            $table->unsignedSmallInteger('city_id')->constrained();
            $table->unsignedSmallInteger('supervisor_id')->nullable()->constrained();
            $table->unsignedTinyInteger('role')->index();
            $table->string('name', 100);
            $table->string('email', 50)->unique();
            $table->unsignedTinyInteger('is_active');
            $table->string('password', 100);
            $table->string('remember_token', 100)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
}
