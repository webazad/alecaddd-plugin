<div class="wrap">
    <h2><?php echo esc_html(get_admin_page_title()); ?></h2>
    <?php settings_errors(); ?>

    <ul class="nav nav-tabs">
        <li class="active"><a href="#tab-1">Manage Settings</a></li>
        <li><a href="#tab-2">Updates</a></li>
        <li><a href="#tab-3">About Authoe</a></li>
        <li><a href="#tab-4">Export / Import</a></li>
    </ul>

    <div class="tab-content">
        <div id="tab-1" class="tab-pane active">
            <form method="post" action="options.php">
                <?php settings_fields('alecaddd_options_group'); ?>
                <?php do_settings_sections('alecaddd_plugin'); ?>
                <?php submit_button(esc_html__('Save Settings','ast'),'primary large'); ?>
            </form>
        </div>
        <div id="tab-2" class="tab-pane">
            two
            
        </div>
        <div id="tab-3" class="tab-pane">
            Three
            
        </div>
        <div id="tab-4" class="tab-pane">
            Four
            
        </div>
    </div>    
</div>