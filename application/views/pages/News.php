
    
    <!-- Being Page Title -->
    <div class="container">
        <div class="page-title clearfix">
            <div class="row">
                <div class="col-md-12">
                    <h6><a href="index.html">Home</a></h6>
                    <h6><span class="page-active">News</span></h6>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">

            <!-- Here begin Main Content -->
            <div class="col-md-8">
                <div class="row">

                    <div class="col-md-6 col-sm-6">
                        <div class="blog-grid-item">
                            <div class="blog-grid-thumb">
                                
                                <a href="<?php echo base_url(); ?>NewsDetails">
                                    <img src="<?php echo base_url(); ?>images/blog/blog-thumb1.jpg" alt="">
                                </a>
                            </div>
                            <div class="box-content-inner">
                                <h5 class="blog-grid-title"><a href="<?php echo base_url(); ?>NewsDetails">When a Doctor’s Visit Is a Guilt Trip</a></h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, cum, quidem aut natus odit 
                                    deleniti placeat quia est quibusdam hic. Quod, minima, excepturi eum repellat tempora... 
                                    <a href="<?php echo base_url(); ?>NewsDetails">View Details &rarr;</a></p>
                                </div> <!-- /.box-content-inner -->
                        </div> <!-- /.blog-grid-item -->
                    </div> <!-- /.col-md-6 -->

                    <div class="col-md-6 col-sm-6">
                        <div class="blog-grid-item">
                            <div class="blog-grid-thumb">
                                <a href="blog-single.html">
                                    <img src="<?php echo base_url(); ?>images/blog/blog-thumb2.jpg" alt="">
                                </a>
                            </div>
                            <div class="box-content-inner">
                                <h5 class="blog-grid-title"><a href="blog-single.html">Unlocking the scrolls of Herculaneum</a></h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, cum, quidem aut natus odit deleniti placeat quia est quibusdam hic. Quod, minima, excepturi eum repellat tempora... <a href="event-single.html">View Details &rarr;</a></p>
                            </div> <!-- /.box-content-inner -->
                        </div> <!-- /.blog-grid-item -->
                    </div> <!-- /.col-md-6 -->

                    <div class="col-md-6 col-sm-6">
                        <div class="blog-grid-item">
                            <div class="blog-grid-thumb">
                                <a href="blog-single.html">
                                    <img src="<?php echo base_url(); ?>images/blog/blog-thumb3.jpg" alt="">
                                </a>
                            </div>
                            <div class="box-content-inner">
                                <h5 class="blog-grid-title"><a href="blog-single.html">Corin Sworn wins Max Mara Art Prize</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, cum, quidem aut natus odit deleniti placeat quia est quibusdam hic. Quod, minima, excepturi eum repellat tempora... <a href="event-single.html">View Details &rarr;</a></p></div> <!-- /.box-content-inner -->
                        </div> <!-- /.blog-grid-item -->
                    </div> <!-- /.col-md-6 -->

                    <div class="col-md-6 col-sm-6">
                        <div class="blog-grid-item">
                            <div class="blog-grid-thumb">
                                <a href="blog-single.html">
                                    <img src="<?php echo base_url(); ?>images/blog/blog-thumb4.jpg" alt="">
                                </a>
                            </div>
                            <div class="box-content-inner">
                                <h5 class="blog-grid-title"><a href="blog-single.html">Graduate Open Day at the Ruskin</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, cum, quidem aut natus odit deleniti placeat quia est quibusdam hic. Quod, minima, excepturi eum repellat tempora... <a href="event-single.html">View Details &rarr;</a></p></div> <!-- /.box-content-inner -->
                        </div> <!-- /.blog-grid-item -->
                    </div> <!-- /.col-md-6 -->

                    <div class="col-md-6 col-sm-6">
                        <div class="blog-grid-item">
                            <div class="blog-grid-thumb">
                                <a href="blog-single.html">
                                    <img src="<?php echo base_url(); ?>images/blog/blog-thumb5.jpg" alt="">
                                </a>
                            </div>
                            <div class="box-content-inner">
                                <h5 class="blog-grid-title"><a href="blog-single.html">Visiting Artists: Giles Bailey</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, cum, quidem aut natus odit deleniti placeat quia est quibusdam hic. Quod, minima, excepturi eum repellat tempora... <a href="event-single.html">View Details &rarr;</a></p></div> <!-- /.box-content-inner -->
                        </div> <!-- /.blog-grid-item -->
                    </div> <!-- /.col-md-6 -->

                    <div class="col-md-6 col-sm-6">
                        <div class="blog-grid-item">
                            <div class="blog-grid-thumb">
                                <a href="blog-single.html">
                                    <img src="<?php echo base_url(); ?>images/blog/blog-thumb6.jpg" alt="">
                                </a>
                            </div>
                            <div class="box-content-inner">
                                <h5 class="blog-grid-title"><a href="blog-single.html">Workshop: Theories of the Image</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, cum, quidem aut natus odit deleniti placeat quia est quibusdam hic. Quod, minima, excepturi eum repellat tempora... <a href="event-single.html">View Details &rarr;</a></p></div> <!-- /.box-content-inner -->
                        </div> <!-- /.blog-grid-item -->
                    </div> <!-- /.col-md-6 -->

                </div> <!-- /.row -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="load-more-btn">
                            <a href="blog.html#">Click here to load more News</a>
                        </div>
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->

            </div> <!-- /.col-md-8 -->

            <!-- Here begin Sidebar -->
            <div class="col-md-4">

                <?php 
                    $this->load->view('templates/NoticeSidebar');
                    $this->load->view('templates/NewsSidebar');
                    $this->load->view('templates/EventsSidebar');
                ?>

            </div> <!-- /.col-md-4 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
