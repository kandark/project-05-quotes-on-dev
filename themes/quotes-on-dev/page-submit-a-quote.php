<?php get_header(); ?>

<?php if( have_posts() ) :
//The WordPress Loop: loads post content 
    while( have_posts() ) :
        the_post(); ?>
    

        <h2><?php the_title();?></h2>
    </div>

    <?php the_content(); ?> 
<form class="form-submit-a-quote"> 
<p>Author of Quote</p>
<input type="text">

<p>Quote</p>
<textarea></textarea>

<p>Where did you find thid quote? (eg.book name)</p>
<input type="text"><br/><br/>

<p>Provide the URL of the quote source, if available.<p>
<input type="text"><br/><br/>

<button>Submit Quote</button>
    </form>
    
    <!-- Loop ends -->
    <?php endwhile;?>

<?php else : ;?>
        <p>No posts found</p>
<?php endif;?>

    
<?php get_footer();?>