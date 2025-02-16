<?php
header('Content-Type: application/json');

$filename = 'visitors.txt';

// إذا لم يكن الملف موجودًا، قم بإنشائه وابدأ العد من 0
if (!file_exists($filename)) {
    file_put_contents($filename, "0");
}

// قراءة العدد الحالي للزوار
$visitors = (int) file_get_contents($filename);
$visitors++;

// حفظ العدد الجديد
file_put_contents($filename, $visitors);

// إرجاع العدد كـ JSON
echo json_encode(["visitors" => $visitors]);
?>