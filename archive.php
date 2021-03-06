<?php get_header(); ?>

	<div class="container title toptitle postitle">
		<div class="col-md-12">
			<h1>
				<span><a href="<?php echo URL; ?>">Επιστροφή</a></span>
				<?php single_cat_title(); ?>
			</h1>
		</div>
	</div>
	
	<div class="container main">
		<div class="col-md-8 white content archive">	
			<?php if(have_posts()): while(have_posts()): the_post(); ?>
				
				<div class="arch-item">
					<h2><?php the_title(); ?></h2>
					
					<div class="arch-content">
						<?php the_content(''); ?>
					</div>
					
					<div class="arch-meta">
						Δημοσιεύθηκε: <?php the_date() ?>
					</div>
					<a class="more" href="<?php the_permalink();?>" title="<?php the_title_attribute();?>">Διαβάστε περισσότερα &raquo;</a>
				</div>
				
			<?php endwhile; else: include('lib/error.php'); endif; ?>
		</div>
		<div class="col-md-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
	
<?php get_footer(); ?>