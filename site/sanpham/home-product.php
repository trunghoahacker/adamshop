         <h2 class="head">Sáp vuốt tóc</h2>
		  	<div class="mens-toolbar">
              <div class="sort">
               	<div class="sort-by">
		            <label>Sắp xếp theo</label>
		            <select>
		                            <option value="">
		                    Tên                 </option>
		                            <option value="">
		                    Giá                </option>
		            </select>
		            <a href=""><img src="images/arrow2.gif" alt="" class="v-middle"></a>
               </div>
    		</div>
        <div class="pager">   
        	<div class="limiter visible-desktop">
            <label>Hiển thị </label>
            <select>
                            <option value="" selected="selected">
                    9                </option>
                            <option value="">
                    15                </option>
                            <option value="">
                    30                </option>
                        </select> / trang        
             </div>
       		<ul class="dc_pagination dc_paginationA dc_paginationA06">
			    <li><a href="#" class="previous">Trang</a></li>
			    <li><a href="#">1</a></li>
			    <li><a href="#">2</a></li>
		  	</ul>
	   		<div class="clear"></div>
    	</div>
     	<div class="clear"></div>
	</div>
			<div class="top-box">
            <?php
			 	include ("site/Connect.php");
								$dbo->query("set names utf8");
								$sp = $dbo->prepare("select * from  sanpham");
								$sp->execute();
								$dssp = $sp->fetchAll(PDO::FETCH_ASSOC);
						?>
                        <?php
								foreach($dssp as $row1){
			 
			  ?> 
			 <div class="col_1_of_3 span_1_of_3">
			   <a href="#">
				<div class="inner_content clearfix">
					<div class="product_image">
						<img src="images/product/<?php echo $row1['images']?>" alt=""/>
					</div>
                    <?php if ($row1['tinhtrang'] == 1)
						{
					?>
                    <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <?php } if ($row1['tinhtrang'] == 2) { ?>
                    <div class="sale-box"><span class="on_sale title_shop">Bán chạy</span></div>	
                    <?php } ?>
                    <div class="price">
					   <div class="cart-left">
							<p class="title"><?php echo $row1['name']?></p>
							<div class="price1">
							  <span class="actual"><?php echo $row1['gia']?></span>
							</div>
						</div>
						<div class="cart-right"> </div>
						<div class="clear"></div>
					 </div>				
                   </div> 
                 </a>
				</div> 
                <?php } ?>            
				<div class="clear"></div> 
			</div>	
		 <h2 class="head">Gôm xịt</h2>
		  <div class="top-box1">
			  <div class="col_1_of_3 span_1_of_3">
			  	 <a href="../single.html">
				 <div class="inner_content clearfix">
					<div class="product_image">
						<img src="../images/pic8.jpg" alt=""/>
					</div>
                     <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Lorem Ipsum simply</p>
							<div class="price1">
							  <span class="actual">$12.00</span>
							</div>
						</div>
						<div class="cart-right"> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   </a>
				</div>
				
				<div class="clear"></div>
			</div>	
		   <h2 class="head">Combo</h2>	
		    <div class="section group">
			  <div class="col_1_of_3 span_1_of_3">
			  	 <a href="../single.html">
				 <div class="inner_content clearfix">
					<div class="product_image">
						<img src="../images/pic5.jpg" alt=""/>
					</div>
                     <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Lorem Ipsum simply</p>
							<div class="price1">
							  <span class="actual">$12.00</span>
							</div>
						</div>
						<div class="cart-right"> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   </a>
				</div>
				
				<div class="clear"></div>
			</div>