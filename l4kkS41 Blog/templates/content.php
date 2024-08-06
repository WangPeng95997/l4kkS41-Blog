<?php
    echo '<div class="list">';
    the_title('<h2><a href="'.get_permalink().'">','</a></h2>');
    the_excerpt();
    echo '<div class="date-line">
                    <span>
                    '.get_the_date('Y-m-d').' '.get_the_author().'
                    </span>
                    <a href="'.get_permalink().'"><span>查看全文</span></a>
                    </div>';
    echo '</div>';
?>