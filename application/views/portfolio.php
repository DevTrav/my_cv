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
            <li><a href="" data-portfolio-target-tag="e-commerce">e-commerce</a></li>
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
      <div class="row project-card"  data-toggle="modal" data-target="#portfolioModal" data-portfolio-tag="landing-pages">
        <div class="col-md-6 col-lg-5 project-card__img">
          <img src= "<?php echo get_asset_path('images','coming_soon_img940.jpg'); ?>" alt="coming soon" />
        </div>
        <div class="col-md-6 col-lg-7 project-card__info">
          <h3 class="project-card__title">Voice Actor Website</h3>
          <p class="project-card__description">
            This landing page will serve as a custom, fully responsive, multimedia voice-acting portfolio on WordPress.</p>
          <p class="project-card__stack">Used stack:</p>
          <ul class="tags">
            <li>html5</li>
            <li>css3</li>
            <li>PHP</li>
            <li>WordPress</li>
            <li>JavaScipt</li>
          </ul>
          <a href="" class="project-card__link">TBD</a>
        </div>
      </div>
      <div class="row project-card"  data-toggle="modal" data-target="#portfolioModal" data-portfolio-tag="e-commerce">
        <div class="col-md-6 col-lg-5 project-card__img">
        <img class="" src="<?php echo get_asset_path('images','coming_soon_img940.jpg'); ?>" alt="coming soon">
      </div>
        <div class="col-md-6 col-lg-7 project-card__info">
        <h3 class="project-card__title">Health and Beauty E-Commerce Store</h3>
        <p class="project-card__description">
            This e-commerce store was built with cohesive branding, inventory optimization and a "customer-first" online shopping experience. 
        </p>
        <p class="project-card__stack">Used stack:</p>
        <ul class="tags">
          <li>html5</li>
          <li>css3</li>
          <li>PHP</li>
          <li>Magento</li>
          <li>JavaScript</li>
        </ul>
        <a href="" class="project-card__link">TBD</a>
      </div>
      </div>
    </div>
  </section>