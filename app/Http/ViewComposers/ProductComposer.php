<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Services\{ProductTypeService,ProductService};
use App\Services\VendorService;

class ProductComposer
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $productTypeService;

    protected $productService;

    protected $vendorService;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct(ProductTypeService $productTypeService, VendorService $vendorService, ProductService $productService)
    {
        // Dependencies automatically resolved by service container...
        $this->productTypeService = $productTypeService;
        $this->productService = $productService;
        $this->vendorService = $vendorService;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $productTypes = $this->productTypeService->getAllByTree();
        $productTrees = $this->productService->getAllByTree();
        $vendors = $this->vendorService->getAll();
        $view->with('productTypes', $productTypes)
                ->with('productTrees',$productTrees)
                ->with('vendors',$vendors);
    }
}