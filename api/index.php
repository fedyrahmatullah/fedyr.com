
  <!-- ======= Header ======= -->
  <?php $title = "Hi I'm Fedy.";
  include "header.php";?>
  <!-- End Header -->

    <!-- profile section -->
    <section id="profile">
      <div class="section__pic-container">
        <img src="./assets/img/profile-pic.png" alt="Fedy Rahmatullah profile picture" />
      </div>
      <div class="section__text">
        <p class="section__text__p1">Hello, I'm</p>
        <h1 class="title">Fedy Rahmatullah</h1>
        <p class="section__text__p2">IT and Data Enthusiast</p>
        <div class="btn-container">
          <button
            class="btn btn-color-2"
            onclick="window.open('./assets/resume-example.pdf')"
          >
            Download CV
          </button>
          <button class="btn btn-color-1" onclick="location.href='about.php#contact'">
            Contact Info
          </button>
        </div>
        <div id="socials-container">
          <img
            src="./assets/img/linkedin.png"
            alt="My LinkedIn profile"
            class="icon"
            target="_blank"
            onclick="window.open('https://www.linkedin.com/in/fedyrahmatullah/')"
          />
          <img
            src="./assets/img/github.png"
            alt="My Github profile"
            class="icon"
            target="_blank"
            onclick="window.open('https://github.com/fedyrahmatullah')"
          />
        </div>
      </div>
    </section>

      <!-- ======= footer ======= -->
  <?php include'footer.php';?>
  <!-- End footer -->