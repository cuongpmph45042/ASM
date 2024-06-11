<?php

namespace Manhcuong\Asm\Models;

use Manhcuong\Asm\Commons\Model;

class Post extends Model
{
    protected string $tableName = 'posts';

    public function all()
    {
        return $this->queryBuilder
            ->select(
                'p.id',
                'p.id_categories',
                'p.title',
                'p.image',
                'p.created_at',
                'p.update_at',
                'c.name as c_name'
            )
            ->from($this->tableName, 'p')
            ->innerJoin('p', 'categories', 'c', 'c.id = p.id_categories')
            ->orderBy('id', 'desc')
            ->fetchAllAssociative();
    }

    public function findByID($id)
    {
        return $this->queryBuilder
            ->select(
                'p.id',
                'p.id_categories',
                'c.name as c_name',
                'p.title',
                'p.image',
                'p.contents',
                'p.created_at',
                'p.update_at'
                
            )
            ->from($this->tableName, 'p')
            ->innerJoin('p', 'categories', 'c', 'c.id = p.id_categories')
            ->where('p.id = ?')
            ->setParameter(0, $id) 
            ->fetchAssociative();
    }

    public function paginate($page = 1, $perPage = 5)
    {
        $queryBuilder = clone($this->queryBuilder);

        $totalPage = ceil($this->count() / $perPage);

        $offset = $perPage * ($page - 1);

        $data = $queryBuilder
        ->select(
            'p.id', 'p.id_categories', 'p.title', 'p.image', 'p.created_at', 'p.update_at',
            'c.name'
        )
        ->from($this->tableName, 'p')
        ->innerJoin('p', 'categories', 'c', 'c.id = p.id_categories')
        ->setFirstResult($offset)
        ->setMaxResults($perPage)
        ->orderBy('p.id','desc')
        ->fetchAllAssociative();

        return [$data, $totalPage];
    }
}