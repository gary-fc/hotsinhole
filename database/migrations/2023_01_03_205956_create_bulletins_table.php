<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBulletinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bulletins', function (Blueprint $table) {
            $table->id();

            $table->string('bulletin_direction');
            $table->string('bulletin_postal_code');
            $table->string('bulletin_zone');

            $table->string('bulletin_year');
            $table->string('bulletin_title');
            $table->string('bulletin_description', 555);

            $table->string('bulletin_phone');
            $table->enum('status', ['DRAFT', 'CREATED', 'PAID']);
            $table->enum('type', ['FREE', 'TOP', 'PREMIUM','HOT']);


            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('city_id');
            $table->unsignedBigInteger('country_id');

            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')
                ->onDelete('cascade');
            $table->foreign('city_id')->references('id')->on('cities')
                ->onDelete('cascade');
            $table->foreign('country_id')->references('id')->on('countries')
                ->onDelete('cascade');
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
        Schema::dropIfExists('bulletins');
    }
}
