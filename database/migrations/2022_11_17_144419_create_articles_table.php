<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('content');
            $table->string('image');
            $table->integer('read');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->restrictOnDelete()
                ->restrictOnUpdate();
            $table->unsignedBigInteger('rubric_id');
            $table->foreign('rubric_id')
                ->references('id')
                ->on('rubrics')
                ->restrictOnDelete()
                ->restrictOnUpdate();
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
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('articles');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
};
