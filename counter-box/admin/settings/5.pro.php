<?php
/*
 * Page Name: PRO FEATURES  🚀
 */

use CounterBox\WOWP_Plugin;

$features = [

	[
		'icon'  => 'dashicons dashicons-image-rotate flip-horizontal',
		'bg'    => '#4EC477',
		'title' => __( 'Start After Finish', 'counter-box' ),
		'desc'  => __( 'Delay the next weekly countdown until the previous one ends to prevent overlap.', 'counter-box' ),
	],

	[
		'icon'  => 'dashicons dashicons-calendar-alt',
		'bg'    => '#4EC477',
		'title' => __( 'Counter From Date / From Weekday', 'counter-box' ),
		'desc'  => __( '  Advanced counters that increment from a base number over time or reset weekly.', 'counter-box' ),
	],

	[
		'icon'  => 'wpie-icon wpie_icon-crosshairs',
		'bg'    => '#4EC477',
		'title' => __( 'Post-Countdown Actions', 'counter-box' ),
		'desc'  => __( 'Trigger custom actions when a countdown finishes ➜ Hide/Show content, Redirect, Show message, Run JavaScript.', 'counter-box' ),
	],

	[
		'icon'  => 'dashicons dashicons-admin-users',
		'bg'    => '#4EC477',
		'title' => __( 'User Role Targeting', 'counter-box' ),
		'desc'  => __( 'Show counters only to specific user roles (e.g. Admins, Subscribers).', 'counter-box' ),
	],

	[
		'icon'  => 'wpie-icon wpie_icon-globe-pointer',
		'bg'    => '#4EC477',
		'title' => __( 'Geotargeting', 'counter-box' ),
		'desc'  => __( 'Display counters only to users from selected countries.', 'counter-box' ),
	],

	[
		'icon'  => 'dashicons dashicons-translation',
		'bg'    => '#4EC477',
		'title' => __( 'Language Targeting', 'counter-box' ),
		'desc'  => __( 'Show counters based on the site’s language or user locale.', 'counter-box' ),
	],

	[
		'icon'  => 'dashicons dashicons-welcome-view-site',
		'bg'    => '#4EC477',
		'title' => __( 'Browser Rules', 'counter-box' ),
		'desc'  => __( 'Hide counters for specific browsers (e.g. IE, Safari).', 'counter-box' ),
	],

	[
		'icon'  => 'dashicons dashicons-calendar',
		'bg'    => '#4EC477',
		'title' => __( 'Scheduled Visibility', 'counter-box' ),
		'desc'  => __( 'Show counters only on selected dates, times, or days of the week.', 'counter-box' ),
	],

	[
		'icon'  => 'dashicons dashicons-html',
		'bg'    => '#4EC477',
		'title' => __( 'HTML Content Editor', 'counter-box' ),
		'desc'  => __( 'Add rich text, links, and formatting inside your counters.', 'counter-box' ),
	],

	[
		'icon'  => 'dashicons dashicons-admin-customizer',
		'bg'    => '#4EC477',
		'title' => __( 'Advanced Styling', 'counter-box' ),
		'desc'  => __( 'Set titles, positions, offsets, and colors for each counter unit.', 'counter-box' ),
	],

	[
		'icon'  => 'wpie-icon wpie_icon-grid-circle-plus',
		'bg'    => '#4EC477',
		'title' => __( 'Number Formatting & Remember Value', 'counter-box' ),
		'desc'  => __( 'Format large numbers with thousands separator and preserve counter value on page reload.', 'counter-box' ),
	],

];

?>

<div class="wowp-pro-upgrade">
    <div>
        <h3>Unlock PRO Features</h3>
        <p>Upgrade to Counter Box Pro and get advanced features like</p>
        <a href="<?php echo esc_url( WOWP_Plugin::info( 'pro' ) ); ?>" target="_blank" class="button button-primary">Get Counter Box Pro </a>
    </div>
    <dl class="wowp-pro__profits">
        <div class="wowp-pro__profit">
            <dt><span class="wpie-icon wpie_icon-money-time"></span>No Yearly Fees</dt>
            <dd>One-time payment. Use it forever.</dd>
        </div>
        <div class="wowp-pro__profit">
            <dt><span class="wpie-icon wpie_icon-refund"></span>14-Day Money-Back Guarantee</dt>
            <dd>Try it risk-free. Get a full refund if you’re not satisfied.</dd>
        </div>
        <div class="wowp-pro__profit">
            <dt><span class="wpie-icon wpie_icon-cloud-data-sync"></span>Lifetime Free Updates</dt>
            <dd>Always stay up to date — at no extra cost.</dd>
        </div>
        <div class="wowp-pro__profit">
            <dt><span class="wpie-icon wpie_icon-customer-support"></span>Priority Support</dt>
            <dd>Fast, friendly, and expert help whenever you need it.</dd>
        </div>
    </dl>

</div>

<div class="wowp-pro-features">

	<?php foreach ( $features as $feature ) : ?>

		<?php if ( ! empty( $feature['icon'] ) ): ?>
            <div class="wowp-pro-feature">
                <div class="wowp-pro-feature__icon">
                    <span class="<?php echo esc_attr( $feature['icon'] ); ?>"></span>
                </div>
                <div class="wowp-pro-feature__content">
                    <div class="wowp-pro-feature__title">
						<?php echo esc_html( $feature['title'] ); ?>
                    </div>
                    <div class="wowp-pro-feature__desc">
						<?php echo esc_html( $feature['desc'] ); ?>
                    </div>
                </div>
            </div>
		<?php endif; ?>
	<?php endforeach; ?>
</div>
<?php
