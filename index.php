<?php
get_header();
?>
<main class="py-20 min-h-[60vh] max-w-7xl mx-auto px-4">
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            the_content();
        endwhile;
    else :
        echo '<p>No content found.</p>';
    endif;
    ?>
</main>
<?php
get_footer();
?>
