<header class="main-header" style="background-image:url('<?php echo get_asset_path('images','emerge.jpg')?>')">
<div class="container">
      <div class="row personal-profile">
        <div class="col-md-4 personal-profile__avatar">
          <img src="<?php echo get_asset_path('images','7.jpg')?>" alt="avatar">
        </div>
        <div class="col-md-8">
          <p class="personal-profile__name">Travers La Ville</p>
          <p class="personal-profile__work">Professional Problem Solver</p>
          <div class="personal-profile__contacts">
            <dl class="contact-list contact-list__opacity-titles">
              <dt>Phone:</dt>
              <dd><a href="tel:<?php echo get_phone_number();?>"><?php echo get_phone_number();?></a></dd>
              <dt>Email:</dt>
              <dd><a href="mailto:<?php echo get_email_address();?>"><?php echo get_email_address();?></a></dd>
              <dt>Address:</dt>
              <dd>Austin, Texas </dd>
            </dl>
          </div>
          <p class="personal-profile__social">
            <a href="<?php echo get_github_url();?>" target="_blank"><i class="fa fa-github"></i></a>
            <a href="<?php echo get_linkedin_url();?>" target="_blank"><i class="fa fa-linkedin-square"></i></a>
          </p>
        </div>
      </div>
    </div>
  </header>