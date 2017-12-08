INSERT INTO `products` (`id`, `producto`, `precio`, `updated_at`, `created_at`, `category`, `imagen`, `descripcion`, `user_id`) VALUES
(40, 'Sony Vaio', '6000', '2017-12-05 23:28:09', '2017-12-05 23:28:09', 'computadora', 'public/posters/2kxJkfGxg6ulFu7dewtVFBgFTFOruPwYMEkGX0uc.jpeg', 'Intel Core i5, 6gb ram, negra, pantalla 15\'', 1),
(41, 'Iphone XIII Usado - 79TB - Puertos HDMI', '90000', '2017-12-05 23:43:51', '2017-12-05 23:43:51', 'celular', 'public/posters/FBZrUtcdw4uAatc8AbaoIwjcAA6dlPbPDUJVcm03.jpeg', 'El mejor celular del mundo. Compra, compra, compra ya, compra!', 1),
(42, 'Asus Gamer Nueva Impecable', '9580', '2017-12-05 23:58:35', '2017-12-05 23:58:35', 'computadora', 'public/posters/FKBON54GCHTASeoiMTYM13fKoyBKnvi1DFcuRlGj.jpeg', 'Usada, me la regalo Digital House, la mejor academia de Full Stack Web.', 2),
(44, 'Samsung Galaxia 30005', '700000', '2017-12-06 00:20:54', '2017-12-06 00:20:54', 'celular', 'public/posters/o8UaOoyAWaeDSUTsq0Qlko5PAFodS3dipWOZLOWc.png', 'Celular, computadora, cortadora de pasto, y muchas cosas mas.', 2);

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Thomas', 'asd@asd.asd', '$2y$10$OiRnWLK.G.bMKemRbxjDC.xURZywWJoPWgSeimd5.VC6EUmtPk58q', '8eJk10OOlzujnN5JJIdC3PPnjboxlWdfMLA0hy1AjPOzJt3I8G0c0oTaTmJ7', '2017-11-29 19:35:48', '2017-11-29 19:35:48'),
(2, 'lala', 'lala@lala.lala', '$2y$10$2z/FB0N3KFoYjCEKTRu0SOcHZ5mxyFj3rBrNQhsYqyk2ZD3nruF7W', 'TeCXeh0tSjEfGTUGkM0sGNrMTRl6YOWBP2jkYuolSMVEE8rmI5Hv1x2U61su', '2017-12-05 04:38:16', '2017-12-05 04:38:16');
