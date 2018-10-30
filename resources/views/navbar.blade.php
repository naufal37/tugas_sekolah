
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
        <a class="navbar-brand" href="{{url('/')}}">Hayu Dagang</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample09">
            <ul class="navbar-nav mr-auto">
                @if (!empty($halaman) && $halaman=='produk')
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('produk')}}"> Produk <span class="sr-only"></span></a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('produk')}}"> Produk <span class="sr-only"></span></a>
                    </li>
                @endif

                @if (!empty($halaman) && $halaman=='about')
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('about')}}">About</a>
                    </li>
                @else
                    <li class="nav-item">
                         <a class="nav-link" href="{{url('about')}}">About</a>
                    </li>
                @endif

                {{--@if (!empty($halaman) && $halaman=='homepage')--}}
                    {{--<li class="nav-item active">--}}
                        {{--<a class="nav-link" href="{{url('homepage')}}">Homepage</a>--}}
                    {{--</li>--}}
                {{--@else--}}
                     {{--<li class="nav-item">--}}
                        {{--<a class="nav-link" href="{{url('homepage')}}">Homepage</a>--}}
                     {{--</li>--}}
                {{--@endif--}}

                {{--<li class="nav-item dropdown">--}}
                    {{--<a class="nav-link dropdown-toggle" href="#" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lain Lain</a>--}}
                    {{--<div class="dropdown-menu" aria-labelledby="dropdown09">--}}
                        {{--<a class="dropdown-item" href="#">Action</a>--}}
                        {{--<a class="dropdown-item" href="#">Another action</a>--}}
                        {{--<a class="dropdown-item" href="#">Something else here</a>--}}
                    {{--</div>--}}
                {{--</li>--}}

            </ul>
        </div>
    </nav>
</div>