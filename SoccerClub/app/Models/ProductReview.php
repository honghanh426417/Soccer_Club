<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Base;
class ProductReview extends Base
{
    public $title = "ProductReview";

    public function configs() {
//        $defaultListtingConfigs = parent::defaultListingConfigs();
        $listingConfigs =  array(
            array(
                'field' => 'id',
                'name' => 'ID',
                'type' => 'text',
                'sort' => true,
                'listing'=> true,
                'editing'=> false

            ),

            array(
                'field' => 'product_id',
                'name' => 'Product ID',
                'type' => 'text',
                'sort' => true,
                'listing'=> true,
                'editing'=> false

            ),

            array(
                'field' => 'product_name',
                'name' => 'Product Name',
                'type' => 'text',
                'sort' => true,
                'listing'=> true,
                'editing'=> false,
                'filter'=> 'like',

            ),

            array(
                'field' => 'username',
                'name' => 'User Name',
                'type' => 'text',
                'filter' => 'like',
                'sort' => true,
                'listing'=> true,
                'editing'=> false

            ),
            array(
                'field' => 'email',
                'name' => 'User Email',
                'type' => 'text',
                'listing'=> true,
                'editing'=> false

            ),

            array(
                'field' => 'comment',
                'name' => 'Review',
                'type' => 'text',
                'filter' => 'search',
                'listing'=> true,
                'editing'=> false

            ),
        );
        return array_merge($listingConfigs);
    }
    protected $fillable = ['user_id', 'product_id','username','product_name','comment'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function product() {
        return $this->belongsTo(Product::class);
    }
}

