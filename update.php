<?php include 'config.php'; ?>

<?php
$id = $_GET['id'];
$sql = "SELECT * FROM products WHERE id=$id";
$product = $conn->query($sql)->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $desc = $_POST['description'];

    $update = "UPDATE products SET name='$name', price='$price', description='$desc' WHERE id=$id";
    if ($conn->query($update) === TRUE) {
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
  <title>Sửa sản phẩm</title>
</head>
<body>
  <h2>Sửa sản phẩm</h2>
  <form method="post">
    Tên: <input type="text" name="name" value="<?= $product['name'] ?>" required><br><br>
    Giá: <input type="number" step="0.01" name="price" value="<?= $product['price'] ?>" required><br><br>
    Mô tả: <textarea name="description"><?= $product['description'] ?></textarea><br><br>
    <button type="submit">Cập nhật</button>
  </form>
  <a href="index.php">← Quay lại</a>
</body>
</html>
