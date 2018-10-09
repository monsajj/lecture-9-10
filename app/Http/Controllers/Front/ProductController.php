<?php

namespace App\Http\Controllers\Front;


use App\Http\Controllers\Controller;
use App\Shop\ProductImage\Repositories\ProductImagesRepository;
use App\Shop\Products\Product;
use App\Shop\Products\Repositories\ProductRepositoryInterface;
use App\Shop\Products\Requests\ProductRequest;

class ProductController extends Controller
{
    /**
     * @var ProductRepositoryInterface
     */
    private $productRepository;

    /**
     * @var ProductImagesRepository
     */
    private $productImageRepository;

    /**
     * ProductController constructor.
     * @param ProductRepositoryInterface $productRepository
     */
    public function __construct(ProductRepositoryInterface $productRepository, ProductImagesRepository $imagesRepository)
    {
        $this->productRepository = $productRepository;
        $this->productImageRepository = $imagesRepository;
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($slug)
    {
        /**
         * @var Product $product
         */

        $product = $this->productRepository->findOneByOrFail('slug', $slug);

        $images = $this->productImageRepository->getImagesForProduct($product->getId());

        return view('front.products.product', compact('product', 'images'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('front.products.product-add');
    }

    /**
     * Addd product to database
     *
     * @param ProductRequest $request
     */
    public function store(ProductRequest $request)
    {
        dd('Hi! Your data is correct');
    }
}