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
        Schema::create('isimateris', function (Blueprint $table) {
            $table->id();
            $table->foreignId("id_materi");
            $table->string("sub_bab");
            $table->string("image")->nullable();
            $table->string("youtube")->nullable();
            $table->text("isi");
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
        Schema::dropIfExists('isimateris');
    }
};
