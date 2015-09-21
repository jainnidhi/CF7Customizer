<?php
/**
 * Options init file
 *
 * This file includes all the sections of customizer options
 *
 * @since 0.0.1
 * @package CFC
 *
 */


/**
 * Section: Form Style
 *
 * Options :
 * 				1. Text Color
 * 				2. Background Color
 * 				3. Background Image
 * 				4. Font Size
 *
 * @since 0.0.1
 *
 */
if ( file_exists( CFC_DIR . '/assets/admin/inc/options/titan-framework-sections/section-form_text_bg.php' ) ) {
    require_once( CFC_DIR . '/assets/admin/inc/options/titan-framework-sections/section-form_text_bg.php' );
}


/**
 * Section: Form Padding, Margin & Border
 *
 * Options :
 * 				1. Padding
 * 				2. Margins
 * 				3. Border
 * 				4. Border Color
 *
 * @since 0.0.1
 *
 */
if ( file_exists( CFC_DIR . '/assets/admin/inc/options/titan-framework-sections/section-padding_margin_border.php' ) ) {
    require_once( CFC_DIR . '/assets/admin/inc/options/titan-framework-sections/section-padding_margin_border.php' );
}


/**
 * Section: Inputs
 *
 * Options :
 * 				1. Width
 * 				2. Text Color
 * 				3. Background Color
 * 				4. Padding
 * 				5. Margin
 * 				6. Border
 * 				7. Border Color
 * 				8. Border BG Color
 *
 * @since 0.0.1
 *
 */
if ( file_exists( CFC_DIR . '/assets/admin/inc/options/titan-framework-sections/section-inputs.php' ) ) {
    require_once( CFC_DIR . '/assets/admin/inc/options/titan-framework-sections/section-inputs.php' );
}


/**
 * Section: Button
 *
 * Options :
 * 				1. Text Color
 * 				2. Background Color
 *     			3. Hover Text Color
 * 				4. Hover Background Color
 * 				5. Border
 * 				6. Border Color
 * 				7. Hover Border Color
 *
 * @since 0.0.1
 *
 */
if ( file_exists( CFC_DIR . '/assets/admin/inc/options/titan-framework-sections/section-button.php' ) ) {
    require_once( CFC_DIR . '/assets/admin/inc/options/titan-framework-sections/section-button.php' );
}
