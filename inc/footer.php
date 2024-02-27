  <!-- FOOTER -->
  <footer class="footer pt-80 pt-xs-60">
      <div class="container">
          <div class="row footer-info mb-60">
              <?php
                foreach ($contacts as $contact) { ?>
                  <div class="col-lg-3 col-md-4 col-xs-12 mb-sm-30">
                      <h4 style="color : #fea502" class="mb-10"><?php echo $contact['title']; ?></h4>
                      <address style="margin-bottom : 5px !important">
                          <i class="ion-ios-location fa-icons"></i> <?php echo $contact['address']; ?>
                      </address>
                      <address>
                          <i class="ion-ios-telephone fa-icons"></i> <a style="color : white; font-weight : 400" href="tel:<?php echo $contact['tel']; ?>"><?php echo $contact['tel']; ?></a>
                      </address>

                  </div>
              <?php } ?>
          </div>
          <!--Footer Info -->
          <hr>
          <div class="row footer-info mb-60">
              <div class="col-lg-3 col-md-4 col-xs-12 mb-sm-30">
                  <h4 class="mb-30">CONTACT Us</h4>
                  <address>
                      <i class="ion-ios-location fa-icons"></i> <?php echo $contacts[0]['address']; ?>
                  </address>
                  <ul class="link-small">
                      <li>
                          <a href="mailto:<?php echo $contacts[0]['email']; ?>"><i class="ion-ios-email fa-icons"></i><?php echo $contacts[0]['email']; ?></a>
                      </li>
                      <li>
                          <a><i class="ion-ios-telephone fa-icons"></i><?php echo $contacts[0]['tel']; ?></a>
                      </li>
                  </ul>
                  <!-- <div class="icons-hover-black">
                      <a href="javascript:avoid(0);"> <i class="fa fa-facebook"></i> </a><a href="javascript:avoid(0);"> <i class="fa fa-twitter"></i> </a><a href="javascript:avoid(0);"> <i class="fa fa-youtube"></i> </a><a href="javascript:avoid(0);">
                          <i class="fa fa-dribbble"></i> </a><a href="javascript:avoid(0);">
                          <i class="fa fa-linkedin"></i>
                      </a>
                  </div> -->
              </div>
              <div class="col-lg-2 col-md-3 col-xs-12 mb-sm-30">
                  <h4 class="mb-30">Links</h4>
                  <ul class="link blog-link">
                      <li>
                          <a href="/about.php"><i class="fa fa-angle-double-right"></i> About Us</a>
                      </li>
                      <li>
                          <a href="/services.php"><i class="fa fa-angle-double-right"></i> Services</a>
                      </li>

                  </ul>
              </div>
              <div class="col-lg-2 col-md-5 col-xs-12 mb-sm-30">
                  <h4 class="mb-30">Others</h4>
                  <ul class="link blog-link">
                      <li>
                          <a href="javascript:avoid(0);"><i class="fa fa-angle-double-right"></i> Privacy policy</a>
                      </li>
                      <li>
                          <a href="javascript:avoid(0);"><i class="fa fa-angle-double-right"></i> Terms &amp;
                              condition</a>
                      </li>
                  </ul>
              </div>
              <div class="col-lg-4 col-md-12 col-xs-12 mt-sm-30 mt-xs-15">
                  <div class="newsletter">
                      <h4 class="mb-30">NEWSLETTER SIGNUP</h4>
                      <p>
                          Subscribe to Our Newsletter to get Important News, Amazing
                          Offers & Inside Scoops:
                      </p>
                      <form>
                          <input type="email" class="newsletter-input input-md newsletter-input mb-0" placeholder="Enter Your Email" />
                          <button class="newsletter-btn btn btn-xs btn-color" type="submit" value="">
                              <i class="fa fa-angle-right mr-0"></i>
                          </button>
                      </form>
                  </div>
              </div>
          </div>
          <!-- End Footer Info -->
      </div>
      <!-- Copyright Bar -->
      <div class="copyright">
          <div class="container">
              <p class="">
                  Copyright &copy; <?php echo date("Y"); ?> Deen Banjus Engineering Ltd. | Developed by : <a href="https://maxedge.co.uk" class="text-white" target="_blank">Maxedge UK Ltd.</a>
              </p>
          </div>
      </div>
      <!-- End Copyright Bar -->
  </footer>
  <!-- END FOOTER -->