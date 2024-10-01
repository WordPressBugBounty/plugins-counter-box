<?php

/**
 * Class WOWP_Public
 *
 * This class handles the public functionality of the Float Menu Pro plugin.
 *
 * @package    CounterBox
 * @subpackage Public
 * @author     Dmytro Lobov <dev@wow-company.com>, Wow-Company
 * @copyright  2024 Dmytro Lobov
 * @license    GPL-2.0+
 */

namespace CounterBox;

use CounterBox\Admin\DBManager;
use CounterBox\Publish\Conditions;
use CounterBox\Publish\Display;

defined( 'ABSPATH' ) || exit;

class WOWP_Public {

	private string $pefix;

	public function __construct() {
		$this->includes();
		// prefix for plugin assets
		$this->pefix = '.min';
		add_shortcode( WOWP_Plugin::SHORTCODE, [ $this, 'shortcode'] );
		add_action( 'wp_enqueue_scripts', [ $this, 'assets' ] );

	}

	public function shortcode( $atts ): string {

		$atts = shortcode_atts(
			[ 'id' => "" ],
			$atts,
			WOWP_Plugin::SHORTCODE
		);

		if ( empty( $atts['id'] ) ) {
			return '';
		}
		$result = DBManager::get_data_by_id( $atts['id'] );

		if ( empty( $result->param ) ) {
			return '';
		}

		$conditions = Conditions::init( $result );
		if ( $conditions === false ) {
			return '';
		}

		$param  = maybe_unserialize( $result->param );

		$rest = '';
		if ( ! empty( $result->mode ) ) {
			if ( $param['type'] === 'UserTimer' || $param['type'] === 'TimerStopGo' || $param['type'] === 'Counter' ) {
				$rest = '<button class="counter-reset">'.esc_html__('Reset counter', 'counter-box').'</button>';
			}
		}

		$out = '<div style="display:none;" class="counter-box-' . absint($atts['id']) . '">';
		$out .= wp_kses_post($param['content']);
		$out .= $rest;
		$out .= '</div>';


		$handle  = WOWP_Plugin::SLUG;
		$assets  = plugin_dir_url( __FILE__ ) . 'assets/';
		$version = WOWP_Plugin::info( 'version' );

		wp_enqueue_script( $handle, $assets . 'js/counterBox' . $this->pefix . '.js', [], $version, true );

		$script = new Script_Maker( $atts['id'], $param );
		$data = $script->init();
		wp_localize_script( $handle, 'CounterBox_' . $atts['id'], $data );

		if ( ! empty( $result->mode ) ) {
			$url_script_reset = $assets . 'js/counterReset' . $this->pefix . '.js';
			wp_enqueue_script( $handle . '-reset', $url_script_reset, [], $version, true );
		}

		return $out;

	}


	public function assets(): void {
		$handle  = WOWP_Plugin::SLUG;
		$assets  = plugin_dir_url( __FILE__ ) . 'assets/';
		$version = WOWP_Plugin::info( 'version' );
		wp_enqueue_style( $handle, $assets . 'css/style' . $this->pefix . '.css', null, $version );
	}

	public function includes(): void {
		require_once plugin_dir_path( __FILE__ ) . 'class-script-maker.php';
	}
}