<?php  include'config/config.php'?>
<?php  include'lib/Database.php'?>
<?php  include'inc/header.php'?>
<?php  include'inc/slider.php'?>
<?php $db =new Database();
global $post;
while($rssult=$post->fetch_assoc()){

}
?>
<div class="contentsection contemplete clear">
		<div class="maincontent clear">
		   <?php 
		   $query = "SELECT * FROM tbl_post"
			
			if($post){

			}
	       ?>

           <div class="samepost clear">
				<h2><a href="#">Our post title here</a></h2>
				<h4>May 18, 2018, 12:30 PM, By <a href="#">Md. Al-Amin</a></h4>
				 <a href="#"><img src="images/3.jpg" alt="post image"/></a>
				<p>
					Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.
				</p>
				<div class="readmore clear">
					<a href="post.php">Read More</a>
				</div>
			</div>
		<?php } ?>	
		<?php }else{("location:404.php");}?>
		</div>
	<?php  include'inc/sidebar.php'?>
	<?php  include'inc/footer.php'?>

	