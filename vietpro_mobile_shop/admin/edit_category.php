
    <?php
        $cat_id=$_GET['cat_id'];
         //lấy ra thông tin danh mục
        $sql = "SELECT * FROM category WHERE cat_id= $cat_id";
        $query=mysqli_query($connect,$sql);
        $row = mysqli_fetch_assoc($query);
        $bien=0;
        if(isset($_POST['sbm'])){        
            $cat_name = $_POST['cat_name'];
            $sql_cat = "SELECT * FROM category ORDER BY  cat_id ASC";
            $query_cat = mysqli_query($connect,$sql_cat);
            while ($row_cat=mysqli_fetch_assoc($query_cat)){
                if($row_cat['cat_name']==$cat_name){
                $bien=1;
                }
            }
            if($bien==0){
                $sql = "UPDATE category SET cat_name='$cat_name' WHERE cat_id=$cat_id";
                $query= mysqli_query($connect,$sql);
                header('location:index.php?page_layout=category');
            }
        }
    ?>	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li><a href="">Quản lý danh mục</a></li>
				<li class="active">Danh mục 1</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Danh mục:Danh mục 1</h1>
			</div>
		</div><!--/.row-->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-8">
                        <?php if($bien==1){
                         echo '<div class="alert alert-danger">Danh mục đã tồn tại !</div>';
                         } ?>
                        <form role="form" method="post">
                            <div class="form-group">
                                <label>Tên danh mục:</label>
                                <input type="text" name="cat_name" required value="<?php echo $row['cat_name']; ?>" class="form-control" placeholder="<?php echo $row['cat_name']; ?>">
                            </div>
                            <button type="submit" name="sbm" class="btn btn-primary">Cập nhật</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div><!-- /.col-->
	</div>	<!--/.main-->	
