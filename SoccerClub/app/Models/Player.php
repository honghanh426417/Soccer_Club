<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Base;

class Player extends Base
{
    use HasFactory;

    public $title = "Player";

    public function configs() {
        $listingConfigs =  array(
            array(
                'field' => 'id',
                'name' => 'ID',
                'type' => 'text',
                'filter' => 'equal',
                'editing'=> false
            ),
            array(
                'field' => 'player_name',
                'name' => 'Name',
                'type' => 'text',
                'filter' => 'equal',
                'listing'=> true,
                'editing'=> true,
                'validate' => 'required|max:100'
            ),
            array(
                'field' => 'player_image',
                'name' => 'Image',
                'type' => 'image',
                'listing'=> true,
                'editing'=> true
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
                'listing'=> true,
                'editing'=> true,
                'validate' => 'required|max:100'
            ),
            array(
                'field' => 'player_title',
                'name' => 'Title',
                'type' => 'ckeditor',
                'listing'=> true,
                'editing'=> true,
                'validate' => 'required|max:100'
            ),
            array(
                'field' => 'biography',
                'name' => 'Biography',
                'type' => 'ckeditor',
                'listing'=> true,
                'editing'=> true,
                'validate' => 'required'
            ),
            array(
                'field' => 'position',
                'name' => 'Position',
                'type' => 'text',
                'listing'=> true,
                'editing'=> true,
                'validate' => 'required|max:100'
            ),
            array(
                'field' => 'jersey_number',
                'name' => 'Jersey Number',
                'type' => 'text',
                'filter' => 'equal',
                'sort' => true,
                'listing'=> true,
                'editing'=> true,
                'validate' => 'required|max:100'

            ),
            array(
                'field' => 'height',
                'name' => 'Height',
                'type' => 'number',
                'filter' => 'search',
                'sort' => true,
                'listing'=> true,
                'editing'=> true
            ),
            array(
                'field' => 'weight',
                'name' => 'Weight',
                'type' => 'number',
                'filter' => 'add_data',
                'sort' => true,
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

            array(
                'field' => 'edit',
                'name' => 'Edit',
                'type' => 'edit',
                'listing'=> true,
                'editing'=> false
            ),
            array(
                'field' => 'delete',
                'name' => 'Delete',
                'type' => 'deleteplayer',
                'listing'=> true,
                'editing'=> false
            )


        );
        return array_merge($listingConfigs);
    }
}
