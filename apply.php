<!-- for posted opportunity-->
<!DOCTYPE html>
<!-- Path: post.html -->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Yotunities | Apply Now</title>
        <link rel="stylesheet" href="post.css">
        <link rel="shortcut icon" href="icons/opportunity.png" type="image/png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
      </head>
      <body>

<!-- navbar-->
<div class="wrapper">
  <header>
      <div class="logo">
          <a href="index.html"><img src="icons/opportunity.png" alt=""></a>
      </div>
      <nav>
          <ul>
              <li><a href="index.html">Home</a></li>
              <!-- search an opportunity -->
              <li><a href="search.html">Search</a></li>
              <li><a href="login.html">Login</a></li>
              <li><a href="signup.html">Sign Up</a></li>
              <li><a href="about.html">About</a></li>
          </ul>
      </nav>
  </header>
</div>

<!-- main body-->

<!-- post an opportunity title -->
<div class="container-fluid post-margin bg-header">
  <div class="row">
    <div class="col-md-12 mt-4 mb-0">
      <h1 class="text-left t-blue mb-4 ">Apply through us !</h1>
    </div>
  </div>
  </div>

<div class="d-inline-flex t-white post-margin">

<div class="p-5 w-75">
  <!-- Post Guidline -->
    <div class="container-fluid display-flex">
        <h2>Fill up This Form carefully</h2>
    </div>



<!-- middle container -->
    <div class="">
      <div class="container-fluid form p-2">
        <form class="form-horizontal m-4 p-3"  action ="post.php" method="post">
            <div class="form-group p-1">
                <label for="title">Title <sup class="text-danger">*</sup></label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" required>
            </div>
            <div class="form-group p-1">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>

          <!-- start dates -->
              <div class="form-group p-1">
                <label for="organizer">Organizers <sup class="text-danger">*</sup></label>
                <input type="text" class="form-control" id="organizer" name="organizer" placeholder="organizer" required>
            </div>
            <div class="form-group p-1">
                <label for="tags">Tags<sup class="text-danger">*</sup></label>
                <input type="text" class="form-control" id="tags" name="tags" placeholder="Enter tags">
            </div>
            <button class="btn button-color m-1 p-1" type="submit">Submit</button>
        </form>
    </div>

    </div>

    </div>
   

    <!-- adding trending posts vartically scrolling-->


  <div class="sidebar sidebar-main col-sm-3 sidebar-right">
    <div class="inner-content widgets-container">
      
    <h4 class="widget-title">Trending</h4>
    <div class="widget-content">
      <ul class="trending-posts">
        <li>
          <div class="post-thumb">
            <a href="#"><img src="images/1.jpg" alt=""></a>
          </div>
          <div class="post-info">
            <h5 class="entry-title"><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h5>
            <div class="post-meta">
              <span class="date">May 10, 2018</span>
            </div>
          </div>
        </li>
        <li>
          <div class="post-thumb">
            <a href="#"><img src="images/2.jpg" alt=""></a>
          </div>
          <div class="post-info">
            <h5 class="entry-title"><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h5>
            <div class="post-meta">
              <span class="date">May 10, 2018</span>
            </div>
          </div>
        </li>
        <li>
          <div class="post-thumb">
            <a href="#"><img src="images/3.jpg" alt=""></a>
          </div>
          <div class="post-info">
            <h5 class="entry-title"><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h5>
            <div class="post-meta">
              <span class="date">May 10, 2018</span>
            </div>
          </div>
        </li>
        <li>
          <div class="post-thumb">
            <a href="#"><img src="images/4.jpg" alt=""></a>
          </div>
          <div class="post-info">
            <h5 class="entry-title"><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h5>
            <div class="post-meta">
              <span class="date">May 10, 2018</span>
            </div>
          </div>
        </li>
        <li>
          <div class="post-thumb">
            <a href="#"><img src="images/5.jpg" alt=""></a>
          </div>
          <div class="post-info">
            <h5 class="entry-title"><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h5>
            <div class="post-meta">
              <span class="date">May 10, 2018</span>
              </div>
              </div>
              </li>
              </ul>
              </div>
              </div>
     </div>
    </div> 

  



   

    









<!-- footer -->
    <?php include 'footer.php'; ?>
 </body>
</html>