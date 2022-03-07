<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ServiceCard extends Component
{
    public $title;
    public $imageElement;
    public $imageId;
    public $excerpt;


    /**
     * Create a new component instance.
     *
     * @return void
     */

    public function __construct($title, $imageId = null, $excerpt) {
        $this->title = $title;
        $this->imageId = $imageId;
        $this->excerpt = $excerpt;
        $this->imageElement = $this->getImage();
    }

    protected function getImage()
    {
        if (!is_numeric($this->imageId)) {
            return false;
        }

        return wp_get_attachment_image($this->imageId, 'medium_large');
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
