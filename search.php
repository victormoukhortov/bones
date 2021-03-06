<?php get_header(); ?>

			<div id="content" class="clearfix">

				<div id="main" class="clearfix" role="main">
				
					<h1 class="archive-title"><span><?php _e( 'Search Results for:', 'bonestheme' ); ?></span> <?php echo esc_attr(get_search_query()); ?></h1>

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">

							<header class="article-header">

								<h3 class="search-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

                                <?php bones_byline($post); ?>

							</header> <?php // end article header ?>

							<section class="entry-content">
									<?php the_excerpt( '<span class="read-more">' . __( 'Read more &raquo;', 'bonestheme' ) . '</span>' ); ?>

							</section> <?php // end article section ?>

							<footer class="article-footer">

							</footer> <?php // end article footer ?>

						</article> <?php // end article ?>

					<?php endwhile; ?>

							<?php if (function_exists('bones_page_navi')) { ?>
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
										<h1><?php _e( 'Sorry, No Results.', 'bonestheme' ); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e( 'Try your search again.', 'bonestheme' ); ?></p>
									</section>
									<footer class="article-footer"></footer>
								</article>

						<?php endif; ?>

					</div> <?php // end #main ?>

					<?php get_sidebar(); ?>

			</div> <?php // end #content ?>

<?php get_footer(); ?>
