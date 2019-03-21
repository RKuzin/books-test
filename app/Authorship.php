<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Authorship extends Pivot

{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'authorship';




}
