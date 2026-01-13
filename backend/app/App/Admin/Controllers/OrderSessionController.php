<?php

namespace App\App\Admin\Controllers;

use Illuminate\Http\Request;
use App\App\Admin\ViewModels\TeamViewModel;

use App\App\Admin\Requests\OrderSessionRequest;

use App\Domain\OrderSession\Actions\AdminLoginAction;
use App\Domain\OrderSession\DataTransferObjects\AdminLoginDTO;

class OrderSessionController extends Controller
{
	public function create()
	{
		return view('admin.order-session.create');
	}

	public function store(OrderSessionRequest $request, AdminLoginAction $action)
	{
		$dto = AdminLoginDTO::fromRequest($request);

		$orderSession = $action->handle($dto);

		// 3. Trả về view thành công
		return view('admin.order-session.order-session-success', [
			'orderSession' => $orderSession
		]);
	}
}
