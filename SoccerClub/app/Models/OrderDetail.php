<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Base;

class OrderDetail extends Base
{
    use HasFactory;

    public $title = "OrderDetail";

    public function configs() {
        $defaultListtingConfigs = parent::defaultListingConfigs();
        $listingConfigs =  array(
            array(
                'field' => 'id',
                'name' => 'Order Detail ID',
                'type' => 'text',
                'filter' => 'equal',
                'sort' => true,
                'listing'=> true,
                'editing'=> false

            ),
            array(
                'field' => 'orderID',
                'name' => 'Order ID',
                'type' => 'text',
                'filter' => 'equal',
                'sort' => true,
                'listing'=> true,
                'editing'=> true
            ),
            array(
                'field' => 'productName',
                'name' => 'Product Name',
                'type' => 'text',
                'listing'=> true,
                'editing'=> true
            ),
            array(
                'field' => 'quantity',
                'name' => 'Quantity',
                'type' => 'number',
                'filter' => 'between',
                'sort' => true,
                'listing'=> true,
                'editing'=> true,
                'validate' => 'required|Numeric'
            ),
            array(
                'field' => 'subtotal',
                'name' => 'Subtotal',
                'type' => 'text',
                'listing'=> true,
                'editing'=> true
            ),

            array(
                'field' => 'status',
                'name' => 'Status',
                'type' => 'text',
                'listing' => true,
                'editing' => true,
            ),

        );
        return array_merge($listingConfigs);
    }
    public function order()
    {
        return $this->belongsTo(Order::class, 'orderID', 'id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'productID', 'id');
    }


}
