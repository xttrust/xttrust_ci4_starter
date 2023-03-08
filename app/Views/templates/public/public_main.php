<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <!-- SEO meta tags -->
  <title><?= isset($page_title) ? $page_title : ""; ?></title>

  <meta name="description"  content="<?= isset($page_description) ? $page_description : ""; ?>" />
  <meta name="keywords"  content="<?= isset($page_keywords) ? $page_keywords : ""; ?>" />
  <meta name="subject" content="<?= isset($page_title) ? $page_title : ""; ?>">
  <meta name="language" content="en">
  <meta name="distribution" content="Global">
  <meta name="rating" content="General">
  <meta name="robots" content="index,follow" />

  <!-- @og meta -->
  <meta property="og:title" content="<?= isset($page_title) ? $page_title : "Untitled Webpage"; ?>" />
  <meta property="og:url" content="<?= current_url() ?>" />
  <meta property="og:image" content="#" />
  <meta property="og:site_name" content="<?= isset($page_title) ? $page_title : "Untitled Webpage"; ?>" />
  <meta property="og:description" content="<?= isset($page_description) ? $page_description : ""; ?>" />

  <!-- @twitter meta -->
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="@username" />
  <meta name="twitter:domain" content="@domain" />
  <meta name="twitter:title" content="<?= isset($page_title) ? $page_title : "Untitled Webpage"; ?>" />
  <meta name="twitter:description" content="<?= isset($page_description) ? $page_description : ""; ?>" />
  <meta name="twitter:image" content="<?= $theme_url ?>img/logo.png" />

  <!-- @favicon-->
  <link rel="icon" type="image/png" href="<?= $theme_url ?>img/logo.png">

  <!-- CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= $theme_url ?>css/custom.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fork-awesome@1.2.0/css/fork-awesome.min.css" integrity="sha256-XoaMnoYC5TH6/+ihMEnospgm0J1PM/nioxbOUdnM8HY=" crossorigin="anonymous">
  
</head>
<body>
  <?php echo view($view_file);?>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script></body>
  </html>