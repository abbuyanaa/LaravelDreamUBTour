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
                    <form action="{{ route('admin.posts.update', [$posts->id]) }}" method="post">
                        @csrf
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" value="{{ $posts->title }}" />
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" id="ckeditor" name="body" rows="6">{{ $posts->body }}</textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input type="number" name="price" class="form-control" value="{{ $posts->price }}" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Language</label>
                                        <select class="form-control" name="lang">
                                            @foreach ($lang as $lrow)
                                                <option
                                                @if ($posts->lang_id == $lrow->id)
                                                echo selected
                                                @endif value="{{ $lrow->id }}">{{ $lrow->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <select class="form-control" name="bairshil">
                                            @foreach ($bairshil as $brow)
												<option
												@if ($posts->bairshil_id == $brow->id)
													echo selected
												@endif
												value="{{ $brow->id }}">{{ $brow->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select class="form-control" name="cat">
                                            @foreach ($category as $crow)
												<option
												@if ($posts->cat_id == $crow->id)
													echo selected
												@endif
												value="{{ $crow->id }}">{{ $crow->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-10 col-md-2">
                                        <button type="submit" name="submit" class="btn green">Засах</button>
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