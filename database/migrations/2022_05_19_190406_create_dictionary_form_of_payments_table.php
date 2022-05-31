<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDictionaryFormOfPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dictionary_form_of_payments', function (Blueprint $table) {
            $table->integer('id')->autoIncrement()->comment('справочник форм оплат, ключевое поле, индекс');
            $table->string('id1c')->unique()->comment('ключ 1С, строка');
            $table->boolean('active')->default(false)->comment('активность которая пришла, булевое');
            $table->softDeletes()->comment('програмное удаление');
            $table->timestamps();

            //$table->integer('parent_id')->unsigned()->default(0);
            //$table->boolean('active_cc')->default(false);
            //$table->integer('department_id')->unsigned();

            //$table->comment('справочник форм оплат - данные'); // доступно с версии 9
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dictionary_form_of_payments');
    }
}
