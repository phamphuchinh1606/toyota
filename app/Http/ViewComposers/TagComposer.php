<?php

namespace App\Http\ViewComposers;

use App\Common\Constant;
use Illuminate\View\View;
use App\Services\SettingService;

class TagComposer
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $settingService;

    private static $tagListOne;

    private static $tagListTwo;

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
        if(!isset(self::$tagListOne)){
            self::$tagListOne = $this->settingService->getTagByTagType(Constant::$TAG_KEY_ONE);
        }
        if(!isset(self::$tagListTwo)){
            self::$tagListTwo = $this->settingService->getTagByTagType(Constant::$TAG_KEY_TWO);
        }
        $view->with('tagListOne', self::$tagListOne)
            ->with('tagListTwo',self::$tagListTwo);
    }
}
