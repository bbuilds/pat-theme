<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Service extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'template-service'
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'page_title' => $this->pageTitle(),
            'banner_copy' => get_field('banner_copy'),
            'banner_cta' => get_field('banner_cta_text'),
            'banner_url' => get_field('banner_cta_url'),
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
