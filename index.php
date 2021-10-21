<?php
include('partials-front/header.php');
?>
<main>
<div class="container">
    <h2 class="heading " style="color:green">Thông tin cơ bản của thuốc</h2>     
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên thuốc</th>
                <th scope="col">Loại thuốc</th>             
                <th scope="col">Giá bán</th>
                <th scope="col">Trạng thái HSD</th>
                <th scope="col">Số lượng</th>
                <th scope="col">chi ti</th>

            </tr>
        </thead>
        <tbody>
            
                <?php
                 
                
                
                    $sql = "SELECT * FROM drugs";
                    $result = mysqli_query($conn,$sql); 
               
                    if(mysqli_num_rows($result)>0){
                        while($row=mysqli_fetch_assoc($result)){
                            echo '<tr>';
                            echo '<th scope="row">'.$row['id'].'</th>';
                            echo '<td>'.$row['name'].'</td>';
                            echo '<td>'.$row['type'].'</td>';
                            echo '<td>'.$row['selling_price'].'</td>';
                            echo '<td>'.$row['expiry'].'</td>';
                            echo '<td>'.$row['quantity'].'</td>';
                            echo '<td><a href="details_drugs.php?id='.$row['id'].'">Chi tiết</a></td>';
                           
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