<?php

namespace Fase22\Reports;

use Illuminate\Database\Eloquent\Relations\MorphMany;

trait Reportable
{
    public function report(?string $reason = null): void
    {
        Report::create([
            'reportable_id' => $this->id,
            'reportable_type' => get_class($this),
            'reason' => $reason,
            'reporter_id' => auth()->id() ?? null,
        ]);
    }

    public function reports(): MorphMany
    {
        return $this->morphMany(Report::class, 'reportable');
    }
}
