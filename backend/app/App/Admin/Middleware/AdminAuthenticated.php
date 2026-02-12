<?php
namespace App\App\Admin\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminAuthenticated
{
	public function handle(Request $request, Closure $next): Response
	{
		// Kiểm tra xem session có 'is_admin' không (khớp với logic login của bạn)
		if (!$request->session()->has('is_admin') || $request->session()->get('is_admin') === false) {
			// Nếu không có, bắt quay về trang login
			return redirect()->route('admin.login')->with('error', 'Bạn cần đăng nhập trước.');
		}

		return $next($request);
	}
}