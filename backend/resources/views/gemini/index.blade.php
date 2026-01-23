<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tích hợp Gemini AI vào Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light py-5">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0 fw-bold">Laravel + Google Gemini Chat</h5>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('gemini.ask') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="question" class="form-label fw-bold">Nhập câu hỏi của bạn:</label>
                            <textarea class="form-control" id="question" name="question" rows="4" placeholder="Ví dụ: Hãy viết một đoạn code PHP đếm số từ trong chuỗi...">{{ $question ?? '' }}</textarea>
                            @error('question')
                            <div class="text-danger mt-2 small">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">Gửi cho Gemini AI</button>
                        </div>
                    </form>

                    <hr class="my-4">

                    @if(isset($answer))
                        <div class="alert alert-success">
                            <h6 class="alert-heading fw-bold"><i class="bi bi-robot"></i> Gemini trả lời:</h6>
                            <div class="mt-3 bg-white p-3 rounded border" style="white-space: pre-wrap;">{!! nl2br(e($answer)) !!}</div>
                        </div>
                    @endif

                    @if(isset($error))
                        <div class="alert alert-danger fw-bold">
                            {{ $error }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
