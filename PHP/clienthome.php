<!DOCTYPE html>
<html>
<title>The Jinjang Project</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
.bgimg {
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-image: url('images/girl_portrait.jpg');
  min-height: 100%;
}
</style>
<body>

  <!-- Sidebar with image -->
  <nav class="w3-sidebar w3-hide-medium w3-hide-small" style="width:40%">
    <div class="bgimg"></div>
  </nav>

  <!-- Hidden Sidebar (reveals when clicked on menu icon)-->
  <nav class="w3-sidebar w3-black w3-animate-right w3-xxlarge" style="display:none;
  padding-top:150px; right:0; z-index:2;" id="mySidebar">
  <a href="javascript:void(0)" onclick="closeNav()" class="w3-button w3-black
  w3-xxxlarge w3-display-topright" style="padding:0 12px;">
  <i class="fa fa-remove"></i>
</a>
<div class="w3-bar-block w3-center">
  <a href="#" class="w3-bar-item w3-button w3-text-grey w3-hover-black"
  onclick="closeNav()">Home</a>
  <a href="#portfolio" class="w3-bar-item w3-button w3-text-grey w3-hover-black"
  onclick="closeNav()">Jinjang's Portfolio</a>
  <a href="/Users/jiunnwyeleow/Documents/GitHub/theJinjangProject/aboutus.html" class="w3-bar-item w3-button w3-text-grey w3-hover-black"
  onclick="aboutus.html">About Us/Contact Us</a>
  <a href="howyoucanhelp.html" class="w3-bar-item w3-button w3-text-grey w3-hover-black"
  onclick="closeNav()">How You Can Help</a>
  <a href="donations.html" class="w3-bar-item w3-button w3-text-grey w3-hover-black"
  onclick="closeNav()">Donations</a>
  <a href="newsevents.html" class="w3-bar-item w3-button w3-text-grey w3-hover-black"
  onclick="closeNav()">News/Past Events</a>

  <hr class="w3-opacity">
  <p class="w3-bar-item w3-text-white ">
    Access The Jinjang Project Job Portal
  </p>
  <a href="PHP\signup.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black"
  onclick="closeNav()">Signup</a>
  <a href="PHP\createjob.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black"
  onclick="closeNav()">Create Job</a>
</div>
</nav>

<!-- Page Content -->
<div class="w3-main w3-padding-large" style="margin-left:40%">

  <!-- Menu icon to open sidebar -->
  <span class="w3-button w3-top w3-white w3-xxlarge w3-text-grey w3-hover-text-black"
  style="width:auto;right:0;" onclick="openNav()">Job Portal <i class="fa fa-bars"></i></span>

  <!-- Header -->
  <header class="w3-container w3-center" style="padding:100px 16px 0px 0px" id="home">
    <h1 class="w3-jumbo"><b>The Jinjang Project</b></h1>
    <p>Impact a life, Transform a community</p>
    <img src="images/girl_portrait.jpg" class="w3-image w3-hide-large w3-hide-small
    w3-round" style="display:block;width:60%;margin:auto;">
    <img src="images/girl_portrait.jpg" class="w3-image w3-hide-large w3-hide-medium
    w3-round" width="1000" height="1333">
  </header>

  <!-- Portfolio Section -->
  <div class="w3-padding-32 w3-content" id="portfolio">
    <h2 class="w3-text-grey">Jinjang's Portfolio</h2>
    <hr class="w3-opacity">

    <!-- Grid for photos -->
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half">
        <img src="images/1.jpg" style="width:100%">
        <img src="images/2.jpg" style="width:100%">
        <img src="images/3.jpg" style="width:100%">
      </div>

      <div class="w3-half">
        <img src="images/4.jpg" style="width:100%">
        <img src="images/5.jpg" style="width:100%">
        <img src="images/6.jpg" style="width:100%">
      </div>
      <!-- End photo grid -->
    </div>
    <!-- End Portfolio Section -->
  </div>

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-30" id="about">
    <h2>About the Community</h2>
    <hr class="w3-opacity">
    <p>
      Jinjang Utara is littered with dilapidated rumah transit (supposed to be
      temporary housing). Currently, housing more than 2000 people. These are
      forgotten people who became disillusioned and embittered. The inhabitants
      waited for 40 years to date, to be relocated to their new residence under
      Projek Perumahan (PPR) which has yet to happen. This is 38 years later
      than the promised duration by the government. Even if they are offered
      low cost housing tomorrow, they will not be able to afford it as they
      can hardly afford the RM40 per month rent even now. The average
      combined income per month for each family is less than RM1000.
    </p>
    <hr class="w3-opacity">
    <h3 class="w3-padding-16">Who are we?</h3>
    <p class="w3-wide">AGN - Acts Global Networking</p>
    <hr class="w3-opacity">

    <!-- Testimonials -->
    <h3 class="w3-padding-24">People behind the AGN</h3>
    <img src="images/02.jpg" alt="Avatar" class="w3-left w3-circle
    w3-margin-right" style="width:80px">
    <p><span class="w3-large w3-text-black w3-margin-right">YB Hannah Yeoh.</span>
      Speaker of Selangor State Legislative Assembly.</p>
      <p>YB Hannah Yeoh, honorary guest for the Christmas party, agreed with Rev
        Raymond, saying that more programs should be developed with the
        non-governmental organizations (NGO) targeting children in low-cost area
        to curb social ills before they grow.</p><br>

        <img src="images/01.jpg" alt="Avatar" class="w3-left w3-circle
        w3-margin-right" style="width:80px">
        <p><span class="w3-large w3-text-black w3-margin-right">Pastor Raymond Mooi.</span>
          AGN Director.</p>
          <p>Hosted and was creditted for countless emporing activities for the
            Jinjang Community.</p><br>

            <!-- How can you help? -->
            <h3 class="w3-padding-16">How can you help?</h3>
            <ul>
              <li>Volunteers</li>
              <li>Learning materials</li>
              <li>Children school supplies Sponsor a child</li>
              <li>E- business</li>
            </ul>


            <!-- Grid for Donation tables -->
            <h3 class="w3-padding-16">Donations and Participating</h3>
            <div class="w3-row-padding" style="margin:0 -16px">
              <div class="w3-half w3-margin-bottom">
                <ul class="w3-ul w3-center w3-card w3-hover-shadow">
                  <li class="w3-dark-grey w3-xlarge w3-padding-32">Participation</li>
                  <li class="w3-padding-16">Volunteering</li>
                  <li class="w3-padding-16">Teaching</li>
                  <li class="w3-padding-16">Influencing Talks</li>
                  <li class="w3-padding-16">Entertainitment</li>
                  <li class="w3-padding-16">
                    <h2>Contact Us Now!</h2>
                  </li>
                </ul>
              </div>

              <div class="w3-half">
                <ul class="w3-ul w3-center w3-card w3-hover-shadow">
                  <li class="w3-black w3-xlarge w3-padding-32">Donations</li>
                  <li class="w3-padding-16">1-Time Donation</li>
                  <li class="w3-padding-16">Weekly/Monthly Sponsorship</li>
                  <li class="w3-padding-16">Clothes/Items Donations</li>
                  <li class="w3-padding-16">Hire</li>
                  <li class="w3-padding-16">
                    <h2>Make a Difference Now!</h2>
                  </ul>
                </div>
                <!-- End Grid/Pricing tables -->
              </div>

              <!-- End About Section -->
            </div>

            <!-- Contact Section -->
            <div class="w3-padding-32 w3-content w3-text-grey" id="contact" style="margin-bottom:64px">
              <h2>Contact Us</h2>
              <hr class="w3-opacity">

              <div class="w3-section">
                <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i>Petaling Jaya, Malaysia</p>
                <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: (603) 7805-7866</p>
                <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: acts@agntsoa.net</p>
              </div>
            </div>
          </footer>
        </div>
        <script>
        // Open and close sidebar
        function openNav() {
          document.getElementById("mySidebar").style.width = "60%";
          document.getElementById("mySidebar").style.display = "block";
        }

        function closeNav() {
          document.getElementById("mySidebar").style.display = "none";
        }
        </script>

      </body>
      </html>
