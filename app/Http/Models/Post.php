<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

	protected $hidden = [
    ];

	protected $guarded = [];
}
