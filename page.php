<?php get_header();?>





    

    

    <div class="row mb-2">
        
       
    </div>
</div>



<main role="main" class="container">
    <div class="row">
        <div class="col-md-8 blog-main">



        <?php if(have_posts()): ?>
            <?php while(have_posts()) : the_post(); DONG ?>
            
            <div class="blog-post">
                <h2 class="blog-post-title">
                        <?php the_title(); ?>
                </h2>



                    <?php the_content(); ?>
            </div>

        <?php endwhile; ?>

        <?php else :?>
            <p>
                <?php __('No Posts Found'); ?>
            </p>

        <?php endif; ?>

            <!-- /.blog-post -->

            <!-- <div class="blog-post">
                <h2 class="blog-post-title">Another blog post</h2>
                <p class="blog-post-meta">December 23, 2013 by
                    <a href="#">Jacob</a>
                </p>

                <p>Cum sociis natoque penatibus et magnis
                    <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia
                    quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit
                    amet fermentum.</p>
                <blockquote>
                    <p>Curabitur blandit tempus porttitor.
                        <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies
                        vehicula ut id elit.</p>
                </blockquote>
                <p>Etiam porta
                    <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia
                    bibendum nulla sed consectetur.</p>
                <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus,
                    nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac,
                    vestibulum at eros.</p>
            </div>

            <div class="blog-post">
                <h2 class="blog-post-title">New feature</h2>
                <p class="blog-post-meta">December 14, 2013 by
                    <a href="#">Chris</a>
                </p>

                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum
                    nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus
                    commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                <ul>
                    <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
                    <li>Donec id elit non mi porta gravida at eget metus.</li>
                    <li>Nulla vitae elit libero, a pharetra augue.</li>
                </ul>
                <p>Etiam porta
                    <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia
                    bibendum nulla sed consectetur.</p>
                <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
            </div> -->


        </div>
        <!-- /.blog-main -->

        <aside class="col-md-4 blog-sidebar">
            <!-- <div class="p-3 mb-3 bg-light rounded">
                <h4 class="font-italic">About</h4>
                <p class="mb-0">Etiam porta
                    <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia
                    bibendum nulla sed consectetur.</p>
            </div>

            <div class="p-3">
                <h4 class="font-italic">Archives</h4>
                <ol class="list-unstyled mb-0">
                    <li>
                        <a href="#">March 2014</a>
                    </li>
                    <li>
                        <a href="#">February 2014</a>
                    </li>
                    <li>
                        <a href="#">January 2014</a>
                    </li>
                    <li>
                        <a href="#">December 2013</a>
                    </li>
                    <li>
                        <a href="#">November 2013</a>
                    </li>
                    <li>
                        <a href="#">October 2013</a>
                    </li>
                    <li>
                        <a href="#">September 2013</a>
                    </li>
                    <li>
                        <a href="#">August 2013</a>
                    </li>
                    <li>
                        <a href="#">July 2013</a>
                    </li>
                    <li>
                        <a href="#">June 2013</a>
                    </li>
                    <li>
                        <a href="#">May 2013</a>
                    </li>
                    <li>
                        <a href="#">April 2013</a>
                    </li>
                </ol>
            </div>

            <div class="p-3">
                <h4 class="font-italic">Elsewhere</h4>
                <ol class="list-unstyled">
                    <li>
                        <a href="#">GitHub</a>
                    </li>
                    <li>
                        <a href="#">Twitter</a>
                    </li>
                    <li>
                        <a href="#">Facebook</a>
                    </li>
                </ol>
            </div> -->

            <?php if(is_active_sidebar('sidebar')): ?>
            <?php dynamic_sidebar('sidebar'); ?>
                <?php endif; ?>
        </aside>
        <!-- /.blog-sidebar -->

    </div>
    <!-- /.row -->

</main>
<!-- /.container -->

<?php get_footer();?>