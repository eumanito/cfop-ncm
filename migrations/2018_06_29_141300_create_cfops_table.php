<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCfopsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cfops', function(Blueprint $table)
		{
			$table->bigInteger('codigo');
			$table->string('descricao');
		});
	}


	/**
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cfops');
	}

}
