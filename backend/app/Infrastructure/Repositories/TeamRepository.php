<?php
namespace App\Infrastructure\Repositories;

use App\Domain\Team\Repositories\TeamRepositoryInterface;

use App\Infrastructure\Models\Team;

class TeamRepository implements TeamRepositoryInterface
{
	public function getTeams() {
		return Team::all();
	}
}
