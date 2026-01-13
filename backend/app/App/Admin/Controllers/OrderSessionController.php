<?php

namespace App\App\Admin\Controllers;

use Illuminate\Http\Request;
use App\App\Admin\ViewModels\TeamViewModel;

use App\App\Admin\Requests\OrderSessionRequest;

use App\Domain\OrderSession\Actions\StoreOrderSessionAction;
use App\Domain\OrderSession\DataTransferObjects\OrderSessionDTO;

class OrderSessionController extends Controller
{
	public function create()
	{
		return view('admin.order-session.create');
	}

	public function store(OrderSessionRequest $request, StoreOrderSessionAction $action)
	{
		$dto = OrderSessionDTO::fromRequest($request);

		$orderSession = $action->handle($dto);

		// 3. Trả về view thành công
		return view('admin.order-session.order-session-success', [
			'orderSession' => $orderSession
		]);
	}
}
