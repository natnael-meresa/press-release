<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Feed\Feedable;
use Spatie\Feed\FeedItem;

class Press extends Model implements Feedable
{
    public function toFeedItem(): FeedItem
    {
        return FeedItem::create()
            ->id($this->id)
            ->headline($this->headline)
            ->press_body($this->press_body)
            ->updated($this->updated_at)
            ->link($this->link)
            ->c_name($this->c_name)
            ->c_email($this->c_email);
    }

    public static function getFeedItems()
    {
        return static::all();
    }

    public function getLinkAttribute()
    {
        return route('press.show', $this);
    }
    use HasFactory;
    
    protected $fillable = [
        'image', 'p_room', 'dist_tier', 'headline', 'c_phone', 'c_mobile','c_address','mapAddress','c_website','subhead', 'r_dates', 'press_body', 'sourceCompany','c_name', 'c_email'
    ];
}
