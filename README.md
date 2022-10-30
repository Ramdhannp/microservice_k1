# about booking-service
sebuah restfull-api yang menyimpan data transaksi penyewaan lapangan olahraga, kita juga dapat mengirim request dengan beberapa merthod untuk melakukan CRUD pada database service tersebut.
teknologi yang dipakai pada service ini adalah:
1. CodeIgniter
2. Mysql (database)

# API Doc

Service ini dibuat secara RestFull sehingga hanya menggunakan 1 endpoint yang dapat dipakai untuk beberapa Method

| API            | REST METHOD   | Api request |
| -------------  | ------------- | -------------|
| Get all data   | GET | http://localhost/booking-service/api/booking  | 
| Get data by id | GET | http://localhost/booking-service/api/booking  |
| Add data       | POST | http://localhost/booking-service/api/booking  |
| Update data    | PUT | http://localhost/booking-service/api/booking  |
| Delete data    | DELETE | http://localhost/booking-service/api/booking  |

# Testing API dengan Postman
## Get all data
![image](https://user-images.githubusercontent.com/59037594/198870964-e4161b3b-535d-45e3-b8d4-993718252a7b.png)

## Get data by id
![image](https://user-images.githubusercontent.com/59037594/198871016-d2621b05-6ed3-49fc-afe7-3c5640906157.png)
