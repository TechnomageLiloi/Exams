<?php

namespace Liloi\Rune\API\Questions\Collection;

use Liloi\API\Response;
use Liloi\Rune\API\Method as SuperMethod;
use Liloi\Rune\Domain\Questions\Manager as QuestionsManager;
use Liloi\Rune\Domain\Suites\Manager as SuitesManager;

class Method extends SuperMethod
{
    public static function execute(): Response
    {
        $name = SuitesManager::linkToName($_SERVER['REQUEST_URI']);
        $suite = SuitesManager::load($name);
        $collection = QuestionsManager::loadBySuite($name);

        $response = new Response();
        $response->set('render', static::render(__DIR__ . '/Template.tpl', [
            'collection' => $collection,
            'suite' => $suite
        ]));

        return $response;
    }
}