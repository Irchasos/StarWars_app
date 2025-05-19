<!-- Language  Navbar position items  -->
<a class="dropdown-toggle" style="float: right;padding-right: 100px; padding-top: 35px; text-decoration: none; color:#f0ad4e" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
    aria-haspopup="true" aria-expanded="false">
    {{ Config::get('languages')[App::getLocale()]['display'] }}
    <i class="fas fa-{{ Config::get('languages')[App::getLocale()]['flag-icon'] }}"></i>
</a>
<div class="dropdown-menu" style="background:transparent" aria-labelledby="navbarDropdownMenuLink">
    @foreach (Config::get('languages') as $lang => $language)
    @if ($lang != App::getLocale())
    <a style=" text-decoration: none; color:#f0ad4e" href="{{ route('lang.switch', $lang) }}">{{ $language['display'] }}</a>
    <i class="fas fa-{{ $language['flag-icon'] }} fa-lg" style="color: #941010;"></i>
    @endif
    @endforeach

</div>
<!-- login register position  -->
<nav>
    <ul>

        @guest

        <li class="nav-item">
            <a href="{{ route('login') }}">{{ trans('mainpage.login') }}</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('register-user') }}">{{ trans('mainpage.register') }}</a>
        </li>

        @endguest
    </ul>
</nav>

<!-- user option navbar posiition position  -->
<nav>
    <ul>
        @auth

        <li><a class="dropdown-item" href="{{ route('myAccount') }}"> <i class="fa-solid fa-user"></i>
                {{ trans('mainpage.my_account') }}</a>
        </li>
        <li><a class="dropdown-item" href="{{ route('myEq') }}"> <i class="fa-solid fa-user"></i>
                {{ trans('mainpage.equipment') }}</a>
        </li>
        <li><a class="dropdown-item" href="{{ route('passport') }}"><i class="fa-solid fa-file-pdf"></i>
                {{ trans('mainpage.passport') }}</a>
        </li>
        <li><a class="dropdown-item" href="{{ route('image.choose') }}"><i class="fa-solid fa-images"></i>
                {{ trans('mainpage.add_photo') }}</a>
        </li>
        <li><a class="dropdown-item" href="{{ route('image.cancel') }}"> <i class="fa-solid fa-folder-minus"></i>
                {{ trans('mainpage.cancel_photo') }} </a>
        </li>
        <li><a class="dropdown-item" href="{{ route('signout') }}"> <i class="fa-solid fa-lock"></i>
                {{ trans('mainpage.logout') }} </a>
        </li>
        </li>
        @endauth
    </ul>


</nav>

<!-- main option navbar posiition position  -->
<div class="header" id="head">
    <nav>
        <ul>
            <li><a href="{{ route('index') }}" class="active">{{ trans('mainpage.home') }}</a></li>
            <li><a href="{{ route('characters') }}" class="scroll">{{ __('mainpage.characters') }}</a></li>
            <li><a href="{{ route('starships') }}" class="scroll">{{ trans('mainpage.starships') }}</a></li>
            <li><a href="{{ route('planets') }}" class="scroll">{{ trans('mainpage.planets') }}</a></li>
            <li><a href="{{ route('kinds') }}" class="scroll">{{ trans('mainpage.kinds') }}</a></li>
            <li><a href="{{ route('vehicles') }}" class="scroll">{{ trans('mainpage.vehicles') }}</a></li>
            <li><a href="{{ route('films') }}" class="scroll">{{ trans('mainpage.films') }}</a></li>
            <li><a href="{{ route('games') }}" class="scroll">{{ trans('mainpage.games') }}</a></li>
        </ul>
    </nav>

</div>
</div>