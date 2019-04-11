<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'user_id' => '1',
            'category_id' => '1',
            'image' => 'card_sky.jpg',
            'course_title' => 'The Office Season 1',
            'author' => 'Michael Scott',
            'category' => 'Studio Skills',
            'status' => 'active',
            'description' => 'Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('courses')->insert([
            'user_id' => '1',
            'category_id' => '1',
            'image' => 'card_carbon.jpg',
            'course_title' => 'The Office Season 2',
            'author' => 'Michael Scott',
            'category' => 'Studio Skills',
            'status' => 'active',
            'description' => 'Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('courses')->insert([
            'user_id' => '1',
            'category_id' => '1',
            'image' => 'card_watermelon.jpg',
            'course_title' => 'The Office Season 3',
            'author' => 'Michael Scott',
            'category' => 'Studio Skills',
            'status' => 'active',
            'description' => 'Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('courses')->insert([
            'user_id' => '1',
            'category_id' => '1',
            'image' => 'card_neutral.jpg',
            'course_title' => 'The Office Season 4',
            'author' => 'Michael Scott',
            'category' => 'Studio Skills',
            'status' => 'active',
            'description' => 'Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('courses')->insert([
            'user_id' => '1',
            'category_id' => '2',
            'image' => 'card_carbon.jpg',
            'course_title' => 'The Michael Scott Paper Company',
            'author' => 'Michael Scott',
            'category' => 'Sound Design',
            'status' => 'active',
            'description' => 'Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('courses')->insert([
            'user_id' => '1',
            'category_id' => '2',
            'image' => 'card_sky.jpg',
            'course_title' => 'Schrute Farms',
            'author' => 'Michael Scott',
            'category' => 'Sound Design',
            'status' => 'active',
            'description' => 'Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('courses')->insert([
            'user_id' => '1',
            'category_id' => '2',
            'image' => 'card_watermelon.jpg',
            'course_title' => 'Paper Airplane',
            'author' => 'Michael Scott',
            'category' => 'Sound Design',
            'status' => 'active',
            'description' => 'Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('courses')->insert([
            'user_id' => '1',
            'category_id' => '2',
            'image' => 'card_carbon.jpg',
            'course_title' => 'Promos',
            'author' => 'Michael Scott',
            'category' => 'Sound Design',
            'status' => 'active',
            'description' => 'Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('courses')->insert([
            'user_id' => '1',
            'category_id' => '3',
            'image' => 'card_sky.jpg',
            'course_title' => 'Dunder Mifflin',
            'author' => 'Michael Scott',
            'category' => 'Career & Industry',
            'status' => 'active',
            'description' => 'Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('courses')->insert([
            'user_id' => '1',
            'category_id' => '3',
            'image' => 'card_watermelon.jpg',
            'course_title' => 'Junior Salesman',
            'author' => 'Michael Scott',
            'category' => 'Career & Industry',
            'status' => 'active',
            'description' => 'Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('courses')->insert([
            'user_id' => '1',
            'category_id' => '3',
            'image' => 'card_watermelon.jpg',
            'course_title' => 'Customer Loyalty',
            'author' => 'Michael Scott',
            'category' => 'Career & Industry',
            'status' => 'active',
            'description' => 'Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('courses')->insert([
            'user_id' => '1',
            'category_id' => '3',
            'image' => 'card_carbon.jpg',
            'course_title' => 'Here comes treble',
            'author' => 'Michael Scott',
            'category' => 'Career & Industry',
            'status' => 'active',
            'description' => 'Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('courses')->insert([
            'user_id' => '1',
            'category_id' => '4',
            'image' => 'card_neutral.jpg',
            'course_title' => 'Roys Wedding',
            'author' => 'Michael Scott',
            'category' => 'Audio Implementation',
            'status' => 'active',
            'description' => 'Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('courses')->insert([
            'user_id' => '1',
            'category_id' => '4',
            'image' => 'card_sky.jpg',
            'course_title' => 'The Warehouse',
            'author' => 'Michael Scott',
            'category' => 'Audio Implementation',
            'status' => 'active',
            'description' => 'Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('courses')->insert([
            'user_id' => '1',
            'category_id' => '4',
            'image' => 'card_watermelon.jpg',
            'course_title' => 'Angry Andy',
            'author' => 'Michael Scott',
            'category' => 'Audio Implementation',
            'status' => 'active',
            'description' => 'Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('courses')->insert([
            'user_id' => '1',
            'category_id' => '4',
            'image' => 'card_carbon.jpg',
            'course_title' => 'Pams Replacement',
            'author' => 'Michael Scott',
            'category' => 'Audio Implementation',
            'status' => 'active',
            'description' => 'Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('courses')->insert([
            'user_id' => '1',
            'category_id' => '5',
            'image' => 'card_sky.jpg',
            'course_title' => 'Pam and Jim',
            'author' => 'Michael Scott',
            'category' => 'Game Music',
            'status' => 'active',
            'description' => 'Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('courses')->insert([
            'user_id' => '1',
            'category_id' => '5',
            'image' => 'card_watermelon.jpg',
            'course_title' => 'Dwight and Angela',
            'author' => 'Michael Scott',
            'category' => 'Game Music',
            'status' => 'active',
            'description' => 'Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('courses')->insert([
            'user_id' => '1',
            'category_id' => '5',
            'image' => 'card_sky.jpg',
            'course_title' => 'Michael and Jan',
            'author' => 'Michael Scott',
            'category' => 'Game Music',
            'status' => 'active',
            'description' => 'Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('courses')->insert([
            'user_id' => '1',
            'category_id' => '5',
            'image' => 'card_carbon.jpg',
            'course_title' => 'Diversity Day',
            'author' => 'Michael Scott',
            'category' => 'Game Music',
            'status' => 'active',
            'description' => 'Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('courses')->insert([
            'user_id' => '1',
            'category_id' => '6',
            'image' => 'card_watermelon.jpg',
            'course_title' => 'Scraton City',
            'author' => 'Michael Scott',
            'category' => 'Mixing',
            'status' => 'active',
            'description' => 'Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('courses')->insert([
            'user_id' => '1',
            'category_id' => '6',
            'image' => 'card_carbon.jpg',
            'course_title' => 'Health Care',
            'author' => 'Michael Scott',
            'category' => 'Mixing',
            'status' => 'active',
            'description' => 'Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('courses')->insert([
            'user_id' => '1',
            'category_id' => '6',
            'image' => 'card_sky.jpg',
            'course_title' => 'Michaels Birthday',
            'author' => 'Michael Scott',
            'category' => 'Mixing',
            'status' => 'active',
            'description' => 'Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('courses')->insert([
            'user_id' => '1',
            'category_id' => '6',
            'image' => 'card_carbon.jpg',
            'course_title' => 'The Client',
            'author' => 'Michael Scott',
            'category' => 'Mixing',
            'status' => 'active',
            'description' => 'Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
