<div class="wrap">
    <h2>Alecaddd plugin</h2>
    <?php settings_errors(); ?>
    <form method="post" action="options.php">
        <?php settings_fields('alecaddd_options_group'); ?>
        <?php do_settings_sections('alecaddd_plugin'); ?>
        <?php submit_button(esc_html__('Save Settings','ast'),'primary large'); ?>
    </form>
</div>