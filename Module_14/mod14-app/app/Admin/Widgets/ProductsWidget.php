<?php

namespace App\Admin\Widgets;

use App\Models\Product;
use Arrilot\Widgets\AbstractWidget;
use Illuminate\View\View;

class ProductsWidget extends AbstractWidget
{
    protected $config = [];

    /**
     * @return View
     */
    public function run(): View
    {
        $count = Product::count();

        return view('voyager::dimmer', array_merge($this->config, [
            'icon' => 'voyager-shop',
            'title' => 'Products',
            'text' => "The number of products: {$count}",
            'image' => '',
            'button' => [
                'text' => 'View',
                'link' => '',
            ],
        ]));
    }

    /**
     * @return bool
     */
    public function shouldBeDisplayed(): bool
    {
        return true;
    }
}
