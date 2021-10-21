<?php
include('partials-front/header.php');
?>
<main>
    <?php
    $id = $_GET['id'];
    ?>
    
    <div class="container">
    <h2 class="heading " style="color:green">Thông tin chi tiết của thuốc</h2>     
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên thuốc</th>
                <th scope="col">Loại thuốc</th>
                <th scope="col">Mã vạch</th>
                <th scope="col">Liều lượng</th>
                <th scope="col">Mã</th>
                <th scope="col">Giá nhập</th>
                <th scope="col">Giá bán</th>
                <th scope="col">Trạng thái HSD</th>
                <th scope="col">Công ty</th>
                <th scope="col">Ngày sản xuất</th>
                <th scope="col">Ngày hết hạn</th>
                <th scope="col">Nơi sản xuất</th>
                <th scope="col">Số lượng</th>

            </tr>
        </thead>
        <tbody>

            <?php



            $sql = "SELECT * FROM drugs where id = '$id'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>';
                    echo '<th scope="row">' . $row['id'] . '</th>';
                    echo '<td>' . $row['name'] . '</td>';
                    echo '<td>' . $row['type'] . '</td>';
                    echo '<td>' . $row['barcode'] . '</td>';
                    echo '<td>' . $row['dose'] . '</td>';
                    echo '<td>' . $row['code'] . '</td>';
                    echo '<td>' . $row['cost_price'] . '</td>';
                    echo '<td>' . $row['selling_price'] . '</td>';
                    echo '<td>' . $row['expiry'] . '</td>';
                    echo '<td>' . $row['company_name'] . '</td>';
                    echo '<td>' . $row['production_date'] . '</td>';
                    echo '<td>' . $row['expiration_date'] . '</td>';
                    echo '<td>' . $row['place'] . '</td>';
                    echo '<td>' . $row['quantity'] . '</td>';
                    echo '</tr>';
                }
            }
            ?>

            <!-- Đoạn này thay đổi theo Dữ liệu trong CSDL -->
        </tbody>
    </table>
    </div>
</main>
<?php
include('partials-front/footer.php');
?>