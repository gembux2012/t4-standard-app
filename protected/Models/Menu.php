<?php

namespace App\Models;

use T4\Orm\Model;

class Menu
    extends Model
{

    static protected $schema = [
        'table' => 'menu',
        'columns' => [
            'title' => [
                'type' => 'string',
            ],
            'url' => [
                'type' => 'string',
            ],
        ],
    ];

    static protected $extensions = ['tree'];

}