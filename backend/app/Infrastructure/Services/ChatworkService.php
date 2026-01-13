<?php

namespace App\Infrastructure\Services;

use Illuminate\Support\Facades\Http;

class ChatworkService
{
	protected string $apiToken;
	protected string $roomId;

	public function __construct()
	{
		$this->apiToken = config('services.chatwork.token');
		$this->roomId = config('services.chatwork.room_id');
	}

	public function sendMessage(string $message): bool
	{
		$response = Http::withHeaders([
			'X-ChatWorkToken' => $this->apiToken
		])->asForm()->post("https://api.chatwork.com/v2/rooms/{$this->roomId}/messages", [
			'body' => $message
		]);

		return $response->successful();
	}
}