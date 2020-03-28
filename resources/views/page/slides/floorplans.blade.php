<div class="content">
    <h1 class="text-uppercase">floorplans</h1>

    <img class="sitemap" src="{{asset('/img/floorplans/03_sitemap.svg')}}" alt="03_sitemap.svg">

    <div class="d-flex justify-content-around flex-wrap pl-5 pr-5 mb-5">
        @foreach (config('data.plans') as $item => $value)
        <div class="ml-3 mr-3">
            <h3>UNIT {{$item}}</h3>

            <p>
                LEASABLE AREA<br />
                {{$value}}
                SQ FT.
            </p>
        </div>
        @endforeach
    </div>

    <div>
        <a class="reg-btn" href="#">download fact sheet</a>
    </div>

</div>