<?php 

$metaTitle="titolo";
$metaDesc="Desc";
$metaKey="KeyW";

include('include/meta.php');
include('include/header.php'); ?>

</head>
<body>
<div class="section">
  <div class="container"> 
    
    <!-- Header -->
    <div class="row">
      <div class="span6">
        <p class="logo"><a href="#"><span>Perfetto</span></a></p>
      </div>
      <div class="span6">
        <div class="top-header text-right"><em>call us (123) 456 7890 - <a href="#">my@mail.com</a></em>
          <div class="social"><a href="#" class="ico-rss"><img src="img/rss-icon.png" alt="Rss" /></a> <a href="#" class="ico-flickr"><img src="img/flickr-icon.png" alt="Flickr" /></a> <a href="#" class="ico-google-plus"><img src="img/google-plus-icon.png" alt="Google Plus" /></a> <a href="#" class="ico-twitter"><img src="img/twitter-icon.png" alt="Twitter" /></a> <a href="#" class="ico-facebook"><img src="img/facebook-icon.png" alt="Facebook" /></a></div>
        </div>
        <form action="" class="header-search">
          <fieldset>
            <legend>Search</legend>
            <input type="text" />
            <button type="submit" class="btn"><i class="icon-search"></i></button>
          </fieldset>
        </form>
      </div>
    </div>
    
    <!-- Navbar -->
    <div class="navbar" id="nav-follow">
      <div class="navbar-inner">
        <div class="container"><a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar"><i class="icon-th-list"></i></a> <a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="brand">Navbar</a>
          <div class="nav-collapse collapse navbar-responsive-collapse">
            <ul class="nav">
              <li class="dropdown active"><a href="index.html">Home</a> <b class="caret"></b> <span>Let's Start</span>
                <ul>
                  <li><a href="index.html">Variant 1</a></li>
                  <li><a href="index2.html">Variant 2</a></li>
                  <li><a href="index3.html">Variant 3</a></li>
                  <li class="current"><a href="index4.html">Variant 4</a></li>
                  <li><a href="index5.html">Variant 5</a></li>
                </ul>
              </li>
              <li><a href="features.html">Features</a> <span>subtitle here</span></li>
              <li class="dropdown"><a href="about.html">Pages</a> <b class="caret"></b> <span>Base Css</span>
                <ul>
                  <li><a href="about.html">About</a></li>
                  <li><a href="services.html">Services</a></li>
                  <li><a href="full-width.html">Full Width</a></li>
                  <li><a href="left-sidebar.html">Left Sidebar</a></li>
                  <li><a href="right-sidebar.html">Right Sidebar</a></li>
                  <li><a href="contact.html">Contact</a></li>
                  <li><a href="page404.html">Page 404</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="portfolio-columns.html">Portfolio</a> <b class="caret"></b> <span>All my Works</span>
                <ul>
                  <li class="nav-header">Portfolio Variants</li>
                  <li><a href="portfolio-columns.html">Columns Variants</a></li>
                  <li><a href="portfolio-columns-slider.html">Slider + Columns</a></li>
                  <li><a href="portfolio-masonry-slider.html">Slider + Masonry</a></li>
                  <li><a href="portfolio-masonry.html">Masonry</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">Single Portfolio</li>
                  <li><a href="portfolio-single-1.html">Single Variant 1</a></li>
                  <li><a href="portfolio-single-2.html">Single Variant 2</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="forum.html">Forum</a> <b class="caret"></b> <span>Let's Talk About</span>
                <ul>
                  <li><a href="forum.html">Forum Table</a></li>
                  <li><a href="forum-single.html">Single Topic</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="blog-columns.html">Blog</a> <b class="caret"></b> <span>New Top Stories</span>
                <ul>
                  <li class="nav-header">Home Blog</li>
                  <li><a href="blog-columns.html">Slider + Columns Variants</a></li>
                  <li><a href="blog-columns-side.html">Slider + Columns + Sidebar</a></li>
                  <li><a href="blog-list.html">Slider + Simple List + Sidebar</a></li>
                  <li><a href="blog-masonry-slider.html">Slider + Masonry</a></li>
                  <li><a href="blog-masonry.html">Masonry</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">Single Post</li>
                  <li><a href="blog-post-1.html">Single Variant 1</a></li>
                  <li><a href="blog-post-2.html">Single Variant 2</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <hr />
  </div>
  <div class="container">
    <div class="row"> 
      
      <!-- Breadcrumb and Title -->
      <div class="span12">
        <h1 class="no-margin">Perfeto</h1>
        <p class="lead">it's just a site templates</p>
      </div>
    </div>
  </div>
</div>

<!-- Masonry -->
<div id="masonry">
  <div class="single big">
    <h3><a href="#">Cyril Hahn</a></h3>
    <em class="data-time">by <a href="#">Admin</a> on <span>April 20th</span>, 2013</em> <a href="img/example-slide-1.jpg" title="Cyril Hahn" rel="masonry" class="fancybox"><img src="img/example-slide-1.jpg" alt="Cyril Hahn" /> <span class="view"><i class="icon-search icon-white"></i></span></a>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam <strong>nonummy nibh euismod</strong>.</p>
  </div>
  <div class="single">
    <h3><a href="#">RA Loves Lea Peckre</a></h3>
    <em class="data-time">by <a href="#">Admin</a> on <span>April 20th</span>, 2013</em> <a href="img/example-slide-1.jpg" title="Lea Peckre Rachael" rel="masonry" class="fancybox"><img src="img/example-slide-1.jpg" alt="Lea Peckre Rachael" /> <span class="view"><i class="icon-search icon-white"></i></span></a>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>
    <a href="#" class="btn btn-primary">Continue</a> </div>
  <div class="single">
    <h3><a href="#">Articolo nel box</a></h3>
    <em class="data-time">by <a href="#">Admin</a> on <span>April 20th</span>, 2013</em>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>
  </div>
  <div class="single">
    <h3><a href="#">The Box Boutique’s New Shoe Classic</a></h3>
    <em class="data-time">by <a href="#">Admin</a> on <span>April 20th</span>, 2013</em> <a href="img/example-slide-1.jpg" title="Box Boutique" rel="masonry" class="fancybox"><img src="img/example-slide-1.jpg" alt="Box Boutique" /> <span class="view"><i class="icon-search icon-white"></i></span></a>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>
  </div>
  <div class="single">
    <h3><a href="#">Craig-Lawrence</a></h3>
    <em class="data-time">by <a href="#">Admin</a> on <span>April 20th</span>, 2013</em> <a href="img/example-slide-1.jpg" title="Craig Lawrence" rel="masonry" class="fancybox"><img src="img/example-slide-1.jpg" alt="Craig Lawrence" /> <span class="view"><i class="icon-search icon-white"></i></span></a></div>
  <div class="single">
    <h3><a href="#">Trine Lindegaard</a></h3>
    <em class="data-time">by <a href="#">Admin</a> on <span>April 20th</span>, 2013</em> <a href="img/example-slide-1.jpg" title="Trine Lindegaard" rel="masonry" class="fancybox"><img src="img/example-slide-1.jpg" alt="Trine Lindegaard" /> <span class="view"><i class="icon-search icon-white"></i></span></a>
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit morem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam <strong>nonummy nibh euismod</strong>.</p>
    <a href="#" class="btn btn-primary">Continue</a> </div>
</div>
<div class="section">
  <div class="container">
    <hr />
    <div class="row"> 
      
      <!-- Recent Works -->
      <div class="span12">
        <h2>Recent Works</h2>
        <p class="lead">Subtitle here...</p>
        <ul class="thumbnails">
          <li class="span3">
            <div class="thumbnail"><a href="img/example-slide-1.jpg" title="Box Boutique" rel="thumbnails" class="thumb fancybox"><img src="img/example-slide-1.jpg" alt="Photo" /> <span class="view"><i class="icon-search icon-white"></i></span></a>
              <div class="caption">
                <h3><a href="#">Cyril Hahn</a></h3>
                <em class="data-time">by <a href="#">Admin</a> on <span>April 20th</span>, 2013</em>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam <strong>nonummy nibh euismod</strong>.</p>
                <a class="btn btn-primary" href="#">View</a></div>
            </div>
          </li>
          <li class="span3">
            <div class="thumbnail"><a href="img/example-slide-2.jpg" title="Box Boutique" rel="thumbnails" class="thumb fancybox"><img src="img/example-slide-2.jpg" alt="Photo" /> <span class="view"><i class="icon-search icon-white"></i></span></a>
              <div class="caption">
                <h3><a href="#">Cyril Hahn</a></h3>
                <em class="data-time">by <a href="#">Admin</a> on <span>April 20th</span>, 2013</em>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam <strong>nonummy nibh euismod</strong>.</p>
                <a class="btn btn-primary" href="#">View</a></div>
            </div>
          </li>
          <li class="span3">
            <div class="thumbnail"><a href="img/example-slide-3.jpg" title="Box Boutique" rel="thumbnails" class="thumb fancybox"><img src="img/example-slide-3.jpg" alt="Photo" /> <span class="view"><i class="icon-search icon-white"></i></span></a>
              <div class="caption">
                <h3><a href="#">Cyril Hahn</a></h3>
                <em class="data-time">by <a href="#">Admin</a> on <span>April 20th</span>, 2013</em>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam <strong>nonummy nibh euismod</strong>.</p>
                <a class="btn btn-primary" href="#">View</a></div>
            </div>
          </li>
          <li class="span3">
            <div class="thumbnail"><a href="img/example-slide-4.jpg" title="Box Boutique" rel="thumbnails" class="thumb fancybox"><img src="img/example-slide-4.jpg" alt="Photo" /> <span class="view"><i class="icon-search icon-white"></i></span></a>
              <div class="caption">
                <h3><a href="#">Cyril Hahn</a></h3>
                <em class="data-time">by <a href="#">Admin</a> on <span>April 20th</span>, 2013</em>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam <strong>nonummy nibh euismod</strong>.</p>
                <a class="btn btn-primary" href="#">View</a></div>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <hr />
    <div class="row"> 
      
      <!-- Services List -->
      <div class="span12">
        <p class="lead">Services List</p>
        <ul class="thumbnails">
          <li class="span3">
            <div class="text-center"><img src="img/ico-pil-big.png" /><br />
              <a href="#" class="btn half-margin">Responsive Design</a>
              <p class="caption">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus <strong>scelerisque ante sollicitudin</strong> commodo.</p>
            </div>
          </li>
          <li class="span3">
            <div class="text-center"><img src="img/ico-cog-big.png" /><br />
              <a href="#" class="btn half-margin">Responsive Design</a>
              <p class="caption">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus <strong>scelerisque ante sollicitudin</strong> commodo.</p>
            </div>
          </li>
          <li class="span3">
            <div class="text-center"><img src="img/ico-vig-big.png" /><br />
              <a href="#" class="btn half-margin">Responsive Design</a>
              <p class="caption">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus <strong>scelerisque ante sollicitudin</strong> commodo.</p>
            </div>
          </li>
          <li class="span3">
            <div class="text-center"><img src="img/ico-monitor-big.png" /><br />
              <a href="#" class="btn half-margin">Responsive Design</a>
              <p class="caption">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus <strong>scelerisque ante sollicitudin</strong> commodo.</p>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <hr />
    <div class="row"> 
      
      <!-- Skills -->
      <div class="span12">
        <p class="lead">Our Skills</p>
        <ul class="thumbnails">
          <li class="span4">
            <h3 class="half-margin">Skill 2</h3>
            <div class="progress">
              <div class="bar black" style="width: 90%;">CSS</div>
            </div>
            <div class="progress">
              <div class="bar black" style="width: 85%;">HTML</div>
            </div>
            <div class="progress">
              <div class="bar black" style="width: 70%;">jQuery</div>
            </div>
          </li>
          <li class="span4">
            <h3 class="half-margin">Skill 2</h3>
            <div class="progress">
              <div class="bar" style="width: 90%;">CSS</div>
            </div>
            <div class="progress">
              <div class="bar" style="width: 85%;">HTML</div>
            </div>
            <div class="progress">
              <div class="bar" style="width: 70%;">jQuery</div>
            </div>
          </li>
          <li class="span4">
            <h3 class="half-margin">Skill 3</h3>
            <div class="progress">
              <div class="bar" style="width: 60%;">60%</div>
              <div class="bar black" style="width: 40%;">40%</div>
            </div>
            <div class="progress">
              <div class="bar" style="width: 25%;">25%</div>
              <div class="bar black" style="width: 75%;">75%</div>
            </div>
            <div class="progress">
              <div class="bar" style="width: 50%;">50%</div>
              <div class="bar black" style="width: 50%;">50%</div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- Wide Banner -->
<div class="wide-bg">
  <div class="container">
    <div class="row">
      <div class="span4 text-right">
        <div class="desc">
          <h1 class="no-margin">Banner</h1>
          <p class="lead">Lorem ipsum <strong>nonummy</strong></p>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, dolor sit amet, consectetuer adipiscing elit, sed diam <strong>nonummy nibh euismod</strong>.</p>
          <a class="btn btn-primary btn-large">Learn more</a> </div>
      </div>
      <div class="span4"><img src="img/desktop.jpg" alt="Banner" class="center" /></div>
      <div class="span4">
        <div class="desc">
          <h2>Another title</h2>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, dolor sit amet, consectetuer adipiscing elit, sed diam <strong>nonummy nibh euismod</strong>.</p>
          <a class="btn">Learn more</a></div>
      </div>
    </div>
  </div>
</div>
<div class="section">
  <div class="container"> 
    
    <!-- Footer -->
    <div class="row">
      <div class="span12">
        <div class="footer">
          <hr />
          <p class="text-center">&copy; 2013 <strong>My Company</strong><br />
            123 Yellow Av. New York - P: (123) 456 7890</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Settings ( you can remove it ) -->
<div class="settings"><a href="#settingsColor" class="btn-settings" data-toggle="modal"><i class="icon-cog icon-white"></i></a></div>
<div id="settingsColor" class="modal hide fade settings-cont" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Customize the Template</h3>
  </div>
  <div class="modal-body">
    <div style="width: 50%; float: left;">
      <h4 class="half-margin">Navbar</h4>
      <ul class="inline change-navbar">
        <li class="bordered"><a href="#" name="navbar-static">Static</a></li>
        <li class="bordered"><a href="#" name="navbar-fixed">Fixed</a></li>
      </ul>
    </div>
    <div style="width: 50%; float: right;">
      <h4 class="half-margin">Change Layout</h4>
      <ul class="inline change-layout">
        <li class="bordered"><a href="#" name="wide">Wide</a></li>
        <li class="bordered"><a href="#" name="boxed">Boxed</a></li>
      </ul>
    </div>
    <div class="clearfix"></div>
    <hr class="change-bg" style="display: none;" />
    <h4 class="half-margin change-bg" style="display: none;">Change Background</h4>
    <ul class="inline change-bg" style="display: none;">
      <li><a href="#"><img src="img/bg/bar-bg.png" /></a></li>
      <li><a href="#"><img src="img/bg/cross-bg.png" /></a></li>
      <li><a href="#"><img src="img/bg/diag-bg.png" /></a></li>
      <li><a href="#"><img src="img/bg/grain-bg.png" /></a></li>
      <li><a href="#"><img src="img/bg/paper-bg.png" /></a></li>
      <li><a href="#"><img src="img/bg/plaster-bg.png" /></a></li>
      <li><a href="#"><img src="img/bg/sand-bg.png" /></a></li>
      <li><a href="#"><img src="img/bg/square-bg.png" /></a></li>
      <li><a href="#"><img src="img/bg/color-bg.jpg" /></a></li>
      <li><a href="#"><img src="img/bg/mix-bg.jpg" /></a></li>
      <li><a href="#"><img src="img/bg/row-bg.jpg" /></a></li>
      <li><a href="#"><img src="img/bg/parquet-bg.jpg" /></a></li>
    </ul>
    <div class="clearfix"></div>
    <hr />
    <h4 class="half-margin">Change Color</h4>
    <ul class="inline change-color">
      <li data-class="dark-grey" class="dark-grey"><a href="#"><span>dark-grey</span></a></li>
      <li data-class="purple" class="purple"><a href="#"><span>purple</span></a></li>
      <li data-class="violet" class="violet"><a href="#"><span>violet</span></a></li>
      <li data-class="dark-red" class="dark-red"><a href="#"><span>dark-red</span></a></li>
      <li data-class="orange" class="orange"><a href="#"><span>orange</span></a></li>
      <li data-class="deep-yellow" class="deep-yellow"><a href="#"><span>deep-yellow</span></a></li>
      <li data-class="gold" class="gold"><a href="#"><span>gold</span></a></li>
      <li data-class="olive" class="olive"><a href="#"><span>olive</span></a></li>
      <li data-class="acid-green" class="acid-green"><a href="#"><span>acid-green</span></a></li>
      <li data-class="aqua-green" class="aqua-green"><a href="#"><span>aqua-green</span></a></li>
      <li data-class="water" class="water"><a href="#"><span>water</span></a></li>
      <li data-class="sky" class="sky"><a href="#"><span>sky</span></a></li>
    </ul>
    <div class="clearfix"></div>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
  </div>
</div>

<!-- Go to top page -->
<div id="toTop">Top</div>


<?php include('include/script.php'); ?>

</body>
</html>