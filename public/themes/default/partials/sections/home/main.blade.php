<section class="uk-section uk-section-xsmall main-section" data-uk-height-viewport="expand: true">
    <div class="uk-container">
      <div class="uk-grid uk-grid-medium uk-margin-small" data-uk-grid>
        <div class="uk-width-2-3@s">
          <h4 class="uk-h4 uk-text-bold"><i class="fas fa-newspaper fa-sm"></i> Latest News</h4>
          <div class="uk-grid uk-grid-small uk-grid-match uk-child-width-1-1" data-uk-grid>
            @foreach($blogs as $blog)
              <div>
                <a href="{{$blog->id}}" title="Read More">
                  <div class="uk-card uk-card-default news-card uk-card-hover uk-grid-collapse uk-margin" uk-grid>
                    <div class="uk-width-1-3@s uk-card-media-left uk-cover-container">
                      <img src="https://noggaholic.de/assets/images/news/{{$blog->image}}" alt="Welcome to your new website!" uk-cover>
                      <canvas width="500" height="250"></canvas>
                    </div>
                    <div class="uk-width-2-3@s uk-card-body">
                      <h5 class="uk-h5 uk-text-bold uk-margin-small">{{$blog->title}}</h5>
                      <p class="uk-text-small uk-margin-small">{{$blog->description}}</p>
                      <p class="uk-text-small uk-margin-remove uk-text-right"><i class="far fa-comment-alt"></i> 0 Comments</p>
                    </div>
                  </div>
                </a>
              </div>
            @endforeach
        </div>
    </div>
    
    <div class="uk-width-1-3@s">
        <h4 class="uk-h4 uk-text-bold"><i class="fas fa-server fa-sm"></i> Server status</h4>
        
        <div class="uk-grid uk-grid-small uk-child-width-1-1 uk-margin-small" data-uk-grid>
            <div>
                <div class="uk-card uk-card-default uk-card-body card-status">
                  <div class="uk-grid uk-grid-small" data-uk-grid>
                    <div class="uk-width-expand">
                      <h5 class="uk-h5 uk-text-bold uk-margin-small"><a href="" class="uk-link-reset"><i class="fas fa-server"></i> Reino name</a></h5>
                    </div>
                    <div class="uk-width-auto">
                        <div class="status-dot online" uk-tooltip="En linea"><span><span></span></span></div>
                    </div>
                  </div>
                  <div class="uk-grid uk-grid-collapse uk-margin-small" data-uk-grid>
                    <div class="uk-width-1-2">
                      <div class="uk-tile alliance-bar uk-text-center" uk-tooltip="Alianza">
                        <i class="fas fa-users"></i>
                        3
                      </div>
                    </div>
                    <div class="uk-width-1-2">
                      <div class="uk-tile horde-bar uk-text-center" uk-tooltip="Horda">
                        <i class="fas fa-users"></i>
                        3
                      </div>
                    </div>
                  </div>
                  <p class="uk-text-small uk-margin-small"><i class="fas fa-exclamation-circle"></i> Información del reino <span class="uk-text-danger uk-text-bold uk-text-uppercase">Desconectado</span></p>
            </div>
        </div>
        <h5 class="uk-h5 uk-text-center uk-margin">
            <i class="fas fa-gamepad"></i> Set Realmlist localhost                        
        </h5>
    </div>
 </div>
</div>
</section>