@foreach ($data as $e)
<div class="col-sm-4">
    <div class="single-features-area mb-50">
        @if ($e->image != null)
            <img src="{{ asset('storage/app/agent/agent-'.$e->image) }}" alt="Team Member" style="height: 40% !important" class="agent">
        @else
            <img src="{{ asset('storage/app/NoImage'.'.png') }}" alt="Team Member" style="height: 40% !important" class="agent">
        @endif
        <!-- Price -->
        <div class="feature-content d-flex align-items-center justify-content-between">
            <div class="feature-title">
                @if ($e->co_name != null)
                    <h5>{{$e->co_name }}</h5>
                @else
                    <h5> - </h5>
                @endif
                <br>

                <p>
                {{ $e->co_address }}
                    <br>
                {{ $e->co_phone }}
                </p>
            </div>
            <div class="feature-favourite">
                {{-- <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a> --}}
            </div>
        </div>
    </div>
</div>
@endforeach