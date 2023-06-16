<div class="header" id="head">
    <div class="header-top">
              <div class="container">
            <div class="top-menu">

                <ul>
                    <li class=" dropdown" style="padding-bottom: 40px">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            {{ Config::get('languages')[App::getLocale()]['display'] }}
                            <i class="fas fa-{{ Config::get('languages')[App::getLocale()]['flag-icon'] }}"></i>
                        </a>
                        <div class="dropdown-menu" style="background:transparent"
                             aria-labelledby="navbarDropdownMenuLink">
                            @foreach (Config::get('languages') as $lang => $language)
                                @if ($lang != App::getLocale())
                                    <a href="{{ route('lang.switch', $lang) }}">{{ $language['display'] }}</a>
                                    <i class="fas fa-{{ $language['flag-icon'] }}  fa-lg" style="color: #941010;"></i>
                                @endif
                            @endforeach
                        </div>
                    </li>
                </ul>
                <ul >
                    <li><a href="{{ route('index') }}" class="active">{{ trans('mainpage.home') }}</a></li>
                    <li><a href="{{ route('characters') }}" class="scroll">{{ __('mainpage.characters') }}</a></li>
                    <li><a href="{{ route('starships') }}" class="scroll">{{ trans('mainpage.starships') }}</a></li>
                    <li><a href="{{ route('planets') }}" class="scroll">{{ trans('mainpage.planets') }}</a></li>
                    <li><a href="{{ route('kinds') }}" class="scroll">{{ trans('mainpage.kinds') }}</a></li>
                    <li><a href="{{ route('vehicles') }}" class="scroll">{{ trans('mainpage.vehicles') }}</a></li>
                    <li><a href="{{ route('films') }}" class="scroll">{{ trans('mainpage.films') }}</a></li>
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ trans('mainpage.login') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register-user') }}">{{ trans('mainpage.register') }}</a>
                        </li>
                    @else
                        <li class="nav-item"></li>
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ trans('mainpage.account_menu') }}
                        </button>
                        <div class="dropdown-menu "  style="background-color: transparent; width: 30px" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" style="background: #0a53be" href="{{ route('myAccount') }}">
                                <i class="fa-solid fa-user"></i> {{ trans('mainpage.my_account') }}
                            </a>
                            <a class="dropdown-item" style="background: #985f0d" href="{{ route('myEq') }}">
                                <i class="fa-solid fa-user"></i> {{ trans('mainpage.equipment') }}
                            </a>
                            <a class="dropdown-item" style="background: #052c65"href="{{ route('passport') }}">
                                <i class="fa-solid fa-file-pdf"></i> {{ trans('mainpage.passport') }}
                            </a>
                            <a class="dropdown-item" style="background: #664d03" href="{{ route('image.choose') }}">
                                <i class="fa-solid fa-images"></i> {{ trans('mainpage.add_photo') }}
                            </a>
                            <a class="dropdown-item" style="background: #4E4F63 "href="{{ route('image.cancel') }}">
                                <i class="fa-solid fa-folder-minus"></i> {{ trans('mainpage.cancel_photo') }}
                            </a>
                            <a class="dropdown-item" style="background: #941010" href="{{ route('signout') }}">
                                <i class="fa-solid fa-lock"></i> {{ trans('mainpage.logout') }}
                            </a>
                        </div>
                    @endguest
                </ul>
            </div>
        </div>
    </div>
</div>