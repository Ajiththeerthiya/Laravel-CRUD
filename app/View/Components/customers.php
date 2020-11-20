<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\customer;

class customers extends Component
{
    public $customers = [];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->customers = customer::paginate(5);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.customers');
    }
}
