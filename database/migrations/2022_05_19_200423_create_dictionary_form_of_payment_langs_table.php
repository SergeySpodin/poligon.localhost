<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDictionaryFormOfPaymentLangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dictionary_form_of_payment_langs', function (Blueprint $table) {
            $table->integer('id')->autoIncrement()->comment('справочник форм оплат(яз.названия), ключевое поле, индекс');
            $table->integer('id_element')->comment('привязка к базовому элементу справочника');
            $table->integer('lang_id')->comment('числовой идентификатор языка, ключ на справочник языков');
            $table->string('lang_code')->comment('символьный идентификатор языка, справочника языков');
            $table->string('name')->comment('языковое название соответствующего языка');

            $table->timestamps();

            $table->foreign('id_element')->references('id')->on('dictionary_form_of_payments');
            $table->foreign('lang_id')->references('lang_id')->on('dictionary_languages');

            //$table->comment('справочник форм оплат(яз.названия)'); // доступно с версии 9
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dictionary_form_of_payment_langs');
    }
}
