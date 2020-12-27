@extends('admin.layouts.master')

@section('title', 'News')

@section('content')
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">

        <!-- BEGIN PAGE HEAD-->
        <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>Admin Dashboard
                    <small>statistics, charts, recent events and reports</small>
                </h1>
            </div>
            <!-- END PAGE TITLE -->
        </div>
        <!-- END PAGE HEAD-->

        <!-- BEGIN PAGE BREADCRUMB -->
        <ul class="page-breadcrumb breadcrumb">
            <li>
                <a href="{{ route('admin.index') }}">Home</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span class="active">@yield('title')</span>
            </li>
        </ul>
        <!-- END PAGE BREADCRUMB -->

        <!-- BEGIN PAGE BASE CONTENT -->
        <div class="row">
            <div class="col-md-12">
                <div class="portlet box green">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-globe"></i>Buttons
                            <a href="{{ route('admin.news.create') }}" class="btn btn-sm default">Add</a>
                        </div>
                        <div class="tools"> </div>
                    </div>
                    <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover" id="sample_2">
                            <thead>
                                <tr>
                                    <th>Гарчиг</th>
                                    <th>Мэдээлэл</th>
                                    <th>Үйлдэл</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($news as $row)
                                    <tr>
                                        <td>{{ $row->title }}</td>
                                        <td>{{ strip_tags(htmlspecialchars_decode($row->body)) }}</td>
                                        <td width="40%" align="center">
                                            <a href="{{ route('admin.news.edit', [$row->id]) }}" class="btn btn-sm yellow">Засах</a>
                                            <a href="{{ route('admin.news.destroy', [$row->id]) }}" class="btn btn-sm red" onclick="return confirm('Та устгахдаа итгэлтэй байна уу?')">Устгах</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGE BASE CONTENT -->
    </div>
    <!-- END CONTENT BODY -->
@endsection