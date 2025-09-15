<?php
namespace App\View\Components\UI;

use App\View\ListItem;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Dropdown extends Component
{
    /**
     * Summary of __construct
     * @param ListItem[] $items
     */
    public function __construct(public array $items = [])
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View | Closure | string
    {
        return view('components.ui.dropdown');
    }
}
