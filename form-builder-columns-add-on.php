<?php
/*
Plugin Name:       WP Swift: Form Builder Columns Add-On
Description:       Display the inputs using Zurb Foundation columns. Inputs will be in left column and section headers and description in the right column.
Version:           1.0.0
Author:            Gary Swift
License:           GPL-2.0+
Text Domain:       wp-swift-form-builder-columns-add-on
*/
class WP_Swift_Form_Builder_Columns_Addon_Plugin {
    /*
     * Initializes the plugin.
     */
    public function __construct() {
    }
    /*
     * Open the section
     */
    public function section_open($section_header, $section_content) {
		?>
		<div class="row form-section">
			<!-- @start columns 1 -->
			<div class="small-12 medium-12 large-6 columns large-push-6">
			   <div class="search-info">
			       <h3 class="search-header-info"><?php echo $section_header ?></h3>
			       <div class="entry-content"><?php echo $section_content ?></div>
			   </div>
			</div><!-- @end columns 1 -->
			<!-- @start columns 2 -->
			<div class="small-12 medium-12 large-6 columns large-pull-6">
		<?php     	
    }
    /*
     * Close the section
     */
    public function section_close() {
		?>
		    </div><!-- @end columns 2 -->
        </div><!-- @end section row -->
        <?php     	
    }   
}
// // Initialize the plugin
// $form_builder_columns_add_on = new WP_Swift_Form_Builder_Columns_Addon_Plugin();
