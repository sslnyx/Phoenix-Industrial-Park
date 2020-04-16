<div class="content h-100 d-flex flex-column justify-content-center">

    <h1 class="text-center mb-3 mb-md-5 mt-md-0 text-uppercase text-blue">building hightlights</h1>

    <div class="icon-container d-flex flex-wrap justify-content-center text-center">
        @foreach (config('data.features') as $item)
        <div class="icon-wrapper m-3 m-md-4">
            <img class="featrue-icon" src="{{asset('/img/highlight/02_icon-0'.$loop->iteration.'.svg')}}"
                alt="featrue-icon">
            <h5>
                {!! $item !!}
            </h5>
        </div>
        @endforeach
    </div>
</div>