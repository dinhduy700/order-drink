<?php

namespace App\App\Admin\Controllers;

use Illuminate\Http\Request;

use App\App\Admin\Requests\AdminLoginRequest;

use App\Domain\Auth\DataTransferObjects\AdminLoginDTO;
use App\Domain\Auth\Actions\AdminLoginAction;

use Symfony\Component\HttpFoundation\StreamedResponse;
use DB;

class OrderNotificationController extends Controller
{
	public function stream()
	{
		$response = new StreamedResponse(function () {
			while (true) {
				// Giả sử lấy đơn hàng mới nhất trong 5 giây qua
				$newOrder = DB::table('tracking_orders')
							->where('created_at', '>=', now()->subSeconds(5))
							->latest()
							->first();

				if ($newOrder) {
					echo "data: " . json_encode([
							'id' => $newOrder->id,
							'customer' => $newOrder->drink_name,
							'total' => $newOrder->size,
						]) . "\n\n";
				}

				// Gửi "heartbeat" để giữ kết nối không bị timeout
				echo ": heartbeat\n\n";

				ob_flush();
				flush();

				sleep(3); // Nghỉ 3 giây trước khi kiểm tra tiếp
			}
		});

		$response->headers->set('Content-Type', 'text/event-stream');
		$response->headers->set('Cache-Control', 'no-cache');
		$response->headers->set('Connection', 'keep-alive');
		$response->headers->set('X-Accel-Buffering', 'no'); // Quan trọng cho Nginx

		return $response;
	}
}
