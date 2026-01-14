<?php

namespace App\App\Admin\Controllers;

use App\Infrastructure\Models\OrderSession;
use Illuminate\Http\Request;
use App\App\Admin\ViewModels\TeamViewModel;

use App\App\Admin\Requests\OrderSessionRequest;

use App\Domain\OrderSession\Actions\TrackingOrderAction;
use App\Domain\OrderSession\DataTransferObjects\OrderSessionDTO;

class OrderSessionController extends Controller
{
	public function create()
	{
		return view('admin.order-session.create');
	}

	public function store(OrderSessionRequest $request, TrackingOrderAction $action)
	{
		$dto = OrderSessionDTO::fromRequest($request);

		$orderSession = $action->handle($dto);

		return redirect()->route('admin.order-session.showOrderSessionPage');
	}

	public function showOrderSessionPage()
	{
		return view('admin.order-session.order-session-success');
	}
}
