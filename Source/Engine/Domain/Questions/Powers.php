<?php

namespace Liloi\Exams\Engine\Domain\Questions;

class Powers
{
    public const PROBLEM = 1;
    public const CONFRONTATION = 2;

    public static $list = [
        self::PROBLEM => 'Problem',
        self::CONFRONTATION => 'Confrontation',
    ];
}