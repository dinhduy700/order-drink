<?php

namespace App\App\Admin\Controllers;

use Illuminate\Http\Request;
use App\App\Admin\ViewModels\TeamViewModel;

use App\Domain\Team\Actions\StoreOrderSession;

class TeamController extends Controller
{
	public function index(StoreOrderSession $listTeamAction)
	{
		$teams = $listTeamAction->handle();
//dd($teams);
		// 2. Đưa dữ liệu vào ViewModel
		$viewModel = new TeamViewModel($teams);

		// 3. Trả về view với ViewModel
		return view('admin.teams.index', [
			'$viewModel' => $viewModel
		]);
	}
}
