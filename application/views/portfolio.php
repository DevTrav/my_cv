<section id="portfolio" class="container section">
    <div class="row">
      <div class="col-md-12">
        <h2 id="portfolio_header" class="section__title">My projects_</h2>
      </div>
    </div>
    <div class="row portfolio-menu">
      <div class="col-md-12">
        <nav>
          <ul>
            <li><a href="" data-portfolio-target-tag="all">all</a></li>
            <!--<li><a href="" data-portfolio-target-tag="mobile apps">mobile apps</a></li>-->
            <li><a href="" data-portfolio-target-tag="web-sites">web-sites</a></li>
            <li><a href="" data-portfolio-target-tag="landing-pages">landing pages</a></li>
          </ul>
        </nav>
      </div>
    </div>
    <div class="portfolio-cards">
      <div class="row project-card" data-toggle="modal" data-target="#portfolioModal" data-portfolio-tag="web-sites">
        <div class="col-md-6 col-lg-5 project-card__img">
            <img src="<?php echo get_asset_path('images','image_site.jpg'); ?>" alt="musician photo" />
        </div>
        <div class="col-md-6 col-lg-7 project-card__info">
          <h3 class="project-card__title">Mobile responsive fan experience for musician </h3>
          <p class="project-card__description">
            This site is a social media hub, multi-media player and concert tracker with event countdown for the indie  hip hop connoisseur. Fully mobile responsive with a keen aesthetic.
          </p>
          <p class="project-card__stack">Used stack:</p>
          <ul class="tags">
            <li>html5</li>
            <li>css3</li>
            <li>JavaScript</li>
            <li>Ajax</li>
            <li>PHP</li>
          </ul>
          <a href="" class="project-card__link">www.imageandgenius.com</a>
        </div>
      </div>
      <div class="row project-card"  data-toggle="modal" data-target="#portfolioModal" data-portfolio-tag="mobile apps">
        <div class="col-md-6 col-lg-5 project-card__img">
          <img src= "<?php echo get_asset_path('images','coming_soon_img.jpg'); ?>" alt="coming soon" />
        </div>
        <div class="col-md-6 col-lg-7 project-card__info">
          <h3 class="project-card__title"></h3>
          <p class="project-card__description">
            Preference any astonished unreserved mrs. Prosperous understood middletons in conviction an
             uncommonly do. Supposing so be resolving breakfast am or perfectly. Is drew am hill from mr.
          </p>
          <p class="project-card__stack">Used stack:</p>
          <ul class="tags">
            <li>html5</li>
            <li>css3</li>
            <li>JavaScript</li>
            <li>BEM</li>
            <li>bower</li>
            <li>grunt</li>
          </ul>
          <a href="" class="project-card__link">www.travellend.com</a>
        </div>
      </div>
      <div class="row project-card"  data-toggle="modal" data-target="#portfolioModal" data-portfolio-tag="landing-pages">
        <div class="col-md-6 col-lg-5 project-card__img">
        <img class="" src="<?php echo get_asset_path('images','coming_soon_img.jpg'); ?>" alt="coming soon">
      </div>
        <div class="col-md-6 col-lg-7 project-card__info">
        <h3 class="project-card__title">Admin template for Photo Service</h3>
        <p class="project-card__description">
          Do answered bachelor occasion in of offended no concerns. Supply worthy warmth branch of no ye.
          Voice tried known to as my to. Though wished merits or be. Alone visit use these smart rooms ham.
        </p>
        <p class="project-card__stack">Used stack:</p>
        <ul class="tags">
          <li>html5</li>
          <li>css3</li>
          <li>JavaScript</li>
          <li>BEM</li>
          <li>bower</li>
          <li>grunt</li>
        </ul>
        <a href="" class="project-card__link">www.coolphoto.com</a>
      </div>
      </div>
    </div>
  </section>