<?php namespace BuzzwordCompliant\DBContent\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class AddDescription extends Migration
{
    public function up()
    {
        Schema::table('bc_staticblocks', function($table)
        {
            $table->text('description')->nullable;
        });

    }

    public function down()
    {
    }
}