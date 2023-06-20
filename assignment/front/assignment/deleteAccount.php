<?php
session_start();
include_once 'config.php';

if (isset($_POST["delete"])) {
    // 获取当前用户的用户名
    $username = $_SESSION["username"];

    // 使用预处理语句创建一个 DELETE 查询以删除账户
    $deleteQuery = "DELETE FROM user WHERE userName = ?";
    $statement = $mysqli->prepare($deleteQuery);
    $statement->bind_param("s", $username);

    // 执行查询
    $deleteResult = $statement->execute();

    // 检查删除是否成功
    if ($deleteResult) {
        // 删除成功后的处理
        // 例如，可以重定向到其他页面或显示成功消息
        // 重定向到主页并显示成功消息
        header("Location: lohin.php?message=success");
        exit();
    } else {
        // 处理删除失败或出错的情况
        header("Location: profile.php?message=error");
        exit();
    }
}

?>
