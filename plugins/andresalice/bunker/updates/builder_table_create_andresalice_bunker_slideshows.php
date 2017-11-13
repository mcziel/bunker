<?php namespace AndresAlice\Bunker\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateAndresaliceBunkerSlideshows extends Migration
{
    public function up()
    {
        Schema::create('andresalice_bunker_slideshows', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('andresalice_bunker_slideshows');
    }
}
