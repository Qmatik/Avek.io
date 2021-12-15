<?php
declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisabledProductsTable extends Migration
{
    public function up(): void
    {
        Schema::create('disabled_products', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('trading_point_id')->constrained();
            $table->unsignedSmallInteger('product_id')->constrained();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('disabled_products');
    }
}
