<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="style-p.css">
    <link rel="icon" href="img/door.png">


    <title>Shop | Heyaimo</title>
  </head>

  <body>

    <div id="topBar"></div>
    <header>
      <div id="bg">
      </div>
      <div class="header-nav-wrap">
        <h1 id="logo">
          <a href="index.html">
            <img src="img/heyaimo-logo.png" width="200" draggable="false">
          </a>
        </h1>
        <nav class="header-nav">
         <ul class="nav">
            <li class="nav-item">
              <a class="nav-link active" href="story.html">STORY</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="world.html">WORLD</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="chara01.html">CHARACTER</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="gallery.html">GALLERY</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="shop.php">SHOP</a>
            </li>
          </ul>
        </nav>
      </div>
      <div class="jumbotron"></div>
    </header>
    <main>
      <div id="ai-bar" class="chara-bar"></div>
      <section class="main-wrap">
        <span class="chara-catch set-anime" style="opacity: 1; transform: translate(0px, 0px);">
          <h4>Be patience, the game is not released yet</h4>
        </span>
        <p class="chara-catch set-anime">Pre-order Now!</p>
        <hr style="width: 40%; height: 1px;text-align: left;margin-left: 0; color: #000032; border: none; background-color: #000032; ">
        <p class="shop-txt">Please fill this form so we can notify you when the game is releases</p>
        <form action="add.php" method="post">
          <div class="form-group row shop-bar">
            <label for="inputName" class="col-sm-1 col-form-label">Name</label>
            <div class="col-sm-4">
              <input type="text" name="name" id="inputName" class="form-control" placeholder="Your name" autofocus>
            </div>
          </div>
          <div class="form-group row shop-bar">
            <label for="inputEmail" class="col-sm-1 col-form-label">Email</label>
            <div class="col-sm-4">
              <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Your email address">
            </div>
          </div>
          <div class="btn-wrap">
          <button type="submit" class="btn btn-success">Pre-order</button>
        </div>
        </form>
        <hr style="width: 40%; height: 1px;text-align: left;margin-left: 0; color: #000032; border: none; background-color: #000032; ">
        <figure id="ai-stand" class="chara-stand" style="opacity: 1; transform: translate(0px, 0px);">
          <img src="img/figure/aysha-figure.png" alt="ai" width="423.6" height="848.4" draggable="false">
        </figure>
      </section>
      <div class="chara-footbg">
        <div class="chara-footbg-box"></div>
      </div>

    </main>
    <div id="toppage" style="bottom: 80px; display: block;">
      <a href="#">
        <img alt="toppage" src="img/tapetop.png" width="69">
      </a>
    </div>
    <footer id="footer">
      <div class="footer-inner">
        <div class="footer-wrap">
          <nav id="footer-nav">
            <ul>
              <li id="footer-ttl" class="footer-nav-list">
                <a href="#">Home</a>
              </li>
              <li id="footer-st" class="footer-nav-list">
                <a href="story.html">Story</a>
              </li>
              <li id="footer-world" class="footer-nav-list">
                <a href="world.html">World</a>
              </li>
              <li id="footer-chara" class="footer-nav-list">
                <a href="chara01.html">Character</a>
              </li>
              <li id="footer-gal" class="footer-nav-list">
                <a href="gallery.html">Gallery</a>
              </li>
              <li id="footer-home"></li>
              <li id="footer-tw"></li>
            </ul>
          </nav>
        </div>
        <p id="copyright">
          <small>Copyright @ 2021 AK Project. </small>
        </p>
      </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script>
      var toppage = document.getElementById("toppage");
      window.onscroll = function() {scrollFunction()};
      function scrollFunction() {
        if (document.body.scrollTop > 500 ||
          document.documentElement.scrollTop > 500 ) {
          toppage.style.display = "block";
        } else {
          toppage.style.display = "none";
        }
      }
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel%401.8.1/slick/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>