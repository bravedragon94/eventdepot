@extends('layouts.app')

@section('page-content')
    <!-- eCommerce Events Header -->
<div class="content-header">
    <ul class="nav-horizontal text-center">
        <li>
            <a href="{{url('/home')}}"><i class="fa fa-bar-chart"></i> Dashboard</a>
        </li>
        <li class="active">
            <a href="{{url('backend/all_events')}}"><i class="gi gi-shop_window"></i> All Events</a>
        </li>
        <li>
            <a href="#"><i class="gi gi-shopping_cart"></i> Event View</a>
        </li>
        <li>
            <a href="#"><i class="gi gi-shopping_bag"></i> XXXXX</a>
        </li>
        <li>
            <a href="#"><i class="gi gi-pencil"></i> YYYYY</a>
        </li>
        <li>
            <a href="#"><i class="gi gi-user"></i> ZZZZZ</a>
        </li>
    </ul>
</div>
<!-- END eCommerce Events Header -->

<!-- Quick Stats -->
<div class="row text-center">
    <div class="col-sm-6 col-lg-3">
        <a href="javascript:void(0)" class="widget widget-hover-effect2">
            <div class="widget-extra themed-background">
                <h4 class="widget-content-light"><strong>Pending</strong> Events</h4>
            </div>
            <div class="widget-extra-full"><span class="h2 animation-expandOpen">3</span></div>
        </a>
    </div>
    <div class="col-sm-6 col-lg-3">
        <a href="javascript:void(0)" class="widget widget-hover-effect2">
            <div class="widget-extra themed-background-dark">
                <h4 class="widget-content-light"><strong>Events</strong> Today</h4>
            </div>
            <div class="widget-extra-full"><span class="h2 themed-color-dark animation-expandOpen">120</span></div>
        </a>
    </div>
    <div class="col-sm-6 col-lg-3">
        <a href="javascript:void(0)" class="widget widget-hover-effect2">
            <div class="widget-extra themed-background-dark">
                <h4 class="widget-content-light"><strong>Events</strong> This Month</h4>
            </div>
            <div class="widget-extra-full"><span class="h2 themed-color-dark animation-expandOpen">3.200</span></div>
        </a>
    </div>
    <div class="col-sm-6 col-lg-3">
        <a href="javascript:void(0)" class="widget widget-hover-effect2">
            <div class="widget-extra themed-background-dark">
                <h4 class="widget-content-light"><strong>Events</strong> Last Month</h4>
            </div>
            <div class="widget-extra-full"><span class="h2 themed-color-dark animation-expandOpen">2.850</span></div>
        </a>
    </div>
</div>
<!-- END Quick Stats -->

<!-- All Events Block -->
<div class="block full">
    <!-- All Events Title -->
    <div class="block-title">
        <div class="block-options pull-right">
            <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
        </div>
        <h2><strong>All</strong> Events</h2>
    </div>
    <!-- END All Events Title -->

    <!-- All Events Content -->
    <table id="events" class="table table-bordered table-striped table-vcenter">
        <thead>
        <tr>
            <th class="text-center" style="width: 4%;">ID</th>
            <th class="visible-lg text-center" style="width: 9%;">Event Title</th>
            <th class="text-center visible-lg" style="width: 11%;">Venue or Address</th>
            <th class="hidden-xs text-center" style="width: 8%;">Start Time</th>
            <th class="text-center hidden-xs" style="width: 8%;">End Time</th>
            <th class="text-center" style="width: auto;">Comment</th>
            <th class="hidden-xs text-center" style="width: 8%;">Category</th>
            <th class="hidden-xs text-center" style="width: 10%;">Submitted</th>
            <th class="text-center" style="width: 7%;">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($events as $event)
        <tr>
            <td class="text-center"><a href="#"><strong>{{$event->id}}</strong></a></td>
            <td class="visible-lg text-center"><a href="javascript:void(0)">{{$event->title}}</a></td>
            <td class="visible-lg text-center"><a href="javascript:void(0)">{{$event->venue}}</a></td>
            <td class="hidden-xs text-center">{{$event->s_time}}</td>
            <td class="hidden-xs text-center">{{$event->e_time}}</td>
            <td class="text-center">{{$event->comment}}</td>
            <td class="hidden-xs text-center">{{$event->category}}</td>
            <td class="hidden-xs text-center">{{$event->created_at}}</td>
            <td class="text-center">
                <div class="btn-group btn-group-xs">
                    <a href="#" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                </div>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <!-- END All Events Content -->
</div>
@endsection
@section('custom_script')
    <script src="{{asset('backend/js/pages/allEvents.js')}}"></script>
    <script>$(function(){ AllEvents.init(); });</script>

    <!-- END All Events Block -->
@endsection
