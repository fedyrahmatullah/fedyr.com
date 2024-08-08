  <!-- ======= Header ======= -->
  <?php $title = "Projects • Fedy";
  include'header.php';?>
  <!-- End Header -->
   
  <!-- section project -->
  <project-section id="projects">
    <p class="section__text__p1">Browse My Recent</p>
    <h1 class="title">Projects</h1>
    <br>
    <!-- filtering content -->
<!-- 
    <br> -->
    <!-- end of filter -->
    <!-- </section> -->
<!-- 
    <div class="experience-details-container">
      <div class="about-containers"> -->


        <!-- WEBSITE PROJECT WEBSITE PROJECT WEBSITE PROJECT WEBSITE PROJECT WEBSITE PROJECT -->
        <!-- WEBSITE PROJECT WEBSITE PROJECT WEBSITE PROJECT WEBSITE PROJECT WEBSITE PROJECT -->
        <!-- WEBSITE PROJECT WEBSITE PROJECT WEBSITE PROJECT WEBSITE PROJECT WEBSITE PROJECT -->
        <!-- WEBSITE PROJECT WEBSITE PROJECT WEBSITE PROJECT WEBSITE PROJECT WEBSITE PROJECT -->


            <?php
            $projects = json_decode(file_get_contents('assets/data/projectdata.json'), true);
            ?>

<div class="project-container">
    <?php foreach ($projects as $project) : ?>
        <div class="project-card">
            <img src="<?= $project['image'] ?>" alt="<?= $project['title'] ?>">
            <div class="project-card-content">
                <h2><?= $project['title'] ?></h2>
                <p>Created at <?= date('F Y', strtotime($project['createdAt'])) ?></p>
                <p><?= $project['description'] ?></p>
                <div class="tech-tags">
                    <?php foreach ($project['technology'] as $tech) : ?>
                        <div class="tech-tag bg-blue-300"><?= is_array($tech) ? $tech['name'] : $tech ?></div>
                    <?php endforeach; ?>
                </div>
                <div class="links">
                    <a href="<?= $project['url'] ?>" target="_blank"><i class="fas fa-arrow-right"></i> Visit Project</a>
                    <?php if (!empty($project['source'])) : ?>
                        <a href="<?= $project['source'] ?>" target="_blank"><i class="fas fa-code"></i> Source Code</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

    </section>

          <!-- END OF WEBSITE PROJECT END OF WEBSITE PROJECT END OF WEBSITE PROJECT END OF WEBSITE PROJECT END OF WEBSITE PROJECT  -->
          <!-- END OF WEBSITE PROJECT END OF WEBSITE PROJECT END OF WEBSITE PROJECT END OF WEBSITE PROJECT END OF WEBSITE PROJECT  -->
          <!-- END OF WEBSITE PROJECT END OF WEBSITE PROJECT END OF WEBSITE PROJECT END OF WEBSITE PROJECT END OF WEBSITE PROJECT  -->



 

          <!-- END OF DATA PROJECT END OF DATA PROJECT END OF DATA PROJECT END OF DATA PROJECT END OF DATA PROJECT  -->
          <!-- END OF DATA PROJECT END OF DATA PROJECT END OF DATA PROJECT END OF DATA PROJECT END OF DATA PROJECT  -->
          <!-- END OF DATA PROJECT END OF DATA PROJECT END OF DATA PROJECT END OF DATA PROJECT END OF DATA PROJECT  -->


        <!-- </div>
      </div> -->



      <!-- ======= footer ======= -->
      <?php include'footer.php';?>
  <!-- End footer -->
