<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    const TABLE     = 'products';
    const ID        = 'id';
    const NAME      = 'name';
    const DETAIL    = 'detail';
    const THUMBNAIL = 'thumbnail';

    protected $table = self::TABLE;
    protected $primaryKey = self::ID;
    protected $fillable = [
        self::NAME,
        self::DETAIL,
        self::THUMBNAIL
    ];

    public function setData($request) {
        $this->{self::NAME}      = $request[self::NAME];
        $this->{self::DETAIL}    = $request[self::DETAIL];
        $this->{self::THUMBNAIL} = $request[self::THUMBNAIL];
    }

}
