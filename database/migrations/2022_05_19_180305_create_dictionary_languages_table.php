<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDictionaryLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dictionary_languages', function (Blueprint $table) {
            $table->integer('lang_id')->autoIncrement()->comment('числовой одентификатор языка');
            $table->string('lang_code')->comment('символьный одентификатор языка (ua, en, ru)');
            $table->timestamps();
            //$table->comment('таблица справочника языков'); // доступно с версии 9
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dictionary_languages');
    }
}
