<?php

namespace App\Domain\OrderSession\Repositories;

interface OrderSessionRepositoryInterface
{
	public function store(array $data);
}