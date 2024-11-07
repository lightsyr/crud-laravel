<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PublicationCategory extends Model
{
    protected $table = "publication_categories";

    protected $fillable = ["name"];

    public function publication()
    {
        return $this->hasMany(Publication::class);
    }
}
