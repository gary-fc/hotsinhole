<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bulletin extends Model
{
    use HasFactory;

    const STATUS_CREATED = 'CREATED';
    const STATUS_DRAFT = 'DRAFT';
    const STATUS_PAID = 'PAID';

    const TYPE_FREE = 'FREE';
    const TYPE_HOT = 'HOT';
    const TYPE_PREMIUM = 'PREMIUM';
    const TYPE_TOP = 'TOP';

    protected $table = 'bulletins';

    protected $fillable = [
        'bulletin_direction',
        'bulletin_postal_code',
        'bulletin_zone',
        'bulletin_year',
        'bulletin_title',
        'bulletin_description',
        'bulletin_phone',
        'status'
    ];
}
