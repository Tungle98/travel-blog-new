@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-inbox bg-blue"></i>
                        <div class="d-inline">
                            <h5>Danh sách thể loại </h5>
                            {{--                            <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>--}}
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
                            <li class="breadcrumb-item active" aria-current="page">Category</li>
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
                            <div class=""><h3>Category</h3>
                            </div>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="{{route('admin.category.create')}}" type="button" class="btn btn-primary" >Tạo thể loại mới
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="data_table" class="table">
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
                                        <a href="#"><i class="ik ik-eye"></i></a>
                                        <a href="#"><i class="ik ik-edit-2"></i></a>
                                        <a href="#"><i class="ik ik-trash-2"></i></a>
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