<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Base;

class Feedback extends Base
{
    use HasFactory;

    public $title = "Feedback";

    public function listingConfigs() {
        $defaultListtingConfigs = parent::defaultListingConfigs();
        $listingConfigs =  array(
            array(
                'field' => 'id',
                'name' => 'ID',
                'type' => 'text',
                'sort' => true
            ),
            array(
                'field' => 'user_name',
                'name' => 'User Name',
                'type' => 'text',
                'sort' => true,
                'filter' => 'like',


            ),
            array(
                'field' => 'feedback_content',
                'name' => 'Content',
                'type' => 'text',
                'filter' => 'search',
            ),
        );
        return array_merge($listingConfigs);
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
