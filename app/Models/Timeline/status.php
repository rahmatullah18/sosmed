<?php

namespace App\Models\Timeline;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class status extends Model
{
    protected $fillable = ['body', 'hash'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function published()
    {
        return $this->created_at->diffForHumans();
    }
}
