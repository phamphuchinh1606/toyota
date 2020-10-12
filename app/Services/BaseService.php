<?php

namespace App\Services;

use App\Logics\{ContactLogic,
    CustomerLogic,
    CustomerRequestPriceLogic,
    OrderAddressLogic,
    OrderDetailLogic,
    OrderLogic,
    ProductTypeLogic,
    ProductLogic,
    ProductImageLogic,
    VendorLogic,
    SettingLogic,
    BlogLogic,
    AddressLogic,
    ProductColorLogic,
    ProductSpecificationLogic,
    ProductSalientFeatureLogic,
    SettingSpecificationLogic,
    CostEstimateLogic};

class BaseService {
    protected $productTypeLogic;

    protected $productLogic;

    protected $productImageLogic;

    protected $productColorLogic;

    protected $productSpecificationLogic;

    protected $productSalientFeatureLogic;

    protected $settingSpecificationLogic;

    protected $vendorLogic;

    protected $settingLogic;

    protected $blogLogic;

    protected $addressLogic;

    protected $contactLogic;

    protected $orderLogic;

    protected $orderDetailLogic;

    protected $customerLogic;

    protected $orderAddressLogic;

    protected $costEstimateLogic;

    protected $customerRequestPriceLogic;

    public function __construct(ProductTypeLogic $productTypeLogic, ProductLogic $productLogic,
                                ProductImageLogic $productImageLogic , VendorLogic $vendorLogic,
                                SettingLogic $settingLogic, BlogLogic $blogLogic, AddressLogic $addressLogic,
                                ContactLogic $contactLogic, CustomerLogic $customerLogic, OrderAddressLogic $orderAddressLogic,
                                OrderLogic $orderLogic, OrderDetailLogic $orderDetailLogic, ProductColorLogic $productColorLogic,
                                ProductSpecificationLogic $productSpecificationLogic, SettingSpecificationLogic $settingSpecificationLogic,
                                ProductSalientFeatureLogic $productSalientFeatureLogic, CostEstimateLogic $costEstimateLogic,
                                CustomerRequestPriceLogic $customerRequestPriceLogic)
    {
        $this->productTypeLogic = $productTypeLogic;
        $this->productLogic = $productLogic;
        $this->productImageLogic = $productImageLogic;
        $this->productColorLogic = $productColorLogic;
        $this->productSpecificationLogic = $productSpecificationLogic;
        $this->productSalientFeatureLogic = $productSalientFeatureLogic;
        $this->settingSpecificationLogic = $settingSpecificationLogic;
        $this->vendorLogic = $vendorLogic;
        $this->settingLogic = $settingLogic;
        $this->blogLogic = $blogLogic;
        $this->addressLogic = $addressLogic;
        $this->contactLogic = $contactLogic;
        $this->customerLogic = $customerLogic;
        $this->orderAddressLogic = $orderAddressLogic;
        $this->orderLogic = $orderLogic;
        $this->orderDetailLogic = $orderDetailLogic;
        $this->costEstimateLogic = $costEstimateLogic;
        $this->customerRequestPriceLogic = $customerRequestPriceLogic;
    }
}
