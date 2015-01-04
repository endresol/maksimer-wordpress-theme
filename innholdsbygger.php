<?php
	$innholdsbygger = get_field( 'innholdsbygger' );
	if ( function_exists ( 'get_row_layout' ) && !empty( $innholdsbygger ) ) :

		global $innholdsbygger_teller;
		$innholdsbygger_teller = 1;

		while ( has_sub_field( 'innholdsbygger' ) ) :

			if ( 'en_kolonne' == get_row_layout() ) {
				get_template_part( 'innholdsbygger', 'en_kolonne' );
			} elseif ( 'to_kolonne' == get_row_layout() ) {
				get_template_part( 'innholdsbygger', 'to_kolonne' );
			} elseif ( 'knapper' == get_row_layout() ) {
				get_template_part( 'innholdsbygger', 'knapper' );
			} else {
				return false;
			}

			$innholdsbygger_teller++;

		endwhile;

	else :
?>

	<div class="ramme">
		<?php the_content(); ?>
	</div>

<?php
	endif;
?>