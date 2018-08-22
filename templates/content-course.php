<?php
/**
 * Renders each course in the shortcode-courses.php template.
 *
 * @version 1.0.1
 */

$edr_courses = Edr_Courses::get_instance();
$course_id = get_the_ID();
$price = $edr_courses->get_course_price( $course_id );
$price_str = ( $price > 0 ) ? edr_format_price( $price ) : _x( 'Free', 'price', 'novolearn' );
$thumb_size = apply_filters( 'edr_courses_thumb_size', 'thumbnail' );
?>
<article id="course-<?php echo intval( $course_id ); ?>" class="col-12 col-sm-6 col-md-4 edr-course">
	<a href="<?php the_permalink(); ?>">
		<div class="card h-100">
			<?php if ( has_post_thumbnail() ) :
				the_post_thumbnail('large' , array('class' => 'img-fluid card-img-top'));
			else:
				echo '<img class="img-fluid wp-post-image card-img-top" src="http://placehold.jp/350x200.png">';
				// echo '<img class="img-fluid wp-post-image card-img-top" src="/wp-content/plugins/educator/assets/public/img/default-thumbnail.jpg">';
			endif; ?>
			<div class="card-body text-justify">
				<h5 class="card-title"><?php the_title(); ?></h5>
				<?php the_excerpt(); ?>
				
			</div>
			<div class="card-footer">
				<h5 class="float-right" style="color: #464fa0;">
					<?php
						echo _x( 'Price: ', 'Price str', 'novolearn' );
						echo $price_str; 
					?>
				</h5>
			</div>
		</div>
	</a>
</article>
