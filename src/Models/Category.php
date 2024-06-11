<?php

namespace Manhcuong\Asm\Models;

use Manhcuong\Asm\Commons\Model;

class Category extends Model
{
    protected string $tableName = 'categories';

    public function count()
    {
        return $this->queryBuilder
        ->select(
            'c.name', 'COUNT(p.id) AS post_count',
        )
        ->from($this->tableName, 'c')
        ->leftJoin('c', 'posts', 'p', 'p.id_categories = c.id')
        ->groupBy('c.name')
        ->executeQuery()
        ->fetchAllAssociative();
    }
}