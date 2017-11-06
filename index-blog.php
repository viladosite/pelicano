
<!-- wallstreet Blog Section ---->
<?php $wallstreet_pro_options=theme_data_setup();
	  $current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options );
 if($current_options['blog_section_enabled'] == true) { ?>	
<div class="container home-blog-section">
	<div class="row">
		<div class="section_heading_title">
		<?php if($current_options['home_blog_heading']) { ?>
			<h1>Nossos Trabalhos</h1>
		<?php } ?>
		<?php if($current_options['home_blog_description']) { ?>
			<div class="pagetitle-separator">
				<div class="pagetitle-separator-border">
					<div class="pagetitle-separator-box"></div>
				</div>
			</div>
			<p>Conheça alguns dos nossos últimos trabalhos.</p>
		<?php } ?>
		</div>
	</div>
	<div class="row">
		<?php
		$j=1;

		$args = array( 'category_name' => 'portfolio', 'post_type' => 'post','posts_per_page' =>3,'post__not_in'=>get_option("sticky_posts")); 	
		query_posts( $args );
		if(query_posts( $args ))
		{	while(have_posts()):the_post();
			$recent_expet = get_the_excerpt(); ?>
			<div class="col-md-4 col-sm-6">
				<div class="home-blog-area">
					<a href="<?php the_permalink(); ?>">
					<div class="home-blog-post-img"><?php
						$defalt_arg =array('class' => "img-responsive");
						if(has_post_thumbnail()){ 
						the_post_thumbnail('', $defalt_arg); 
						} else{
							echo " <img class=\"image-tb\" src=\"", bloginfo('template_url'), "/images/sem-imagem.jpg\" alt=\"Descrição da imagem - com ", the_author('', false), "\"> ";
						} 
						?>
					</div>
					<div class="home-blog-info">						
						<h2 class="ht-blog"><?php the_title(); ?></h2>		
												
					</div>
					</a>
				</div>
			</div>
			<?php if($j%3==0){ echo "<div class='clearfix'></div>"; } $j++; endwhile; 
			} else  {
			echo "<div class='post_message'>No Posts to show.</div>";
			} ?>
	</div>
	
		<?php $idObj = get_category_by_slug('portfolio');
		$id = $idObj->term_id;
		$link_da_categoria = get_category_link($id); ?>
		<div class="col-md-4 produto4 col-md-offset-4">
		<a href="<?php echo $link_da_categoria ;?>"> <button type="button" class="btn btn-primary btn-ver">Ver todos os trabalhos</button> </a>
		</div>

</div><!-- /wallstreet Blog Section ---->
<?php } ?>

<!-- wallstreet Blog Section ---->
<?php $wallstreet_pro_options=theme_data_setup();
	  $current_options = wp_parse_args(  get_option( 'wallstreet_pro_options', array() ), $wallstreet_pro_options );
 if($current_options['blog_section_enabled'] == true) { ?>
 <hr class="cat-hr">	
<div class="container home-blog-section section-2">
	<div class="row">
		<div class="section_heading_title">
		<?php if($current_options['home_blog_heading']) { ?>
			<h1><?php echo $current_options['home_blog_heading']; ?></h1>
		<?php } ?>
		<?php if($current_options['home_blog_description']) { ?>
			<div class="pagetitle-separator">
				<div class="pagetitle-separator-border">
					<div class="pagetitle-separator-box"></div>
				</div>
			</div>
			<p><?php echo $current_options['home_blog_description']; ?></p>
		<?php } ?>
		</div>
	</div>

	<div class="row">
		<?php
		$j=1;
		$idObj = get_category_by_slug('portfolio'); 
  		$id = $idObj->term_id;
		$args = array( 'cat' =>-$id, 'post_type' => 'post','posts_per_page' =>3,'post__not_in'=>get_option("sticky_posts")); 	
		query_posts( $args );
		if(query_posts( $args ))
		{	while(have_posts()):the_post();
			$recent_expet = get_the_excerpt(); ?>
			<div class="col-md-4 col-sm-6">
				<div class="home-blog-area">
					<a href="<?php the_permalink(); ?>">
					<div class="home-blog-post-img"><?php
						$defalt_arg =array('class' => "img-responsive");
						if(has_post_thumbnail()): 
						the_post_thumbnail('', $defalt_arg); 
						endif; 
						?>
					</div>
					<div class="home-blog-info">						
						<div class="home-blog-post-detail">
							<span class="date"><?php echo get_the_date(); ?> </span>
							<span class="comment"><i class="fa fa-comment"></i><?php comments_number( 'Nenhum Comentario', '1 Comentario', '% Comentarios' ); ?></span>
												
						</div>
						<h2 class="ht-blog"><?php the_title(); ?></h2>		
						<div class="home-blog-description"><p><?php echo get_the_excerpt(); ?></p></div>
						<div class="home-blog-btn"><?php _e('Leia Mais','wallstreet'); ?></div>	
					</div>
					</a>
				</div>	
			</div>
			<?php if($j%3==0){ echo "<div class='clearfix'></div>"; } $j++; endwhile; 
			} else  {
			echo "<div class='post_message'>No Posts to show.</div>";
			} ?>
	</div>

		<?php $idObj = get_category_by_slug('noticias');
		$id = $idObj->term_id;
		$link_da_categoria = get_category_link($id); ?>
		<div class="col-md-4 produto4 col-md-offset-4">
		<a href="<?php echo $link_da_categoria ;?>"> <button type="button" class="btn btn-primary btn-ver">Ver todas as novidades</button> </a>
		</div>

</div><!-- /wallstreet Blog Section ---->
<?php } ?>
