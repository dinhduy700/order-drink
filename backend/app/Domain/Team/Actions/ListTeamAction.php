<?php

namespace App\Domain\Team\Actions;

use App\Domain\Team\Repositories\OrderSessionRepositoryInterface;

class ListTeamAction
{
	protected $teamRepository;

	public function __construct(OrderSessionRepositoryInterface $teamRepository)
	{
		$this->teamRepository = $teamRepository;
	}

	public function handle()
	{
		$res = $this->teamRepository->getTeams();
		return $res;
	}
}