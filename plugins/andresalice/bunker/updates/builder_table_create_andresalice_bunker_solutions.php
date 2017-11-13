<?php namespace AndresAlice\Bunker\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAndresaliceBunkerSolutions extends Migration
{
    public function up()
    {
        Schema::create('andresalice_bunker_solutions', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->text('name');
            $table->text('lastname');
            $table->text('email');
            $table->text('company');
            $table->text('address');
            $table->text('phone');
            $table->text('celphone');
            $table->text('message');
            $table->text('status');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('andresalice_bunker_solutions');
    }
}
