<?php

include 'db.php'; // ربط قاعدة البيانات

// تأكد أن الطلب من النموذج (POST)
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // استقبل البيانات من النموذج
    $name = $_POST["name"];
    $age = $_POST["age"];

    // تحققي إن ما في حقول فاضية
    if (!empty($name) && !empty($age)) {

        // أنشئ أمر SQL للإدخال
        $sql = "INSERT INTO employee (name, age, status) VALUES ('$name', $age, 0)";

        // نفّذ الاستعلام
        if ($conn->query($sql) === TRUE) {
            // نجاح: رجع المستخدم للصفحة الرئيسية
            header("Location: index.php");
            exit();
        } else {
            // خطأ في الإدخال
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

    } else {
        echo "Please fill in all fields.";
    }
}
?>
