<?php

namespace App\App\Admin\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; // Sử dụng HTTP Client có sẵn của Laravel

class GeminiController extends Controller
{
	// Phương thức hiển thị giao diện nhập câu hỏi
	public function index()
	{
		return view('gemini.index');
	}

	// Phương thức xử lý gửi yêu cầu sang Google Gemini
	public function ask(Request $request)
	{
		// 1. Validate dữ liệu đầu vào nhẹ nhàng
		$request->validate([
			'question' => 'required|string|max:2000',
		]);

		$question = $request->input('question');
		$apiKey = config('app.gemini.api_key');
		$apiUrl = config('app.gemini.base_url') . '?key=' . $apiKey;

		// 2. Cấu trúc dữ liệu (Payload) theo yêu cầu của Gemini API
		$payload = [
			'contents' => [
				[
					'parts' => [
						['text' => $question]
					]
				]
			]
		];

		try {
			// 3. Sử dụng Laravel HTTP Client để gửi Request POST
			$response = Http::withHeaders([
				'Content-Type' => 'application/json'
			])->post($apiUrl, $payload);

			// 4. Xử lý kết quả trả về
			if ($response->successful()) {
				$data = $response->json();
				// Trích xuất câu trả lời text từ cấu trúc JSON phức tạp của Google
				$answer = $data['candidates'][0]['content']['parts'][0]['text'] ?? 'Không tìm thấy câu trả lời phù hợp.';

				// Trả về view kèm theo câu hỏi và câu trả lời
				return view('gemini.index', compact('question', 'answer'));
			} else {
				// Xử lý trường hợp API trả về lỗi (ví dụ: sai key, hết quota)
				return view('gemini.index', ['error' => 'Lỗi kết nối API: ' . $response->status() . ' - ' . $response->body()]);
			}

		} catch (\Exception $e) {
			// Xử lý lỗi hệ thống (ví dụ: mất mạng, lỗi SSL)
			return view('gemini.index', ['error' => 'Đã xảy ra lỗi hệ thống: ' . $e->getMessage()]);
		}
	}
}
