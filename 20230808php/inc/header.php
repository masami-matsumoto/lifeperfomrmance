    <header class="navbar navbar-expand-lg fixed-top bg-black">
      <div class="container">
        <div class="header-logo"><a href="index.php"><img src="<?php echo $path; ?>assets/img/top/logo_wh.svg" alt="ロゴ"/></a></div>
        <a class="btn btn-primary btn-sm fs-sm order-lg-3 d-none d-sm-inline-flex rounded-0" href="<?php echo $path; ?>contact.php" rel="noopener"><i class="ai-mail fs-xl me-2 ms-n1"></i>CONTACT</a>
        <button class="navbar-toggler ms-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
        <nav class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav navbar-nav-scroll me-auto" style="--ar-scroll-height: 520px;">
            <li class="nav-item"><a class="nav-link" href="<?php echo $path; ?>about.php">About</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo $path; ?>project.php">Project</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo $path; ?>works.php">Works</a></li>
          </ul>
          <div class="d-sm-none p-3 mt-n3"><a class="btn btn-primary w-100 mb-1 rounded-0" href="<?php echo $path; ?>contact.php" rel="noopener"><i class="ai-mail fs-xl me-2 ms-n1"></i>CONTACT</a></div>
        </nav>
      </div>
    </header>