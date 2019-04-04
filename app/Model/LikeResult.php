<?php

namespace App\Model;
use App\Model\Web\AddLike;
use Illuminate\Database\Eloquent\Relations\Pivot;

class LikeResult extends Pivot
{
    protected $table = 'likepollresults';

    protected $fillable = ['poll_id', 'cat_id'];

    public function poll() {
        return $this->belongsTo(AddPoll::class, 'poll_id');
    }
    public function cat() {
        return $this->belongsTo(AddLike::class, 'cat_id');
    }
}
