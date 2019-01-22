<?php

namespace Cubitworx\Laravel\Mail\Model;

use Illuminate\Database\Eloquent\Model;

class LogEmail extends Model {

	protected $casts = [
		'to' => 'array',
		'cc' => 'array',
		'bcc' => 'array',
		'from' => 'array',
		'reply_to' => 'array',
	];

	protected $guarded = [
		'created_at',
		'created_by',
		'updated_at',
		'updated_by',
	];

}
