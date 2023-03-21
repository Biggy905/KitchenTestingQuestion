<?php

namespace common\groups;

use common\entities\Book;

final class BookItemGroup
{
    public static function toArray(Book $book): array
    {
        return [
            'id' => $book->id,
            'title' => $book->title,
            'publisher' => $book->publisher,
            'publish_house' => $book->publish_house,
            'count_book' => $book->count_book,
            'created_at' => $book->created_at,
        ];
    }
}
