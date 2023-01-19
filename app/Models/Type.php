<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Type extends Model
{
    use HasFactory;

    /**
     * Get all of the posts for the Category
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function projects(): HasMany
    {
        return $this->hasMany(Project::class);//una tipologia può appartenere a diversi progetti
    }

    protected $fillable = ['name','slug'];

    public static function createTypeSlug($name)
    {
        $type_slug = Str::slug($name);
        return $type_slug;
    }
}