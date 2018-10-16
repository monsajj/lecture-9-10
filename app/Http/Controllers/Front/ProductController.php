<?php

namespace App\Http\Controllers\Front;


use App\Http\Controllers\Controller;
use App\Shop\Images\Image;
use App\Shop\Products\Product;

//use App\Shop\ProductImage\Repositories\ProductImagesRepository;
//use App\Shop\Products\Product2;
//use App\Shop\Products\Repositories\ProductRepositoryInterface;
//use App\Shop\Products\Requests\ProductRequest;

class ProductController extends Controller
{
    /**
     * @var Product
     */
    private $product;

    /**
     * @var Image
     */
    private $image;

//    /**
//     * @var ProductRepositoryInterface
//     */
//    private $productRepository;
//
//    /**
//     * @var ProductImagesRepository
//     */
//    private $productImageRepository;

    /**
     * ProductController constructor.
     * @param Product $product
     * @param Image $image
     */
    public function __construct(Product $product, Image $image)//ProductRepositoryInterface $productRepository, ProductImagesRepository $imagesRepository
    {
        $this->product = $product;
        $this->image = $image;
//        $this->productRepository = $productRepository;
//        $this->productImageRepository = $imagesRepository;
    }

    /**
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($slug)
    {


        $product = $this->product->productBySlug($slug)->first();
        $product1 = $this->product->findProductBySlug($slug);

        dd($product, $product1);




        $image = $this->image->imageByProductId($product->id)->get();
        $image = $image [$product->id-1];
        $image->src = asset("storage/$image->src");

        return view('front.products.product', compact('product', 'image'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('front.products.product-add');
    }

    /**
     * Add product to database
     *
     * @param ProductRequest $request
     */
    public function store(ProductRequest $request)
    {
        dd('Hi! Your data is correct');
    }
}