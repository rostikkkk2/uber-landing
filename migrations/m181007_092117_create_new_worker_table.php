<?php

use yii\db\Migration;

class m181007_092117_create_new_worker_table extends Migration {
  
    public function safeUp() {
    $this -> createTable('worker', [
      'id' => $this -> primaryKey(),
      'name' => $this -> string(50) -> notNull(),
      'phone_number' => $this -> biginteger(12) -> notNull(),
      'name_car' => $this -> string(50) -> notNull(),
      'year_born_car' => $this -> integer(4) -> notNull(),
      'city' => $this -> string(50) -> notNull(),
      'date' => $this -> date() -> notNull()
    ]);
  }

  public function safeDown() {
    $this -> dropTable('worker');
  }
}
