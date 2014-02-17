<!doctype html>
<html class="no-js" lang="en">
  <head>
    <?php include 'includes/head.php';?>
  </head>
  <body>
      <a class="logo" href="index.php"><img src="img/logo.png" alt="tree of life logo" /></a>
      <!-- ==================================================
                              NAV
      =====================================================-->
      <div class="fixed">
      <nav class="top-bar" data-topbar>
        <ul class="title-area">
          <li class="name">
            &nbsp;
          </li>
          <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
        </ul>
        <section class="top-bar-section">
          <!-- Left Nav Section -->
          <ul class="right">
            <li><a href='about.php'>About</a></li>
            <li><a href="multiplication.php">Multiplication</a></li>
            <li><a href="beneficiaries.php">Beneficiaries</a></li>
            <li><a href="affiliates.php">Affiliates</a></li>
            <li class="active"><a href="#">Contact</a></li>
          </ul>
        </section>
      </nav>
      </div>
      
      <!-- ==================================================
                              HERO IMG
      =====================================================-->
      <div id="hero-holder-contact">
          <div id="overlay-generic"></div>
      </div>
      


      <!-- ==================================================
                              CONTENT
      =====================================================-->
      <div id="contentwrap-generic">
      <div class="contentwrap-pad clearfix">
          <div class="row contentwrap-pad clearfix">
            <div class="large-8 left columns">
                <h1>Map</h1>
                <div class="flex-video">
                    <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Fishgate+Advertising,+Bellville,+South+Africa&amp;aq=0&amp;oq=fishagte&amp;sll=-33.927996,18.414052&amp;sspn=0.012552,0.022187&amp;ie=UTF8&amp;hq=&amp;hnear=&amp;t=m&amp;iwloc=A&amp;ll=-33.874775,18.630588&amp;spn=0.006295,0.006295&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Fishgate+Advertising,+Bellville,+South+Africa&amp;aq=0&amp;oq=fishagte&amp;sll=-33.927996,18.414052&amp;sspn=0.012552,0.022187&amp;ie=UTF8&amp;hq=&amp;hnear=&amp;t=m&amp;iwloc=A&amp;ll=-33.874775,18.630588&amp;spn=0.006295,0.006295" style="text-align:left">View Larger Map</a></small>
                </div>
            </div>

            <div class="large-4 left columns">
                <h1>Details</h1>
<!--                <p>Please feel free to call or email us, or even pop in for a visit, we'd love to hear from or see you.</p>-->
                  <div class="panel">
                      <ul class="reset-ul">
                            <li>
                                <p>
                                    <a href="tel:5551234" class="fa fa-2x fa-phone-square"></a>
                                    <a href="tel:5551234">&nbsp; 021 555 1234</a>
                                </p>
                            </li>
                            <li>
                                <p>
                                    <a href="mailto:info@treeoflife.co.za" class="fa fa-2x fa-envelope"></a>
                                    <a href="mailto:info@treeoflife.co.za">&nbsp; info@treeoflife.co.za</a>
                                </p>
                            </li>
                            <li>
                                <table style="width: 100%;">
                                    <tr>
                                        <td style="vertical-align: top; width: 20px;"><a href="https://maps.google.com/maps?q=Fishgate+Advertising,+Bellville,+South+Africa&hl=en&sll=-33.927996,18.414052&sspn=0.012552,0.022187&oq=fishagte&t=m&z=16" class="fa fa-2x fa-map-marker"></a></td>
                                        <td><p>00 Mystreet, Mytown, Mycity, 0000</p></td>
                                    </tr>
                                </table>
                            </li>
                        </ul>
                  </div>
                <h1>Contact</h1>
                <form data-abide id="form" method="POST" action="php/processform.php">
                    <div data-alert class="alert-box warning">Oops! We've discovered some invalid fields.</div>
                    <input type="text" id="name" name="name" placeholder="Name" required />
                    <small class="error">Please enter your Name</small>
                    
                    <input type="tel" id="tel" name="tel" placeholder="Phone Number" required />
                    <small class="error">We require your phone number to call you back</small>
                    
                    <input type="email" id="email" name="email" placeholder="Email" required />
                    <small class="error">Add your email address, receive a copy of this communication</small>
                    
                    <textarea id="message" name="message" placeholder="Type your message here..." required></textarea>
                    <small class="error">Dont forget to leave us a message :)</small>
                    <input class="button" type="submit" value="Submit" />
                </form>
            </div>
        </div>
      </div>
      
      <?php include 'includes/footer.php'; ?>
      
    </div>
      
     <?php include 'includes/scripts.php';?>
    

  </body>
</html>
