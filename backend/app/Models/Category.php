<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = ['id'];
    protected $fillable = ['name','parent_id'];

    public function parent() {
        return $this->belongsTo(self::class,'parent_id','id');
    }
    public function childs() {
        return $this->hasMany(self::class,'parent_id','id');
    }
    public function products() {
        return $this->belongsToMany(Product::class);
    }
}
