<?php

use yii\db\Migration;

class m181010_222351_create_partner_table extends Migration {
  
  public function safeUp() {
    $this->createTable('partner', [
      'id' => $this->primaryKey(),
      'name' => $this -> string(50) -> notNull(),
      'phone_number' => $this -> biginteger(12) -> notNull(),
      'email' => $this -> string(50) -> notNull(),
      'city' => $this -> string(50) -> notNull(),
      'date' => $this -> date() -> notNull()
    ]);
  }

  public function safeDown() {
    $this->dropTable('partner');
  }
}
