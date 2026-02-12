<?php

namespace App\Domain\Auth\Repositories;

use App\Domain\Auth\DataTransferObjects\AdminLoginDTO;

interface AdminRepositoryInterface
{
	public function login(string $username, string $password);
}