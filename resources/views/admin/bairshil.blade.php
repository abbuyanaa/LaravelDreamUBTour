@extends('admin.layouts.master')

@section('title', 'Address')

@section('content')
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">

        <!-- BEGIN PAGE HEAD-->
        <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>@yield('title') <small>List</small></h1>
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
            <div class="col-md-6">
                
                <form action="{{ route('admin.bairshil.store') }}" method="POST" >
                    @csrf
                    <div class="portlet light portlet-fit portlet-form bordered">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-settings font-dark"></i>
                                <span class="caption-subject font-dark sbold uppercase">@yield('title')</span>
                            </div>
                            <div class="actions"></div>
                        </div>
                        <div class="portlet-body">
                            <div class="form-body">
                                <div class="form-group">
                                    <label class="control-label">Address</label>
                                    <input type="text" name="bairshil" value="" autofocus placeholder="Ulaanbaatar" class="form-control" />
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="col-md-offset-10 col-md-2">
                                    <button type="submit" name="submit" class="btn green">Add</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
                    
            </div>
            <div class="col-md-6">
                <div class="portlet box green">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="fa fa-setting"></i>@yield('title')
                        </div>
                        <div class="tools">
                        </div>
                    </div>
                    <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Address</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($bairshil as $row)
                                    <tr>
                                        <th>{{ $i++ }}</th>
                                        <th>{{ Str::title($row->name) }}</th>
                                        <td width="40%" align="center">
                                            <a href="{{ route('admin.bairshil.edit', [$row->id]) }}" class="btn btn-sm yellow">Edit</a>
                                            <a href="{{ route('admin.bairshil.destroy', [$row->id]) }}" class="btn btn-sm red" onclick="return confirm('Are you sure want to Delete?')">delete</a>
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