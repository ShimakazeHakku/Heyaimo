<?php
session_start();

// check if any username's session
// if aren't, will be redirect to index page
if (empty($_SESSION['username'])) {
  header("Location: mimin.php");
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="style-m.css">
    <link rel="icon" href="img/chara-ico/chara02.png">


    <title>Senpai.php</title>
  </head>
  <body>
    <div id="index" class="container">
      <div class="head-menu">
        <ul class="head-menu-list">
          <li class="list-head">
            <a href="">
              <img src="img/chara-ico/yuka-tehe.png" width="70" height="70">
            </a>
          </li>
          <li class="list-head">
            <a><?php echo $_SESSION['username']; ?></a>
          </li>
          <li class="list-head">
            <a href="#home">HOME</a>
          </li>
          <li class="list-head">
            <a href="#customer">CUSTOMER</a>
          </li>
        </ul>
      </div>
      <div class="all-wrap">
        <div class="all-inner">
          <section id="home">
            <div class="hero">
            <div class="hero-logo">
              <p>
                Okaerinasai <?php echo $_SESSION['username']; ?>
              </p>
            </div>
            <div class="hero-lead">
              <p>
                Do you wanna check our customer again ?
                <br>
              </p>
            </div>
            <figure id="ai-stand" class="chara-stand" style="opacity: 1; transform: translate(0px, 0px);">
            <img src="img/figure/yuka-figure.png" alt="ai" draggable="false">
            </figure>
           </div>
           </div>
           <div class="mouse"></div>
         </section>
         <section id="customer">
          <div class="header-table">
            <h1>Customer</h1>
          </div>
           <div class="wrap-table">
             <table class="table table-bordered">
               <thead>
                 <tr>
                   <th scope="col">No</th>
                   <th scope="col">Name</th>
                   <th scope="col">Email</th>
                 </tr>
               </thead>
               <tbody>
                <?php
                  include 'connection.php';
                  $no = 1;
                  $data = mysqli_query($connection, "SELECT * FROM customer");
                  while ($d = mysqli_fetch_array($data)){
                  ?>
                  <tr>
                    <td class="table-secondary"><?php echo $no++; ?></td>
                    <td class="table-secondary"><?php echo $d['name']; ?></td>
                    <td class="table-secondary"><?php echo $d['email']; ?></td>
                  </tr>
                  <?php
                  }
                ?>
               </tbody>
             </table>
           </div>
         </section>
      </div>
    </div>
  </body>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel%401.8.1/slick/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>