<?php

namespace App\Domain\TrackingOrder\Repositories;

interface TrackingOrderRepositoryInterface
{
	public function getList();
	public function updateStatusByIds(array $ids, int $status);
}