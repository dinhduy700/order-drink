<?php
namespace App\App\Admin\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectAdminIfAuthenticated
{
	public function handle(Request $request, Closure $next): Response
	{
		// Nếu trong session đã có key 'is_admin', nghĩa là đã login
		if ($request->session()->has('is_admin') && $request->session()->get('is_admin')) {
			// Chuyển hướng thẳng về trang tạo phiên đặt đồ
			return redirect()->route('admin.order-session.create');
		}

		return $next($request);
	}
}