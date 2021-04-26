<?php get_header(); ?>

<?php /* Get the ID from a specific post's title */ ?>
<?php
  $page_id = get_ID_by_slug('home');
  $page_data = get_page( $page_id );
?>

<h2><?php echo $page_data->post_title; ?></h2>
<p><?php echo $page_data->post_content; ?></p>
