<?php

namespace App\Http\ViewComposer;


use App\Shop\Categories\Repositories\CategoryRepositoryInterface;
use Illuminate\Contracts\View\View;

class CategoriesComposer
{
    /**
     * The categories repository implementation.
     *
     * @var CategoryRepositoryInterface
     */
    protected $categories;

    /**
     * Create a new categories composer.
     *
     * @param  CategoryRepositoryInterface $categories
     * @return void
     */
    public function __construct(CategoryRepositoryInterface $categories)
    {
        // Dependencies automatically resolved by service container...
        $this->categories = $categories;
    }

    /**
     * Bind data to the view.
     *
     * @param  View $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('categories', $this->categories->all());
    }
}