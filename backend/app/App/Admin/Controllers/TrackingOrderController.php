<?php

namespace App\App\Admin\Controllers;

use App\Infrastructure\Models\OrderSession;
use Illuminate\Http\Request;
use App\App\Admin\ViewModels\TrackingOrderViewModel;

use App\App\Admin\Requests\OrderSessionRequest;

use App\Domain\TrackingOrder\Actions\TrackingOrderAction;
use App\Domain\OrderSession\DataTransferObjects\OrderSessionDTO;

class TrackingOrderController extends Controller
{
	public function index(TrackingOrderAction $action)
	{
		$trackingOrders = $action->handle();

		$viewModel = new TrackingOrderViewModel($trackingOrders);

		return view('admin.tracking-order.index', compact('viewModel'));
	}
}
