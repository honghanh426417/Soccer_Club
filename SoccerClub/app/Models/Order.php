<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Base;

class Order extends Base
{
    use HasFactory;

    public $title = "Order";

    public function configs()
    {
        $defaultListtingConfigs = parent::defaultListingConfigs();
        $listingConfigs = array(
            array(
                'field' => 'id',
                'name' => 'OrderID',
                'type' => 'text',
                'sort' => true,
                'listing' => true,
                'editing' => false
            ),
            array(
                'field' => 'UserName',
                'name' => 'User Name',
                'type' => 'text',
                'sort' => true,
                'listing' => true,
                'editing' => true,
            ),
            array(
                'field' => 'TotalAmount',
                'name' => 'Total Amount',
                'type' => 'text',
                'listing' => true,
                'editing' => true,
                'validate' => 'required|max:100'
            ),

            array(
                'field' => 'status',
                'name' => 'Status',
                'type' => 'text',
                'listing' => true,
                'editing' => true,
            ),


            array(
                'field' => 'view',
                'name' => 'View',
                'type' => 'view',
                'listing' => true,
            ),


        );
        return array_merge($listingConfigs,);
    }
    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class, 'orderID');
    }

}
