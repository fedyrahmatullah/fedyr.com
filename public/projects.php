  <!-- ======= Header ======= -->
  <?php $title = "Projects • Fedy";
  include'header.php';?>
  <!-- End Header -->
   
  <!-- section project -->
  <project-section id="projects">
    <p class="section__text__p1">Browse My Recent</p>
    <h1 class="title">Projects</h1>
    <br>


            <?php
            $projects = json_decode(file_get_contents(__DIR__ . "/assets/data/projectdata.json"), true);
            ?>

<div class="project-container">
    <?php foreach ($projects as $project) : ?>
        <div class="project-card">
        <div class="image-container">
            <img src="<?= $project['image'] ?>" alt="<?= $project['title'] ?>">
        </div>
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
                     <?php if (!empty($project['url'])) : ?>
                        <a href="<?= $project['url'] ?>" target="_blank"><i class="fas fa-arrow-right"></i> Visit Project</a>
                    <?php endif; ?>
                    
                    <?php if (!empty($project['source'])) : ?>
                        <a href="<?= $project['source'] ?>" target="_blank"><i class="fas fa-code"></i> Source Code</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

    </section>


      <!-- ======= footer ======= -->
      <?php include'footer.php';?>
  <!-- End footer -->
