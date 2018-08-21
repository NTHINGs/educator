<?php
/**
 * Renders each membership in the [memberships_page] shortcode.
 *
 * @version 1.1.0
 */

$obj_memberships = Edr_Memberships::get_instance();
$membership_id = get_the_ID();
$classes = apply_filters( 'edr_membership_classes', array( 'edr-membership' ) );
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<style>
.card-product .img-wrap {
    border-radius: 3px 3px 0 0;
    overflow: hidden;
    position: relative;
    height: 220px;
    text-align: center;
}
.card-product .img-wrap img {
    max-height: 100%;
    max-width: 100%;
    object-fit: cover;
}
.card-product .info-wrap {
    overflow: hidden;
    padding: 15px;
    border-top: 1px solid #eee;
}
.card-product .bottom-wrap {
    padding: 15px;
    border-top: 1px solid #eee;
}

.label-rating { margin-right:10px;
    color: #333;
    display: inline-block;
    vertical-align: middle;
}

.card-product .price-old {
    color: #999;
}
</style>

<div class="container">
	<div class="row">
		<div class="col-md-4">
			<figure id="membership-<?php the_ID(); ?>" class="card card-product <?php echo esc_attr( implode( ' ', $classes ) ); ?>">
				<div class="edr-membership__header">
					<div class="img-wrap"><img src="https://s9.postimg.org/tupxkvfj3/image.jpg"></div>
					<figcaption class="info-wrap">
							<h2 class="title edr-membership__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<div class="edr-membership__summary">
								<p class="desc">
									<?php the_content( '' ); ?>
								</p>
							</div>
							<div class="rating-wrap">
								<div class="label-rating">132 reviews</div>
								<div class="label-rating">154 orders </div>
							</div> <!-- rating-wrap.// -->
					</figcaption>
				</div>
				<div class="bottom-wrap">
					<a href="" class="btn btn-sm btn-primary float-right">
						<?php echo edr_get_membership_buy_link( $membership_id ); ?>
					</a>	
					<div class="price-wrap h5">
						<span class="price-new">
							<div class="edr-membership__price">
								<?php echo edr_get_the_membership_price( $membership_id ); ?>
							</div>
						</span>
					</div> <!-- price-wrap.// -->
				</div> <!-- bottom-wrap.// -->
			</figure>
		</div> <!-- col // -->
	</div> <!-- row // -->
</div> <!-- container // -->

<!-- <article id="membership-<?php the_ID(); ?>" class="<?php echo esc_attr( implode( ' ', $classes ) ); ?>">
	<div class="edr-membership__header">
		<h2 class="edr-membership__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<div class="edr-membership__price"><?php echo edr_get_the_membership_price( $membership_id ); ?></div>
	</div>
	<div class="edr-membership__summary">
		<?php the_content( '' ); ?>
	</div>
	<div class="edr-membership__footer">
		<a class="edr-membership__more" href="<?php the_permalink(); ?>"><?php _e( 'Read more', 'educator' ); ?></a>
		<?php echo edr_get_membership_buy_link( $membership_id ); ?>
	</div>
</article> -->
