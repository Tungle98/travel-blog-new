@extends('admin.layouts.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">  <h4 class="card-title">Danh sách quyền</h4></div>
                        <div class="col-md-6 text-right" style="text-align: right">  <button type="button" class="btn btn-primary" data-toggle="modal"
                                                                   data-target="#exampleModal" data-whatever="@mdo">Tạo quyền moi
                            </button></div>
                    </div>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th class="nosort">Tên quyền</th>
                                <th>Ngày tạo</th>
                                <th class="nosort">&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($permissions as $item)
                                <tr>
                                    <td>{{$loop->index + 1}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td>
                                        <div class="table-actions">
                                            <a href="#"><i class="mdi mdi-border-color" style="font-size: 20px"></i></a>
                                            <a href="{{route('admin.permission.delete',$item->id)}}"><i class="mdi mdi-delete-forever" style="font-size: 20px; color: red"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <span>no permission</span>
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
                        <h5 class="modal-title" id="exampleModalLabel">Quyền mới</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{route('admin.permission.store')}}">
                            @csrf
                            <div class="form-group">
                                <label for="title" class="col-form-label">Tên quyền:</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="guard_name" class="col-form-label">guard_name:</label>
                                <input type="text" class="form-control" id="guard_name" name="guard_name" required>
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
