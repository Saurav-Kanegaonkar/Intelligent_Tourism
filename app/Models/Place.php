<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;
    public $table = 'place';

    public function activity()
    {
        return $this->belongsToMany(Activity::class);
    }
    public function days()
    {
        return $this->belongsToMany(Day::class)->withPivot('from_hours', 'from_minutes', 'to_hours', 'to_minutes');
    }
}
