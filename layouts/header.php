<?php
function displayPageName($pageName)
{
  return $pageName ? $pageName : 'Le site de cheik';
};
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v3.8.6">
  <title>
  <?php
    echo displayPageName($pageName);
  ?>
  </title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/pricing/">

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <link href="pricing.css" rel="stylesheet">
</head>

<body>
  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">
    <?php
    echo displayPageName($pageName);
    ?>
    </h5>
    <nav class="my-2 my-md-0 mr-md-3">
      <!-- <a class="p-2 text-dark" href="#">Features</a> -->
    </nav>
  </div>