<?php get_header(); ?>

			<div id="content" class="clearfix page-<?php echo(basename(get_permalink())); ?>">

				<div id="main" class="clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

						<header class="article-header">

							<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>

                            <?php bones_byline($post); ?>

						</header> <?php // end article header ?>

						<section class="entry-content clearfix" itemprop="articleBody">
							<?php the_content(); ?>
					</section> <?php // end article section ?>

						<footer class="article-footer">
							<?php the_tags( '<span class="tags">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '' ); ?>

						</footer> <?php // end article footer ?>

						<?php comments_template(); ?>

					</article> <?php // end article ?>

					<?php endwhile; else : ?>

							<article id="post-not-found" class="hentry clearfix">
								<header class="article-header">
									<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
								</header>
								<section class="entry-content">
									<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
								</section>
								<footer class="article-footer"></footer>
							</article>

					<?php endif; ?>

				</div> <?php // end #main ?>

				<?php get_sidebar(); ?>

			</div> <?php // end #content ?>

<?php get_footer(); ?>
