<?php

namespace App\Models;

use App\Common\AppCommon;
use Illuminate\Database\Eloquent\Model;

class CustomerRequestPrice extends Model
{
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function getPaymentNameAttribute(){
        return AppCommon::getPaymentMethodName($this->payment_id);
    }
}
