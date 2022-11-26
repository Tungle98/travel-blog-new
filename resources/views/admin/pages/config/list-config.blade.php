@extends('admin.layouts.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">  <h4 class="card-title">Cấu hình</h4></div>
                        <div class="col-md-6" style="text-align: right">     <button type="button" class="btn btn-primary" data-toggle="modal"
                                                                                     data-target="#exampleModal" data-whatever="@mdo">Tạo cấu hình mới
                            </button></div>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th class="nosort">Title</th>
                                <th>Loại cấu hình</th>
                                <th>Trạng thái</th>
                                <th class="nosort">&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($configs as $item)
                                <tr>
                                    <td>{{$loop->index + 1}}</td>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->type}}</td>
                                    <td>@if($item->status === 1)
                                            <span>  Hiển thị</span>
                                        @elseif($item->status === 0)
                                            <span>  Ẩn</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="table-actions">
                                            <a href="#"><i class="mdi mdi-border-color" style="font-size: 20px"></i></a>
                                            <a href="{{route('admin.configuration.delete',$item->id)}}"><i class="mdi mdi-delete-forever" style="font-size: 20px; color: red"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <span>no config</span>
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
                        <h5 class="modal-title" id="exampleModalLabel">Cấu hình mới</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{route('admin.configuration.store')}}">
                            @csrf
                            <div class="form-group">
                                <label for="title" class="col-form-label">Title:</label>
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>
                            <div class="form-group">
                                <label for="type" class="col-form-label">Loại config:</label>
                                <input type="text" class="form-control" id="type" name="type" required>
                            </div>
                            <div class="form-group">
                                <label for="description" class="col-form-label">Mô tả:</label>
                                <textarea class="form-control" id="description" name="description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="description" class="col-form-label">Trạng thái:</label>
                                <select name="status" class="form-control">
                                    <option value="1">Hiện</option>
                                    <option value="0">Ẩn</option>
                                </select>
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
