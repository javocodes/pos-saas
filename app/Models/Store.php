<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Store extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'contact_id',
        'store_type_id',
        'name',
        'title',
        'banner_message',
        'slogan',
        'mission',
        'theme',
        'desc',
        'theme',
        'logo_path'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function contact(): HasMany
    {
        return $this->hasMany(contact::class);
    }

    public function product(): HasMany
    {
        return $this->hasMany(product::class);
    }

    public function storeType(): BelongsTo
    {
        return $this->belongsTo(StoreType::class);
    }

    public function banner(): HasMany
    {
        return $this->hasMany(Banner::class);
    }

    public function commission(): HasOne
    {
        return $this->hasOne(Commission::class);
    }

    public function coupon(): HasMany
    {
        return $this->hasMany(Coupon::class);
    }

    public function logoUrl(): string
    {
        return $this->logo_path
                ? Storage::disk('storeLogo')->url($this->logo_path)
                : 'https://www.gravatar.com/avatar/' . md5(strtolower(trim($this->email)));
    }

}
