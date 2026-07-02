<?php
// process.php - รับข้อมูลจากฟอร์มด้วย $_POST แล้วแสดงผล (เปิดในแท็บใหม่)

// ป้องกัน XSS เบื้องต้นด้วย htmlspecialchars
function clean($value) {
    return htmlspecialchars(trim($value ?? ''), ENT_QUOTES, 'UTF-8');
}

$firstname   = clean($_POST['firstname'] ?? '');
$lastname    = clean($_POST['lastname'] ?? '');
$house_no    = clean($_POST['house_no'] ?? '');
$road        = clean($_POST['road'] ?? '');
$soi         = clean($_POST['soi'] ?? '');
$subdistrict = clean($_POST['subdistrict'] ?? '');
$district    = clean($_POST['district'] ?? '');
$province    = clean($_POST['province'] ?? '');
$zipcode     = clean($_POST['zipcode'] ?? '');
$phone       = clean($_POST['phone'] ?? '');
$email       = clean($_POST['email'] ?? '');
$username    = clean($_POST['username'] ?? '');
$password    = clean($_POST['password'] ?? '');

$address = "$house_no ถนน$road ซอย$soi ตำบล$subdistrict อำเภอ$district จังหวัด$province $zipcode";
?>
<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<title>ผลการสมัคร</title>
<style>
    body {
        font-family: "Tahoma", sans-serif;
        background: #f2f4f7;
        margin: 0;
        padding: 30px;
    }
    .result-container {
        max-width: 500px;
        margin: 0 auto;
        background: #fff;
        padding: 30px 35px;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    h2 {
        color: #27ae60;
        text-align: center;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    td {
        padding: 8px 6px;
        border-bottom: 1px solid #eee;
        font-size: 14px;
        vertical-align: top;
    }
    td.label {
        width: 40%;
        color: #555;
        font-weight: bold;
    }
</style>
</head>
<body>

<div class="result-container">
    <h2>✅ สมัครสมาชิกสำเร็จ</h2>
    <table>
        <tr><td class="label">ชื่อ-นามสกุล</td><td><?= "$firstname $lastname" ?></td></tr>
        <tr><td class="label">ที่อยู่</td><td><?= $address ?></td></tr>
        <tr><td class="label">เบอร์โทรศัพท์</td><td><?= $phone ?></td></tr>
        <tr><td class="label">E-mail</td><td><?= $email ?></td></tr>
        <tr><td class="label">Username</td><td><?= $username ?></td></tr>
        <tr><td class="label">Password</td><td><?= str_repeat('•', strlen($password)) ?></td></tr>
    </table>
</div>

</body>
</html>
