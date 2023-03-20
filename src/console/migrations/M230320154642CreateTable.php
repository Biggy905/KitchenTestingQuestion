<?php

namespace console\migrations;

use common\entities\Book;
use common\entities\User;
use common\entities\UserToBook;
use yii\db\Migration;

final class M230320154642CreateTable extends Migration
{
    public function safeUp(): void
    {
        $this->createTable(
            User::tableName(),
            [
                'id' => $this->integer(32),
                'email' => $this->string(255)->notNull(),
                'password_hash' => $this->string(255)->notNull(),
                'password_reset_token' => $this->string(255)->notNull(),
                'auth_key' => $this->string(32)->notNull(),
                'access_token' => $this->string(128)->notNull(),
                'data' => $this->json(),
                'status' => $this->string(64)->notNull(),
                'created_at' => $this->dateTime(),
                'updated_at' => $this->dateTime(),
                'deleted_at' => $this->dateTime(),
            ]
        );

        $this->addPrimaryKey(User::tableName() . '_pkey', User::tableName(), 'id');

        $this->createTable(
            Book::tableName(),
            [
                'id' => $this->integer(32),
                'title' => $this->string(255)->notNull(),
                'publisher' => $this->string(255)->notNull(),
                'publish_house' => $this->string(255)->notNull(),
                'count_book' => $this->integer(8)->notNull(),
                'status' => $this->string(64)->notNull(),
                'created_at' => $this->dateTime(),
                'updated_at' => $this->dateTime(),
                'deleted_at' => $this->dateTime(),
            ]
        );

        $this->addPrimaryKey(Book::tableName() . '_pkey', Book::tableName(), 'id');

        $this->createTable(
            UserToBook::tableName(),
            [
                'id' => $this->integer(32),
                'user_id' => $this->integer(32)->notNull(),
                'book_id' => $this->integer(32)->notNull(),
                'created_at' => $this->dateTime(),
                'updated_at' => $this->dateTime(),
                'deleted_at' => $this->dateTime(),
            ]
        );

        $this->addPrimaryKey(UserToBook::tableName() . '_pkey', UserToBook::tableName(), 'id');
    }

    public function safeDown(): void
    {
        $this->dropTable(User::tableName());
        $this->dropTable(Book::tableName());
        $this->dropTable(UserToBook::tableName());
    }
}
