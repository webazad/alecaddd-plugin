<div class="wrap">
    <h2><?php echo esc_html(get_admin_page_title()); ?></h2>
    <?php settings_errors(); ?>

    <ul class="nav nav-tabs">
        <li class="active"><a href="#tab-1">Manage Settings</a></li>
        <li><a href="#tab-2">Documentations</a></li>
        <li><a href="#tab-3">About Plugin</a></li>
        <li><a href="#tab-4">Export / Import</a></li>
        <li><a href="#tab-5">Technologies Used</a></li>
        <li><a href="#tab-6">Support</a></li>
        <li><a href="#tab-7">About Author</a></li>
    </ul>

    <div class="tab-content">
        <div id="tab-1" class="tab-pane active">
            <form method="post" action="options.php">
                <?php settings_fields('alecaddd_plugin_settings'); ?>
                <?php do_settings_sections('alecaddd_plugin'); ?>
                <?php submit_button(esc_html__('Save Settings','ast'),'primary large'); ?>
            </form>
        </div>
        <div id="tab-2" class="tab-pane">
            <h2>Uses of this plugin</h2>
            <p>This plugin has used ios toggle button for better look and used sass css for better pruction speed and all css are minified so that page loads in super speed.</p>
            <ul>
                <li><a href="">IOS Toggle Button</a></li>
                <li><a href="">SASS</a></li>
                <li><a href="">Modularized php</a></li>
                <li><a href="">Object oriented php programming</a></li>
                <li><a href="">Gulp</a></li>
                <li><a href="">Node js</a></li>
            </ul>            
        </div>
        <div id="tab-3" class="tab-pane">
            <h2>Author</h2>
            <p>Hi i am a freelance web designer and web developer. I have hundreds of custom plugins. Basically i have created all my plugins to work quickly work in my personal sites. So i have decided to help all my clients to help in their sites so that things become esier for them to handle...</p>
            <ul>
                <li><a href="">Plugin</a></li>
                <li><a href="">Author</a></li>
                <li><a href="">Support</a></li>
                <li><a href="">About the plugin</a></li>
                <li><a href="">Contact us</a></li>
                <li><a href="">Live support</a></li>
            </ul>            
        </div>
        <div id="tab-4" class="tab-pane">
            <h2>Export / Import</h2>
            <p>Hi i am a freelance web designer and web developer. I have hundreds of custom plugins. Basically i have created all my plugins to work quickly work in my personal sites. So i have decided to help all my clients to help in their sites so that things become esier for them to handle...</p>
            <ul>
                <li><a href="">Plugin</a></li>
                <li><a href="">Author</a></li>
                <li><a href="">Support</a></li>
                <li><a href="">About the plugin</a></li>
                <li><a href="">Contact us</a></li>
                <li><a href="">Live support</a></li>
                <li><a href="">Author</a></li>
            </ul>            
        </div>
        <div id="tab-5" class="tab-pane">
            <h2>Surely Be Updated If Any</h2>
            <p>Hi i am a freelance web designer and web developer. I have hundreds of custom plugins. Basically i have created all my plugins to work quickly work in my personal sites. So i have decided to help all my clients to help in their sites so that things become esier for them to handle...</p>
            <ul>
                <li><a href="">WordPress</a></li>
                <li><a href="">WordPress plugin API, options api, settings api, Custom settings api</a></li>
                <li><a href="">HTML & CSS</a></li>
                <li><a href="">PHP</a></li>
                <li><a href="">Object oriented php programming</a></li>
                <li><a href="">Composer/a></li>
                <li><a href="">PSR-4</a></li>
                <li><a href="">Visual Studio Code</a></li>
                <li><a href="">Node js</a></li>
                <li><a href="">NPM</a></li>
                <li><a href="">IOS Toggle Button</a></li>
                <li><a href="">SASS</a></li>
                <li><a href="">Modularized php</a></li>
                <li><a href="">Gulp</a></li>
                <li><a href="">Minimal Database</a></li>
            </ul>            
        </div>
        <div id="tab-6" class="tab-pane">
            <h2>Supports</h2>
            <p>Hi i am a freelance web designer and web developer. I have hundreds of custom plugins. Basically i have created all my plugins to work quickly work in my personal sites. So i have decided to help all my clients to help in their sites so that things become esier for them to handle...</p>
            <ul>
                <li><a href="">Plugin</a></li>
                <li><a href="">Author</a></li>
                <li><a href="">Support</a></li>
                <li><a href="">About the plugin</a></li>
                <li><a href="">Contact us</a></li>
                <li><a href="">Live support</a></li>
            </ul>           
        </div>
        <div id="tab-7" class="tab-pane">
            <h2>About Author</h2>
            <p>Hi i am a freelance web designer and web developer. I have hundreds of custom plugins. Basically i have created all my plugins to work quickly work in my personal sites. So i have decided to help all my clients to help in their sites so that things become esier for them to handle...</p>
            <ul>
                <li><a href="">Plugin</a></li>
                <li><a href="">Author</a></li>
                <li><a href="">Support</a></li>
                <li><a href="">About the plugin</a></li>
                <li><a href="">Contact us</a></li>
                <li><a href="">Live support</a></li>
            </ul>            
        </div>
    </div>    
</div>