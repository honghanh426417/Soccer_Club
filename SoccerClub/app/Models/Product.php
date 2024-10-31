<?php

namespace App\Models;

use App\Events\ProductDeleting;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Base;

class Product extends Base
{

    use HasFactory;

    public $title = "Product";

    public function configs()
    {
        $defaultListtingConfigs = parent::defaultListingConfigs();
        $listingConfigs = array(
            array(
                'field' => 'id',
                'name' => 'ID',
                'type' => 'text',
            ),

            array(
                'field' => 'name',
                'name' => 'Product',
                'type' => 'text',
                'filter' => 'like',
                'sort' => true,
                'listing' => true,
                'editing' => true,
                'validate' => 'required|max:100'
            ),

            array(
                'field' => 'price',
                'name' => 'Product Price',
                'type' => 'number',
                'filter' => 'between',
                'sort' => true,
                'listing' => true,
                'editing' => true,
                'validate' => 'required|Numeric'
            ),
            array(
                'field' => 'product_image',
                'name' => 'Image',
                'type' => 'image',
                'filter'=> 'search',
                'listing' => true,
                'editing' => true

            ),

            array(
                'field' => 'quantity',
                'name' => 'Quantity',
                'type' => 'text',
                'listing' => true,
                'editing' => true

            ),

            array(
                'field' => 'description',
                'name' => 'Description',
                'type' => 'ckeditor',
                'filter'=> 'add_data',
                'listing' => true,
                'editing' => true
            ),
        );
        return array_merge($listingConfigs, $defaultListtingConfigs);
    }
    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class, 'productID');
    }
    public function reviews() {
        return $this->hasMany(ProductReview::class);
    }
}
