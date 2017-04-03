<style> 
	.fontvn{font-family:Baskerville, "Palatino Linotype", Palatino, "Century Schoolbook L", "Times New Roman", serif}
	.hieuung{-webkit-transition-duration: 0.5s;
	-moz-transition-duration: 0.5s;
	-o-transition-duration: 0.5s;}
	.hieuung:hover
	{-webkit-transform:scale(1.3);
	-moz-transform:scale(1.3); 
	-o-transform:scale(1.3);
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
			<li><a class="color4" href="#">SẢN PHẨM</a>
				<div class="megapanel">
      
                        <?php

                        $db->prepare('SELECT * FROM loai_san_pham ORDER BY MaLoai DESC');
								foreach($db->getArray() as $row){
								
					?>
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<a href="#"><h4><?php echo $row['TenLoai'] ?></h4></a>
								<ul>
                                <?php
									$db->prepare("SELECT DISTINCT TenThuongHieu FROM thuong_hieu INNER JOIN san_pham ON san_pham.MaThuongHieu = thuong_hieu.MaThuongHieu
                                                                     WHERE san_pham.MaLoai = :maLoai");
                                    $db->bind(':maLoai', $row['MaLoai']);
									
								?>
                            	<?php
								foreach($db->getArray() as $row){
								?> 
									<li><a href="#"><?php echo $row['TenThuongHieu'] ?></a></li>
                                    <?php } ?> 
								</ul>
							</div>							
						</div> 
                        <?php } ?> 
					  </div>  
					</div>
				</li>				
				<li><a class="color5" href="#">TRỢ GIÚP</a>
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

