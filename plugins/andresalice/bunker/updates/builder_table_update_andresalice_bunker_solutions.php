<?php namespace AndresAlice\Bunker\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateAndresaliceBunkerSolutions extends Migration
{
    public function up()
    {
        Schema::table('andresalice_bunker_solutions', function($table)
        {
            $table->text('status')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('andresalice_bunker_solutions', function($table)
        {
            $table->text('status')->nullable(false)->change();
        });
    }
}
