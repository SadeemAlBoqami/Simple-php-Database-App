<?php
include 'db.php'; // الاتصال بقاعدة البيانات

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // جلب الحالة الحالية من قاعدة البيانات
    $sql = "SELECT status FROM employee WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $currentStatus = $row['status'];

        // عكس الحالة
        $newStatus = ($currentStatus == 1) ? 0 : 1;

        // تحديث الحالة الجديدة في الجدول
        $update = "UPDATE employee SET status = $newStatus WHERE id = $id";
        $conn->query($update);
    }
}

// رجوع للصفحة الرئيسية
header("Location: index.php");
exit();
?>
