@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>Tạo thể loại mới</h3></div>
                    <div class="card-body">
                        <form class="forms-sample" action="{{route('admin.category.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title">Tiêu đề thể loại</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="Tiêu đề bài viết">
                            </div>
                            <div class="form-group">
                                <label for="meta">Meta thể loại</label>
                                <input type="text" class="form-control" name="meta_desc" id="meta" placeholder="Meta bài viết">
                            </div>
                            <div class="form-group">
                                <label for="description">Mô tả ngắn thể loại</label>
                                <textarea class="form-control" id="description" rows="4" name="description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="meta">Trạng thái</label>
                                <select name="status" class="form-control">
                                    <option class="form-control" value="0">Ẩn</option>
                                    <option class="form-control" value="1">Hiện</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>File upload</label>
                                <input type="file" name="img[]" class="file-upload-default">
                                <div class="input-group col-xs-12">
                                    <input type="file" class="form-control file-upload-info" placeholder="Upload Image" name="image">
                                    <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                                    </span>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
@section('js')
    <script>
        CKEDITOR.replace( 'content', {

            filebrowserBrowseUrl     : "{{ route('ckfinder_browser') }}",
            filebrowserImageBrowseUrl: "{{ route('ckfinder_browser') }}?type=Images&token=123",
            filebrowserFlashBrowseUrl: "{{ route('ckfinder_browser') }}?type=Flash&token=123",
            filebrowserUploadUrl     : "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Files",
            filebrowserImageUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Images",
            filebrowserFlashUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Flash",
        } );

        CKEDITOR.replace( 'description', {

            filebrowserBrowseUrl     : "{{ route('ckfinder_browser') }}",
            filebrowserImageBrowseUrl: "{{ route('ckfinder_browser') }}?type=Images&token=123",
            filebrowserFlashBrowseUrl: "{{ route('ckfinder_browser') }}?type=Flash&token=123",
            filebrowserUploadUrl     : "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Files",
            filebrowserImageUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Images",
            filebrowserFlashUploadUrl: "{{ route('ckfinder_connector') }}?command=QuickUpload&type=Flash",
        } );
    </script>
    @include('ckfinder::setup')
@endsection
