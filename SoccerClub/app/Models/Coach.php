<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Base;

class Coach extends Base
{
    use HasFactory;

    public $title = "Coach";

    public function configs() {
        $defaultListtingConfigs = parent::defaultListingConfigs();
        $listingConfigs =  array(
            array(
                'field' => 'id',
                'name' => 'ID',
                'type' => 'text',
                'filter' => 'equal',
                'editing'=> false
            ),
            array(
                'field' => 'coach_name',
                'name' => 'Name',
                'type' => 'text',
                'filter' => 'like',
                'sort' => true,
                'listing'=> true,
                'editing'=> true,
                'validate' => 'required|max:100'
            ),

            array(
                'field' => 'date_of_birth',
                'name' => 'Date of Birth',
                'type' => 'date',
                'filter' => 'date',
                'sort' => true,
                'listing'=> true,
                'editing'=> true
            ),
            array(
                'field' => 'nationality',
                'name' => 'Nationality',
                'type' => 'text',
                'filter' => 'search',
                'listing'=> true,
                'editing'=> true,
                'validate' => 'required|max:100'
            ),
            array(
                'field' => 'coach_title',
                'name' => 'Title',
                'type' => 'text',
                'filter' => 'add_data',
                'listing'=> true,
                'editing'=> true,
                'validate' => 'required|max:100'

            ),
            array(
                'field' => 'coach_biography',
                'name' => 'Biography',
                'type' => 'text',
                'listing'=> true,
                'editing'=> true,
                'validate' => 'required'
            ),

            array(
                'field' => 'coach_image',
                'name' => 'Image',
                'type' => 'image',
                'listing'=> true,
                'editing'=> true
            ),
        );
        return array_merge($listingConfigs, $defaultListtingConfigs);
    }
}
