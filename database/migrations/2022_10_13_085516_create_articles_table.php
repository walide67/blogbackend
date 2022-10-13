<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->string('main_media')->nullable();
            $table->unsignedBigInteger('categorie_id');
            $table->string('extrait')->nullable();
            $table->double('rating')->default(0);
            $table->integer('nbr_votes')->default(0);
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('categorie_id')->references('id')->on('categories')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
};
