# room-reservation
How to Set Up Our Database

1.	Open xampp or wamp and connect to apache and mysql
2.	After that open phpmyadmin in localhost/phpmyadmin
3.	Create new database name it room 
4.	After create database create new table in the db  room, name it roomrental, tenant, and booking
5.	In the table roomrental consist of room_id room_label, room_location, room_window, room_monthly_price, room_availability, room_description, and room gender
6.	In the table tenant consist of tenant_id, tenant_name, tenant_address, tenant_ktp_no, tenant_phone, tenant_email, tenant_emergcp, tenant_emergcp_phone, tenant_emergcp_email, tenant_bankaccount, tenant_bankaccount_no
7.	In the table booking consist of book_id, room_id, tenant_id, book_start_date, book_end_date, book_tr_date and set book_id as primary ke
8.	After that we create new database or db name it as simpleinvoicephp to set our invoice system
9.	After that create database we have to create table in the db simpleinvoicephp, name it invoice_order, invoice_order_system, and invoice_user
10.	In the table invoice_user consist of id, email, password, first_name, last_name, and mobile
11.	In the table invoice_order consist of user_id, order_id, order_receiver_name, oerder_receiver_address, oerder_total_before_tax, order_total_tax, order_tax_per, order_totalafter_tax, order_amount_paid, order_total_amount_due, order_date, and note. This table have 12 column
12.	In the table invoice_order_item consist of order_id, item_code, item_name, order_item_quantuty, order_item_price, order_item_final_amount
That is how to set up our database, all codes already created before. 

NOTE : Home page located at file MID 

Thank you
