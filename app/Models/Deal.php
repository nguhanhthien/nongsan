<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Deal extends Model
{
    use SoftDeletes;
    
    // Khu vực
    public function getAreasAttribute($areas)
    {
        if (is_string($areas)) {
            return json_decode($areas, true);
        };

        return $areas;
    }

    public function setAreasAttribute($areas)
    {
        if (is_array($areas)) {
            $this->attributes['areas'] = json_encode($areas);
        }
    }
}
