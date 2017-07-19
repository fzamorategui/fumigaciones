<?php namespace Pamatz\Clientes\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateClientesTable extends Migration
{
    public function up()
    {
        Schema::create('pamatz_clientes_clientes', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pamatz_clientes_clientes');
    }
}
