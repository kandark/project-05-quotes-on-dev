<?php get_header(); ?>


<div class="home-content">
    <div class="icon">
<i class="fas fa-quote-left"></i>
    

<h2><?php echo get_the_title();?></h2>
<p><?php echo the_content();?></p>


<h1 class="the-quote"></h1>  
<p class="the-author"></p> 

<i class="fas fa-quote-right"></i>

</div>
<div>
<button class="randomQuote">Click Me!</button><br>
</div>
</div>

<?php get_footer();?>