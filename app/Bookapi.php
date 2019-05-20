<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Bookapi extends Eloquent
{
    protected $connection = 'mongodb';
	protected $collection = 'apibook';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'barcode',
        'location_code',
        'bib_record_id',
        'item_record_id',
        'best_title',
        'best_author',
        'item_status_code',
        'use3_count',
        'copy_use_count',
        'due_gmt',
        'language_code',
        'callno',
        'group_code',
        'class',
        'class_x'
    ];
}
