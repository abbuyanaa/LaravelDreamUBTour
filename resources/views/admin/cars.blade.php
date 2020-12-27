@extends('admin.layouts.master')

@section('title', 'Cars')

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
                            <a href="post-add.php" class="btn btn-sm default">Add</a>
                        </div>
                        <div class="tools"> </div>
                    </div>
                    <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover" id="sample_2">
                            <thead>
                                <tr>
                                    <th> Rendering engine </th>
                                    <th> Browser </th>
                                    <th> Platform(s) </th>
                                    <th> Engine version </th>
                                    <th> CSS grade </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> Trident </td>
                                    <td> Internet Explorer 4.0 </td>
                                    <td> Win 95+ </td>
                                    <td> 4 </td>
                                    <td> X </td>
                                </tr>
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