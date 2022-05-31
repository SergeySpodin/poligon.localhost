<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDictionaryDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dictionary_departments', function (Blueprint $table) {
            $table->integer('id')->autoIncrement()->comment('справочник подразделений(данные), ключевое поле');
            $table->string('id1c')->unique()->comment('ключ 1С, строка');
            $table->boolean('active')->default(false)->comment('активность которая пришла, булевое');
            $table->softDeletes()->comment('програмное удаление');
            $table->timestamps();
            $table->integer('parent_id')->unsigned()->default(0)->comment('идентификатор вышестоящего продразделения');
            $table->boolean('active_cc')->default(false)->comment('активность в согласовании счетов, булевое');
            //$table->integer('department_id')->unsigned();

            //$table->comment('справочник подразделений(данные)'); // доступно с версии 9
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dictionary_departments');
    }
}
