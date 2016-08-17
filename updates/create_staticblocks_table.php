<?php namespace BuzzwordCompliant\DBContent\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateStaticblocksTable extends Migration
{
    public function up()
    {
        Schema::create('bc_staticblocks', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('key',64)->unique();
            $table->text('content')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('bc_staticblocks');
    }
}