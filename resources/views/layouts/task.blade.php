<!-- Widgets -->
<div class="row clearfix">
    <a @if (Auth::user()->role_id == 1 or Auth::user()->role_id == 2 or Auth::user()->role_id == 3)
        href="{{ url('booking/booking_all') }}" @else href="{{ url('agent/master_agent_agent') }}"
    @endif  style="cursor: pointer;">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" >
            <div class="info-box bg-light-blue hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">person</i>
                </div>
                <div class="content">
                    <div class="text">AGENT</div>
                    <div class="number count-to" data-from="0" data-to="{{ count(agent()) }}" data-speed="15" data-fresh-interval="20">{{ count(agent()) }}</div>
                </div>
            </div>
        </div>
    </a>
    <a @if (Auth::user()->role_id == 1 or Auth::user()->role_id == 2 or Auth::user()->role_id == 3)
        href="{{ url('booking/booking_all') }}" @else href="{{ url('booking/booking_list') }}"
    @endif  style="cursor: pointer;">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-cyan hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">book</i>
                </div>
                <div class="content">
                    <div class="text">BOOKING LIST</div>
                    <div class="number count-to" data-from="0" data-to="{{ count(booking()) }}" data-speed="1000" data-fresh-interval="20">{{ count(booking()) }}</div>
                </div>
            </div>
        </div>
    </a>
    @if (Auth::user()->role_id == 1 or Auth::user()->role_id == 2 or Auth::user()->role_id == 3)
        <a href="{{ url('master/master_intinerary') }}" style="cursor: pointer;">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-blue hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">local_play</i>
                    </div>
                    <div class="content">
                        <div class="text">ITINERARY</div>
                        <div class="number count-to" data-from="0" data-to="{{ count(itinerary()) }}" data-speed="1000" data-fresh-interval="20">{{ count(itinerary()) }}</div>
                    </div>
                </div>
            </div>
        </a>
    @endif
</div>
<!-- #END# Widgets -->