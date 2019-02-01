<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLogEmailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('log_emails', function (Blueprint $table) {
			$table->bigIncrements('id');

			$table->string('bcc')->nullable();
			$table->longText('body');
			$table->string('cc')->nullable();
			$table->string('datetime');
			$table->string('from');
			$table->string('reply_to')->nullable();
			$table->string('subject');
			$table->string('to');

			$table->integer('created_by')->nullable();
			$table->integer('updated_by')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('log_emails');
	}

}
