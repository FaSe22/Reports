<?php

namespace Fase22\Reports;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Report extends Model
{
    protected $fillable = [
        'reportable_id',
        'reportable_type',
        'reporter_id',
        'reason',
    ];

    public function reportable(): MorphTo
    {
        return $this->morphTo();
    }
}
