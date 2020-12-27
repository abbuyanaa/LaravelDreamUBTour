@extends('admin.layouts.master')

@section('title', 'Post Add')

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
                <!-- BEGIN VALIDATION STATES-->
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-settings font-dark"></i>
                            <span class="caption-subject font-dark sbold uppercase">@yield('title')</span>
                        </div>
                        <div class="actions"></div>
                    </div>
                    <div class="portlet-body">
                    <form action="{{ route('admin.posts.store') }}" method="post">
                        @csrf
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" id="ckeditor" name="body" rows="6"></textarea>
                            </div>

                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-10 col-md-2">
                                        <button type="submit" name="submit" class="btn green">Нэмэх</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- END VALIDATION STATES-->
                </div>
            </div>
        </div>
        <!-- END PAGE BASE CONTENT -->
    </div>
    <!-- END CONTENT BODY -->

@endsection