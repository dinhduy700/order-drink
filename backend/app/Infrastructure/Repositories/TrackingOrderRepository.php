<?php
namespace App\Infrastructure\Repositories;

use App\Domain\TrackingOrder\Repositories\TrackingOrderRepositoryInterface;
use App\Infrastructure\Models\TrackingOrder;

class TrackingOrderRepository implements TrackingOrderRepositoryInterface
{
	public function __construct(
		protected TrackingOrder $model
	) {}

	public function getList()
	{
		return $this->model->get();
	}

	public function updateStatusByIds(array $ids, int $status)
	{
		return $this->model
			->whereIn('id', $ids)
			->update(['status' => $status]);
	}
}
