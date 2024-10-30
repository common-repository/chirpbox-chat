<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://www.getchirpbox.com
 * @since      1.0.0
 *
 * @package    Chirpbox_Chat
 * @subpackage Chirpbox_Chat/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="wrap">

    <h2><?php echo esc_html(get_admin_page_title()); ?></h2>

    <form method="post" name="chirpbox_chat_settings" action="options.php">
      <?php
          //Grab all options
          $options = get_option($this->plugin_name);

          // Cleanup
          $site_url = $options['site_url'];

          settings_fields($this->plugin_name);
          do_settings_sections($this->plugin_name);
      ?>
      <h3>NB: To use this plugin you must have already registered an account at http://getchirpbox.com and logged in via the admin http://admin.getchirpbox.com.</h3>
      <!-- Page Id -->
      <fieldset>
        <label for="<?php echo $this->plugin_name; ?>-site-url">
          <legend class="screen-reader-text"><span>>Site URL (exluding 'http://www.' e.g. 'google.com'):</span></legend>
          <span>Site URL (exluding 'http://www.' e.g. 'google.com'): </span>
          <input type="text" class="regular-text" id="<?php echo $this->plugin_name; ?>[site_url]" name="<?php echo $this->plugin_name; ?>[site_url]" value="<?php if(!empty($site_url)) echo $site_url; ?>"/>
        </label>
      </fieldset>
      <br/><span>Leaving/saving this field blank will automatically disable the plugin.</span>

      <?php submit_button('Save all changes', 'primary','submit', TRUE); ?>

  </form>

</div>
