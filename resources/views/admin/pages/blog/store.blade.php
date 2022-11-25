@extends('admin.layouts.main')
@section('style-css')
    <style>
        .id-category {
            width: 200px;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>Tạo bài viết mới</h3></div>
                    <div class="card-body">
                        <form class="forms-sample" action="{{route('admin.blog.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title">Tiêu đề bài viết</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="Tiêu đề bài viết">
                            </div>
                            <div class="form-group">
                                <label for="meta">Meta bài viết</label>
                                <input type="text" class="form-control" name="meta_desc" id="meta" placeholder="Meta bài viết">
                            </div>
                            <div class="form-group">
                                <label for="description">Mô tả ngắn bài viết</label>
                                <textarea class="form-control" id="description" rows="4" name="description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="content">Nội dung bài viết</label>
                                <textarea class="form-control" id="content" rows="4" name="content"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="content">Thể loại</label>
                                <select class="id-category" name="category_id[]" style="width: 100%; height: 100%"
                                        multiple="multiple">
                                    @foreach($categories as $item)
                                        <option
                                            value="{{$item->id}}" > {{$item->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="meta">Loại bài viết</label>
                               <select name="is_top" class="form-control">
                                   <option class="form-control" value="1">Nổi bật</option>
                                   <option class="form-control" value="0">Bình thường</option>
                               </select>
                            </div>
                            <div class="form-group">
                                <label for="meta">Trạng thái</label>
                                <select name="status" class="form-control">
                                    <option class="form-control" value="1">Hiển thị</option>
                                    <option class="form-control" value="0">Ẩn</option>
                                </select>
                            </div>
{{--                            <div class="form-group">--}}
{{--                                <label for="meta">Loại bài viết</label>--}}
{{--                                <select name="category[]" class="form-control">--}}
{{--                                    <option>Nổi bật</option>--}}
{{--                                    <option>Bình thường</option>--}}
{{--                                </select>--}}
{{--                            </div>--}}
                            <div class="form-group">
                                <label>File upload</label>
                                <input type="file" name="image" class="file-upload-default">
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
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>

        $(document).ready(function () {
            $('.id-category').select2({
                width: 'resolve',// need to override the changed default
                multiple: true,
            });
        });
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
