<?php

namespace App\App\Admin\Controllers;

use Illuminate\Http\Request;

use App\App\Admin\Requests\AdminLoginRequest;

use App\Domain\Auth\DataTransferObjects\AdminLoginDTO;
use App\Domain\Auth\Actions\AdminLoginAction;

class LoginController extends Controller
{
	public function showLoginForm()
	{
		return view('admin.auth.login');
	}

	public function login(AdminLoginRequest $request, AdminLoginAction $action)
	{
		$dto = AdminLoginDTO::fromRequest($request);
		$login = $action->handle($dto);

		if ($login) {
			return redirect()->route('admin.order-session.create');
		} else {
			return redirect()->route('admin.login');
		}
	}

	public function logout(Request $request)
	{
		session()->forget('is_admin');

		return redirect()->route('admin.login');
	}
}
