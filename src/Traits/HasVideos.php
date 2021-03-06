<?php

namespace Eonlab\LaravelVideoable\Traits;

use Eonlab\LaravelVideoable\Models\Video;

trait HasVideos
{
    /**
     * @return mixed
     */
    public function embedvideos()
    {
        return $this->morphedByMany(Video::class, 'videoable');
    }

    /**
     * @param array $data
     */
    public function addEmbedVideo(array $data)
    {
        $this->video()->updateOrCreate(['videoable_id' => $this->id, 'videoable_type' => get_class($this)], $data);
    }

    /**
     * Remove linked video
     */
    public function removeEmbedVideo()
    {
        foreach ($this->video()->get() as $video) {
            $video->delete();
        }
    }
}
