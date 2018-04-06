<?php require('includes/config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Blog</title>
    <link rel="stylesheet" href="style/normalize.css">
    <link rel="stylesheet" href="style/main.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootswatch/4.0.0/sketchy/bootstrap.min.css" rel="stylesheet" integrity="sha384-QAdi7HQouHzrMcg66qFdsKV2BCFW/iVhCRvooAkqS4d5rXV8Hlu+X8MY3ao03fgn" crossorigin="anonymous">
</head>
<body>

    <div id="wrapper">

     
        
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Blog</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


<div class="jumbotron">
  <h1 class="display-3">Hi !!!!</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
 
  
</div>

<div class="alert alert-dismissible alert-warning">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <h4 class="alert-heading">Warning!</h4>
  <p class="mb-0">Best check yo self, you're not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, <a href="#" class="alert-link">vel scelerisque nisl consectetur et HAHAHAHAHA  :p</a>.</p>
</div>



        <hr />

        <?php
            try {

                $stmt = $db->query('SELECT postID, postTitle, postDesc, postDate FROM blog_posts ORDER BY postID DESC');
                while($row = $stmt->fetch()){
                    
                    echo '<div>';
                        echo '<h1><a href="viewpost.php?id='.$row['postID'].'">'.$row['postTitle'].'</a></h1>';
                        echo '<p>Posted on '.date('jS M Y H:i:s', strtotime($row['postDate'])).'</p>';
                        echo '<p>'.$row['postDesc'].'</p>';                
                        echo '<p><a href="viewpost.php?id='.$row['postID'].'">Read More</a></p>';                
                    echo '</div>';

                }

            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        ?>

    </div>


</body>
</html>