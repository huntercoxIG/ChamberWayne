<?php get_template_part('includes/header'); ?>
<section class="hero">
	<div class="container-fluid">
		<div class="row">
			<div class="advancing"></div>
		</div>
	</div>
</section>
<div class="container">
  <div class="row">

    <div class="col-xs-12 col-sm-9 contents">
        <?php get_template_part('includes/loops/content', 'page'); ?>
    </div>
    
    <div class="col-xs-12 col-sm-3 sidebars">
    	<div class="row">
				<div class="col-xs-12 join">
					<a href="#">
						<img src="/wp-content/uploads/2015/02/join.png" alt="">
						<p>Join</p>
					</a>
				</div>
				<div class="col-xs-12 discover">
					<a href="#">
						<img src="/wp-content/uploads/2015/02/discover.png" alt="">
						<p>Discover</p>
					</a>
				</div>
				<div class="col-xs-12 connect">
					<a href="#">
						<img src="/wp-content/uploads/2015/02/bubble.png" alt="">
						<p>Connect</p>
					</a>
				</div>
			</div>
    </div>
    
  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_template_part('includes/footer'); ?>
