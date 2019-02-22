<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">


    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/responsive.css">

</head>
<body>
<header class="container-fluid transparent">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent text-white" style="padding-top: 30px;">
          <a class="navbar-brand text-white" href="#" style="font-size: 1.7rem;font-family: Monoton;">Dreamshop</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link text-white" href="#">HOME <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#" style="color: #fff;">SHOP</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">ABOUT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">BLOG</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">CART</a>
              </li>
            </ul>
          </div>
        </nav>
    </div>
</header>

<section class="container-fluid mb-5 pb-5"  style="background-color: #0d2632;color: white;padding-top: 20px;">
    <div class="container pb-5">
        <div class="row justify-content-center pb-5">
            <div class="col-md-5">
              <div class="l-header" style="margin-bottom: 30px;">
                    <p class="mt-5" style="font-size: 26px;font-color: #fff;text-align: left;font-weight: bold;line-height: 1.5;">
                        Defined by Service & Expertise
                    </p>
                </div>
                <div class="p-header">
                    <p style="margin-bottom: 26px;color: #fff;font-size: 18px;font-weight: normal;font-family: 'PT Sans', sans-serif;">Our passion is to offer you the best deals. While stock lasts.
                     </p>
                </div>
                <div class="hero-buttons">
                        <a href="#" class="button button-white">Button 1</a>
                        <a href="#" class="button button-white">Button 2</a>
                    </div>
            </div>
            <div class="col-md-5">
                <div class="hero-images col-md-6">
                    <img src="/img/macbook-pro-laravel.png"  alt="traingles">
                </div>
            </div>
        </div>
    </div>
</section>

    <header>
        <!-- <div class="top-nav container">
            <div class="logo" style="font-family: Monoton;">CSS GRID EXAMPLE</div>
            <ul>
                <li><a href="#">Shop</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Cart</a></li>
            </ul>
        </div> --> <!-- end-top-nav -->

        <!-- <div class="hero container">
            <div class="row">
                <div class="col-md-6">
                    <div class="hero-copys">
                        <h1>CSS GRID EXAMPLE</h1>
                        <p>A practical guide to learning CSS GRID</p>
                        <div class="hero-buttonss">
                            <a href="#" class="button button-white">Button 1</a>
                            <a href="#" class="button button-white">Button 2</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="hero-images col-md-6">
                        <img src="/img/macbook-pro-laravel.png" alt="traingles">
                    </div>
                </div>
            </div>
            
        </div> --> <!-- end-hero -->

        
    </header>

    <div class="featured-section">
        <div class="container">
            <h1 class="text-center">CSS Grid Example</h1>

            <p class="section-description text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aliquid earum fugiat debitis nam, illum vero, maiores odio exercitationem quaerat. Impedit iure fugit veritatis cumque quo provident doloremque est itaque.</p>

            <div class="text-center button-container">
                <a href="#" class="button">Featured</a>
                <a href="#" class="button">On Sale</a>
            </div>


            <div class="products text-center">
                <div class="products text-center">
                    <div class="product">
                        <a href="#"><img src="/img/macbook-pro.png" alt="macbook"></a>
                        <a href="#"><span class="product-name">Macbook Pro</span></a>
                        <div class="product-price">RM4999.99</div>
                    </div>
                </div>
                <div class="products text-center">
                    <div class="product">
                        <a href="#"><img src="/img/macbook-pro.png" alt="macbook"></a>
                        <a href="#"><span class="product-name">Macbook Pro</span></a>
                        <div class="product-price">RM4999.99</div>
                    </div>
                </div>
                <div class="products text-center">
                <div class="product">
                        <a href="#"><img src="/img/macbook-pro.png" alt="macbook"></a>
                        <a href="#"><span class="product-name">Macbook Pro</span></a>
                        <div class="product-price">RM4999.99</div>
                    </div>
                </div>
                <div class="products text-center">
                    <div class="product">
                        <a href="#"><img src="/img/macbook-pro.png" alt="macbook"></a>
                        <a href="#"><span class="product-name">Macbook Pro</span></a>
                        <div class="product-price">RM4999.99</div>
                    </div>
                </div>
                <div class="products text-center">
                    <div class="product">
                        <a href="#"><img src="/img/macbook-pro.png" alt="macbook"></a>
                        <a href="#"><span class="product-name">Macbook Pro</span></a>
                        <div class="product-price">RM4999.99</div>
                    </div>
                </div>
                <div class="products text-center">
                    <div class="product">
                        <a href="#"><img src="/img/macbook-pro.png" alt="macbook"></a>
                        <a href="#"><span class="product-name">Macbook Pro</span></a>
                        <div class="product-price">RM4999.99</div>
                    </div>
                </div>
                <div class="products text-center">
                    <div class="product">
                        <a href="#"><img src="/img/macbook-pro.png" alt="macbook"></a>
                        <a href="#"><span class="product-name">Macbook Pro</span></a>
                        <div class="product-price">RM4999.99</div>
                    </div>
                </div>
                <div class="products text-center">
                    <div class="product">
                        <a href="#"><img src="/img/macbook-pro.png" alt="macbook"></a>
                        <a href="#"><span class="product-name">Macbook Pro</span></a>
                        <div class="product-price">RM4999.99</div>
                    </div>
                </div>
            </div> <!-- end products -->

            <div class="text-center button-container">
                <a href="#" class="button">View more products</a>
            </div>

        </div> <!-- end container -->

    </div> <!-- end featured-section -->

    <div class="blog-section">
        <div class="container">
            <h1 class="text-center">From Our Blog</h1>

            <p class="section-description text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et sed accusantium maxime dolore cum provident itaque ea, a architecto alias quod reiciendis ex ullam id, soluta deleniti eaque neque perferendis.</p>

            <div class="blog-posts">
                <div class="blog-post" id="blog1">
                    <a href="#"><img src="/img/blog1.png" alt="blog image"></a>
                    <a href="#"><h2 class="blog-title">Blog Post Title 1</h2></a>
                    <div class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est ullam, ipsa quasi?</div>
                </div>
                <div class="blog-post" id="blog2">
                    <a href="#"><img src="/img/blog1.png" alt="blog image"></a>
                    <a href="#"><h2 class="blog-title">Blog Post Title 2</h2></a>
                    <div class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est ullam, ipsa quasi?</div>
                </div>
                <div class="blog-post" id="blog3">
                    <a href="#"><img src="/img/blog1.png" alt="blog image"></a>
                    <a href="#"><h2 class="blog-title">Blog Post Title 3</h2></a>
                    <div class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est ullam, ipsa quasi?</div>
                </div>
            </div> <!-- end blog-posts -->
        </div> <!-- end container -->
    </div> <!-- end blog-section -->

<section class="followus" style="background-color: #0d2632;color: white;padding-top: 20px;">
    <div class="container">
        <div class="row">
            <nav class="col-md-5" id="follow-us">
                <div class="grid">
                    <div class="container m-0 p-0">
                      <h1 class="text-center" style="font-family: 'Monoton', cursive;"><strong>IMDREAMSHOP</strong></h1>
                      <h2 class="text-center" style="font-family: 'Alice', serif;"><strong>- visionshop -</h2>
                        <br>
                        <br>
                        <br>
                        <!-- <p style="font-family: 'Bad Script', cursive;">contact | hello@imraphraph.com.au</p> -->
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="row justify-content-center">
      <p style="font-family: 'Bad Script', cursive;">contact | hello@imdreamshop.com.au</p>
    </div><br><br>
    <hr class="hr-footer">
    <div class="row justify-content-center">
        <small>© <span class="current-year">2019</span> imdreamshop visionshop - All rights reserved.</small>
    </div><br><br>
</section>


</body>
</html>
