<?php

namespace Tests\Feature;

use App\Mail\TestMail;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Mail;

class ExampleTest extends TestCase {
	use DatabaseMigrations;

	/**
	 * A basic test example.
	 *
	 * @return void
	 */
	public function testBasicTest() {
		Mail::fake();
		// Mail::assertNothingSent();

		Mail::send(new TestMail());
		Mail::assertSent(TestMail::class, function ($mail) {
dd($mail);
			return
				$mail->hasFrom('test@test.com') &&
				$mail->hasTo('test@test.com') &&
				// ($mail->subject === 'Test email subject') &&
				// $mail->hasBody('Test email body') &&
				$mail->test === 'Test email property';
		});
	}

}
