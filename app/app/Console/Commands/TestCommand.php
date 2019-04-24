<?php

namespace App\Console\Commands;

use App\Mail\TestMail;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class TestCommand extends Command {

	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'test';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Test lib functionality';

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function handle() {
		Mail::send(new TestMail());
	}

}
