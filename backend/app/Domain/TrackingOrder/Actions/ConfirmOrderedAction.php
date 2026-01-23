<?php

namespace App\Domain\TrackingOrder\Actions;

use App\Domain\TrackingOrder\Repositories\TrackingOrderRepositoryInterface;
use App\Domain\TrackingOrder\DataTransferObjects\ConfirmOrderedDTO;
use App\Infrastructure\Services\ChatworkService;

class ConfirmOrderedAction
{

	public function __construct(
		protected TrackingOrderRepositoryInterface $trackingOrderRepository,
		protected ChatworkService $chatworkService
	)
	{}

	public function handle(ConfirmOrderedDTO $dto)
	{
		$approvedStatus = 2;
		$this->trackingOrderRepository->updateStatusByIds($dto->ids, $approvedStatus);

		$message = 'DUY TEST ORDER.......';

		foreach ($dto->chatwork_room_ids as $chatwork_room_id) {
			$this->chatworkService->setRoomId($chatwork_room_id);
			$this->chatworkService->sendMessage($message);
		}

	}
}