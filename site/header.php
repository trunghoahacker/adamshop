<style> 
	.fontvn{font-family:Baskerville, "Palatino Linotype", Palatino, "Century Schoolbook L", "Times New Roman", serif}
	.hieuung{-webkit-transition-duration: 0.5s;
	-moz-transition-duration: 0.5s;
	-o-transition-duration: 0.5s;}
	.hieuung:hover
	{-webkit-transform:scale(1.1);
	-moz-transform:scale(1.1); 
	-o-transform:scale(1.1);
	}
</style>
<div class="header-bottom">
	    <div class="wrap">
			<div class="header-bottom-left">
				<div class="logo">
					<a href="?"><img src="images/adamshop.png" alt=""/></a>
				</div>
				<div class="menu">
	            <ul class="megamenu skyblue">
			<li class="active grid"><a href="index.php">TRANG CHỦ</a></li>
			<li><a class="color4" href="index.php?nav=sanpham">SẢN PHẨM</a>
				<div class="megapanel">
                	<?php 
						include ("Connect.php");
						$dbo->query("set names utf8");
						$dsloai = $dbo->prepare("select * from  loaisanpham");
						$dsloai->execute();
						$loaisanpham = $dsloai->fetchAll(PDO::FETCH_ASSOC);
						?>
                        <?php
								foreach($loaisanpham as $row1){
								
					?>
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<a href="#"><h4><?php echo $row1['tenloai'] ?></h4></a>
								<ul>
                                <?php 
									$ds = $dbo->prepare("select * from thuonghieu where maloai ='".$row1['maloai']."'");
									$ds->execute();
									$loai = $ds->fetchAll(PDO::FETCH_ASSOC)
								?>
                            	<?php
								foreach($loai as $row){
								?> 
									<li><a href="#"><?php echo $row['name'] ?></a></li>
                                    <?php } ?> 
								</ul>
							</div>							
						</div> 
                        <?php } ?> 
					  </div>  
					</div>
				</li>				
				<li><a class="color5"  href="#">TRỢ GIÚP</a>
				<div class="megapanel">
					<div class="col1">
							<div class="h_nav">
								<h4>Cách mua hàng</h4>
								<ul>
									<li><a href="#">Mua online</a></li>
									<li><a href="#">Mua trực tiếp</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Cách thức thanh toán</h4>
								<ul>
									<li><a href="#">Chuyển khoản</a></li>
									<li><a href="#">Thanh toán khi nhận hàng</a></li>
								</ul>	
							</div>							
						</div>
					</div>
				</li>
				<li><a class="color7" href="index.php?nav=lienhe">LIÊN HỆ</a></li>  
                <li><a class="color7" href="index.php?nav=gioithieu">GIỚI THIỆU</a></li>
			</ul>
			</div>
		</div>
	   <div class="header-bottom-right">
         <div class="search">	  
				<input type="text" name="s" class="textbox" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
				<input type="submit" value="Subscribe" id="submit" name="submit">
				<div id="response"> </div>
		 </div>
	  <div class="tag-list">
	    <ul class="icon1 sub-icon1 profile_img">
			<li><a class="active-icon c1" href="#"> </a>
			</li>
		</ul>
		<ul class="icon1 sub-icon1 profile_img">
			<li><a class="active-icon c2" href="#"> </a>
				<ul class="sub-icon1 list">
					<li><h3>No Products</h3><a href=""></a></li>
				</ul>
			</li>
		</ul>
	    <ul class="last"><li><a href="#">Cart(0)</a></li></ul>
	  </div>
    </div>
     <div class="clear"></div>
     </div>
	</div>

