Haruna Elfathin
1197050048

# Product Service
Pada service ini system akan menampilkan tampilan produk lapang yang tersedia, dan juga sudah di berikan keterangan lapangan dan juga harga sewa lapangan per jam

teknologi yang dipakai pada service ini adalah:

1. PHP Native
2. Mysql

# REST API Doc
| API            | REST METHOD   | Api request |
| -------------  | ------------- | -------------|
| Get all data   | GET | http://localhost:8080/products-service/api_tampil_all.php  | 
| Get data by id | GET | http://localhost:8080/products-service/api_tampil_byid.php?id=  |
| Add data       | POST | http://localhost:8080/products-service/api_tambah.php  |
| Update data    | PUT | http://localhost:8080/products-service/api_edit.php  |
| Delete data    | DELETE | http://localhost:8080/products-service/api_hapus.php  |

# Menampilkan seluruh data
![1](https://user-images.githubusercontent.com/85150506/198873719-f9f274de-26ff-49c6-a554-74f387d4d072.png)

# Menampilkan data sesuai id inputan
![2](https://user-images.githubusercontent.com/85150506/198874195-3e647055-4818-4cf1-a14c-cf22d2067261.png)

# Demo tambah data
![3](https://user-images.githubusercontent.com/85150506/198874486-ba060bc2-47cb-4042-98c3-ce00f95c367d.png)
menampilkan data sesudah ditambah data
![4](https://user-images.githubusercontent.com/85150506/198874561-ba96021b-5f4c-4f95-b1f8-24214ec5561c.png)

# Update data
disini saya mengupdate data pada id 7, dengan mengubah harga yang awalnya Rp. 110.000/jam menjadi Rp.150.000/jam
id 7 sebelum di update
![4](https://user-images.githubusercontent.com/85150506/198874561-ba96021b-5f4c-4f95-b1f8-24214ec5561c.png)
id 7 sesudah di update
![6](https://user-images.githubusercontent.com/85150506/198875018-21349861-b899-488f-8d58-9273f789d54b.png)

# Delete data
disini saya menghapus data dengan id 7
