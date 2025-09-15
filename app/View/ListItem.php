<?php
namespace App\View;

class ListItem
{
    public function __construct(public string $key, public string $icon)
    {}
}

class SeparatorItem
{
    public function __construct()
    {}
}

enum ListItemType {
    case Item;
    case Separator;
}
