@extends('admin.layouts.main')
@section('style-css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('content')

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">  <h4 class="card-title">Danh sách slide</h4></div>
                        <div class="col-md-6" style="text-align: right;">  <button type="button" class="btn btn-primary" data-toggle="modal"
                                                                   data-target="#exampleModal" data-whatever="@mdo">Tạo slide mới
                            </button></div>
                    </div>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th class="nosort">Title</th>
                                <th>Hình ảnh</th>
                                <th>Ngày tạo</th>
                                <th class="nosort">&nbsp;Hành động</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($slides as $item)
                                <tr>
                                    <td>{{$loop->index + 1}}</td>
                                    <td>{{$item->title}}</td>
                                    <td><img src="{{asset($item->image)}}" alt="img-travel"></td>
                                    <td>{{$item->created_at}}</td>
                                    <td>
                                        <div class="table-actions">
                                            <a href="#"><i class="mdi mdi-border-color" style="font-size: 20px"></i></a>
                                            <a href="{{route('admin.slide.delete',$item->id)}}"><i class="mdi mdi-delete-forever" style="font-size: 20px; color: red"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <span>no slide</span>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tài khoản mới</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{route('admin.slide.store')}}"  enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title" class="col-form-label">Tiêu đề:</label>
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>
                            <div class="form-group">
                                <label for="guard_name" class="col-form-label">Trạng thái:</label>
                               <select name="status" class="form-control">
                                   <option value="1">Hiển thị</option>
                                   <option value="0">Ẩn</option>
                               </select>
                            </div>
                            <div class="form-group">
                                <label for="image" class="col-form-label">Hình ảnh:</label>
                                <input type="file" class="form-control" id="image" name="image" required>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Xác nhận</button>
                            </div>
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
        $(document).ready(function() {
            $('.permission-select').select2();
        });
    </script>
@endsection
