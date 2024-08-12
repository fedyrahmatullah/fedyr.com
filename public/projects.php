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

            // Jumlah item per halaman
            $items_per_page = 7;

            // Menentukan halaman yang aktif
            $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

            // Menghitung offset
            $offset = ($page - 1) * $items_per_page;

            // Mengambil data untuk halaman tersebut
            $current_page_projects = array_slice($projects, $offset, $items_per_page);            

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
                    <p class="project-desc"><?= $project['description'] ?></p>
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


    <?php
    // Menentukan jumlah halaman
    $total_pages = ceil(count($projects) / $items_per_page);

    // Membuat tombol navigasi pagination
    if ($total_pages > 1) {
        echo '<div class="pagination">';
        for ($i = 1; $i <= $total_pages; $i++) {
            echo "<a href='?page=$i'" . ($i == $page ? " class='active'" : "") . ">$i</a> ";
        }
        echo '</div>';
    }
    ?>

    </section>


      <!-- ======= footer ======= -->
      <?php include'footer.php';?>
  <!-- End footer -->
