<?php

namespace App\Http\Controllers\Front;


use App\Http\Controllers\Controller;
use App\Shop\Categories\Repositories\CategoryRepositoryInterface;
use App\Shop\Categories\Requests\CategoryRequest;

class CategoryController extends Controller
{
    /**
     * @var CategoryRepositoryInterface
     */
    private $repository;

    /**
     * CategoryController constructor.
     * @param CategoryRepositoryInterface $repository
     */
    public function __construct(CategoryRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Show view with category
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($slug)
    {
        $category = $this->repository->findOneByOrFail('slug', $slug);

        return view('front.categories.category', compact('category'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('front.categories.category-add');
    }

    /**
     * @param CategoryRequest $request
     */
    public function store(CategoryRequest $request)
    {
        dd('Hi! Your data is correct');
    }
}