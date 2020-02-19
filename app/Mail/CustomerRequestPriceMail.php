<?php

namespace App\Mail;

use App\Models\CustomerRequestPrice;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class CustomerRequestPriceMail extends Mailable
{
    use Queueable, SerializesModels;

    private $customerRequest;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(CustomerRequestPrice $customerRequestPrice)
    {
        $this->customerRequest = $customerRequestPrice;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $customer = new \stdClass();
        $customer->name = $this->customerRequest->name;
        $customer->email = $this->customerRequest->email;
        $customer->phone = $this->customerRequest->phone;
        $customer->address = $this->customerRequest->address;
        $customer->product_name = $this->customerRequest->product_id;
        $customer->time_plan = $this->customerRequest->time_plan;
        $customer->amount_current = $this->customerRequest->amount_current;
        $customer->payment_name = $this->customerRequest->payment_id;
        $customer->request_ip = '12';
        $customer->link_admin = 'link';
        $this->from('alliedtechcamp.monipla@gmail.com')
            ->subject("[".base_path()."] Gửi báo giá")
        ->view('mail.customer_request_price')
        ->with('data',$customer);
    }
}
