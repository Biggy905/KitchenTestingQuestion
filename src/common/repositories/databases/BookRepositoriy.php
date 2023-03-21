<?php

namespace common\repositories\databases;

use common\entities\Book;
use common\helpers\DateTimeHelpers;
use common\repositories\BookRepositoryInterface;
use yii\db\ActiveQuery;
use LogicException;

final class BookRepositoriy implements BookRepositoryInterface
{
    public function findOne(int $int): ?Book
    {
        return Book::find()->byId($int)->one();
    }

    public function findAll(array $filters = []): ActiveQuery
    {
        $query = Book::find();

        $page = $filters['page'] ?? 1;
        $limit = $filters['limit'] ?? 10;

        if ($page < 1) {
            $page = 1;
        }

        if ($limit < 1 || $limit >= 25) {
            $limit = 10;
        }

        if ($page && $limit) {
            $query->limit($limit);
            $query->offset($page * $limit - $limit);
        }

        $sortFieldDirection = (string) ($filters['sort_direction'] ?? '');

        $sortDirection = match ($sortFieldDirection) {
            'asc' => 'SORT_ASC',
            default => 'SORT_DESC',
        };

        $query->orderBy(
            [
                'created_at' => $sortDirection
            ]
        );

        return $query;
    }

    public function create(Book $book): Book
    {
        if (!$book->save()){
            throw new LogicException('Не удалось сохранить!');
        }

        return $book;
    }

    public function update(Book $book): Book
    {
        if (!$book->save()){
            throw new LogicException('Не удалось обновить!');
        }

        return $book;
    }

    public function delete(Book $book): Book
    {
        $book->delete_at = DateTimeHelpers::createDateTime();
        if (!$book->update()){
            throw new LogicException('Не удалось обновить!');
        }

        return $book;
    }
}
