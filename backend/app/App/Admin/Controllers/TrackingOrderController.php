<?php

namespace App\App\Admin\Controllers;

use Illuminate\Http\Request;
use App\App\Admin\ViewModels\TrackingOrderViewModel;


use App\Domain\TrackingOrder\Actions\TrackingOrderAction;
use App\Domain\TrackingOrder\Actions\ConfirmOrderedAction;
use App\Domain\TrackingOrder\DataTransferObjects\ConfirmOrderedDTO;

class TrackingOrderController extends Controller
{
	public function index(TrackingOrderAction $action)
	{
		$trackingOrders = $action->handle();

		$viewModel = new TrackingOrderViewModel($trackingOrders);

		return view('admin.tracking-order.index', compact('viewModel'));
	}

	public function confirm()
	{
		return view('admin.tracking-order.confirm');
	}

	public function confirmOrdered(Request $request, ConfirmOrderedAction $action)
	{
		$dto = ConfirmOrderedDTO::fromRequest($request);

		$a = $action->handle($dto);

		return response()->json([
			'success' => true,
			'message' => 'Cập nhật đơn hàng thành công!',
			'redirect_url' => route('admin.order-session.showOrderSessionPage')
		]);
	}
}
