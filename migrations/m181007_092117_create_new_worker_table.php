<?php

use yii\db\Migration;

class m181007_092117_create_new_worker_table extends Migration {
    public function safeUp() {
        $this -> createTable('new_worker', [
            'id' => $this -> primaryKey(),
            'name' => $this -> string(50) -> notNull(),
            'phone_number' => $this -> integer(12) -> notNull(),
            'name_car' => $this -> string(50) -> notNull(),
            'year_born_car' => $this -> integer(4) -> notNull()
        ]);
    }

    public function safeDown() {
        $this -> dropTable('new_worker');
    }
}
