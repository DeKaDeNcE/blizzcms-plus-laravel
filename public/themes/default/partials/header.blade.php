<div class="uk-navbar-container uk-navbar-transparent">
  <div class="uk-container">
    <nav class="uk-navbar" uk-navbar>
      <div class="uk-navbar-left">
        <a href="{{ route('home', app()->getLocale()) }}" class="uk-navbar-item uk-logo uk-margin-small-right">@get('title')</a>
      </div>
      <div class="uk-navbar-right">
        <ul class="uk-navbar-nav">
        @guest
          <li class="uk-visible@m"><a href="{{ route('register', app()->getLocale()) }}"><i class="fas fa-user-plus"></i>&nbsp;@lang('menu.Register')</a></li>
          <li class="uk-visible@m"><a href="{{ route('login', app()->getLocale()) }}"><i class="fas fa-sign-in-alt"></i>&nbsp;@lang('menu.Login')</a></li>
        @else
          <li class="uk-visible@m">
                <a href="#">
                  <!-- <img class="uk-border-circle" src=""" width="30" height="30" alt="Avatar" /> -->
                  <span class="uk-text-middle uk-text-bold">&nbsp;Bienvenido, {{ Auth::user()->name }}&nbsp;<i class="fas fa-caret-down"></i></span>
                </a>
                <div class="uk-navbar-dropdown" uk-dropdown="boundary: .uk-container">
                  <ul class="uk-nav uk-navbar-dropdown-nav">
                    <li><a href="{{ route('ucp/settings', app()->getLocale()) }}"><i class="far fa-user-circle"></i> @lang('menu.ucp_settings')</a></li>
                    <li><a href="{{ route('home', app()->getLocale()) }}"><i class="far fa-user-circle"></i> @lang('menu.ucp_gaccounts')</a></li>
                    <li><a href="{{ route('home', app()->getLocale()) }}"><i class="far fa-user-circle"></i> @lang('menu.ucp_new_acc')</a></li>
                    <li><a href="{{ route('home', app()->getLocale()) }}"><i class="fas fa-sign-out-alt"></i> @lang('menu.ucp_logout')</a></li>
                     </ul>
                </div>
          </li>
        @endguest
        </ul>
      </div>
    </nav>
  </div>
</div>
    <div class="uk-navbar-container">
      <div class="uk-container">
        <nav class="uk-navbar" uk-navbar="mode: click">
          <div class="uk-navbar-left">
            <ul class="uk-navbar-nav">
                <li class="uk-visible@m">
                <a href="#">
                  <i class="fas fa-bars"></i>&nbsp;@lang('menu.More')&nbsp;<i class="fas fa-caret-down"></i>
                </a>
                <div class="uk-navbar-dropdown">
                  <ul class="uk-nav uk-navbar-dropdown-nav">
                    <li>
                        <a href="{{ route('home', app()->getLocale()) }}">
                            <i class="fas fa-scroll"></i>&nbsp;@lang('menu.Changelogs')                       
                        </a>
                    </li>
                    
                    <li>
                        <a href="{{ route('home', app()->getLocale()) }}">
                            <i class="fas fa-fist-raised"></i>&nbsp;@lang('menu.pvp')                      
                        </a>
                    </li>
                </ul>
                </div>
              </li>
                <li class="uk-visible@m">
                    <a href="{{ route('home', app()->getLocale()) }}">
                        <i class="fas fa-comments"></i>&nbsp;@lang('menu.Forums')              
                    </a>
                </li>
                
                <li class="uk-visible@m">
                    <a href="{{ route('home', app()->getLocale()) }}">
                        <i class="fas fa-store"></i>&nbsp;@lang('menu.Store')
                    </a>
                </li>
                
                <li class="uk-visible@m">
                    <a href="{{ route('home', app()->getLocale()) }}">
                        <i class="fas fa-scroll"></i>&nbsp;@lang('menu.Connect')             
                    </a>
                </li>
            </ul>
            <a class="uk-navbar-toggle uk-hidden@m" uk-navbar-toggle-icon href="#mobile" uk-toggle></a>
          </div>
          <div class="uk-navbar-right">
          </div>
        </nav>
        </div>
      </div>