<?php

namespace App\Domain\OrderSession\Actions;

use App\Domain\OrderSession\Repositories\OrderSessionRepositoryInterface;
use App\Domain\OrderSession\DataTransferObjects\OrderSessionDTO;
use App\Infrastructure\Services\ChatworkService;

class StoreOrderSessionAction
{
//	protected $orderSessionRepository;

	public function __construct(
		protected OrderSessionRepositoryInterface $orderSessionRepository,
		protected ChatworkService $chatworkService
	)
	{
//		$this->orderSessionRepository = $orderSessionRepository;
	}

	public function handle(OrderSessionDTO $dto)
	{
		// Bạn truyền DTO vào repository để lưu
		$orderSession = $this->orderSessionRepository->store([
			'owner_invite' => $dto->ownerInvite,
			'session_name' => $dto->sessionName,
			'menu_urls'    => $dto->menuUrls,
			'budget_limit' => $dto->budgetLimit,
		]);

		// 2. Chuẩn bị nội dung tin nhắn Chatwork (Dùng format [info], [title] của Chatwork)
		$message = "[info][title]🔔 Chiều nay uống nước nha mọi người [/title]";
		$message .= "👤 Chủ xị: {$orderSession->owner_invite}\n";
		$message .= "📝 Nội dung: {$orderSession->session_name}\n";
		$message .= "💰 Ngân sách: " . ($orderSession->budget_limit ? number_format($orderSession->budget_limit) . ".000 VNĐ" : "Không giới hạn") . "\n";
		$message .= "🔗 Link đặt món: ".$orderSession->menu_urls. "[/info]";

		// 3. Gửi đi
		$this->chatworkService->sendMessage($message);

		return $orderSession;
	}
}