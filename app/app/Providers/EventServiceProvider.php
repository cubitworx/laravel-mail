<?php

namespace App\Providers;

use Cubitworx\Laravel\Mail\Listeners\LogMailSent;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Mail\Events\MessageSending;

class EventServiceProvider extends ServiceProvider {

	/**
	 * The event listener mappings for the application.
	 *
	 * @var array
	 */
	protected $listen = [
		MessageSending::class => [
			LogMailSent::class,
		],
	];

}
