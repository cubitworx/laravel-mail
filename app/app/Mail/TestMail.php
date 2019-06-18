<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class TestMail extends Mailable {

	public $test = 'Test email property';

	/**
	 * Build the message.
	 *
	 * @return $this
	 */
	public function build() {
		$this
			->from(['email'=>'from@test.com'])
			->to(['email'=>'to@test.com'])
			->subject('Test email subject')
			->markdown('mail.test-markdown');

		return $this;
	}

}
