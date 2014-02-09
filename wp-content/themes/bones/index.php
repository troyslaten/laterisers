<?php get_header(); ?>

			<div id="content">

				<section class="hero">
				</section>
				<section class="main-page-caption">
					<h2>Stories From</h2>
					<ul>
						<li>Orlando</li>&bull;
						<li>Boston</li>&bull;
						<li>San Diego</li>
					</ul>
				</section>

				<div id="inner-content" class="wrap clearfix">

						<div id="main" class="twelvecol first clearfix" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

								<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article">

									<section class="entry-content clearfix main-post">
										<div class="post-feature-img">
											<?php 
												if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
												  the_post_thumbnail('full');
												} 
											?>
										</div>
										<h1 class="h2"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
										<!-- <p class="byline vcard"><?php
											printf( __( 'Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span> <span class="amp">&</span> filed under %4$s.', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), bones_get_the_author_posts_link(), get_the_category_list(', '));
										?></p> -->
										<?php the_excerpt(); ?>
									</section>

									<footer class="article-footer">
										<p class="tags"><?php the_tags( '<span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '' ); ?></p>

									</footer>

									<?php // comments_template(); // uncomment if you want to use them ?>

								</article>

							<?php endwhile; ?>

									<?php if ( function_exists( 'bones_page_navi' ) ) { ?>
											<?php bones_page_navi(); ?>
									<?php } else { ?>
											<nav class="wp-prev-next">
													<ul class="clearfix">
														<li class="prev-link"><?php next_posts_link( __( '&laquo; Older Entries', 'bonestheme' )) ?></li>
														<li class="next-link"><?php previous_posts_link( __( 'Newer Entries &raquo;', 'bonestheme' )) ?></li>
													</ul>
											</nav>
									<?php } ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry clearfix">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</div>

				</div>

			</div>

			<script>
$(window).scroll(function(){
    var fromTop = $(window).scrollTop();
    $(".post").css('margin', '-' + (100 - fromTop) + 'px 0px 0px 0px');
});
</script>
<?php get_footer(); ?>
