@extends('admin.layouts.main')
@section('style-css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('content')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-inbox bg-blue"></i>
                        <div class="d-inline">
                            <h5>Danh sách vai trò</h5>
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
                            <li class="breadcrumb-item active" aria-current="page">Vai trò</li>
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
                            <div class=""><h3>Vai trò</h3>
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal" data-whatever="@mdo">Tạo vai trò mới
                            </button>
                        </div>
                    </div>

                    <div class="card-body">
                        <table id="data_table" class="table">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th class="nosort">Tên vai trò</th>
                                <th>Ngày tạo</th>
                                <th class="nosort">&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($roles as $item)
                                <tr>
                                    <td>{{$loop->index + 1}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td>
                                        <div class="table-actions">
                                            <a href="#"><i class="ik ik-eye"></i></a>
                                            <a href="#"><i class="ik ik-edit-2"></i></a>
                                            <a href="#"><i class="ik ik-trash-2"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <span>no role</span>
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
                        <h5 class="modal-title" id="exampleModalLabel">Vai trò mới</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{route('admin.role.store')}}">
                            @csrf
                            <div class="form-group">
                                <label for="title" class="col-form-label">Tên vai trò:</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="guard_name" class="col-form-label">guard_name:</label>
                                <input type="text" class="form-control" id="guard_name" name="guard_name" required>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-form-label">Quyền:</label>
                                <select class="form-control permission-select" name="permission_id[]" multiple="multiple"  style="width: 100%; height: 100%">
                                    @foreach($permissions as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
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
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.permission-select').select2();
        });
    </script>
@endsection
