<?php

namespace Liloi\Rune\Domain\Suites;

use Liloi\Rune\Domain\Manager as DomainManager;

/**
 * Report record's manager.
 *
 * @package Liloi\Exams\Engine\Domain\Questions
 */
class Manager extends DomainManager
{
    /**
     * Get table name.
     *
     * @return string
     */
    public static function getTableName(): string
    {
        return self::getTablePrefix() . 'suites';
    }

    public static function loadCollection(): Collection
    {
        $name = self::getTableName();

        $rows = self::getAdapter()->getArray(sprintf(
            'select * from %s order by key_suite desc limit 100;',
            $name
        ));

        $collection = new Collection();

        foreach($rows as $row)
        {
            $collection[] = Entity::create($row);
        }

        return $collection;
    }

    public static function load(string $key_report): Entity
    {
        $name = self::getTableName();

        $row = self::getAdapter()->getRow(sprintf(
            'select * from %s where key_suite="%s"',
            $name,
            $key_report
        ));

        return Entity::create($row);
    }

    public static function save(Entity $entity): void
    {
        $name = self::getTableName();
        $data = $entity->get();

        // @todo: Get param name from const.
        $key = $data['key_suite'];
        unset($data['key_suite']);

        self::getAdapter()->update(
            $name,
            $data,
            sprintf('key_suite = "%s"', $key)
        );
    }

    public static function remove(Entity $entity): void
    {
        $name = self::getTableName();
        $key = $entity->getKey();

        self::getAdapter()->delete(
            $name,
            sprintf('key_suite = "%s"', $key)
        );
    }

    // @todo: rise this method to more abstract level.
    public static function create(
        string $keySuite,
        string $title,
        string $summary
    ): array
    {
        $name = self::getTableName();
        $rows = [
            'key_suite' => $keySuite,
            'title' => $title,
            'summary' => $summary
        ];
        self::getAdapter()->insert($name, $rows);

        return $rows;
    }
}