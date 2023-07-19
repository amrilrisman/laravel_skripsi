<?php

namespace Database\Seeders;

use App\Models\chats;
use App\Models\roles;
use App\Models\RT;
use App\Models\RW;
use App\Models\socialitations;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        RT::create(["code" => "1"]);
        RT::create(["code" => "2"]);
        RW::create(["code" => "4"]);
        RW::create(["code" => "6"]);
        // roles 
        roles::create(["name" => "warga"]);
        roles::create(["name" => "RT"]);
        roles::create(["name" => "RW"]);
        roles::create(["name" => "ASN"]);

        User::create([
            "id_rt" => 1,
            "id_rw" => 1,
            "id_role" => 1,
            "name" => "user1",
            "nik" => "1234567890123456",
            "email" => "amrilrismanto@gmail.com",
            "photo" => "user1",
            "username" => "usernameuser1",
            "password" => bcrypt("12345"),

        ]);
        User::create([
            "id_rt" => 1,
            "id_rw" => 1,
            "id_role" => 2,
            "name" => "rt1",
            "nik" => "123456789213123456",
            "email" => "rt1@gmail.com",
            "photo" => "rt1",
            "username" => "usernamert1",
            "password" => bcrypt("12345"),

        ]);
        User::create([
            "id_rt" => 0,
            "id_rw" => 1,
            "id_role" => 3,
            "name" => "rw1",
            "nik" => "123116789213123456",
            "email" => "rw1@gmail.com",
            "photo" => "rw1",
            "username" => "usernamerw1",
            "password" => bcrypt("12345"),

        ]);
        User::create([
            "id_rt" => 0,
            "id_rw" => 0,
            "id_role" => 4,
            "name" => "asn1",
            "nik" => "",
            "email" => "asn@gmail.com",
            "photo" => "asn1",
            "username" => "usernameasn1",
            "password" => bcrypt("12345"),

        ]);
        chats::create([
            "id_user" => 1,
            "message" => "Hallo ini pesan pertama kali",
            "from" => 1,
            "to" => 4
        ]);
        chats::create([
            "id_user" => 1,
            "message" => "Send aggain",
            "from" => 1,
            "to" => 4
        ]);
        chats::create([
            "id_user" => 2,
            "message" => "Hallo Saya RT nih",
            "from" => 2,
            "to" => 4
        ]);
        chats::create([
            "id_user" => 1,
            "message" => "hallo ada yang bisa saya bantu",
            "from" => 4,
            "to" => 1
        ]);
        socialitations::create([
            "title" => "Test membuat pengumuman",
            "Description" => "Test Description pengumuman",
        ]);
        socialitations::create([
            "title" => "Test membuat pengumuman",
            "Description" => "Test Description pengumuman",
        ]);

        // $table->id();
        // $table->foreignId("id_user");
        // $table->string("message");
        // // TODO: files dont done
        // // $table->array(stri);
        // $table->timestamps();

        // \App\Models\User::factory(10)->create();
    }
}
