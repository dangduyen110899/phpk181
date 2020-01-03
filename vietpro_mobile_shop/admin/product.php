<?php
if (!defined('SECURITY')) {
    die('Bạn ko có quyền truy cập');
}
?>
<?php
//phân trang
if (isset($_GET["page"]))
    $page = $_GET["page"]; //nếu biến $_GET["page"] tồn tại thì trang hiện tại là trang $_GET["page"]
else $page = 1;
//nếu trang hiện tại nhỏ hơn 1 thì gán bằng 1
//gán số sp cần hiển thị trên trang
$limit = 5;
//tính start-key (vị trí bản ghi sẽ bắt đầu lấy):
$start = ($page - 1) * $limit;
//hàm 1 : đếm số bản ghi
$num_row = mysqli_num_rows(mysqli_query($connect, "SELECT * FROM product"));
$total_page = ceil($num_row / $limit); //tính tổng số trang sẽ chia,hàm làm tròn số
//nút prev
$list_page = '';
$page_prev = $page - 1;
if ($page_prev <= 0) {
    $page_prev = 1;
}
$list_page .= ' <li class="page-item"><a class="page-link" href="index.php?page_layout=product&page=' . $page_prev . '">&laquo;</a></li>';
//tính toán số trang và tăng giảm
for ($i = 1; $i <= $total_page; $i++) {
    if ($i == $page) {
        $active = 'active';
    } else {
        $active = '';
    }
    $list_page .= '<li class="page-item ' . $active . '"><a class="page-link" href="index.php?page_layout=product&page=' . $i . '">' . $i . '</a></li>';
}
//nút next
$page_next = $page + 1;
if ($page_next > $total_page) {
    $page_next = $total_page;
}
$list_page .= '<li class="page-item"><a class="page-link" href="index.php?page_layout=product&page=' . $page_next . '">&raquo;</a></li>';
//
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg></a></li>
            <li class="active">Danh sách sản phẩm</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh sách sản phẩm</h1>
        </div>
    </div>
    <!--/.row-->
    <div id="toolbar" class="btn-group">
        <a href="product-add.html" class="btn btn-success">
            <i class="glyphicon glyphicon-plus"></i> Thêm sản phẩm
        </a>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <table data-toolbar="#toolbar" data-toggle="table">

                        <thead>
                            <tr>
                                <th data-field="id" data-sortable="true">ID</th>
                                <th data-field="name" data-sortable="true">Tên sản phẩm</th>
                                <th data-field="price" data-sortable="true">Giá</th>
                                <th>Ảnh sản phẩm</th>
                                <th>Trạng thái</th>
                                <th>Danh mục</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM product 
                                    INNER JOIN category ON product.cat_id = category.cat_id ORDER BY prd_id DESC LIMIT $start,$limit";
                            $query = mysqli_query($connect, $sql);
                            while ($row = mysqli_fetch_assoc($query)) {

                            ?>
                                <tr>
                                    <td style=""> <?php echo $row['prd_id']; ?> </td>
                                    <td style=""><?php echo $row['prd_name']; ?></td>
                                    <td style=""><?php echo $row['prd_price']; ?>vnd</td>
                                    <td style="text-align: center"><img width="130" height="180" src="img/products/<?php echo $row['prd_image'];  ?>" /></td>
                                    <td><span class="label label-success"><?php if ($row['prd_status'] > 0) echo "Còn hàng";
                                                                            else echo "Hết hàng"; ?></span></td>
                                    <td><?php echo $row['cat_name']; ?></td>
                                    <td class="form-group">
                                        <a href="product-edit.html" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></a>
                                        <a href="product-edit.html" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="panel-footer">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <?php echo $list_page;
                            ?>
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </div>
    <!--/.row-->
</div>
<!--/.main-->