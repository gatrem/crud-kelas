# crud-kelas


masuk ke direktory


https://laravel.com/docs/5.6


1. cd C:\xampp\htdocs\
	laravel new crud-kelas (enter)

	php artisan serve (connect ke localhost)

	harus masuk ke project dulu untuk lakukakn koneksi, untuk lengkapnya seperti berikut :

	PS C:\xampp\htdocs\crud-kelas> php artisan serve
	Laravel development server started: <http://127.0.0.1:8000>
	[Wed Feb 28 21:17:24 2018] 127.0.0.1:50097 [200]: /favicon.ico

2. Bikin migrasi table

	php artisan make:migration create_students_table (membuat struktur code buat table)
	php artisan migrate (jalankan kode program untuk bikin table)

3. Seeding (untuk mengisi table / memasukan value ke setiap field yang ada pada table)

	php artisan make:seeder StudentTableSeeder

4. elocuent ORM (untuk mengotrol suatu table)

	untuk bisa mengontrol suatu table 

5. Upload file ke github

	new repository dan ketikan nama project nya

	melihat apakah sudah terintegrasi atau belum  : git status

	integrasi project dengan git :

	ikuti langkah pertama di modul github …or create a new repository on the command line
	



