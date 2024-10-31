<?php
namespace App\Models;


class Users extends Base
{

    public $title = "Users";

    public function configs() {
        $listingConfigs =  array(
            array(
                'field' => 'id',
                'name' => 'ID',
                'type' => 'text',
                'sort' => true,
                'listing'=> true,
                'editing'=> true

            ),
            array(
                'field' => 'username',
                'name' => 'User Name',
                'type' => 'text',
                'filter' => 'like',
                'sort' => true,
                'listing'=> true,
                'editing'=> true

            ),
            array(
                'field' => 'email',
                'name' => 'User Email',
                'type' => 'text',
                'filter' => 'search',
                'listing'=> true,
                'editing'=> true
            ),
            array(
                'field' => 'updated_at',
                'name' => 'Updated at',
                'type' => 'text',
                'sort' => true,
                'listing'=> true,
                'editing'=> false

            ),
            array(
                'field' => 'created_at',
                'name' => 'Created at',
                'type' => 'text',
                'sort' => true,
                'listing'=> true,
                'editing'=> false
            ),

        );
        return array_merge($listingConfigs);
    }
    public function feedback()
    {
        return $this->hasMany(Feedback::class, 'user_id');
    }

}
