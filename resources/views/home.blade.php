@extends('main')

@section('content')
        @include('layouts.task')
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>
            <!-- #END# Widgets -->
            <!-- CPU Usage -->

            <!-- #END# CPU Usage -->
            <div class="row clearfix">
                <!-- Visitors -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="body bg-pink">
                            <div class="sparkline" data-type="line" data-spot-Radius="4" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#fff"
                                 data-min-Spot-Color="rgb(255,255,255)" data-max-Spot-Color="rgb(255,255,255)" data-spot-Color="rgb(255,255,255)"
                                 data-offset="90" data-width="100%" data-height="92px" data-line-Width="2" data-line-Color="rgba(255,255,255,0.7)"
                                 data-fill-Color="rgba(0, 188, 212, 0)">
                                Booking Report
                            </div>
                            <ul class="dashboard-stat-list">
                                <li>
                                    TODAY
                                    <span class="pull-right"><b> {{ $today }}</b> <small>Booking</small></span>
                                </li>
                                <li>
                                    YESTERDAY
                                    <span class="pull-right"><b>{{ $yesterday }}</b> <small>Booking</small></span>
                                </li>
                                <li>
                                    LAST WEEK
                                    <span class="pull-right"><b>{{ $weekAgo }}</b> <small>Booking</small></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="body bg-cyan">
                            <div class="sparkline" data-type="line" data-spot-Radius="4" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#fff"
                                 data-min-Spot-Color="rgb(255,255,255)" data-max-Spot-Color="rgb(255,255,255)" data-spot-Color="rgb(255,255,255)"
                                 data-offset="90" data-width="100%" data-height="92px" data-line-Width="2" data-line-Color="rgba(255,255,255,0.7)"
                                 data-fill-Color="rgba(0, 188, 212, 0)">
                                Best Seller
                            </div>
                            <ul class="dashboard-stat-list">
                                @foreach ($bestTravel as $b)
                                    <li>
                                       {{  $b->detail_itin->intinerary->mi_highlight }}
                                        <span class="pull-right"><b>{{ $b->best }}</b> <small>Booking</small></span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="body bg-warning">
                            <div class="sparkline" data-type="line" data-spot-Radius="4" data-highlight-Spot-Color="rgb(233, 30, 99)" data-highlight-Line-Color="#fff"
                                 data-min-Spot-Color="rgb(255,255,255)" data-max-Spot-Color="rgb(255,255,255)" data-spot-Color="rgb(255,255,255)"
                                 data-offset="90" data-width="100%" data-height="92px" data-line-Width="2" data-line-Color="rgba(255,255,255,0.7)"
                                 data-fill-Color="rgba(0, 188, 212, 0)">
                                Best Agent
                            </div>
                            <ul class="dashboard-stat-list">
                                @foreach ($bestAgen as $b)
                                    <li>
                                       {{  $b->user->name }}
                                        <span class="pull-right"><b>{{ $b->best }}</b> <small>Booking</small></span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #END# Answered Tickets -->
            </div>
     @endsection

  
