<?php

namespace App\View\Components;

use App\Models\Position;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Grid extends Component
{
    public $positions;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->positions = Position::with('link')->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.grid');
    }
}
