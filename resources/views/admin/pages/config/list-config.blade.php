@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-inbox bg-blue"></i>
                        <div class="d-inline">
                            <h5>Danh sách thông tin cấu hình</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="../index.html"><i class="ik ik-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Bài viết</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="row card-header">
                        <div class="col-md-6">
                            <div class=""><h3>Bài viết</h3>
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal" data-whatever="@mdo">Tạo cấu hình mới
                            </button>
                        </div>
                    </div>

                    <div class="card-body">
                        <table id="data_table" class="table">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th class="nosort">Title</th>
                                {{--                                <th>Mô tả</th>--}}
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
                                    {{--                                <td>{{$item->description}}</td>--}}
                                    <td>{{$item->type}}</td>
                                    <td>@if($item->status === 1)
                                            <span>  Hiển thị</span>
                                        @elseif($item->status === 0)
                                            <span>  Ẩn</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="table-actions">
                                            <a href="#"><i class="ik ik-eye"></i></a>
                                            <a href="#"><i class="ik ik-edit-2"></i></a>
                                            <a href="#"><i class="ik ik-trash-2"></i></a>
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
