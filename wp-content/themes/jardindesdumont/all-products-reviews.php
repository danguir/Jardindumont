<?php
/*
Template Name: Rating and Reviews

 */



get_header(); ?>

<?php foreach (get_comments() as $comment): ?>
<div><?php echo $comment->comment_author; ?> said: "<?php echo $comment->comment_content; ?>".</div>
<?php endforeach; ?>

<?php get_footer(); ?>
