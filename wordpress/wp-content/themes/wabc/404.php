<?php
/**
 * The template for displaying 404 pages (not found).
 */
get_header(); ?>
<div class="wrapper" id="404-wrapper">
    <div class="container">
        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
                <section class="error-404 not-found">
                    <header class="page-header">
                        <h1 class="page-title"><?php _e('Oops! That page can&rsquo;t be found.', 'wabc'); ?></h1>
                    </header><!-- .page-header -->
                        <div class="page-content">
                          <p><?php _e('It looks like nothing was found at this location. Maybe try a search?', 'wabc'); ?></p>
                          <?php get_search_form(); ?>
                        </div>
                </section>
            </main>
        </div>
    </div>
</div>

<?php get_footer(); ?>
