<?php

namespace App\Domain\OrderSession\DataTransferObjects;

use App\App\Admin\Requests\OrderSessionRequest;

class OrderSessionDTO
{
	public function __construct(
		public string $ownerInvite,
		public string $sessionName,
//		public string $menuUrls,
		public int $budgetLimit
	)
	{
	}

	public static function fromRequest(OrderSessionRequest $request): self
	{
		return new self(
			ownerInvite: $request->validated('owner_invite'),
			sessionName: $request->validated('session_name'),
//			menuUrls: $request->validated('menu_urls'),
			budgetLimit: $request->validated('budget_limit') ? (int) $request->validated('budget_limit') : 0,
		);
	}
}