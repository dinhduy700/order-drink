<?php

namespace App\App\Admin\Controllers;

use Illuminate\Http\Request;

use App\Domain\Team\Actions\ListTeamAction;

class TeamController extends Controller
{
	public function index(ListTeamAction $listTeamAction)
	{
		$listTeamAction->handle();
	}
}
