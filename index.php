<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/title-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/title-icon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="description" content="Online Plain Text or String Minifier / Compressor. Simple, Quick, and Fast.">
  <meta name="author" content="Fiko Tobel">
  <meta name="keywords" content="js minifier, string minifier, css minifier, html minifier, minifier, compressor, text minifier, plain text minifier, tobelsoft, wiji fiko teren, fiko tobel, developer of tobelsoft">
  <meta name="robots" content="index, follow">
  <meta name="language" content="English">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?= 'http://' . $_SERVER['SERVER_NAME'] ?>">
  <meta property="og:title" content="Minifier - TobelSoft">
  <meta property="og:description" content="Online Plain Text or String Minifier / Compressor. Simple, Quick, and Fast.">
  <meta property="og:image" content="<?= 'http://' . $_SERVER['SERVER_NAME'] ?>/assets/img/title-icon.png">
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="<?= 'http://' . $_SERVER['SERVER_NAME'] ?>">
  <meta property="twitter:title" content="Minifier - TobelSoft">
  <meta property="twitter:description" content="Online Plain Text or String Minifier / Compressor. Simple, Quick, and Fast.">
  <meta property="twitter:image" content="<?= 'http://' . $_SERVER['SERVER_NAME'] ?>/assets/img/title-icon.png">
  <title>
    Minifier - TobelSoft
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="./assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
</head>

<body class="index-page sidebar-collapse">
  <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="<?= 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>" rel="tooltip" data-placement="bottom">
          STRING MINIFIER
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar top-bar"></span>
          <span class="navbar-toggler-bar middle-bar"></span>
          <span class="navbar-toggler-bar bottom-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="./assets/img/blurred-image-1.jpg">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link download" href="javascript:void(0)">
              <i class="now-ui-icons arrows-1_cloud-download-93"></i>
              <p>Download for Windows</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" data-placement="bottom" href="https://facebook.com/fiko.tobel" target="_blank">
              <i class="fab fa-facebook"></i>
              <p class="d-lg-none d-xl-none">Facebook</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" data-placement="bottom" href="https://github.com/fiko942" target="_blank">
              <i class="fab fa-github"></i>
              <p class="d-lg-none d-xl-none">Github</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" data-placement="bottom" href="https://www.instagram.com/fikotobel/" target="_blank">
              <i class="fab fa-instagram"></i>
              <p class="d-lg-none d-xl-none">Instagram</p>
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" rel="tooltip" data-placement="bottom" href="https://www.linkedin.com/in/fiko-tobel-4a7a00219/" target="_blank">
              <i class="fab fa-linkedin"></i>
              <p class="d-lg-none d-xl-none">LinkedIn</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" data-placement="bottom" href="https://wa.me/+14127755084" target="_blank">
              <i class="fab fa-whatsapp"></i>
              <p class="d-lg-none d-xl-none">WhatsApp</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="wrapper">
    <div class="page-header clear-filter" filter-color="orange">
      <div class="page-header-image" data-parallax="true" style="background-image:url('./assets/img/header.jpg');">
      </div>
      <div class="container">
        <div class="content-center brand">
          <img class="n-logo" src="./assets/img/icon.png" alt="">
          <h1 class="h1-seo">String Minifier</h1>
          <h3>Online Plain Text or String Minifier / Compressor. Simple, Quick, and Fast.
          </h3>
        </div>
        </div>
    </div>
    <div class="main">
      <div class="section section-tabs">
        <div class="container">
          <div class="row">
            <div class="col-md col-xl mr-auto">
              <p class="category">Plain Text or String</p>
              <div class="card">
                <div class="card-body">
                  <textarea type="text" placeholder="..." class="form-control plain-text" rows="5"></textarea>
                </div>
                <div class="card-footer ml-2">
                  <button class="btn btn-sm btn-clear-field">Clear field</button>
                </div>
              </div>
            </div>
            <div class="col-md-10 ml-auto col-xl-6 mr-auto">
              <p class="category">Minified Output</p>
              <div class="card">
                <div class="card-body">
                  <textarea type="text" placeholder="..." class="form-control minified-text" rows="5"></textarea>
                </div>
                <div class="card-footer ml-2">
                  <button class="btn btn-sm btn-select">Select All</button>
                  <button class="btn btn-sm btn-copy">Copy to clipboard</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade modal-mini modal-primary" id="mini-modal" tabindex="-1" role="dialog" aria-labelledby="mini-modal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header justify-content-center">
            <div class="modal-profile">
              <i class="fas fa-fw fa-clipboard-check"></i>
            </div>
          </div>
          <div class="modal-body">
            <p id="interactiveMsg"></p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-link btn-neutral" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer" data-background-color="black">
      <div class=" container ">
        <nav>
          <ul>
            <li>
              <a href="<?= 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>">
                STRING MINIFIER
              </a>
            </li>
            <li>
              <a href="https://resume.tobelsoft.my.id/" target="_blank">
                About Us
              </a>
            </li>
          </ul>
        </nav>
        <div class="copyright" id="copyright">
          &copy;
          <script>
            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
          </script>
          <a href="https://tobelsoft.my.id" target="_blank">TobelSoft</a>.
        </div>
      </div>
    </footer>
  </div>
  <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="./assets/js/plugins/bootstrap-switch.js"></script>
  <script src="./assets/js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>
  <script>
    function scrollToDownload() {
      if ($('.section-download').length != 0) {
            $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }
    $(document).ready(function(){
      setInterval(function(){
        compressing($('.form-control.plain-text').val());
      }, 200);
    });
    $('.btn-clear-field').click(function(){
      $('.form-control.plain-text').val('');
      $('.form-control.minified-text').val('');
    });
    function compressing(text){
      try
        {
          if($('.form-control.plain-text').val() == ''){
          $('.form-control.minified-text').val('');
        }  else {
          let text_minified = text.replace(/(\r\n|\n|\r)/gm, "").replace(/^\s+|\s+$/gm,'').replace(/\s+/g, ' ').trim();
          $('.form-control.minified-text').val(text_minified);  
          return true;
        }
      } catch(error){
        return false; 
      }
    }
    $('.btn-select').click(function(){
      selectAll();
    });

    function selectAll(){
      var minified_field = $('.form-control.minified-text').val();
      document.querySelector('.form-control.minified-text').select();
    }
    $('.btn-copy').click(function(){
      selectAll();
      document.execCommand('copy');
      var comp = $('.form-control.minified-text').val();
      var valLength = comp.length;
      document.querySelector('.modal-body #interactiveMsg').innerText = "Well Done. \n " + valLength.toString() + " Characters was copied to clipboard";
      $('#mini-modal').modal('show');
    });
    $('.nav-link.download').click(function(){
      window.open('./download/String Minifier - Portable.exe', '_blank');
    })
  </script>
</body>
</html>