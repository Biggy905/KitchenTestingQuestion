<?php

namespace console\migrations;

use common\entities\Book;
use common\entities\Token;
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
                'id' => 'pk',
                'username' => $this->string(255)->notNull(),
                'password_hash' => $this->string(255)->notNull(),
                'password_reset_token' => $this->string(255)->notNull(),
                'auth_key' => $this->string(128)->notNull(),
                'data' => $this->json(),
                'status' => $this->string(64)->notNull(),
                'logged_at' => $this->dateTime(),
                'created_at' => $this->dateTime(),
                'updated_at' => $this->dateTime(),
                'deleted_at' => $this->dateTime(),
            ]
        );

        $this->createIndex(
            User::tableName() . '_username_slug',
            User::tableName(),
            'username',
            true
        );

        $this->createTable(
            Book::tableName(),
            [
                'id' => 'pk',
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

        $this->createIndex(
            Book::tableName() . '_title',
            Book::tableName(),
            'title'
        );

        $this->createTable(
            UserToBook::tableName(),
            [
                'id' => 'pk',
                'user_id' => $this->integer(32)->notNull(),
                'book_id' => $this->integer(32)->notNull(),
                'created_at' => $this->dateTime(),
                'updated_at' => $this->dateTime(),
                'deleted_at' => $this->dateTime(),
            ]
        );

        $this->createTable(
            Token::tableName(),
            [
                'id' => 'pk',
                'token' => $this->string(),
                'created_at' => $this->dateTime(),
                'updated_at' => $this->dateTime(),
                'deleted_at' => $this->dateTime(),
            ]
        );
    }

    public function safeDown(): void
    {
        $this->dropTable(User::tableName());
        $this->dropTable(Book::tableName());
        $this->dropTable(UserToBook::tableName());
        $this->dropTable(Token::tableName());
    }
}
