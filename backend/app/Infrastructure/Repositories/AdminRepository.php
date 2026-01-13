<?php
namespace App\Infrastructure\Repositories;

use App\Domain\Auth\Repositories\AdminRepositoryInterface;

class AdminRepository implements AdminRepositoryInterface
{
	public function __construct(
	) {}

	public function login(string $username, string $password)
	{
		if ($username === 'admin' && $password === 'admin') {
			session()->put('is_admin', true);
			return true;
		} else {
			session()->put('is_admin', false);
			return false;
		}
	}
}
