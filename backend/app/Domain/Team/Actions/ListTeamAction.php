<?php

namespace App\Domain\Team\Actions;

use App\Domain\Team\Repositories\TeamRepositoryInterface;

class ListTeamAction
{
	protected $teamRepository;

	public function __construct(TeamRepositoryInterface $teamRepository)
	{
		$this->teamRepository = $teamRepository;
	}

	public function handle()
	{
		$res = $this->teamRepository->getTeams();
		return $res;
	}
}