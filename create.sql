CREATE DATABASE IF NOT EXISTS book CHARACTER SET utf8 COLLATE utf8_general_ci;
CREATE TABLE IF NOT EXISTS tbprefix(
prefix_id int(1) NOT NULL,
CONSTRAINT pk_prefix_id PRIMARY KEY (prefix_id),
prethname varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
preengname varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL
)CHARACTER SET utf8 COLLATE utf8_general_ci;
/*---------------------------------------------tbprice_unit--------------------------------------------------------------------*/
CREATE TABLE IF NOT EXISTS tbprice_unit(
price_unit_id int(1) AUTO_INCREMENT NOT NULL,
CONSTRAINT pk_price_unit_id PRIMARY KEY (price_unit_id),
unit_name varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
)CHARACTER SET utf8 COLLATE utf8_general_ci;
/*---------------------------------------------tbcategory-----------------------------------------------------------------------*/
CREATE TABLE IF NOT EXISTS tbcategory(
category_id int(1) AUTO_INCREMENT NOT NULL,
CONSTRAINT pk_category_id  PRIMARY KEY (category_id),
category_name varchar(25) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
)CHARACTER SET utf8 COLLATE utf8_general_ci;
/*-----------------------------------------------tbbook_unit----------------------------------------------------------------------*/
CREATE TABLE IF NOT EXISTS tbbook_unit(
book_unit_id int(1) AUTO_INCREMENT NOT NULL,
CONSTRAINT pk_book_unit_id PRIMARY KEY (book_unit_id),
bookunit_name varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
)CHARACTER SET utf8 COLLATE utf8_general_ci;
/*-----------------------------------------------tbstatus_book_asset--------------------------------------------------------------*/
CREATE TABLE IF NOT EXISTS tbstatus_book_asset(
status_book_asset_id int(1) AUTO_INCREMENT NOT NULL,
CONSTRAINT pk_status_book_asset_id PRIMARY KEY (status_book_asset_id),
status_name varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
)CHARACTER SET utf8 COLLATE utf8_general_ci;
/*------------------------------------------------tbemployee-----------------------------------------------------------------------*/
CREATE TABLE IF NOT EXISTS tbemployee(
emp_id varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
CONSTRAINT pk_emp_id PRIMARY KEY (emp_id),
emp_firstname varchar(35) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
emp_lastname varchar(35) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
emp_email varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
emp_phone char(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
emp_address varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
prefix_id int(1) NOT NULL,
CONSTRAINT fk_prefix_id_tbemployee FOREIGN KEY(prefix_id) REFERENCES tbprefix(prefix_id) ON UPDATE CASCADE
)CHARACTER SET utf8 COLLATE utf8_general_ci;
/*------------------------------------------------tbperson------------------------------------------------------------------------*/
CREATE TABLE IF NOT EXISTS tbperson(
person_id varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
CONSTRAINT pk_person_id PRIMARY KEY (person_id),
pers_firstname varchar(35) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
pers_lastname varchar(35) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
pers_phone char(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
prefix_id int(1) NOT NULL,
CONSTRAINT fk_prefix_id_tbperson FOREIGN KEY(prefix_id) REFERENCES tbprefix(prefix_id) ON UPDATE CASCADE
)CHARACTER SET utf8 COLLATE utf8_general_ci;
/*-------------------------------------------------tbprice-------------------------------------------------------------------------*/
CREATE TABLE IF NOT EXISTS tbprice(
price_id int(2) AUTO_INCREMENT NOT NULL,
CONSTRAINT pk_price_id PRIMARY KEY (price_id),
price_name int(4) NOT NULL,
price_unit_id int(1) NOT NULL,
CONSTRAINT fk_price_unit_id_tbprice FOREIGN KEY(price_unit_id) REFERENCES tbprice_unit(price_unit_id) ON UPDATE CASCADE
)CHARACTER SET utf8 COLLATE utf8_general_ci;
/*------------------------------------------------tbbook_name----------------------------------------------------------------------*/
CREATE TABLE IF NOT EXISTS tbbook_name(
book_name_id int(1) AUTO_INCREMENT NOT NULL,
CONSTRAINT pk_book_name_id PRIMARY KEY (book_name_id),
book_name varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
book_unit_id int(1) NOT NULL,
category_id int(1) NOT NULL,
CONSTRAINT fk_book_unit_id_tbbook_name FOREIGN KEY(book_unit_id) REFERENCES tbbook_unit(book_unit_id) ON UPDATE CASCADE,
CONSTRAINT fk_category_id_tbbook_name FOREIGN KEY(category_id) REFERENCES tbcategory(category_id) ON UPDATE CASCADE
)CHARACTER SET utf8 COLLATE utf8_general_ci;
/*-------------------------------------------------tblist--------------------------------------------------------------------------*/
CREATE TABLE IF NOT EXISTS tblist(
list_id int(2) AUTO_INCREMENT NOT NULL,
CONSTRAINT pk_list_id PRIMARY KEY (list_id),
list_day timestamp NOT NULL,
list_amount int(4) NOT NULL,
book_name_id int(1) NOT NULL,
CONSTRAINT fk_book_name_id_tblist FOREIGN KEY(book_name_id) REFERENCES tbbook_name(book_name_id) ON UPDATE CASCADE
)CHARACTER SET utf8 COLLATE utf8_general_ci;
/*------------------------------------------------tbofferprice-----------------------------------------------------------------------*/
CREATE TABLE IF NOT EXISTS tbofferprice(
offer_price_id int(2) AUTO_INCREMENT NOT NULL,
CONSTRAINT pk_offer_price_id PRIMARY KEY (offer_price_id),
offer_name varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
offer_adderss varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
offer_date DATE NOT NULL,
offer_amount int(4) NOT NULL,
offer_note varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
offer_deadline DATE NOT NULL,
book_name_id int(1) NOT NULL,
CONSTRAINT fk_book_name_id_tbofferprice FOREIGN KEY(book_name_id) REFERENCES tbbook_name(book_name_id) ON UPDATE CASCADE
)CHARACTER SET utf8 COLLATE utf8_general_ci;
/*----------------------------------------------tbbook_asset------------------------------------------------------------------------*/
CREATE TABLE IF NOT EXISTS tbbook_asset(
bookasset_id varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
CONSTRAINT pk_bookasset_id PRIMARY KEY (bookasset_id),
book_seriall_no varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
book_receive_no varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
book_amount int(4) NOT NULL,
status_book_asset_id int(1) NOT NULL,
book_name_id int(1) NOT NULL,
CONSTRAINT fk_status_book_asset_id_tbbook_asset FOREIGN KEY(status_book_asset_id) REFERENCES tbstatus_book_asset(status_book_asset_id) ON UPDATE CASCADE,
CONSTRAINT fk_book_name_id_tbbook_asset FOREIGN KEY(book_name_id) REFERENCES tbbook_name(book_name_id) ON UPDATE CASCADE
)CHARACTER SET utf8 COLLATE utf8_general_ci;
/*----------------------------------------------tbborrow-----------------------------------------------------------------------------*/
CREATE TABLE IF NOT EXISTS tbborrow(
borrow_id int(4) AUTO_INCREMENT NOT NULL,
CONSTRAINT pk_borrow_id PRIMARY KEY (borrow_id),
bor_want_date DATE NOT NULL,
bor_date DATE NOT NULL,
bor_back DATE NOT NULL,
bor_amount int(4) NOT NULL,
emp_id varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
person_id varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
bookasset_id varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
price_id int(2) NOT NULL,
CONSTRAINT fk_emp_id_tbborrow FOREIGN KEY(emp_id) REFERENCES tbemployee(emp_id) ON UPDATE CASCADE,
CONSTRAINT fk_person_id_tbborrow FOREIGN KEY(person_id) REFERENCES tbperson(person_id) ON UPDATE CASCADE,
CONSTRAINT fk_bookasset_id_tbborrow FOREIGN KEY(bookasset_id) REFERENCES tbbook_asset(bookasset_id) ON UPDATE CASCADE,
CONSTRAINT fk_price_id_tbborrow FOREIGN KEY(price_id) REFERENCES tbprice(price_id) ON UPDATE CASCADE
)CHARACTER SET utf8 COLLATE utf8_general_ci;