<?php

namespace common\services;

use common\entities\Book;
use common\enums\BookStatus;
use common\forms\AddBookForm;
use common\forms\FilterForm;
use common\forms\IdForm;
use common\groups\BookItemGroup;
use common\groups\BookListGroup;
use common\repositories\databases\BookRepositoriy;
use yii\data\Pagination;

final class BookService
{
    public function __construct(
        private readonly BookRepositoriy $bookRepositoriy,
        private readonly AddBookForm $addBookForm,
        private readonly IdForm $idForm,
        private readonly FilterForm $filterForm,
    ) {

    }

    public function item(int $id): array
    {
        $form = $this->idForm;
        $form->setAttributes(['id' => $id]);
        $validate = $form->validate();
        if (sizeof($validate) !== 0) {
            foreach($validate as $message) {
                throw new \DomainException($message);
            }
        }

        $item = $this->bookRepositoriy->findOne($form->id);
        if (!$item) {
            throw new \DomainException('Данную книгу не нашли!');
        }

        return BookItemGroup::toArray($item);
    }

    public function list(array $filters): array
    {
        $form = $this->filterForm;
        $form->setAttributes($filters);
        $validate = $form->validate();
        if (sizeof($validate) !== 0) {
            foreach($validate as $message) {
                throw new \DomainException($message);
            }
        }

        $list = $this->bookRepositoriy->findAll($filters)->all();

        return [
            'list' => BookListGroup::toArray($list),
            'pagination' => $this->pagination($filters)
        ];
    }

    public function pagination(array $filters): Pagination
    {
        $auctions = $this->bookRepositoriy->findAll($filters);

        $limit = $filters['limit'] ?? 10;

        if ($limit < 1 || $limit >= 25) {
            $limit = 10;
        }

        $pagination = new Pagination(
            [
                'defaultPageSize' => 10,
                'pageSize' => $limit,
                'totalCount' => $auctions->count(),
                'pageSizeParam' => false,
                'forcePageParam' => false,
            ]
        );

        return $pagination;
    }

    public function create(array $request): array
    {
        $form = $this->addBookForm;
        $form->setAttributes($request);
        $validate = $form->validate();
        if (sizeof($validate) !== 0) {
            foreach($validate as $message) {
                throw new \DomainException($message);
            }
        }

        $book = new Book();
        $book->title = $form->title;
        $book->publisher = $form->publisher;
        $book->publish_house = $form->publish_house;
        $book->count_book = $form->count_book;
        $book->status = BookStatus::ACTIVE->value;

        $cleanBook = $this->bookRepositoriy->create($book);

        return BookItemGroup::toArray($cleanBook);
    }

    public function update($request)
    {
        $form = $this->idForm;
        $form->setAttributes($request);
        $validate = $form->validate();
        if (sizeof($validate) !== 0) {
            foreach($validate as $message) {
                throw new \DomainException($message);
            }
        }

        $formBook = $this->addBookForm;
        $formBook->setAttributes($request);
        $validate = $formBook->validate();
        if (sizeof($validate) !== 0) {
            foreach($validate as $message) {
                throw new \DomainException($message);
            }
        }

        $book = $this->bookRepositoriy->findOne($form->id);
        $book->title = $formBook->title;
        $book->publisher = $formBook->publisher;
        $book->publish_house = $formBook->publish_house;
        $book->count_book = $formBook->count_book;

        $cleanBook = $this->bookRepositoriy->update($book);

        return BookItemGroup::toArray($cleanBook);
    }

    public function delete(int $id): void
    {
        $form = $this->idForm;
        $form->setAttributes(['id' => $id]);
        $validate = $form->validate();
        if (sizeof($validate) !== 0) {
            foreach($validate as $message) {
                throw new \DomainException($message);
            }
        }
        $book = $this->bookRepositoriy->findOne($form->id);

        $this->bookRepositoriy->delete($book);
    }
}
