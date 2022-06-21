<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Database\Eloquent\SoftDeletes;
class Swimming_Pool extends Model implements Searchable
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'type',
        'user_id',
        'post_type',
        'address',
        'size',
        'toilet',
        'wifi',
        'laundry',
        'change_room',
        'parking',
        'laundry',
        'price',
        'photo',
    ];

    public function getSearchResult(): SearchResult
        {
            $url = route('swimmingpool.show', $this->id);

            return new SearchResult(
                $this,
                $this->type,
                $url
            );
        }

        function Swimming_Pool_relationBetweenUser()
              {
              return $this->hasOne('App\Models\User','id','user_id');
              }
}