<?php

namespace App\Models;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use App\Models\Base;
use function Aws\filter;

class Admin extends Base implements AuthenticatableContract
{
    use HasFactory;
    use Authenticatable;

    public $title = "Admin";

    public function listingConfigs() {
//        $defaultListtingConfigs = parent::defaultListingConfigs();
        $listingConfigs = array(
            array(
                'field' => 'id',
                'name' => 'ID',
                'type' => 'text',
                'listing' => true,
                'sort' => true,
                'editing' => true,
            ),
            array(
                'field' => 'name',
                'name' => 'Admin Name',
                'type' => 'text',
                'listing' => true,
                'sort' => true,
                'filter'=> 'like',
                'editing' => true,
            ),
            array(
                'field' => 'email',
                'name' => 'Admin Email',
                'type' => 'text',
                'filter' => 'search',
                'editing' => true,
                'listing' => true,

            ),
        );
        return array_merge($listingConfigs);
    }
}
