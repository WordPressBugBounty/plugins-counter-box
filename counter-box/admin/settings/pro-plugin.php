<?php

use CounterBox\WOWP_Plugin;

defined( 'ABSPATH' ) || exit;


$default    = $options['item_order']['pro_feature'] ?? 1;
$item_order = ! empty( $default ) ? 1 : 0;
$open       = ! empty( $item_order ) ? ' open' : '';
?>

    <div class="wpie-sidebar wpie-sidebar-features">
        <div class="wpie-item_heading">
            <span class="wpie-item_heading_icon"><span
                        class="wpie-icon wpie_icon-rocket wpie-color-danger"></span></span>
            <span class="wpie-item_heading_label">
                <?php esc_html_e( 'PRO VERSION', 'counter-box' ); ?></span>
            <span class="wpie-item_heading_type"></span>
        </div>

        <div class="wpie-buttons">
            <a href="<?php echo esc_url( WOWP_Plugin::info( 'demo' ) ); ?>" target="_blank" class="wpie-button is-demo">Demo</a>
            <a href="<?php echo esc_url( WOWP_Plugin::info( 'pro' ) ); ?>" target="_blank" class="wpie-button is-pro">GET PRO</a>
        </div>
    </div>

<?php



