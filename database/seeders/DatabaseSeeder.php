<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Cooperation;

class DatabaseSeeder extends Seeder {

  public function run(){

    User::create([
      'username' => 'Admin',
      'password' => bcrypt('adminpassword')
    ]);

    Cooperation::create([
      'name' => 'Pertamina',
      'cooperation_started_from' => '2023-08-12',
      'detail_cooperation' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, delectus nemo, nostrum veniam enim consequuntur impedit aut, eum voluptate dolorem in ab amet repellat fuga expedita laboriosam quibusdam quis accusantium. Consequuntur quam vel nisi beatae, quia similique ratione odio sunt ad quidem ipsum temporibus accusamus? Accusantium, porro non doloremque quasi eos quaerat earum soluta voluptatum error id quos asperiores necessitatibus, dolor optio a, assumenda iusto iste recusandae natus? Facere, doloremque? Rerum consequatur placeat harum unde necessitatibus veniam illo, aperiam molestias maxime vel doloribus sint laudantium temporibus repellendus fugit incidunt cupiditate?'
    ]);
    
    Cooperation::create([
      'name' => 'BNI',
      'cooperation_started_from' => '2023-08-14',
      'detail_cooperation' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, delectus nemo, nostrum veniam enim consequuntur impedit aut, eum voluptate dolorem in ab amet repellat fuga expedita laboriosam quibusdam quis accusantium. Consequuntur quam vel nisi beatae, quia similique ratione odio sunt ad quidem ipsum temporibus accusamus? Accusantium, porro non doloremque quasi eos quaerat earum soluta voluptatum error id quos asperiores necessitatibus, dolor optio a, assumenda iusto iste recusandae natus? Facere, doloremque? Rerum consequatur placeat harum unde necessitatibus veniam illo, aperiam molestias maxime vel doloribus sint laudantium temporibus repellendus fugit incidunt cupiditate?'
    ]);
    
    Cooperation::create([
      'name' => 'Pertamina',
      'cooperation_started_from' => '2023-08-16',
      'detail_cooperation' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, delectus nemo, nostrum veniam enim consequuntur impedit aut, eum voluptate dolorem in ab amet repellat fuga expedita laboriosam quibusdam quis accusantium. Consequuntur quam vel nisi beatae, quia similique ratione odio sunt ad quidem ipsum temporibus accusamus? Accusantium, porro non doloremque quasi eos quaerat earum soluta voluptatum error id quos asperiores necessitatibus, dolor optio a, assumenda iusto iste recusandae natus? Facere, doloremque? Rerum consequatur placeat harum unde necessitatibus veniam illo, aperiam molestias maxime vel doloribus sint laudantium temporibus repellendus fugit incidunt cupiditate?'
    ]);

  }

}