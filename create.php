<?php include 'config.php'; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $desc = $_POST['description'];

    $sql = "INSERT INTO products (name, price, description) VALUES ('$name', '$price', '$desc')";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
        exit;
    } else {
        echo "Lỗi: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Thêm sản phẩm</title>
</head>
<body>
  <h2>Thêm sản phẩm</h2>
  <form method="post">
    Tên: <input type="text" name="name" required><br><br>
    Giá: <input type="number" step="1000" name="price" required><br><br>
    Mô tả: <textarea name="description"></textarea><br><br>
    <button type="submit">Lưu</button>
  </form>
  <button><a href="index.php">← Quay lại</a></button>
</body>
</html>
