@extends('admin.layouts.main')
@section('content')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-inbox bg-blue"></i>
                        <div class="d-inline">
                            <h5>Danh sách tài khoản</h5>
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
                            <li class="breadcrumb-item active" aria-current="page">Bài viết</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>Bài viết</h3></div>
                    <div class="card-body">
                        <table id="data_table" class="table">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th class="nosort">Avatar</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th class="nosort">&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>001</td>
                                <td><img src="../img/users/1.jpg" class="table-user-thumb" alt=""></td>
                                <td>Erich Heaney</td>
                                <td>erich@example.com</td>
                                <td>
                                    <div class="table-actions">
                                        <a href="#"><i class="ik ik-eye"></i></a>
                                        <a href="#"><i class="ik ik-edit-2"></i></a>
                                        <a href="#"><i class="ik ik-trash-2"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>002</td>
                                <td><img src="../img/users/2.jpg" class="table-user-thumb" alt=""></td>
                                <td>Abraham Douglas</td>
                                <td>jgraham@example.com</td>
                                <td>
                                    <div class="table-actions">
                                        <a href="#"><i class="ik ik-eye"></i></a>
                                        <a href="#"><i class="ik ik-edit-2"></i></a>
                                        <a href="#"><i class="ik ik-trash-2"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>003</td>
                                <td><img src="../img/users/3.jpg" class="table-user-thumb" alt=""></td>
                                <td>Roderick Simonis</td>
                                <td>grant.simonis@example.com</td>
                                <td>
                                    <div class="table-actions">
                                        <a href="#"><i class="ik ik-eye"></i></a>
                                        <a href="#"><i class="ik ik-edit-2"></i></a>
                                        <a href="#"><i class="ik ik-trash-2"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>004</td>
                                <td><img src="../img/users/4.jpg" class="table-user-thumb" alt=""></td>
                                <td>Christopher Henry</td>
                                <td>henry.chris@example.com</td>
                                <td>
                                    <div class="table-actions">
                                        <a href="#"><i class="ik ik-eye"></i></a>
                                        <a href="#"><i class="ik ik-edit-2"></i></a>
                                        <a href="#"><i class="ik ik-trash-2"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>005</td>
                                <td><img src="../img/users/5.jpg" class="table-user-thumb" alt=""></td>
                                <td>Sonia Wilkinson</td>
                                <td>boyle.aglea@example.com</td>
                                <td>
                                    <div class="table-actions">
                                        <a href="#"><i class="ik ik-eye"></i></a>
                                        <a href="#"><i class="ik ik-edit-2"></i></a>
                                        <a href="#"><i class="ik ik-trash-2"></i></a>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
