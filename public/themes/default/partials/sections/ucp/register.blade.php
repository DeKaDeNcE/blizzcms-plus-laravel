<section class="uk-section uk-section-xsmall uk-padding-remove slider-section">
    <div class="uk-background-cover uk-height-small header-section"></div>
</section>

<section class="uk-section uk-section-xsmall main-section" data-uk-height-viewport="expand: true">
    <div class="uk-container">
        <h4 class="uk-h4 uk-heading-line uk-text-uppercase uk-text-bold uk-margin-small-bottom"><span><i class="fas fa-user-plus"></i> {{ __('Register') }}</span></h4>
        <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="uk-margin uk-light">
          <label class="uk-form-label">Register your Account in our server</label>
          <div class="uk-form-controls">
            <div class="uk-inline uk-width-1-1">
              <span class="uk-form-icon"><i class="fas fa-user fa-lg"></i></span>
              <input id="name" type="text" class="uk-input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                    <div class="uk-alert-warning" uk-alert>
                        <a class="uk-alert-close" uk-close></a>
                        <p>{{ $message }}</p>
                    </div>
                @enderror
            </div>
          </div>
        </div>
        <div class="uk-margin uk-light">
          <div class="uk-form-controls">
            <div class="uk-inline uk-width-1-1">
              <span class="uk-form-icon"><i class="fas fa-envelope fa-lg"></i></span>
              <input class="uk-input @error('email') is-invalid @enderror" type="email" id="email" placeholder="Write your e-mail" required>
                @error('email')
                    <div class="uk-alert-warning" uk-alert>
                        <a class="uk-alert-close" uk-close></a>
                        <p>{{ $message }}</p>
                    </div>
                @enderror
            </div>
          </div>
        </div>
        <div class="uk-margin uk-light">
          <div class="uk-form-controls">
            <div class="uk-inline uk-width-1-1">
              <span class="uk-form-icon"><i class="fas fa-unlock-alt fa-lg"></i></span>
              <input class="uk-input @error('password') is-invalid @enderror" type="password" id="password" pattern=".{5,16}" title="5 characters minimum and maximum 16" placeholder="Write your password" name="password" required autocomplete="new-password">
                @error('password')
                    <div class="uk-alert-warning" uk-alert>
                        <a class="uk-alert-close" uk-close></a>
                        <p>{{ $message }}</p>
                    </div>
                @enderror
            </div>
          </div>
        </div>
        <div class="uk-margin uk-light">
          <div class="uk-form-controls">
            <div class="uk-inline uk-width-1-1">
              <span class="uk-form-icon"><i class="fas fa-lock fa-lg"></i></span>
              <input class="uk-input" id="password-confirm" type="password" pattern=".{5,16}" title="5 characters minimum and maximum 16" placeholder="Re-Write your password" name="password_confirmation" required autocomplete="new-password">
            </div>
          </div>
        </div>
        <div class="uk-width-1-4@m">
            <button class="uk-button uk-button-default uk-width-1-1" type="submit"><i class="fas fa-user-plus"></i> Register</button>
        </div>
    </div>
</form>
</section>

