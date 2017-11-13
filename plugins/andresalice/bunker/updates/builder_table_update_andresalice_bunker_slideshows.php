<?php namespace AndresAlice\Bunker\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAndresaliceBunkerSlideshows extends Migration
{
    public function up()
    {
        Schema::table('andresalice_bunker_slideshows', function($table)
        {
            $table->text('title');
        });
    }
    
    public function down()
    {
        Schema::table('andresalice_bunker_slideshows', function($table)
        {
            $table->dropColumn('title');
        });
    }
}
