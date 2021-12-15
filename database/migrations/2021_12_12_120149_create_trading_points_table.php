<?php
declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradingPointsTable extends Migration
{
    public function up(): void
    {
        Schema::create('trading_points', function (Blueprint $table): void {
            $table->id();
            $table->unsignedSmallInteger('city_id')->constrained();
            $table->unsignedSmallInteger('trading_network_id')->constrained();
            $table->unsignedSmallInteger('user_id')->constrained();
            $table->string('address')->index();
            $table->decimal('latitude', 10,8)->index();
            $table->decimal('longitude', 11,9)->index();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('trading_points');
    }
}
