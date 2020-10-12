<?php

namespace App\Http\ViewComposers;

use App\Services\CustomerRequestService;
use Illuminate\View\View;
use App\Services\ContactService;

class ContactComposer
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $contactService;

    protected $customerRequestService;

    private static $countCustomerRequest;

    private static $countContact;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct(ContactService $contactService, CustomerRequestService $customerRequestService)
    {
        // Dependencies automatically resolved by service container...
        $this->contactService = $contactService;
        $this->customerRequestService = $customerRequestService;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        if(!isset(self::$countContact)){
            self::$countContact = $this->contactService->countContactNotRead();
        }
        if(!isset(self::$countCustomerRequest)){
            self::$countCustomerRequest = $this->customerRequestService->countCustomerRequestNew();
        }
        $view->with('countContact', self::$countContact)->with('countCustomerRequest', self::$countCustomerRequest);
    }
}
