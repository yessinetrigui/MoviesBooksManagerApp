<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $table = 'items';

    protected $fillable = ['title', 'author', 'director', 'genre', 'publication_year', 'release_year', 'item_type', 'admin_id', "pic"];

    // Define the relationship with admin
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
