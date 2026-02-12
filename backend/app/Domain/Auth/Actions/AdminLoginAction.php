<?php

namespace App\Domain\Auth\Actions;

use App\Domain\Auth\Repositories\AdminRepositoryInterface;
use App\Domain\Auth\DataTransferObjects\AdminLoginDTO;

class AdminLoginAction
{
	public function __construct(
		protected AdminRepositoryInterface $adminRepository,
	)
	{
	}

	public function handle(AdminLoginDTO $dto)
	{
		return $this->adminRepository->login($dto->username, $dto->password);
	}
}