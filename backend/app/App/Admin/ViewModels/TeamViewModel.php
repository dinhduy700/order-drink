<?php
namespace App\App\Admin\ViewModels;

use Illuminate\Database\Eloquent\Collection;

class TeamViewModel
{
	public function __construct(
		protected Collection $teams
	) {}
}