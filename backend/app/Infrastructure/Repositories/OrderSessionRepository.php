<?php
namespace App\Infrastructure\Repositories;

use App\Domain\OrderSession\Repositories\OrderSessionRepositoryInterface;
use App\Infrastructure\Models\OrderSession;

class OrderSessionRepository implements OrderSessionRepositoryInterface
{
	public function __construct(
		protected OrderSession $model
	) {}

	public function store(array $data)
	{
		return $this->model->create($data);
	}
}
