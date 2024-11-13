<?php

namespace App\View\Components;

use App\Models\Link;
use App\Models\Position;
use Illuminate\View\Component;

class LinkForm extends Component
{
    public $link;
    public $position;

    /**
     * Create a new component instance.
     */

    public function __construct(Link $link = null, Position $position = null)
    {
        $this->link = $link;
        $this->position = $position;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.link-form');
    }

}
