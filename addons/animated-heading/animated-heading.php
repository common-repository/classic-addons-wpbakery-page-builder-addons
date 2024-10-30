<?php
/**
 * Animated Heading Addon Template
*/
 
/*
**========== Direct access not allowed =========== 
*/
if( ! defined('ABSPATH' ) ){ exit; }

class WPBakeryShortCode_CAW_Animated_Heading extends WPBakeryShortCode {

	protected function content( $attrs, $content = null ) {
		extract( shortcode_atts( array(
			'before_heading' => 'We are here to',
			'spin_headings'  => '',
			'extra_classes'  => '',
			'spin_timer'     => '3000',
			'after_heading'  => 'you...',
			'after_margin'   => '',
			'cssbox'     => ''
		), $attrs ) );

		wp_enqueue_style('caw-aheading', CAWPB_URL.'/addons/animated-heading/animated-heading.css');
		wp_enqueue_script('caw-aheading', CAWPB_URL.'/addons/animated-heading/animated-heading.js', array('jquery'));

		$cssbox = cawpb_add_inline_style($cssbox, $this->settings['base'], $attrs);

		$beforetxt_istyle = cawpb_get_typo_styles('beforetxt', $attrs, array('font-size' => '20px'));
		$sph_istyle = cawpb_get_typo_styles('spinner_headings', $attrs, array('font-size' => '20px'));
		$aftertxt_istyle = cawpb_get_typo_styles('aftertxt', $attrs, array('font-size' => '20px'));

		$all_headings = explode(',', $spin_headings);

		$wrapper_classes = array();
		$wrapper_classes[] = 'caw-aheading-wrapper';
		$wrapper_classes[] = 'caw-textcenter';
		$wrapper_classes[] = 'wpb_content_element';
		$wrapper_classes[] = $cssbox;
		$wrapper_classes[] = $extra_classes;		
				
		ob_start(); ?>
			<div class="<?php echo cawpb_sanitize_html_classes($wrapper_classes); ?>" data-time="<?php echo intval($spin_timer); ?>">
				<h1>
				  <span style="<?php echo esc_attr($beforetxt_istyle); ?>"><?php echo esc_attr( $before_heading ); ?></span>
				  
				  	<span class="caw-aheading-spin" style="<?php echo esc_attr($sph_istyle); ?>">
					  	<em class="current"><?php echo esc_attr( $all_headings[0] ); ?></em>
					  	<span class="next"><span></span></span>
				  	</span>

				  	<span style="<?php echo esc_attr($aftertxt_istyle); ?>"><?php echo esc_attr( $after_heading ); ?></span>
				</h1>

				<ul class="caw-aheadings-list" style="margin-bottom: <?php echo esc_attr($after_margin); ?>;">
					<?php
						foreach ($all_headings as $heading) {?>
							<li><?php echo esc_attr( $heading ); ?></li>
						<?php }
					?>
				</ul>

				<div class="caw-aheading-content">
					<?php echo wp_kses_post($content); ?>
				</div>
			</div>
		<?php return ob_get_clean();
	}
}