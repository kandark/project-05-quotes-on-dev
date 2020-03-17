<?php
/**
 * The template for displaying archive pages.
 * Template Name: Archive
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>
<h2><?php the_title(); ?></h2>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
					?>
				</header><!-- .page-header -->


				<!-- start archive authors -->
				<h2>Quote Authors</h2>
        <?php
        $posts = get_posts( array( 
					'orderby' => 'name',
					'order' => 'ASC',
					'posts_per_page' => -1,
				));?>

				<ul class="archive-list">
				<?php
        foreach( $posts as $post ) {
					$author = get_the_title();
					$link = get_the_permalink();?>
					
					<li>
						<a href =<?php echo "$link" ?> class ="button"><?php echo $author ?></a>
				  </li><?php
				} ?>
				</ul>
				<!-- end archive authors -->

			
    //categories
    <h2>Categories</h2>
    <?php
        $categories = get_categories( array( 
					'orderby' => 'name',
					'order' => 'ASC',
					'posts_per_page' => -1,
				));?>

				<ul class="archive-list">
				<?php
        foreach( $categories as $category ) {
					$categoryLink= home_url('/category/'). $category->slug;?>
					
					<li>
						<a href =<?php echo "$categoryLink" ?> class ="button"><?php echo $category->name ?></a>
				  </li><?php
				} ?>
				</ul>
							

			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>