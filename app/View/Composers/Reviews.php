<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Reviews extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'template-reviews'
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'reviews' => get_field('reviews'),
        ];
    }

    /**
     * Returns the site name.
     *
     * @return string
     */
    public function pageTitle()
    {
        $custom_title = get_field('banner_title');

        if($custom_title) {
            return $custom_title;
        }

        return get_the_title();
    }
}
