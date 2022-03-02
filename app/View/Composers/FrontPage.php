<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class FrontPage extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'front-page'
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'page_title' => get_the_title(),
            'hero_title' => get_field('home_hero_title'),
            'hero_cta_text' => get_field('home_hero_cta_text'),
            'hero_cta_url' => get_field('home_hero_cta_link'),
            'home_services' => get_field('home_services'),
            'testimonial_title' => get_field('home_testionial_title'),
            'testimonial_quote' => get_field('testimonial_quote'),
            'testimonial_name' => get_field('testimonial_name'),
            'testimonial_company' => get_field('testimonial_company'),
        ];
    }
}
