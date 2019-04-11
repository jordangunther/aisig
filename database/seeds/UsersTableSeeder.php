<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'jordan',
            'last_name' => '',
            'email' => 'jordankgunther@gmail.com',
            'user_type' => 'admin',
            'password' => '$2y$10$Xv/Jbqxtwj4aIYEb4ovNm.6IFnsDXtNVTS7DsLQLfemCcc9vZEqNq', //password
            'user_image' => 'user_sky.jpg',
            'background_image' => 'banner_carbon.jpg',
            'description' => 'Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.',
            'remember_token' => 'token',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'first_name' => 'robbie',
            'last_name' => '',
            'email' => 'robbwols@gmail.com',
            'user_type' => 'admin',
            'password' => '$2y$10$Xv/Jbqxtwj4aIYEb4ovNm.6IFnsDXtNVTS7DsLQLfemCcc9vZEqNq', //password
            'user_image' => 'user_sky.jpg',
            'background_image' => 'banner_carbon.jpg',
            'description' => 'Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.',
            'remember_token' => 'token',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'first_name' => 'Michael',
            'last_name' => 'Scott',
            'email' => 'michael-fake@iasig.org',
            'user_type' => 'advance',
            'password' => 'password',
            'user_image' => 'user_sky.jpg',
            'background_image' => 'banner_carbon.jpg',
            'description' => 'Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.',
            'remember_token' => 'token',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'first_name' => 'Jim',
            'last_name' => 'Halpert',
            'email' => 'jim-fake@iasig.org',
            'user_type' => 'advance',
            'password' => 'password',
            'user_image' => 'user_sky.jpg',
            'background_image' => 'banner_carbon.jpg',
            'description' => 'Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.',
            'remember_token' => 'token',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'first_name' => 'Pam',
            'last_name' => 'Beesly',
            'email' => 'pam-fake@iasig.org',
            'user_type' => 'advance',
            'password' => 'password',
            'user_image' => 'user_sky.jpg',
            'background_image' => 'banner_carbon.jpg',
            'description' => 'Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.',
            'remember_token' => 'token',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'first_name' => 'Dwight',
            'last_name' => 'Schrute',
            'email' => 'dwight-fake@iasig.org',
            'user_type' => 'advance',
            'password' => 'password',
            'user_image' => 'user_sky.jpg',
            'background_image' => 'banner_carbon.jpg',
            'description' => 'Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.',
            'remember_token' => 'token',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'first_name' => 'Andy',
            'last_name' => 'Bernard',
            'email' => 'andy-fake@iasig.org',
            'user_type' => 'advance',
            'password' => 'password',
            'user_image' => 'user_sky.jpg',
            'background_image' => 'banner_carbon.jpg',
            'description' => 'Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.',
            'remember_token' => 'token',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'first_name' => 'Angela',
            'last_name' => 'Martin',
            'email' => 'angela-fake@iasig.org',
            'user_type' => 'advance',
            'password' => 'password',
            'user_image' => 'user_sky.jpg',
            'background_image' => 'banner_carbon.jpg',
            'description' => 'Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.',
            'remember_token' => 'token',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'first_name' => 'Kevin',
            'last_name' => 'Malone',
            'email' => 'kevin-fake@iasig.org',
            'user_type' => 'advance',
            'password' => 'password',
            'user_image' => 'user_sky.jpg',
            'background_image' => 'banner_carbon.jpg',
            'description' => 'Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.',
            'remember_token' => 'token',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'first_name' => 'Toby',
            'last_name' => 'Flenderson',
            'email' => 'toby-fake@iasig.org',
            'user_type' => 'advance',
            'password' => 'password',
            'user_image' => 'user_sky.jpg',
            'background_image' => 'banner_carbon.jpg',
            'description' => 'Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.',
            'remember_token' => 'token',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'first_name' => 'Ryan',
            'last_name' => 'Howard',
            'email' => 'ryan-fake@iasig.org',
            'user_type' => 'advance',
            'password' => 'password',
            'user_image' => 'user_sky.jpg',
            'background_image' => 'banner_carbon.jpg',
            'description' => 'Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.',
            'remember_token' => 'token',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'first_name' => 'Stanley',
            'last_name' => 'Hudson',
            'email' => 'stanley-fake@iasig.org',
            'user_type' => 'advance',
            'password' => 'password',
            'user_image' => 'user_sky.jpg',
            'background_image' => 'banner_carbon.jpg',
            'description' => 'Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.Donec sollicitudin molestie malesuada. Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.',
            'remember_token' => 'token',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
