ระบบ เช่าเสื้อผ้า DressRentalService


Installation
(กรณีโหลดจาก edmodo)
1.สามารถนำไฟล์ไปวางที่ตัว laragon www หรือ xampp htdocs 
(มีไฟล์ env กับ package อยู่แล้ว กรณี เกิด error ให้ทำการ composer update เพื่อเช็คเวอร์ชั่น)
(กรณีclone หรือ โหลดมาจากgit)
1.clone หรือ โหลดมาแตกไฟล์มาไว้ ใน www สำหรับ laragon หรือ htdocs สำหรับ xampp
2. ใช้ คำสั่ง composer install เพื่อลง package ต่างๆ ที่เคยมีในโปรเจคนี้
3.copy env example ไปสร้าง ไฟล์ env ใหม่
โดยในไฟล์  env แก้จ้อมูลดังนี้


MAIL_DRIVER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=infatuated01@gmail.com
MAIL_PASSWORD=ypclkdggdvrquhru
MAIL_ENCRYPTION=tls

เพื่อ set up bullet mail ไว้สำหรับการยิง forgot passward section

DB_DATABASE=dressrental**
DB_USERNAME=root
DB_PASSWORD=

**ให้สร้าง db ผ่านตัว xampp / laragon โดย ตั้งชื่อ database ให้ตรงกับ DB_DATABASE

หลังจากที่ทำ ข้างต้นแล้ว
ทำการmigrate เพื่อสร้าง database โดยใช้คำสั่ง php artisan migrate 
หลังจากนั้นใส่ข้อมูลจำลอง จาก seeder จากคำสั่ง php artisan db:seed

หลังจากทำการ seeder เสร็จแล้ว ก็จะได้ข้อมูลสินค้า และ user ที่มีทั้งหมดมา โดย user มีดังนี้
1. Admin
email : infatuated01@github.com 
password : password

2. Employee
email : infatuated02@github.com 
password : password

3. Admin
email : infatuated03@github.com 
password : password

Code Voucher : TEST สำหรับการลดยี่สิบบาท

ดังนี้ก็เป็นการเสร็จสิ้น
มีข้อสงสัยหรือติดปัญาระหว่าง การติดตั้ง ติดต่อ FB : Kanutm Setasathian


รายระเอียดการแบ่งงาน

1.นาย คณุตม์ เศรษฐเสถียร 5610400503
 รับผิดชอบ : ออกแบบ database ทำ data seeder ,page permission , autherlization , forgot password (smtp), debugger
2.นายธีรวัต มณีสม 5710450260
รับผิดชอบ : ออกแบบ css , ตัดต่อรูปภาพ , รับผิดชอบหน้า home(front-end and some backend),หน้า Checkout (front-end)
3.นายวีระศักดิ์ มาลัยทอง 5710404641
รับผิดชอบ : ทำหน้า login ทั้งหมด ,โชว์ข้อมูลส่วนตัว,โชว์ purchased history (frontend and backend) ,หน้า Checkout (Backend) 
4.กรณ์ เคารพาพงศ์ 5710404209
รับผิดชอบ: รับผิดชอบ หน้า Admin ทั้งหมด (ทั้งBackend และ Front end)
5.ณัฐธยาน์ ธิติมลพรรณ 5710404357
รับผิดชอบ หน้า Checkout Backend,รับผิดชอบหน้า home(Backend) , debugger

