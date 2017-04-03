<style> 
	.fontvn{font-family:"Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, sans-serif}
	.hieuung{-webkit-transition-duration: 0.5s;
	-moz-transition-duration: 0.5s;
	-o-transition-duration: 0.5s;}
	.hieuung:hover
	{-webkit-transform:scale(1.3);
	-moz-transform:scale(1.3); 
	-o-transform:scale(1.3);
	}
</style>
<div class="login">
       <div class="wrap">
	    <ul class="breadcrumb breadcrumb__t fontvn"><a class="fontvn" class="home" href="index.php">Trang chủ</a>  / Liên hệ</ul>
		   <div class="content-top">
			   <form method="post" action="site/LienHe/mail.php">
					<div class="to">
                     	<input type="text" class="text" value="Name" name="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
					 	<input type="text" class="text" value="Mobile" name="Mobile"onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile';}" style="margin-left: 10px">
					</div>
					<div class="to">
                     	<input type="text" class="text" value="Email" name="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
					 	<input type="text" class="text" value="Subject" name="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}" style="margin-left: 10px">
					</div>
					<div class="text">
	                   <textarea value="Message" name="Message"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message:</textarea>
	                </div>
	                <div class="submit">
	               		<input type="submit" value="Send">
	                </div>
               </form>
            </div>
       </div> 
    </div>