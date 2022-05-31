<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDictionaryLoggingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dictionary_loggings', function (Blueprint $table) {
            $table->integer('id')->autoIncrement()->comment('таблица логирования,  ключевое поле');
            $table->text('data')->comment('полученное содержимое от источника');
            $table->integer('type')->comment('тип справочника, 1 - независимые, 2- зависимые');
            $table->string('link')->comment('адрес с которого получены данные');
            $table->string('code')->comment('код ответа или текст исключения(200,403,404,"невозможно соеденитьсчя с сервером","нет роута к хосту")');
            $table->boolean('exchanged')->default(false)->comment('признак того что обработаны данные');

            $table->timestamps();
            //$table->comment('таблица логирования'); // доступно с версии 9
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dictionary_loggings');
    }
}
