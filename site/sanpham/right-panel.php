<div class="rsidebar span_1_of_left">
				<h5 class="m_1">Tìm theo loại</h5>
					<select class="dropdown" tabindex="8" data-settings='{"wrapperClass":"metro"}'>
						<option value="1">Sáp vuốt tóc</option>
					</select>
					<select class="dropdown" tabindex="8" data-settings='{"wrapperClass":"metro"}'>
						<option value="1">Gôm xịt</option>
						<option value="2">Xịt giữ nếp</option>
					</select>
					<ul class="kids">
						<li><a href="#">Combo</a></li>
						<li class="last"><a href="#">Khác</a></li>
					</ul>
                   <section  class="sky-form">
					<h4>Tìm theo giá</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>50K-100K</label>
							</div>
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>100K-150K</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>150K-200K</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>200K-300K</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>300K-500K</label>
								<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>Trên 500K</label>
							</div>
						</div>
		        </section>
		       <section  class="sky-form">
					<h4>Thương hiệu</h4>
						<div class="row row1 scroll-pane">
							<div class="col col-4">
                            <?php 
								$dbo->query("set names utf8");
								$dsth = $dbo->prepare("select * from  thuonghieu");
								$dsth->execute();
								$th = $dsth->fetchAll(PDO::FETCH_ASSOC);
						?>
                        <?php
								foreach($th as $row){
							?>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i><?php echo $row['mathuonghieu'] ?></label>
                                <?php } ?>	
							</div>
						</div>
		       </section>
		      </div>