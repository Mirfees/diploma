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
        Schema::create('arch_object_tags', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('arch_object_id');
            $table->unsignedBigInteger('tag_id');

            $table->index('arch_object_id', 'arch_object_tag_arch_object_idx');
            $table->index('tag_id', 'arch_object_tag_tag_idx');

            $table->foreign('arch_object_id', 'arch_object_tag_arch_object_fk')->on('arch_objects')->references('id');
            $table->foreign('tag_id', 'arch_object_tag_tag_fk')->on('tags')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arch_object_tags');
    }
};
