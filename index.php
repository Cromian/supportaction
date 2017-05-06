<?php include('config.php') ?>
<?php include('logic.php'); ?>

<!DOCTYPE HTML>
<html>
<head>
  <title><?php echo($site_title) ?></title>
  <meta name="description" content="<?php echo($site_description); ?>">
  <meta name="keywords" content="<?php echo($site_keywords); ?>">
  <?php include($meta_top) ?>
</head>
<body>

<div class="wrapper">
  <?php include ($header) ?>

  <div class="ban_1">

    <div class="row">
      <div class="col-12">

        <a href="/" class="logo"></a>
        <p>Discover a website that promotes progressive action.</p>
        <a href="<?php echo $url_to_display; ?>" id="random-link" class="btn" target="self">Find Progress</a>

        <p>Send a <a href="<?php echo $twitter_page_url; ?>">tweet</a> to add your site.</p>

      </div>
    </div>
  </div>

<?php include ($footer) ?>
</div>


<?php include( $meta_bot); ?>
</body>
</html>
