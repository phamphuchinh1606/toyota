<?php

namespace App\Http\Controllers\Guest;

use App\Services\ContactService;
use App\Services\OrderService;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Services\{
    ProductTypeService,
    ProductService,
    VendorService,
    SettingService,
    BlogService,
    AddressService,
    ProductSpecificationService,
    CostEstimateService
};

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $productTypeService;

    protected $productService;

    protected $productSpecificationService;

    protected $vendorService;

    protected $settingService;

    protected $blogService;

    protected $contactService;

    protected $orderService;

    protected $addressService;

    protected $costEstimateService;

    public function __construct(ProductTypeService $productTypeService, ProductService $productService,
                                VendorService $vendorService, SettingService $settingService,
                                BlogService $blogService, ContactService $contactService, OrderService $orderService,
                                AddressService $addressService, ProductSpecificationService $productSpecificationService,
                                CostEstimateService $costEstimateService)
    {
        $this->productTypeService = $productTypeService;
        $this->productService = $productService;
        $this->productSpecificationService = $productSpecificationService;
        $this->vendorService = $vendorService;
        $this->settingService = $settingService;
        $this->blogService = $blogService;
        $this->contactService = $contactService;
        $this->orderService = $orderService;
        $this->addressService = $addressService;
        $this->costEstimateService = $costEstimateService;
    }
}
