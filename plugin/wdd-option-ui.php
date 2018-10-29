 <?php 
 	$custom_post_type = get_option( 'wdd_custom_post_type', 'none' );
    $wdd_child_theme_css_path = get_option( 'wdd_child_theme_css_path', '/style.css' );
    $wdd_child_theme_js_path = get_option( 'wdd_child_theme_custom_js_path', '/wdd-script.js' );
    ?>
    <!-- UI -->
    <h2>WDD Settings</h2><hr>
    <div class="postbox wrap" style="padding: 31px;">
        <h2>Informations</h2><hr>
            <table class="form-table">
                <tbody>
                    <tr>
                        <th scope="row">
                            <label>
                               This Plugin includes
                            </label>
                        </th>
                        <td>
                            <ul>
                                <li>Enabled Divi Builder on all post types with an editor box</li>
                                <li>Post title shortcode</li>
                                <li>Show module shortcode and  can also display sections, rows etc</li>
                                <li>Show Divi Buttons</li>
                                <li>Yoast Breadcrumbs - Install Yoast SEO plugin first and <a href="https://kb.yoast.com/kb/implement-wordpress-seo-breadcrumbs/" target="_blank"> follow these steps</a></li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"> <label for="child">Shortcode to display post title</label></th>
                        <td>[title]</td>
                    </tr>
                     <tr>
                        <th scope="row"> <label for="child">Shortcode to show module</label></th>
                        <td>[showmodule id="module-id"]</td>
                    </tr>
                     <tr>
                        <th scope="row"> <label for="child">Shortcode to show Divi Buttons</label></th>
                        <td>[divi_button alignment="optional" href="optional"]button content here[/divi_button]</td>
                    </tr>
                     <tr>
                        <th scope="row"> <label for="child">Shortcode to show Yoast breadcrumbs</label></th>
                        <td>[yoast-breadcrumb]</td>
                    </tr>
                    <tr>
                        <th scope="row"> <label for="child">Shortcode to display custom post type</label></th>
                        <td>
                        	<p>[wdd_post post_type="post" posts_per_page="-1" layout_id="0" column="2" class="" ]</p>
                        	<p><strong>post_type:</strong> Your custom post type slug</p>
                        	<p><strong>posts_per_page:</strong> number of post to display</p>
                        	<p><strong>layout_id:</strong> The layout id. <i>Create first your layout at the WDD CPT admin menu. Ask the developer for assistance.</i></p>
                        	<p><strong>column:</strong> number of columns to be displayed (maximum of 4 columns)</p>
                        	<p><strong>class:</strong> class for local styling</p>
                        </td>
                    </tr>
                     <tr>
                        <th scope="row"> <label for="child">Shortcode to show ACF field</label></th>
                        <td>[get_field key=""]</td>
                    </tr>
                </tbody>
            </table>
    </div>

    <div class="postbox wrap" style="padding: 31px;">
        <form action="" method="post" accept-charset="utf-8">
            <h2>Settings</h2><hr>
           
            <table class="form-table">
                <tbody>
                    <tr>
                        <th scope="row"> <label for="wdd_child_theme_css_path">CSS file path of child theme</label></th>
                        <td><input class="large-text" type="text" name="style_path" value="<?php echo $wdd_child_theme_css_path ?>"></td>
                    </tr>
                     <tr>
                        <th scope="row"> <label for="wdd_child_theme_js_path">Custom JS file path of child theme</label></th>
                        <td><input class="large-text" type="text" name="js_path" value="<?php echo $wdd_child_theme_js_path ?>"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <hr>
                            <input type="submit" name="submit_custom_post_type" value="Save" class="button button-primary">
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
<!-- end UI -->