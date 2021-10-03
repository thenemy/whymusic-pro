<nav class="navbar navbar-expand-lg navbar-dark pb_navbar pb_scrolled-light bg-gradient-light" id="pb-navbar">

    <ul class="container">

        <a class="navbar-brand image-logo" href="/"><img style="width: 19rem" src="{{$image_logo->image}}" id="image-logo" alt=""></a>


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-navbar"
                aria-controls="probootstrap-navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span><i class="ion-navicon"></i></span>
        </button>

        <div class="collapse navbar-collapse" id="probootstrap-navbar">
            <ul class="navbar-nav ml-auto">
                @foreach($navigation as $navitem)
                    <li class="nav-item"><a class="nav-link " href="#section-{{$navitem->section}}">{{$navitem->nav}}</a>
                    </li>

                @endforeach
                <li class="nav-item">
                    <a class="btn dropdown-toggle text-white nav-link align-content-start left" href="#"
                       style="line-height: inherit; text-align: left !important;"
                       aria-haspopup="false" role="button"
                       id="dropdownMenuLink" data-toggle="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Config::get('languages')[App::getLocale()] }}
                    </a>
                    <div class="dropdown mw-100">

                        <ul class="dropdown-menu list-lang" aria-labelledby="dropdownMenuLink">
                            <li class="">
                                @foreach (Config::get('languages') as $lang => $language)
                                    @if ($lang != App::getLocale())
                                        <a class="dropdown-item" style="color: #6c757d !important; "
                                           href="{{ route('lang.switch', $lang) }}"> {{$language}}</a>
                                    @endif
                                @endforeach
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>

        </div>
    </ul>
    <div>

    </div>
</nav>
<script>
    window.onscroll = function() {
        growShrinkLogo()
    };

    function ShrinkLogo() {
        var Logo = document.getElementById("image-logo")
        if (document.body.scrollTop > 5 || document.documentElement.scrollTop > 5) {
            Logo.style.width = '15rem';
            Logo.style.height = 'auto';
        } else {
            Logo.style.width = '19rem';
        }
    }
</script>

