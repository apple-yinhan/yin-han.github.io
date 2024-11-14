<?php
$filename = "counter.txt"; // 用于存储访问计数的文件
if (file_exists($filename)) {
    $count = file_get_contents($filename); // 读取当前计数
    $count++; // 增加计数
    file_put_contents($filename, $count); // 更新计数
} else {
    $count = 1; // 如果文件不存在，则初始化计数
    file_put_contents($filename, $count);
}
echo $count; // 输出当前计数
?>
