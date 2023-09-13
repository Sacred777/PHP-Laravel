<?php

namespace App\Admin\Widgets;

use App\Models\Category;
use Illuminate\View\View;

class CategoriesWidget extends \Arrilot\Widgets\AbstractWidget
{
    protected $config = [];

    /**
     * @return View
     */
    public function run(): View
    {
        $count = Category::count();

        return view('voyager::dimmer', array_merge($this->config, [
            'icon' => 'voyager-categories',
            'title' => 'Categories',
            'text' => "Number of categories: {$count}",
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
