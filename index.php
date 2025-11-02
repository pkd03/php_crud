<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Danh sách sản phẩm</title>
</head>
<body>
  <h2>Danh sách sản phẩm</h2>
  <a href="create.php">+ Thêm sản phẩm</a>
  <table border="1" cellpadding="8">
    <tr>
      <th>ID</th>
      <th>Tên</th>
      <th>Giá</th>
      <th>Mô tả</th>
      <th>Hành động</th>
    </tr>

    <?php
    $sql = "SELECT * FROM products ORDER BY id ";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()):
    ?>
      <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['name'] ?></td>
        <td><?= $row['price'] ?></td>
        <td><?= $row['description'] ?></td>
        <td>
          <a href="update.php?id=<?= $row['id'] ?>">Sửa</a> |
          <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Xóa sản phẩm này?');">Xóa</a>
        </td>
      </tr>
    <?php endwhile; ?>
  </table>
  <h1>test</h1>
</body>
</html>
