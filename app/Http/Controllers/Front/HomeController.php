<?php

namespace App\Http\Controllers\Front;

use App\Shop\Categories\Category;
use App\Shop\Products\Product;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Shop\Categories\Repositories\CategoryRepositoryInterface;

class HomeController extends Controller
{
    /**
     * @var Category
     */
    private $category;

    /**
     * @var Product
     */
    private $product;
//    /**
//     * @var CategoryRepositoryInterface
//     */
//    private $categoryRepository;

    /**
     * HomeController constructor.
     * @param Category $category
     */
    public function __construct(Category $category, Product $product)//CategoryRepositoryInterface $categoryRepository
    {
        $this->product = $product;
        $this->category = $category;
        //$this->categoryRepository = $categoryRepository;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

//        $product = $this->product->where('slug','<>','product-1')->first();
//        echo($product->price);
//        dd($product->formatted);

//        $product = [
//            'category_id' => '1',
//            'name' => 'Product N',
//            'slug' => 'product-n',
//            'description' => 'Product N Description',
//            'price' => '1',
//            'status' => '1',
//            'quantity' => '1'
//        ];
//
//        $productModel = $this->product->create($product);

        $products = $this->product->available()->get();
        dd($products);
//        $category = new Category();
//        $category->name = 'New Category';
//        $category->slug = 'category-new';
//        $category->description = 'New Category';
//        $category->save();
//        dd($category);

//        $category = $this->category->where('slug','category-1')->first();

        $category = [
            'name' => 'Category New One',
            'parent_id' => '2',
            'description' => 'Category New One Description',

        ];
        $category = $this->category->where('slug', 'bicycle')->delete();
//        $category->slug = 'category-1';
//        $category->update();
        dd($category);


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
