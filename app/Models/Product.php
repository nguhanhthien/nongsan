<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

	// Hình ảnh
	public function getImagesAttribute($images)
    {
        if (is_string($images)) {
            return json_decode($images, true);
        }

        return $images;
    }

    public function setImagesAttribute($images)
    {
        if (is_array($images)) {
            $this->attributes['images'] = json_encode($images);
        }
    }

    // Khu vực
    public function getAreasAttribute($areas)
    {
        if (is_string($areas)) {
            return json_decode($areas, true);
        }

        return $areas;
    }

    public function setAreasAttribute($areas)
    {
        if (is_array($areas)) {
            $this->attributes['areas'] = json_encode($areas);
        }
    }

    // Tags
    public function getTagsAttribute($tags)
    {
        if (is_string($tags)) {
            return json_decode($tags, true);
        }

        return $tags;
    }

    public function setTagsAttribute($tags)
    {
        if (is_array($tags)) {
            $this->attributes['tags'] = json_encode($tags);
        }
    }
}
