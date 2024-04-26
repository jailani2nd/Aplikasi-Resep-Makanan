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
        Schema::create('rekoms', function (Blueprint $table) {
            $table->id();
            $table->string('jenispenyakitindo');
            $table->string('jenispenyakiteng');
            $table->string('judulindo');
            $table->string('juduleng');
            $table->string('biologis');
            $table->text('deskripsiindo');
            $table->text('deskripsieng');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rekoms');
    }
};
