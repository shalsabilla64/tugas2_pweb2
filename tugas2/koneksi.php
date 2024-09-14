<?php 
    class Database {
        private $servername, $username, $password, $db_name;
        protected $conn;

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
    }

    class Student extends Database {
        public function tampilData() {
            $sql = "SELECT * FROM `students`";
            
            $data = $this->conn->query($sql);

            $hasil = [];

            while($row = $data->fetch_array()) {
                $hasil[] = $row;
            }
            return $hasil;
        }
    }

    class StudentClasses extends Database {
        public function tampilData() {
            $sql = "SELECT * FROM `student_classes`";
            
            $data = $this->conn->query($sql);

            $hasil = [];

            while($row = $data->fetch_array()) {
                $hasil[] = $row;
            }
            return $hasil;
        }
    }

    class StudentDetails extends Database {
        public function tampilData() {
            $sql = "SELECT * FROM students WHERE student_class_id = 2";
            
            $data = $this->conn->query($sql);

            $hasil = [];

            while($row = $data->fetch_array()) {
                $hasil[] = $row;
            }
            return $hasil;
        }
    }

    class StudentClassesDetails extends Database {
        public function tampilData() {
            $sql = "SELECT * FROM student_classes WHERE academic_year = 2023";
            
            $data = $this->conn->query($sql);

            $hasil = [];

            while($row = $data->fetch_array()) {
                $hasil[] = $row;
            }
            return $hasil;
        }
    }

    $student = new Student("localhost", "root", "", "tugas_2_pweb2");
    $student_classes = new StudentClasses("localhost", "root", "", "tugas_2_pweb2");
    $student_details = new StudentDetails("localhost", "root", "", "tugas_2_pweb2");
    $student_classes_details = new StudentClassesDetails("localhost", "root", "", "tugas_2_pweb2");
?>