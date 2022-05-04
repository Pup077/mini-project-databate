<?php 
    //เชื่อมต่อฐานข้อมูล
    define('DB_SERVER', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'book');
    
    class DB_con {

        function __construct() {
            $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
            $this->dbcon = $conn;

            if (mysqli_connect_errno()) {
                echo "Failed connect to MySQL : " . mysqli_connect_error();
            }
        }

        public function insert($name, $description, $created, $modified) { //คำสั่ง insert
            $result = mysqli_query($this->dbcon, "INSERT INTO categories(name, description, created, modified) 
            VALUES('$name', '$description', '$created', '$modified')");
            return $result;
        }

        public function fetchdata() { //fatc  ข้อมูลจากฐานข้อมูลที่เลือกทั้งหมด
            $result = mysqli_query($this->dbcon, "SELECT * FROM categories");
            return $result;
        }

        public function fetchonerecord($userid) { //เพื่อดึงข้อมูลเดิมของแต่ละคน
            $result = mysqli_query($this->dbcon, "SELECT * FROM categories WHERE id = '$userid'");       
            return $result;
        }    

        public function update($name, $description, $created, $modified, $userid) { //คำสั่ง update
            $result = mysqli_query($this->dbcon, "UPDATE categories SET 
                name = '$name',
                description = '$description',
                created = '$created',
                modified = '$modified',
                WHERE id = '$userid'
            ");
            return $result;
        }

        public function delete($userid) { //คำสั่ง delete
            $deleterecord = mysqli_query($this->dbcon, "DELETE FROM categories WHERE id = '$userid'"); //ลบข้อมูลที่ตรงกับ user
            return $deleterecord;
        }

    }

    class DB_ple {

        function __construct() {
            $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
            $this->dbple = $conn;

            if (mysqli_connect_errno()) {
                echo "Failed connect to MySQL : " . mysqli_connect_error();
            }
        }

        public function insertemp($emp_firstname, $emp_lastname, $emp_email, $emp_phone, $emp_address, $prefix_id) {
            $result = mysqli_query($this->dbple, "INSERT INTO tbemployee(emp_firstname, emp_lastname, emp_email, emp_phone, emp_address, prefix_id) 
            VALUES('$emp_firstname', '$emp_lastname', '$emp_email', '$emp_phone', '$emp_address', '$prefix_id')");
            return $result;
        }

        public function fetchempdata() {
            $result = mysqli_query($this->dbple, "SELECT * FROM tbemployee");
            return $result;
        }

        public function fetchemponerecord($userid) {
            $result = mysqli_query($this->dbple, "SELECT * FROM tbemployee WHERE emp_id = '$userid'");       
            return $result;
        }    

        public function updateemp($emp_firstname, $emp_lastname, $emp_email, $emp_phone, $emp_address, $prefix_id, $userid) {
            $result = mysqli_query($this->dbple, "UPDATE tbemployee SET 
                emp_firstname = '$emp_firstname',
                emp_lastname = '$emp_lastname',
                emp_email = '$emp_email',
                emp_phone = '$emp_phone',
                emp_address = '$emp_address',
                prefix_id = '$prefix_id'
                WHERE emp_id = '$userid'
            ");
            return $result;
        }

        public function deleteemp($userid) {
            $deleterecord = mysqli_query($this->dbple, "DELETE FROM tbemployee WHERE emp_id = '$userid'");
            return $deleterecord;
        }

    }

    class DB_elp {

        function __construct() {
            $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
            $this->dbelp = $conn;

            if (mysqli_connect_errno()) {
                echo "Failed connect to MySQL : " . mysqli_connect_error();
            }
        }

        public function insertoff($offer_name, $offer_adderss, $offer_date, $offer_amount, $offer_note, $offer_deadline, $book_name_id) {
            $result = mysqli_query($this->dbelp, "INSERT INTO tbofferprice(offer_name, offer_adderss, offer_date, offer_amount, offer_note, offer_deadline, book_name_id) 
            VALUES('$offer_name', '$offer_adderss', '$offer_date', '$offer_amount', '$offer_note', '$offer_deadline', '$book_name_id')");
            return $result;
        }

        public function fetchoffdata() {
            $result = mysqli_query($this->dbelp, "SELECT * FROM tbofferprice");
            return $result;
        }

        public function fetchoffonerecord($userid) {
            $result = mysqli_query($this->dbelp, "SELECT * FROM tbofferprice WHERE offer_price_id = '$userid'");       
            return $result;
        }    

        public function updateoff($offer_name, $offer_adderss, $offer_date, $offer_amount, $offer_note, $offer_deadline, $book_name_id, $userid) {
            $result = mysqli_query($this->dbelp, "UPDATE tbofferprice SET 
                offer_name = '$offer_name',
                offer_adderss = '$offer_adderss',
                offer_date = '$offer_date',
                offer_amount = '$offer_amount',
                offer_note = '$offer_note',
                offer_deadline = '$offer_deadline',
                book_name_id = '$book_name_id'
                WHERE offer_price_id = '$userid'
            ");
            return $result;
        }

        public function deleteoff($userid) {
            $deleterecord = mysqli_query($this->dbelp, "DELETE FROM tbofferprice WHERE offer_price_id = '$userid'");
            return $deleterecord;
        }

    }

    class DB_bnk {

        function __construct() {
            $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
            $this->dbbnk = $conn;

            if (mysqli_connect_errno()) {
                echo "Failed connect to MySQL : " . mysqli_connect_error();
            }
        }

        public function insertbnk($book_name, $book_unit_id, $category_id) {
            $result = mysqli_query($this->dbbnk, "INSERT INTO tbbook_name(book_name, book_unit_id, category_id) 
            VALUES('$book_name', '$book_unit_id', '$category_id')");
            return $result;
        }

        public function fetchbnkdata() {
            $result = mysqli_query($this->dbbnk, "SELECT * FROM tbbook_name");
            return $result;
        }

        public function fetchbnkonerecord($userid) {
            $result = mysqli_query($this->dbbnk, "SELECT * FROM tbbook_name WHERE book_name_id = '$userid'");       
            return $result;
        }    

        public function updatebnk($book_name, $book_unit_id, $category_id, $userid) {
            $result = mysqli_query($this->dbbnk, "UPDATE tbbook_name SET 
                book_name = '$book_name',
                book_unit_id = '$book_unit_id',
                category_id = '$category_id'
                WHERE book_name_id = '$userid'
            ");
            return $result;
        }

        public function deletebnk($userid) {
            $deleterecord = mysqli_query($this->dbbnk, "DELETE FROM tbbook_name WHERE book_name_id = '$userid'");
            return $deleterecord;
        }

    }

    class DB_cat {

        function __construct() {
            $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
            $this->dbcat = $conn;

            if (mysqli_connect_errno()) {
                echo "Failed connect to MySQL : " . mysqli_connect_error();
            }
        }

        public function insertcat($category_name) {
            $result = mysqli_query($this->dbcat, "INSERT INTO tbcategory(category_name) 
            VALUES('$category_name')");
            return $result;
        }

        public function fetchcatdata() {
            $result = mysqli_query($this->dbcat, "SELECT * FROM tbcategory");
            return $result;
        }

        public function fetchcatonerecord($userid) {
            $result = mysqli_query($this->dbcat, "SELECT * FROM tbcategory WHERE category_id = '$userid'");       
            return $result;
        }    

        public function updatecat($category_name, $userid) {
            $result = mysqli_query($this->dbcat, "UPDATE tbcategory SET 
                category_name = '$category_name'
                WHERE category_id = '$userid'
            ");
            return $result;
        }

        public function deletecat($userid) {
            $deleterecord = mysqli_query($this->dbcat, "DELETE FROM tbcategory WHERE category_id = '$userid'");
            return $deleterecord;
        }

    }

    class DB_dog {

        function __construct() {
            $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
            $this->dbdog = $conn;

            if (mysqli_connect_errno()) {
                echo "Failed connect to MySQL : " . mysqli_connect_error();
            }
        }

        public function insertdog($status_name) {
            $result = mysqli_query($this->dbdog, "INSERT INTO tbstatus_book_asset(status_name) 
            VALUES('$status_name')");
            return $result;
        }

        public function fetchdogdata() {
            $result = mysqli_query($this->dbdog, "SELECT * FROM tbstatus_book_asset");
            return $result;
        }

        public function fetchdogonerecord($userid) {
            $result = mysqli_query($this->dbdog, "SELECT * FROM tbstatus_book_asset WHERE status_book_asset_id = '$userid'");       
            return $result;
        }    

        public function updatedog($status_name, $userid) {
            $result = mysqli_query($this->dbdog, "UPDATE tbstatus_book_asset SET 
                status_name = '$status_name'
                WHERE status_book_asset_id = '$userid'
            ");
            return $result;
        }

        public function deletedog($userid) {
            $deleterecord = mysqli_query($this->dbdog, "DELETE FROM tbstatus_book_asset WHERE status_book_asset_id = '$userid'");
            return $deleterecord;
        }

    }



?>
    