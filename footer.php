<?php
/**
 * Global footer include.
 * Renders the site footer and the WhatsApp chat-support widget.
 * No variables are required.
 */
?>
<!-- ============ FOOTER ============ -->
<footer class="vv-footer" id="contact">
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-3">
        <a href="<?php echo BASE_URL; ?>" class="footer-logo-wrap d-flex align-items-center gap-2 mb-3">
          <img src="assets/images/dark-green-with-blue-logo-full.svg" alt="footer-logo" class="img-fluid" />
        </a>
        <p class="small">
          We build innovative software solutions that drive business growth
          and create meaningful digital experiences.
        </p>
        <div class="mt-3">
          <a href="https://www.facebook.com/visionvivante/" target="_blank" class="social-icon">
            <i class="bi bi-facebook"></i>
          </a>
          <a href="https://in.linkedin.com/company/vision-vivante" target="_blank" class="social-icon">
            <i class="bi bi-linkedin"></i>
          </a>
          <a href="https://www.instagram.com/visionvivante/" target="_blank" class="social-icon">
            <i class="bi bi-instagram"></i>
          </a>
          <a href="https://www.youtube.com/@visionvivante" target="_blank" class="social-icon">
            <i class="bi bi-youtube"></i>
          </a>
        </div>
      </div>
      <div class="col-md-4 col-lg-3">
        <h6>Services</h6>
        <ul>
          <li><a href="<?php echo BASE_URL; ?>web-development-services.php">Web Development</a></li>
          <li><a href="<?php echo BASE_URL; ?>ui-ux-services.php">UI/UX Design</a></li>
          <li><a href="<?php echo BASE_URL; ?>web-development-services.php">AI Development</a></li>
          <li><a href="<?php echo BASE_URL; ?>digital-marketing-services.php">Digital Marketing</a></li>
          <li><a href="<?php echo BASE_URL; ?>web-development-services.php">Quality Assurance</a></li>
          <li><a href="<?php echo BASE_URL; ?>web-development-services.php">Mobile App Development</a></li>
        </ul>
      </div>
      <div class="col-md-4 col-lg-3">
        <h6>Company</h6>
        <ul>
          <!-- <li><a href="#">About Us</a></li> -->
          <li><a href="<?php echo $workHref; ?>">Our Work</a></li>
          <!-- <li><a href="#">Careers</a></li> -->
          <li><a href="<?php echo BASE_URL; ?>blog.php">Blog</a></li>
          <li><a href="<?php echo $contactHref; ?>">Contact Us</a></li>
        </ul>
      </div>
      <div class="col-md-4 col-lg-3">
        <h6>Contact Info</h6>
        <ul>
          <li>
            <a class="d-inline-flex align-items-center gap-2" href="mailto:sales@visionvivante.com" target="_blank">
              <i class="bi bi-envelope me-1"></i> sales@visionvivante.com
            </a>
          </li>
          <li>
            <a class="d-inline-flex align-items-center gap-2" href="tel:+919592493222" target="_blank">
              <i class="bi bi-telephone me-1"></i>
              <span>+919592493222</span>
            </a>
          </li>
          <li>
            <a class="d-inline-flex gap-2" href="">
              <i class="bi bi-geo-alt me-1"></i>
              <a href="https://maps.app.goo.gl/R2J7dQ7BoVFfWpk78" target="_blank">
                SCO 21 Second Floor Swastik Vihar, Mansa Devi Complex,
                Sector 5, Panchkula, Haryana 134114
              </a>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom d-flex flex-wrap justify-content-between">
      <span>© 2025 Vision Vivante. All Rights Reserved.</span>
      <span><a href="#">Privacy Policy</a> &nbsp;|&nbsp;
        <a href="#">Terms of Service</a></span>
    </div>
  </div>
</footer>

<!-- ============ WHATSAPP CHAT SUPPORT ============ -->
<div class="whatsapp-widget" id="whatsappWidget">
  <div class="whatsapp-popup" id="whatsappPopup">
    <div class="whatsapp-popup-header">
      <button class="whatsapp-popup-close" id="whatsappClose" aria-label="Close chat popup">
        <i class="bi bi-x-lg"></i>
      </button>
      <h6 class="mb-1">How can I help you?</h6>
      <p class="mb-0">Click below to chat on WhatsApp</p>
    </div>
    <a href="https://wa.me/919524186222" target="_blank" rel="noopener" class="whatsapp-popup-body">
      <div class="whatsapp-popup-avatar">
        <img src="assets/images/vision-logo-sm3D-emerald.png" alt="Vision Vivante" />
        <span class="whatsapp-mini-icon"><i class="bi bi-whatsapp"></i></span>
      </div>
      <p class="whatsapp-popup-label mb-0">Support</p>
      <p class="whatsapp-popup-name mb-0">Vision Vivante</p>
    </a>
    <a href="https://wa.me/919524186222" target="_blank" rel="noopener" class="whatsapp-popup-footer">Need help? Our
      team is just a message away</a>
  </div>
  <button class="whatsapp-toggle" id="whatsappToggle">
    <i class="bi bi-whatsapp"></i>
    <!-- <span class="whatsapp-toggle-text">How can I help you?</span> -->
  </button>
</div>