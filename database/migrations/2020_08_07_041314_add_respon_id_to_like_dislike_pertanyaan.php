<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddResponIdToLikeDislikePertanyaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('like_dislike_pertanyaan', function (Blueprint $table) {
            $table->unsignedBigInteger('pertanyaan_id')->nullable();
            $table->unsignedBigInteger('profile_id')->nullable();

            $table->foreign('pertanyaan_id')->references('id')->on('pertanyaan');
            $table->foreign('profile_id')->references('id')->on('profiles');
            $table->integer('poin')->default(1);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('like_dislike_pertanyaan', function (Blueprint $table) {
            //
        });
    }
}
