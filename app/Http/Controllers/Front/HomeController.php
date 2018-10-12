<?php

namespace App\Http\Controllers\Front;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Shop\Categories\Repositories\CategoryRepositoryInterface;

class HomeController extends Controller
{
    /**
     * @var CategoryRepositoryInterface
     */
    private $categoryRepository;

    /**
     * HomeController constructor.
     * @param CategoryRepositoryInterface $categoryRepository
     */
    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

        //dd(DB::select('select * from categories'));
        $images = DB::table('images')->get();
        foreach ($images as $image){
            $url = asset("storage/{$image->src}");
            echo $url."\n";
        }

        return redirect($url);

        //dd($images);
        $cat1 = $this->categoryRepository->findCategoryById(1);
        $cat2 = $this->categoryRepository->findCategoryById(2);



        return view('front.index', compact('cat1', 'cat2'));
    }
}
