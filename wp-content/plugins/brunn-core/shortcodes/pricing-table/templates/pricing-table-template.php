<div class="qodef-price-table qodef-item-space <?php echo esc_attr($holder_classes); ?>">
	<div class="qodef-pt-inner" <?php echo brunn_select_get_inline_style($holder_styles); ?>>
		<ul>
			<li class="qodef-pt-prices">
				<sup class="qodef-pt-value" <?php echo brunn_select_get_inline_style($currency_styles); ?>><?php echo esc_html($currency); ?></sup>
				<span class="qodef-pt-price" <?php echo brunn_select_get_inline_style($price_styles); ?>><?php echo esc_html($price); ?></span>

			</li>
			<li class="qodef-pt-title-holder">
				<span class="qodef-pt-title" <?php echo brunn_select_get_inline_style($title_styles); ?>><?php echo esc_html($title); ?></span>
				<h6 class="qodef-pt-mark" <?php echo brunn_select_get_inline_style($price_period_styles); ?>><?php echo esc_html($price_period); ?></h6>
			</li>
			<li class="qodef-pt-content">
				<?php echo do_shortcode($content); ?>
			</li>
			<?php 
			if(!empty($button_text)) { ?>
				<li class="qodef-pt-button">
					<?php echo brunn_select_get_button_html(array(
                        'custom_class' => 'qodef-btn-after-next',
						'link' => $link,
						'text' => $button_text,
						'type' => $button_type,
                        'size' => 'large'
					)); ?>
				</li>				
			<?php } ?>
		</ul>
	</div>
</div>