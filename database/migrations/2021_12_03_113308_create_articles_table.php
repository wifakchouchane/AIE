<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id("id_article");

            $table->String("Title");


            $table->String("Description");
            $table->bigInteger("id_user")->unsigned();
            $table->bigInteger("id_categorie")->unsigned();
            $table->String("articleImage")->nullable();
            $table->foreign('id_user')->references("id")->on("users");
            $table->foreign('id_categorie')->references("id_categ")->on("categories")->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('articles');
    }
}
