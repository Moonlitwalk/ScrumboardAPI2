<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('scrumboard_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
            $table->string('title');
            $table->text('description');
            //TODO: change owner later to real user relatio
            $table->string('owner');
            $table->integer('assignee')->nullable();
            $table->string('status')->default('open');
            $table->string('priority')->nullable();
            $table->string('type');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
