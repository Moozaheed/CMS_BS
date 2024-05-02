<div class="col-md-8">

    <h1 class="page-header">
        Page Heading
        <small>Secondary Text</small>
    </h1>

    <?php 

        require "db.php";

        $query ="SELECT *  
                    FROM
                        posts p
                    INNER JOIN
                        categories c ON p.post_category_id = c.cat_id    
                    INNER JOIN
                        author a ON p.post_author_id = a.author_id; ";

        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        
        $post_title = $row['post_title'];
        $post_author = $row['author_name'];
        // $post_date = $row['post_date'];
        // $post_image = $row['post_image'];
        $post_content = $row['post_content'];
        // $post_category_id = $row['cat_id'];
        // $post_category_title = $row['cat_title'];

    
    ?>

    <!-- First Blog Post -->
    <h2>
        <?php echo "<a href='#'>{$post_title}</a>" ?>
    </h2>
    <p class="lead">
        by <?php echo " <a href='index.php'>{$post_author}</a>"; ?>
    </p>
    <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:00 PM</p>
    <hr>
    <img class="img-responsive" src="http://placehold.it/900x300" alt="">
    <hr>
    <?php echo "<p>{$post_content}</p>";?>
    <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

    <hr>

</div>