<section class="uk-section uk-section-xsmall uk-padding-remove slider-section">
    <div class="uk-background-cover uk-height-small header-section"></div>
</section>

<section class="uk-section uk-section-xsmall main-section" data-uk-height-viewport="expand: true">
    <div class="uk-container">
        <div class="uk-grid uk-grid-medium" data-uk-grid>
          <div class="uk-width-3-4@m">
            @foreach ($article as $articles)
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
        </div>
    </div>
</section>
   
