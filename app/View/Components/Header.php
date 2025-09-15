<?php
namespace App\View\Components;

use App\View\ListItem;
use App\View\SeparatorItem;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
{
    /**
     * Summary of userActions
     * @var array<ListItem|SeparatorItem>
     */
    public array $userActions;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->userActions = [
            new ListItem("logout", "logout"),
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View | Closure | string
    {
        return view('components.header');
    }
}
