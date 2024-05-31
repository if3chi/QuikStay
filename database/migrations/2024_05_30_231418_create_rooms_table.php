<?php

use App\Enums\RoomType;
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
        Schema::create('rooms', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->string('name');
            $table->string('label');
            $table->string('view')->nullable();
            $table->string('type')->default(RoomType::Double->value);
            $table->integer('room_number')->nullable();
            $table->string('description')->nullable();
            $table->unsignedInteger('persons')->default(1);
            $table->unsignedBigInteger('size')->nullable();
            $table->unsignedBigInteger('daily_rate')->default(0);
            $table->unsignedBigInteger('weekly_rate')->default(0);

            $table->foreignUuid('floor_id')
                ->index()
                ->constrained()
                ->cascadeOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
