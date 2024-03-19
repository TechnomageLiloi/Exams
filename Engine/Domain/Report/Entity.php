<?php

namespace Liloi\Rune\Domain\Report;

use Liloi\Tools\Entity as AbstractEntity;
use Liloi\Stylo\Parser;

/**
 * Entity: report record.
 *
 * @method string getResult()
 * @method void setResult(string $value)
 *
 * @method string getComment()
 * @method void setComment(string $value)
 *
 * @method string getData()
 * @method void setData(string $value)
 */
class Entity extends AbstractEntity
{
    public function getKey(): string
    {
        return $this->getField('key_report');
    }

    public function getCommentParse(): string
    {
        return Parser::parseString($this->getComment());
    }

    /**
     * Save report record to database.
     */
    public function save(): void
    {
        Manager::save($this);
    }
}