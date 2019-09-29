<div class="uk-navbar-container uk-navbar-transparent">
  <div class="uk-container">
    <nav class="uk-navbar" uk-navbar>
      <div class="uk-navbar-left">
        <a href="{{ env('APP_URL') }}" class="uk-navbar-item uk-logo uk-margin-small-right">{{ env('APP_NAME') }}</a>
      </div>
      <div class="uk-navbar-right">
        <ul class="uk-navbar-nav">
          <li class="uk-visible@m"><a href="{{ env('APP_URL') }}/"><i class="fas fa-user-plus"></i>&nbsp;Register</a></li>
          <li class="uk-visible@m"><a href="{{ env('APP_URL') }}/"><i class="fas fa-sign-in-alt"></i>&nbsp;Log In</a></li>
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
                  <i class="fas fa-bars"></i>&nbsp;More&nbsp;<i class="fas fa-caret-down"></i>
                </a>
                <div class="uk-navbar-dropdown">
                  <ul class="uk-nav uk-navbar-dropdown-nav">
                    <li>
                        <a href="{{ env('APP_URL') }}/changelogs">
                            <i class="fas fa-scroll"></i>&nbsp;Changelogs                        
                        </a>
                    </li>
                    
                    <li>
                        <a href="{{ env('APP_URL') }}/pvp">
                            <i class="fas fa-fist-raised"></i>&nbsp;PvP                        
                        </a>
                    </li>
                </ul>
                </div>
              </li>
                <li class="uk-visible@m">
                    <a href="{{ env('APP_URL') }}/forum">
                        <i class="fas fa-comments"></i>&nbsp;Forums                
                    </a>
                </li>
                
                <li class="uk-visible@m">
                    <a href="{{ env('APP_URL') }}/store">
                        <i class="fas fa-store"></i>&nbsp;Store
                    </a>
                </li>
                
                <li class="uk-visible@m">
                    <a href="{{ env('APP_URL') }}/page/HoC">
                        <i class="fas fa-scroll"></i>&nbsp;Connect                
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