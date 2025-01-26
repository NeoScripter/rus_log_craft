<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class UserLayout extends Component
{
    public $top_padding;
    public $bottom_padding;
    /**
     * Create a new component instance.
     */
    public function __construct($topPadding = true, $bottomPadding = true)
    {
        $this->top_padding = $topPadding;
        $this->bottom_padding = $bottomPadding;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('layouts.user');
    }
}
