<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title></title>

    <!-- css -->
    <link rel="stylesheet" href="css/main.css">
    <!-- end css -->
  </head>
  <body class="uu-body">

    <!-- side nav -->
    <?php include 'includes/side-nav.php'; ?>
    <!-- end side nav -->

    <!-- page -->
    <div class="page-container">

      <!-- header -->
      <?php include 'includes/header.php'; ?>
      <!-- end header -->

      <!-- main content -->
      <main>

        <!-- marquee -->
        <section class="uu-marquee-container">
          <div class="owl-slider uu-marquee">
            <!-- slide -->
            <div class="item" style="background-image:url('img/slides/slide1.jpg'); background-position: top center;">
              <div class="slide-content">
                <h1>Slide One Title</h1>
                <h2 class="subhead">This is slide one's subhead</h2>
                <a href="#" class="uu-btn">Learn More</a>
              </div>
            </div>
            <!-- end slide -->
          </div>
        </section>
        <!-- end marquee -->

        <!-- article -->
        <article></article>
        <!-- end article -->

      </main>
      <!-- end main content -->

      <!-- footer -->
      <?php include 'includes/footer.php'; ?>
      <!-- end footer -->

    </div>
    <!-- end page -->

    <!-- scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="js/custom.js"></script>
    <!-- end scripts -->
  </body>
</html>
