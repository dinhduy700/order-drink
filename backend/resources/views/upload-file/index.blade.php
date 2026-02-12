
<form action="{{ route('post.upload-file') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="file_upload">Chọn ảnh/video nhân viên:</label>
        <input type="file" name="file_upload" id="file_upload" class="form-control">
    </div>

    <div class="form-group">
        <label>Tên nhân viên:</label>
        <input type="text" name="girl_name" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Tải lên ngay</button>
</form>