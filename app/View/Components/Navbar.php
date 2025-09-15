<?php
namespace App\View\Components;

use App\View\ListItem;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class navbar extends Component
{
    /**
     * @var ListItem[]
     */
    public array $items;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->items = [
            new ListItem('dashboard', 'widgets'),
            new ListItem('contabilidad', 'payments'),
            new ListItem('inventario', 'inventory_2'),
            new ListItem('ventas', 'shopping_cart'),
            new ListItem('compras', 'local_shipping'),
            new ListItem('nomina', 'receipt_long'),
            new ListItem('archivos', 'folder'),
        ];

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View | Closure | string
    {
        return view('components.navbar');
    }
}
