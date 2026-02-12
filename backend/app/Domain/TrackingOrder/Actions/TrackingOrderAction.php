<?php

namespace App\Domain\TrackingOrder\Actions;

use App\Domain\TrackingOrder\Repositories\TrackingOrderRepositoryInterface;
use App\Domain\OrderSession\DataTransferObjects\OrderSessionDTO;
use App\Infrastructure\Services\ChatworkService;

class TrackingOrderAction
{

	public function __construct(
		protected TrackingOrderRepositoryInterface $trackingOrderRepository,
	)
	{}

	public function handle()
	{
		return $this->trackingOrderRepository->getList();
	}
}