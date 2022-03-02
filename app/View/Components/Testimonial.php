<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Testimonial extends Component
{
    public $title;
    public $testimonial;
    public $name;
    public $company;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $title, $testimonial, $company)
    {
        $this->title = $title;
        $this->testimonial = $testimonial;
        $this->name = $name;
        $this->company = $company;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.testimonial');
    }
}
