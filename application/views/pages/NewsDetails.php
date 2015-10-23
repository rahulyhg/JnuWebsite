
    <!-- Being Page Title -->
    <div class="container">
        <div class="page-title clearfix">
            <div class="row">
                <div class="col-md-12">
                    <h6><a href="index.html">Home</a></h6>
                    <h6><a href="blog.html">News</a></h6>
                    <h6><span class="page-active">Theatre Production Selected for Regional Festival</span></h6>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">

            <!-- Here begin Main Content -->
            <div class="col-md-8">

                <div class="row">
                    <div class="col-md-12">
                        <div class="blog-post-container">
                            <div class="blog-post-image">
                                <img src="images/blog/blog-image.jpg" alt="">
                                <div class="blog-post-meta">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i>24/01/2014</li>
                                        <li><a href="blog-single.html#blog-comments"><i class="fa fa-comments"></i>3 comments</a></li>
                                        <li><a href="blog-single.html#blog-author"><i class="fa fa-user"></i>Esmet Hajrizi</a></li>
                                    </ul>
                                </div> <!-- /.blog-post-meta -->
                            </div> <!-- /.blog-post-image -->
                            <div class="blog-post-inner">
                                <h3 class="blog-post-title">Theatre Production Selected for Regional Festival</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, quis, itaque culpa rem excepturi cum sunt quae obcaecati corrupti fugiat facere error eos necessitatibus iure ut voluptates dolor enim provident!</p>
                                <p><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, perspiciatis, ad, pariatur placeat facere laborum aspernatur quidem sint illum eos mollitia repellendus consectetur obcaecati possimus cupiditate delectus dolores eaque blanditiis?</strong></p>
                                <p>
                                    <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, cum, quos ipsam eligendi accusantium quo amet quae commodi obcaecati nobis ratione soluta. Voluptates, obcaecati consectetur officia saepe rerum animi doloremque!</blockquote>
                                </p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At, magni, blanditiis, excepturi accusantium fugiat enim accusamus non libero doloribus doloremque illo error perferendis sequi dignissimos nesciunt voluptates nulla voluptatibus optio.</p>
                                
                            </div>
                        </div> <!-- /.blog-post-container -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->            

            </div> <!-- /.col-md-4 -->
            
            <div class="col-md-4">

                <?php 
                    $this->load->view('templates/NoticeSidebar');
                    $this->load->view('templates/NewsSidebar');
                    $this->load->view('templates/EventsSidebar');
                ?>

            </div> <!-- /.col-md-4 -->
    
        </div> <!-- /.row -->
    </div> <!-- /.container -->