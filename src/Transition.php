<?php

namespace Spatie\ModelStates;

use Illuminate\Auth\Access\Response;

abstract class Transition
{
    public function canTransition(): Response
    {
        return Response::allow();
    }
}
