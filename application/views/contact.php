<div class="background" style="background-image: url(assets/img/img_bg_main.jpg)">
    <div id="contact" class="container section">
      <div class="row">
        <div class="col-md-12">
          <p id="contacts_header" class="section__title">Get in touch_</p>
        </div>
      </div>
      <div class="row contacts">
        <div class="col-md-5 col-lg-4">
          <div class="contacts__list">
            <dl class="contact-list">
              <dt>Phone:</dt>
              <dd><a href="tel:<?php echo get_phone_number();?>"><?php echo get_phone_number();?></a></dd>
              <dt>Email:</dt>
              <dd><a href="mailto:<?php echo get_email_address();?>"><?php echo get_email_address();?></a></dd>
            </dl>
          </div>
          <div class="contacts__social">
            <ul>
                <li><a href="<?php echo get_linkedin_url();?>">LinkedIn</a></li>
              <li><a href="<?php echo get_github_url();?>">GitHub</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-7 col-lg-5">
          <div class="contacts__form">
            <p class="contacts__form-title">Or just write me a letter here_</p>
            <form action="<?php echo site_url('form/contact');?>" method="post">
               
              <div class="form-group">
                <input class="form-field js-field-name" type="text" placeholder="Your name" id="contact_name" name="contact_name" required>
                <span class="form-validation"></span>
                <span class="form-invalid-icon"><i class="mdi mdi-close" aria-hidden="true"></i></span>
              </div>
              <div class="form-group">
                  <input class="form-field js-field-email" type="email" id="contact_email" name="contact_email" placeholder="Your e-mail" required>
                <span class="form-validation"></span>
                <span class="form-invalid-icon"><i class="mdi mdi-close" aria-hidden="true"></i></span>
              </div>
               <div class="form-group">
                    <input class="form-field js-field-email" type="text" id="contact_subject" name="contact_subject" placeholder="Subject" required>
                <span class="form-validation"></span>
                <span class="form-invalid-icon"><i class="mdi mdi-close" aria-hidden="true"></i></span>
              </div>
              <div class="form-group">
                  <textarea class="form-field js-field-message" placeholder="Type the message here" id="contact_message" name="contact_message"required></textarea>
                <span class="form-validation"></span>
                <span class="form-invalid-icon"><i class="mdi mdi-close" aria-hidden="true"></i></span>
              </div>
              <button class="site-btn site-btn--form" type="submit" value="Send" disabled>Send</button>
            </form>
          </div>
          <div class="footer">
            <p>© <?php echo get_current_year(); ?> La Ville Solutions. All Rights Reserved</p>
          </div>
        </div>
      </div>
    </div>
  </div>
