    <section class="uk-section uk-section-xsmall uk-padding-remove slider-section">
      <div class="uk-background-cover uk-height-small header-section"></div>
    </section>

    {{ Emulators_TC::Hello()}}

    <section class="uk-section uk-section-xsmall main-section" data-uk-height-viewport="expand: true">
      <div class="uk-container">
        <div class="uk-grid uk-grid-medium" data-uk-grid>
          <div class="uk-width-1-4@m">
            <ul class="uk-nav uk-nav-default myaccount-nav">
              <li class="uk-active"><a><i class="fas fa-user-circle"></i> Account</a></li>
              <li class="uk-nav-divider"></li>
              <li><a href=""><i class="fas fa-tools"></i> Account Settings</a></li>
              <li><a href=""><i class="fas fa-gamepad"></i> Create Game Accounts</a></li>
              <li><a href=""><i class="fas fa-hand-holding-usd"></i> Donate</a></li>
              <li><a href=""><i class="fas fa-vote-yea"></i> Vote</a></li>
              <li><a href=""><i class="fas fa-store"></i> Store</a></li>
              <li class="uk-nav-divider"></li>
              <li class="uk-active"><a><i class="fas fa-user-circle"></i> Game Accounts</a></li>
              <li class="uk-nav-divider"></li>
              <li><a href=""><img class="uk-border-circle" src="{{ env('APP_URL')}}/themes/{{ config('theme.themeDefault') }}/assets/images/icons/wow-vanilla.png" width="30" height="30" />  Account Vanilla</a></li>
              <li><a href=""><img class="uk-border-circle" src="{{ env('APP_URL')}}/themes/{{ config('theme.themeDefault') }}/assets/images/icons/wow-tbc.png" width="30" height="30" />  Account The Burning Crusade</a></li>
              <li><a href=""><img class="uk-border-circle" src="{{ env('APP_URL')}}/themes/{{ config('theme.themeDefault') }}/assets/images/icons/wow-wotlk.png" width="30" height="30" />  Account The lith king</a></li>
              <li><a href=""><img class="uk-border-circle" src="{{ env('APP_URL')}}/themes/{{ config('theme.themeDefault') }}/assets/images/icons/wow-cata.png" width="30" height="30" />  Account Cataclysm</a></li>
              <li><a href=""><img class="uk-border-circle" src="{{ env('APP_URL')}}/themes/{{ config('theme.themeDefault') }}/assets/images/icons/wow-mop.png" width="30" height="30" />  Account Mist of Pandaria</a></li>
              <li><a href=""><img class="uk-border-circle" src="{{ env('APP_URL')}}/themes/{{ config('theme.themeDefault') }}/assets/images/icons/wow-wod.png" width="30" height="30" />  Account Warlords of Draenor</a></li>
              <li><a href=""><img class="uk-border-circle" src="{{ env('APP_URL')}}/themes/{{ config('theme.themeDefault') }}/assets/images/icons/wow-legion.png" width="30" height="30" />  Account Legion</a></li>
              <li><a href=""><img class="uk-border-circle" src="{{ env('APP_URL')}}/themes/{{ config('theme.themeDefault') }}/assets/images/icons/wow-bfa.png" width="30" height="30" />  Account Battle for Azeroth</a></li>
            </ul>
          </div>

         <div class="uk-width-3-4@m">
            <h4 class="uk-h4 uk-text-uppercase uk-text-bold">Account settings</h4>
            <div class="uk-card-default myaccount-card uk-margin-small">
              <div class="uk-card-header">
                <h5 class="uk-h5 uk-text-uppercase uk-text-bold"><i class="fas fa-envelope"></i> Change email</h5>
              </div>
              <div class="uk-card-body">
              </div>
            </div>
            <div class="uk-card-default myaccount-card uk-margin-small">
              <div class="uk-card-header">
                <h5 class="uk-h5 uk-text-uppercase uk-text-bold"><i class="fas fa-key"></i> Change password</h5>
              </div>
              <div class="uk-card-body">
                <div class="uk-margin uk-light">
                  <label class="uk-form-label">Your actual password:</label>
                  <div class="uk-form-controls">
                    <div class="uk-inline uk-width-1-1">
                      <span class="uk-form-icon"><i class="fas fa-key fa-lg"></i></span>
                      <input class="uk-input" id="change_oldpass" type="password" pattern=".{5,16}" placeholder="password" required>
                    </div>
                  </div>
                </div>
                <div class="uk-margin uk-light">
                  <div class="uk-grid uk-grid-small" data-uk-grid>
                    <div class="uk-inline uk-width-1-2@s">
                      <label class="uk-form-label">New Password</label>
                      <div class="uk-form-controls">
                        <div class="uk-inline uk-width-1-1">
                          <span class="uk-form-icon"><i class="fas fa-unlock fa-lg"></i></span>
                          <input class="uk-input" id="change_newpass" type="password" pattern=".{5,16}" placeholder="Re-Writte Password" required>
                        </div>
                      </div>
                    </div>
                    <div class="uk-inline uk-width-1-2@s">
                      <label class="uk-form-label">Re Password</label>
                      <div class="uk-form-controls">
                        <div class="uk-inline uk-width-1-1">
                          <span class="uk-form-icon"><i class="fas fa-lock fa-lg"></i></span>
                          <input class="uk-input" id="change_renewpass" type="password" pattern=".{5,16}" placeholder="Re-Writte Password" required>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="uk-margin">
                  <button class="uk-button uk-button-default uk-width-1-1"><i class="fas fa-sync"></i> Save Changes</button>
                </div>
              </div>
            </div>
            <div class="uk-card-default myaccount-card uk-margin-small">
              <div class="uk-card-header">
                <h5 class="uk-h5 uk-text-uppercase uk-text-bold"><i class="fas fa-id-badge"></i> Change Avatar</h5>
              </div>
              <div class="uk-card-body">
                <div class="uk-margin uk-light">
                  <div class="uk-form-controls">
                    <div class="uk-grid uk-child-width-auto uk-flex uk-flex-center" data-uk-grid>
                        <div>
                          <img class="uk-border-rounded uk-margin-small" src="" width="60" height="60">
                          <input class="uk-radio uk-display-block uk-margin-auto-left uk-margin-auto-right change_avatar" type="radio" name="change_avatar" value="">
                        </div>
                    </div>
                  </div>
                </div>
                <div class="uk-margin">
                  <button class="uk-button uk-button-default uk-width-1-1"><i class="fas fa-sync"></i> Save Avatar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>