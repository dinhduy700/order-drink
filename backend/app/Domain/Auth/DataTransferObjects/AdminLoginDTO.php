<?php

namespace App\Domain\Auth\DataTransferObjects;

use App\App\Admin\Requests\AdminLoginRequest;

class AdminLoginDTO
{
	public function __construct(
		public string $username,
		public string $password,
	)
	{
	}

	public static function fromRequest(AdminLoginRequest $request): self
	{
		return new self(
			username: $request->validated('username'),
			password: $request->validated('password'),
		);
	}
}