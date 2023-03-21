<?php

namespace common\repositories;

use common\entities\Book;
use yii\db\ActiveQuery;

interface BookRepositoryInterface
{
    public function findOne(int $int): ?Book;

    public function findAll(array $filters = []): ActiveQuery;

    public function create(Book $book): Book;

    public function update(Book $book): Book;

    public function delete(Book $book): Book;
}