<section class="uk-section uk-section-xsmall uk-padding-remove slider-section">
  <div class="uk-background-cover uk-height-small header-section"></div>
</section>
<section class="uk-section uk-section-xsmall main-section" data-uk-height-viewport="expand: true">
  <div class="uk-container">
    <div class="uk-grid uk-grid-medium" data-uk-grid>
      <div class="uk-width-3-4@m">
        @foreach (Blog::getNewsByID($id) as $articles)
        <div class="uk-card uk-card-default uk-margin-small">
          <div class="uk-card-header">
            <div class="uk-grid uk-grid-small" data-uk-grid>
              <div class="uk-width-expand@s">
                <h5 class="uk-h5 uk-text-bold"><i class="fas fa-newspaper"></i> {{ $articles->title }} </h5>
              </div>
              <div class="uk-width-auto@s">
                <p class="uk-text-small"><i class="far fa-clock"></i> Created at {{ $articles->created_at }}</p>
              </div>
            </div>
          </div>
          <div class="uk-card-body">
            <article class="uk-article">
              {{ $articles->description }}
            </article>
          </div>
          @endforeach
        </div>
        <div class="uk-grid uk-grid-small uk-child-width-1-1 uk-margin" data-uk-grid>
          @foreach (Comments::getCommentsByID($id) as $comments)
          <div>
            <div class="uk-card uk-card-default uk-card-body">
              <div class="uk-grid uk-grid-small" data-uk-grid>
                <div class="uk-width-1-6@s">
                  <div class="Author uk-flex uk-flex-center">
                    <div class="topic-author-avatar profile">
                      <img src="" alt="" />
                    </div>
                  </div>
                  <p class="uk-margin-remove uk-text-bold uk-text-center">
                  {{ $comments->user_id }}
                  </p>
                </div>
                <div class="uk-width-expand@s">
                  <p class="uk-text-small uk-text-meta uk-margin-small">{{  $comments->created_at }}
                  </p>
                  {{ $comments->context }}
                </div>
              </div>
            </div>
            @endforeach
          </div>

        @guest
          <div>
            <div class="uk-card uk-card-default uk-card-body">
              <h3 class="uk-h3 uk-text-center"><span uk-icon="icon: comment; ratio: 1.5"></span> Unirse a la
                conversación</h3>
              <div class="glass-box-container">
                <p class="uk-margin-small">¿Algo que explicar? Entra para participar.</p>
                <a href="http://blizzcms.test/login" class="uk-button uk-button-default uk-width-1-2 uk-width-1-3@m"><i
                    class="fas fa-sign-in-alt"></i> Iniciar sesión</a>
              </div>
            </div>
          </div>
        @endguest
        </div>
      </div>
      <div class="uk-width-1-4@m">
        <div class="uk-card uk-card-default">
          <div class="uk-card-header">
            <h5 class="uk-h5 uk-text-bold"><i class="fas fa-list-alt"></i> Últimas Noticias</h5>
          </div>
          <div class="uk-card-body">
            <ul class="uk-list uk-list-divider uk-text-small">
              @foreach (Blog::getFiveNews($id) as $posts )
              <li>
                <a href="http://blizzcms.test/blogs/" {{ $posts->id }}><i class="far fa-newspaper"></i>
                  {{ $posts->title }}</a>
              </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>