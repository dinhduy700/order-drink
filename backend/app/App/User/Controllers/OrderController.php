<?php

namespace App\App\User\Controllers;

use App\App\Admin\Requests\OrderSessionRequest;
use App\Domain\OrderSession\Actions\StoreOrderSessionAction;
use App\Domain\OrderSession\DataTransferObjects\OrderSessionDTO;

class OrderController extends Controller
{
	public function create()
	{
		return view('user.order.create');
	}

	public function store(OrderSessionRequest $request, StoreOrderSessionAction $action)
	{
		$dto = OrderSessionDTO::fromRequest($request);

		$orderSession = $action->handle($dto);

		return redirect()->route('admin.order-session.showOrderSessionPage');
	}

}
