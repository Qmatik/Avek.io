<?php
declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradingPointSchedulesTable extends Migration
{
    public function up(): void
    {
        Schema::create('trading_point_schedules', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('trading_point_id')->constrained();
            $table->date('date');
            $table->time('time_from');
            $table->time('time_to');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('trading_point_schedules');
    }
}
