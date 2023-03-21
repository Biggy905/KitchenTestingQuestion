<?php

namespace common\groups;

final class BookListGroup
{
    public static function toArray(array $books): array
    {
        $data = [];
        foreach ($books as $book) {
            $data[] = BookItemGroup::toArray($book);
        }

        return $data;
    }
}
