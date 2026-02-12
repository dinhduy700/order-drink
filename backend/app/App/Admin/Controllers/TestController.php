<?php

namespace App\App\Admin\Controllers;

use App\Infrastructure\Models\OrderSession;
use Illuminate\Http\Request;
use App\App\Admin\ViewModels\TeamViewModel;

use App\App\Admin\Requests\OrderSessionRequest;

use App\Domain\OrderSession\Actions\StoreOrderSessionAction;
use App\Domain\OrderSession\DataTransferObjects\OrderSessionDTO;

class TestController extends Controller
{
	public function showFormUpload()
	{
		return view('upload-file.index');
	}

	public function postShowFormUpload(Request $request)
	{
		dump(__METHOD__);
		sleep(1000);
//		dd($request->all());
//		return view('test');
	}
}
