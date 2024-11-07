<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    protected $table = "publications";

    public function category()
    {
        return $this->belongsTo(PublicationCategory::class, "category_id");
    }
}
