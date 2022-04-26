<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $title;
    public $subTitle;
    public $description;
    public $itemsNo;
    public function __construct($title, $subTitle, $description, $itemsNo)
    {
        $this->title = $title;
        $this->subTitle = $subTitle;
        $this->description = $description;
        $this->itemsNo = $itemsNo;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card');
    }

    //component method

    public function addNumber($a, $b)
    {
        return $a + $b;
    }
}
