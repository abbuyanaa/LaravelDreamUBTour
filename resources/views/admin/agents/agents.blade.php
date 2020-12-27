@extends('admin.layouts.master')

@section('title', 'Agents')

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
                <div class="portlet light portlet-fit bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class=" icon-layers font-green"></i>
                            <span class="caption-subject font-green bold uppercase">Agents</span>
                            <a href="{{ route('admin.agents.create') }}" class="btn btn-sm default">Add</a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        
                        <div class="portfolio-content portfolio-1">

                            <div id="js-grid-juicy-projects" class="cbp">
                                <div class="cbp-item graphic">
                                    <div class="cbp-caption">
                                        <div class="cbp-caption-defaultWrap">
                                            <img src="../assets/global/img/portfolio/600x600/013.jpg" alt="">
                                        </div>
                                        <div class="cbp-caption-activeWrap">
                                            <div class="cbp-l-caption-alignCenter">
                                                <div class="cbp-l-caption-body">
                                                    <a href="../assets/global/plugins/cubeportfolio/ajax/project1.html" class="cbp-singlePage cbp-l-caption-buttonLeft btn red uppercase btn red uppercase" rel="nofollow">more info</a>
                                                    <a href="../assets/global/img/portfolio/1200x900/57.jpg" class="cbp-lightbox cbp-l-caption-buttonRight btn red uppercase btn red uppercase" data-title="Dashboard<br>by Paul Flavius Nechita">view larger</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cbp-l-grid-projects-title uppercase text-center uppercase text-center">Dashboard</div>
                                    <div class="cbp-l-grid-projects-desc uppercase text-center uppercase text-center">Web Design / Graphic</div>
                                </div>
                            </div>

                                <div class="search-pagination" style="text-align: center;">
                                    <ul class="pagination">
                                        <li class="page-active">
                                            <a href="javascriptt:;"> 1 </a>
                                        </li>
                                        <li>
                                            <a href="javascriptt:;"> 2 </a>
                                        </li>
                                        <li>
                                            <a href="javascriptt:;"> 3 </a>
                                        </li>
                                        <li>
                                            <a href="javascriptt:;"> 4 </a>
                                        </li>
                                    </ul>
                                </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- END PAGE BASE CONTENT -->
    </div>
    <!-- END CONTENT BODY -->
@endsection