<?php

namespace App\View\Components;

use Roots\Acorn\View\Component;

class Button extends Component
{
    /**
     * will the button pop
     *
     * @var boolean
     */
    public $pop;

    /**
     * The alert type.
     *
     * @var boolean
     */
    public $link;

    /**
     * The href
     *
     * @var string
     */
    public $url;

    /**
     * The button ID
     *
     * @var string
     */
    public $custom_id;


    /**
     * The alert type.
     *
     * @var string
     */
    public $type;


    /**
     * The alert types.
     *
     * @var array
     */
    public $types = [
        'default' => 'button',
        'red' => 'button text-white bg-accent py-2 px-4 rounded-full',
        'blue' => 'button text-white bg-primary py-2 px-4 rounded-full',
    ];


     /**
     * The alert types.
     *
     * @var array
     */
    public $classes = [];



    public function classNames($paramType) {
        $classes = [];
        if ($this->pop) {
            array_push($classes, "pop");
        }

        array_push($classes,$this->types[$paramType]);

        if($classes) {
            return implode(" ", $classes);
        }
    }
    /**
     * Create the component instance.
     *
     * @param  string  $type
     * @param  string  $message
     * @return void
     */
    public function __construct($type = 'default', $pop = false, $classes = [], $link = false, $url = "#")
    {
        $this->type = $type;
        $this->pop = $pop;
        $this->classes = $this->classNames($this->type);
        $this->link = $link;
        $this->url = $url;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return $this->view('components.button');
    }

}
