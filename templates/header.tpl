<!doctype html>
<html lang="en">

<head>
  <base href="{$base_url_s}">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
  <link rel="icon" type="image/png" href="./images/logo-learnit.png" />
  <link rel="stylesheet" href="css/style.css">
  <title>{$title_s}</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#"><img class="logo row ml-1 mb-1" src="./images/logo-learnit.png" alt="logo" style="width: 70px"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Courses</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="subjects">Subjects</a>
          </li>
        </ul>
        <div class="form-inline my-2 my-lg-0"">
            {* ------------------------------ *}
            {if $logged_s}
                  {if $is_admin_s}
                        <a class=" btn btn-outline-light ml-4 mt-1" href="admin">Admin</a>
                  {/if}
              <a class="btn btn-outline-green ml-4 mt-1 font-weight-bold">{$username_s}</a>
              <a class="btn btn-outline-red ml-4 mt-1" href="logout">Sign out</a>
              {* ------------------------------ *}
            {else}
              <a class="btn btn-outline-light ml-4 mt-1" href="login">
                Sign In
              </a>
              <a class="btn btn-outline-light ml-4 mt-1" href="sign-up">
                Sign Up
              </a>
            {/if}
            {* ------------------------------ *}
        </div>
      </div>
    </nav>
  </header>