<?php include('header.php') ?>

<main class="container">
    <div class="main-box">
        <div id="lists">
            <?php
            while (have_posts())
            {
                the_post();
                get_template_part('templates/content');
            }

            the_posts_pagination(array(
                'mid_size' => 2,
                'prev_text' => '上一页',
                'next_text' => '下一页',
            ));
            ?>
        </div>
    </div>
</main>
<?php include('footer.php') ?>