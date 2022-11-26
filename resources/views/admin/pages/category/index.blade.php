@extends('admin.layouts.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">  <h4 class="card-title">Danh sách danh mục</h4></div>
                        <div class="col-md-6" style="text-align: right">  <a type="button" class="btn btn-primary" href="{{route('admin.category.create')}}">Tạo danh mục mới
                            </a></div>
                    </div>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th class="nosort">Hình ảnh</th>
                                <th>Tiêu đề</th>
                                <th>Mô tả</th>
                                <th>Meta seo</th>
                                <th>Ngày tạo</th>
                                <th class="nosort">&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($categories as $item)
                                <tr>
                                    <td>{{$loop->index + 1}}</td>
                                    <td><img src="{{asset($item->image)}}" class="table-user-thumb" alt=""></td>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->description}}</td>
                                    <td>{{$item->meta_desc}}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td>
                                        <div class="table-actions">
                                            <div class="table-actions">
                                                <a href="#"><i class="mdi mdi-border-color" style="font-size: 20px"></i></a>
                                                <a href="{{route('admin.category.delete',$item->id)}}"><i class="mdi mdi-delete-forever" style="font-size: 20px; color: red"></i></a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <span>No category</span>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
