@extends('admin.layouts.master')

@section('title', 'Socials')

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
                <div class="portlet light portlet-fit portlet-form bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-settings font-dark"></i>
                            <span class="caption-subject font-dark sbold uppercase">@yield('title')</span>
                        </div>
                        <div class="actions"></div>
                    </div>
                    <div class="portlet-body">
                        <!-- BEGIN FORM-->
                        <form action="" class="form-horizontal" method="POST">
                            @csrf
                            <div class="form-body">

                                <div class="form-group">
                                    <label class="control-label col-md-2">Facebook url:
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-10">
                                        <input type="text" name="facebook" class="form-control" value="{{ $social->fb_url }}" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-2">Twitter url:
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-10">
                                        <input type="text" name="twitter" class="form-control" value="{{ $social->twitter_url }}" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-2">Instagram url:
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-10">
                                        <input type="text" name="instagram" class="form-control" value="{{ $social->instagram_url }}" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-2">Youtube url:
                                        <span class="required"> * </span>
                                    </label>
                                    <div class="col-md-10">
                                        <input type="text" name="youtube" class="form-control" value="{{ $social->youtube_url }}" />
                                    </div>
                                </div>

                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-11 col-md-1">
                                        <button type="submit" name="submit" class="btn green">Edit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- END FORM-->
                    </div>
                    <!-- END VALIDATION STATES-->
                </div>
            </div>
        </div>
        <!-- END PAGE BASE CONTENT -->
    </div>
    <!-- END CONTENT BODY -->
@endsection