<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ServiceCard extends Component
{
    public $title;
    public $image;
    public $excerpt;


    /**
     * Create a new component instance.
     *
     * @return void
     */

    public function __construct($title, $image, $excerpt) {
        $this->title = $title;
        $this->image = $image;
        $this->excerpt = $excerpt;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.service-card');
    }
}
