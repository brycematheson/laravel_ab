<?php

namespace apurbajnu\AbTesting\Events;

class GoalCompleted
{
    public $goal;

    public function __construct($goal)
    {
        $this->goal = $goal;
    }
}
