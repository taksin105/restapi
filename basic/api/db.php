<?php
// ข้อมูลการเชื่อมต่อฐานข้อมูลบน hosting
$host = 'localhost';  // ที่อยู่เซิร์ฟเวอร์ฐานข้อมูล (อาจจะเป็น IP หรือโดเมน เช่น db.example.com)
$dbname = 'attractions';  // ชื่อฐานข้อมูลที่คุณสร้างบน hosting
$username = 'its66040233105';  // ชื่อผู้ใช้ที่ได้จาก hosting
$password = 'U2dyK4C9';  // รหัสผ่านของผู้ใช้ที่ได้จาก hosting

try {
    // เชื่อมต่อกับฐานข้อมูล
    $dbh = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // ตั้งค่าตัวเลือกต่างๆ ของ PDO
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";  // ทดสอบการเชื่อมต่อ
} catch (PDOException $e) {
    // หากไม่สามารถเชื่อมต่อได้ จะมีข้อความผิดพลาด
    echo "Connection failed: " . $e->getMessage();
}
?>
