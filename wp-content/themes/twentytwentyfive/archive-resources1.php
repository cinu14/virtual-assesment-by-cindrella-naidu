<?php
get_header();?>

<?php

$args = array(
    'post_type' => 'resources1',
    'post_per_page' => 5,

);

$query = new WP_Query($args);

if ($query -> have_posts()):
while($query -> have_posts()):
$query->the_post();


?>


<div class="resource-card">
<a href="<?php the_permalink();?>">
<?php the_post_thumbnail();?>
<h2><?php the_title(); ?></h2>
<p><?php the_excerpt();?></p>
</a>
</div>

<?php
endwhile;
wp_reset_postmeta();
endif;

?>

<?php
get_footer
();?>