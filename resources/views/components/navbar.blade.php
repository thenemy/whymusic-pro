<nav class="navbar navbar-expand-lg navbar-dark pb_navbar pb_scrolled-light bg-gradient-light" id="pb-navbar">
    <div class="container">
        <a class="navbar-brand image-logo" href="/"><img style="width: 200px"  src="{{$image_logo->image}}" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-navbar" aria-controls="probootstrap-navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span><i class="ion-navicon"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="probootstrap-navbar">
            <ul class="navbar-nav ml-auto">
                @foreach($navigation as $navitem)
                <li class="nav-item"><a class="nav-link" href="#section-{{$navitem->section}}">{{$navitem->nav}}</a></li>
                @endforeach
            </ul>
        </div>

        <div>
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0 ">
                <li class="navbar-nav ml-auto dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                        {{ Config::get('languages')[App::getLocale()] }}
                    </a>
                    <div class="dropdown-menu " aria-labelledby="">
                        @foreach (Config::get('languages') as $lang => $language)
                            @if ($lang != App::getLocale())
                                <a class="dropdown-item " href="{{ route('lang.switch', $lang) }}"> {{$language}}</a>
                            @endif
                        @endforeach
                    </div>
                </li>
            </div>
        </div>


    </div>
</nav>
<!-- END nav -->
