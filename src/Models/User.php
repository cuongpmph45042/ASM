<?php

namespace Manhcuong\Asm\Models;

use Manhcuong\Asm\Commons\Model;

class User extends Model
{
    protected string $tableName = 'users';

    public function type($type, $id)
    {
        if (!empty($type)) {
            $this->queryBuilder->update($this->tableName)
                ->set('type', '?')
                ->setParameter(0, $type)
                ->where('id = ?')
                ->setParameter(1, $id)
                ->executeQuery();

            return true;
        }

        return false;
    }

    public function findByEmail($email)
    {
        return $this->queryBuilder
            ->select('*')
            ->from($this->tableName)
            ->where('email = ?')
            ->setParameter(0, $email)
            ->fetchAssociative();
    }
}