<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUploadsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('uploads', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('extension');
			$table->integer('user_id');
			$table->integer('filesize');
			$table->date('uploaded_at');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('uploads');
	}

}
