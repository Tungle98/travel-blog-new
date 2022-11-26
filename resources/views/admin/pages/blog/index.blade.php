@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">  <h4 class="card-title">Danh sách bài viết</h4></div>
                            <div class="col-md-6 " style="text-align: right">    <a href="{{route('admin.blog.create')}}" type="button" class="btn btn-primary" >Tạo bài viết mới
                                </a></div>
                        </div>
                        <table id="data_table" class="table">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th class="nosort">Hình ảnh</th>
                                <th>Tiêu đề</th>
                                <th>Thể loại</th>
                                <th>Ngày tạo</th>
                                <th class="nosort">&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($blogs as $blog)
                            <tr>
                                <td>{{$loop->index + 1}}</td>
                                <td><img src="{{asset($blog->image)}}" class="table-user-thumb" alt=""></td>
                                <td>{{$blog->title}}</td>
                                <td>{{$blog->category_id}}</td>
                                <td>{{$blog->created_at}}</td>
                                <td>
                                    <div class="table-actions">
                                        <a href="#"><i class="mdi mdi-border-color" style="font-size: 20px"></i></a>
                                        <a href="{{route('admin.blog.delete',$blog->id)}}"><i class="mdi mdi-delete-forever" style="font-size: 20px; color: red"></i></a>
                                    </div>
                                </td>
                            </tr>
                            @empty
                                <span>No blogs</span>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
