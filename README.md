# Tugas 2 Praktikum Pemrograman Web 2

## Profil
[![](https://img.shields.io/badge/Nama-Shalsabilla-pink)](https://travis-ci.org/joemccann/dillinger)

[![](https://img.shields.io/badge/Kelas-TI_2B-pink)](https://travis-ci.org/joemccann/dillinger)

[![](https://img.shields.io/badge/NIM-230102043-pink)](https://travis-ci.org/joemccann/dillinger)
## Secara Umum

Sistem Informasi Bimbingan Akademik JKB (SIWALI JKB) adalah sistem manajemen bimbingan akademik yang komprehensif yang dirancang untuk menyederhanakan proses pengelolaan kinerja mahasiswa, konseling, dan data akademik lainnya untuk institusi pendidikan tinggi.

## Task
1. **Membuat view berbasis OOP PHP dengan menerima data dari mySQL database (tabel students dan student_classes)**
2. **Menggunakan __construct untuk menghubungan ke database**
    ```php
    public function __construct($servername, $username, $password, $db_name) {
            $this->servername = $servername;
            $this->username = $username;
            $this->password = $password;
            $this->db_name = $db_name;

            $this->conn = new mysqli ($this->servername, $this->username, $this->password, $this->db_name);

            if ($this->conn->connect_error) {
                die("Connection failed: " . $this->conn->connect_error);
              }
        }
    ```
3. **Menerapkan encapsulation berdasarkan studi kasus**
    ```php
    private $servername, $username, $password, $db_name;
        protected $conn;
    
    ```
4. **Menggunakan kelas turunan dengan konsep inheritance**
    ```php
    class Database {
        # code
    }

    class Student extends Database {
        # code
    }

    class StudentClasses extends Gpas {
        # code
    }
    ```
5. **Menerapkan polymorphism**
    ```php
    class Student extends Database {
        public function tampilData() {
            # code
        }
    }

    class StudentClasses extends Gpas{
        public function tampilData() {
            # code yang berbeda
        }
    }
    ```
## ERD (Entity Relationship Diagram)
// paste ss-an di sini

## Tampilan Program
+ Menampilkan seluruh isi tabel student sebagai admin
![image](https://github.com/user-attachments/assets/a73f631b-ac38-43a3-bb4d-071138284db9)

+ Menampilkan seluruh isi tabel student sebagai mahasiswa
![image](https://github.com/user-attachments/assets/70de765c-7557-43d6-a3e5-34a5bc2bb400)


+ Menampilkan seluruh isi tabel student_classes sebagai admin
![image](https://github.com/user-attachments/assets/2bdd92f4-6335-495d-aa3d-2f4d37acd47a)

+ Menampilkan seluruh isi tabel student_classes sebagai mahasiswa
![image](https://github.com/user-attachments/assets/715585ec-ad95-4265-8cbd-f1664a9c8ac7)


+  Menampilkan isi tabel student yang memiliki student_class_id = 2 (TI-2B)
![image](https://github.com/user-attachments/assets/6e7aa6f2-da2d-4132-8e64-0e6d4912caa7)


+  Menampilkan isi tabel student_classes yang memiliki academic_year = 2023
![image](https://github.com/user-attachments/assets/d2e8240e-8f68-4997-ab5f-8a43ab14f92c)
