<?php
  $weather = "";
  $error = "";
  if (array_key_exists('city', $_GET)) {
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>今日の天気を見てみよう</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
      <style type="text/css">
      html { 
        background: url(background.jpeg) no-repeat center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        }
        body {
          background: none;
        }
        .container { 
          text-align: center;
          margin-top: 100px;
          width: 450px;
        }
        input {
          margin: 20px 0;
        }
        #weather {
          margin-top:15px; 
        }
      </style>
  </head>
  <body>
      <div class="container">
          <h2>今日の天気を見てみよう</h2>
          <form>
  <fieldset class="form-group">
    <label for="city">検索したい住所を入れてください.</label>
    <input type="text" class="form-control" name="city" id="city" placeholder="Eg. London, Tokyo" value = "<?php 
																										   
    if (array_key_exists('city', $_GET)) { 
    echo $_GET['city']; 
    }
    ?>">
  </fieldset>
  <button type="submit" class="btn btn-primary">Serch!</button>
</form>
  <div id="weather"><?php 
      if ($weather) {
        echo '<div class="alert alert-success"
        role="alert">'.$weather.'
  </div>';
      } else if ($error) {
        echo '<div class="alert alert-danger" role="alert">
      '.$error.'
    </div>'; 
      }?></div>
</div>
    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
  </body>
</html>