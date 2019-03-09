<?php

namespace App\Http\ViewComposers;

use App\Common\Constant;
use Illuminate\View\View;
use App\Services\SettingService;

class BannerComposer
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $settingService;

    private static $banners;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct(SettingService $settingService)
    {
        // Dependencies automatically resolved by service container...
        $this->settingService = $settingService;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        if(!isset(self::$banners)){
            self::$banners = $this->settingService->getBannerAll();
        }
        $view->with('bannerComposer', self::$banners);
    }
}
