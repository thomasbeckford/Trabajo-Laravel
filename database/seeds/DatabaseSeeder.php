<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert( [
        'id'=>40,
        'producto'=>'Sony Vaio',
        'precio'=>'6000',
        'updated_at'=>'2017-12-05 23:28:09',
        'created_at'=>'2017-12-05 23:28:09',
        'category'=>'computadora',
        'imagen'=>'public/posters/2kxJkfGxg6ulFu7dewtVFBgFTFOruPwYMEkGX0uc.jpeg',
        'descripcion'=>'Intel Core i5, 6gb ram, negra, pantalla 15\'',
        'user_id'=>1
        ] );

        DB::table('products')->insert( [
        'id'=>41,
        'producto'=>'Iphone XIII Usado - 79TB - Puertos HDMI',
        'precio'=>'90000',
        'updated_at'=>'2017-12-05 23:43:51',
        'created_at'=>'2017-12-05 23:43:51',
        'category'=>'celular',
        'imagen'=>'public/posters/FBZrUtcdw4uAatc8AbaoIwjcAA6dlPbPDUJVcm03.jpeg',
        'descripcion'=>'El mejor celular del mundo. Compra, compra, compra ya, compra!',
        'user_id'=>1
        ] );

        DB::table('products')->insert( [
        'id'=>42,
        'producto'=>'Asus Gamer Nueva Impecable',
        'precio'=>'9580',
        'updated_at'=>'2017-12-05 23:58:35',
        'created_at'=>'2017-12-05 23:58:35',
        'category'=>'computadora',
        'imagen'=>'public/posters/FKBON54GCHTASeoiMTYM13fKoyBKnvi1DFcuRlGj.jpeg',
        'descripcion'=>'Usada, me la regalo Digital House, la mejor academia de Full Stack Web.',
        'user_id'=>2
        ] );

        DB::table('products')->insert( [
        'id'=>44,
        'producto'=>'Samsung Galaxia 30005',
        'precio'=>'700000',
        'updated_at'=>'2017-12-06 00:20:54',
        'created_at'=>'2017-12-06 00:20:54',
        'category'=>'celular',
        'imagen'=>'public/posters/o8UaOoyAWaeDSUTsq0Qlko5PAFodS3dipWOZLOWc.png',
        'descripcion'=>'Celular, computadora, cortadora de pasto, y muchas cosas mas.',
        'user_id'=>2
        ] );

      DB::table('users')->insert( [
        'id'=>1,
        'name'=>'Thomas',
        'email'=>'asd@asd.asd',
        'password'=>'$2y$10$OiRnWLK.G.bMKemRbxjDC.xURZywWJoPWgSeimd5.VC6EUmtPk58q',
        'remember_token'=>'8eJk10OOlzujnN5JJIdC3PPnjboxlWdfMLA0hy1AjPOzJt3I8G0c0oTaTmJ7',
        'created_at'=>'2017-11-29 19:35:48',
        'updated_at'=>'2017-11-29 19:35:48'
        ] );



      DB::table('users')->insert( [
        'id'=>2,
        'name'=>'lala',
        'email'=>'lala@lala.lala',
        'password'=>'$2y$10$2z/FB0N3KFoYjCEKTRu0SOcHZ5mxyFj3rBrNQhsYqyk2ZD3nruF7W',
        'remember_token'=>'TeCXeh0tSjEfGTUGkM0sGNrMTRl6YOWBP2jkYuolSMVEE8rmI5Hv1x2U61su',
        'created_at'=>'2017-12-05 04:38:16',
        'updated_at'=>'2017-12-05 04:38:16'
        ] );

    }
}
