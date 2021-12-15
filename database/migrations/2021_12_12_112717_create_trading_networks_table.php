<?php
declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradingNetworksTable extends Migration
{
    public function up(): void
    {
        Schema::create('trading_networks', function (Blueprint $table): void {
            $table->unsignedSmallInteger('id', true);
            $table->string('name', 100)->unique();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('trading_networks');
    }
}
