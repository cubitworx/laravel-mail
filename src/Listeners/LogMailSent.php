<?php

namespace Cubitworx\Laravel\Mail\Listeners;

use Cubitworx\Laravel\Mail\Model;
use Illuminate\Mail\Events\MessageSent;

class LogMailSent {

	/**
	 * Handle the event.
	 *
	 * @param  MessageSent  $event
	 * @return void
	 */
	public function handle(MessageSent $event) {
		// Log Email
		(new Model\LogEmail([
			'bcc' => $event->message->getBcc(),
			'body' => $event->message->getBody(),
			'cc' => $event->message->getCc(),
			'datetime' => $event->message->getDate(),
			'from' => $event->message->getFrom(),
			'reply_to' => $event->message->getReplyTo(),
			'subject' => $event->message->getSubject(),
			'to' => $event->message->getTo(),
		]))->save();
	}

}
