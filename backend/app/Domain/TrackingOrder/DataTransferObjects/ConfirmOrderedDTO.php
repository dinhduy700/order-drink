<?php

namespace App\Domain\TrackingOrder\DataTransferObjects;

use Illuminate\Http\Request;

class ConfirmOrderedDTO
{
	public function __construct(
		public array $ids,
		public array $chatwork_room_ids,
	)
	{
	}

	public static function fromRequest(Request $request): self
	{
		return new self(
			ids: $request->ids,
			chatwork_room_ids: $request->chatwork_room_ids,
		);
	}
}