<?php

namespace App\Console\Commands;

use App\Mail\TestMail;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class TestMailCommand extends Command {

	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'test:mail';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Test email functionality';

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function handle() {
		Mail::send(new TestMail());
	}

}
