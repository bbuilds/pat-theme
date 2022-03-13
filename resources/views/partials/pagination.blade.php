<?php

/**
     * Translators:
     * This text contains HTML to allow the text to be shorter on small screens.
     * The text inside the span with the class nav-short will be hidden on small screens.
     */

    $prev_text = sprintf(
        '%s <span class="nav-prev-text">%s</span>',
        '<span aria-hidden="true">&larr;</span>',
        __( 'Newer <span class="nav-short">Posts</span>', config('textdomain') )
    );
    $next_text = sprintf(
        '<span class="nav-next-text">%s</span> %s',
        __( 'Older <span class="nav-short">Posts</span>', config('textdomain') ),
        '<span aria-hidden="true">&rarr;</span>'
    );

    $posts_pagination = get_the_posts_pagination(
        array(
            'mid_size'  => 6,
            'prev_text' => $prev_text,
            'next_text' => $next_text,
        )
    );

    // If we're not outputting the previous page link, prepend a placeholder with visibility: hidden to take its place.
    if ( strpos( $posts_pagination, 'prev page-numbers' ) === false ) {
        $posts_pagination = str_replace( '<div class="nav-links">', '<div class="nav-links flex justify-center flex-wrap"><span class="prev page-numbers placeholder mr-auto" aria-hidden="true">' . $prev_text . '</span>', $posts_pagination );
    }

    // If we're not outputting the next page link, append a placeholder with visibility: hidden to take its place.
    if ( strpos( $posts_pagination, 'next page-numbers ml-auto' ) === false ) {
        $posts_pagination = str_replace( '</div>', '<span class="next page-numbers placeholder ml-auto sr-only" aria-hidden="true">' . $next_text . '</span></div>', $posts_pagination );
    }


    if ( $posts_pagination ) {

        echo '<div class="pagination-wrapper py-4">';

        echo $posts_pagination; //phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- already escaped during generation.

        echo '</div> <!-- pagination-wrapper -->';


    }
