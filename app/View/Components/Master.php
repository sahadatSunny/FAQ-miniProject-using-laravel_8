<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Master extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $viewTitle;

    public function __construct($title = null)
    {
        $this->viewTitle = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.master');
    }
}
