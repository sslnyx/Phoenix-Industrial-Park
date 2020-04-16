<nav class="p-3">
    <div class="nav-wrapper d-flex justify-content-between align-items-center content flex-wrap">
        <div class="site-logo mr-3 d-none d-md-block">
            <img src="{{asset('/img/icon/00_logo.svg')}}" alt="logo">
        </div>
        <div class="site-name">
            <h1 class="text-left">{{ config('app.name') }}</h1>

        </div>
        <ul class="justify-content-end d-none d-lg-flex">
            @foreach (config('data.slides') as $slide => $value)

            <li>
                <a href="#">
                    <h3>
                        {{ $value['name'] }}</h3>
                </a>
            </li>
            @endforeach
        </ul>

        <div class="hamburger d-block d-md-none">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
    </div>
</nav>