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

    private static $productTypes;

    private static $productTrees;

    private static $vendors;

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
        if(!isset(self::$productTypes)){
            self::$productTypes = $this->productTypeService->getAllByTree();
        }
        if(!isset(self::$productTrees)){
            self::$productTrees = $this->productService->getAllByTree();
        }
        if(!isset(self::$vendors)){
            self::$vendors = $this->vendorService->getAll();
        }
        $view->with('productTypes', self::$productTypes)
                ->with('productTrees',self::$productTrees)
                ->with('vendors', self::$vendors);
    }
}
