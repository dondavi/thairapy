<<<<<<< HEAD
<?php

class US_Plugin_Upgrader_Skin extends WP_Upgrader_Skin {

	public $plugin = '';
	public $plugin_active = FALSE;
	public $plugin_network_active = FALSE;
	public $messages = array();

	/**
	 *
	 * @param array $args
	 */
	public function __construct( $args = array() ) {

		$defaults = array( 'url' => '', 'plugin' => '', 'nonce' => '', 'title' => '' );
		$args = wp_parse_args( $args, $defaults );

		$this->plugin = $args['plugin'];

		$this->plugin_active = is_plugin_active( $this->plugin );
		$this->plugin_network_active = is_plugin_active_for_network( $this->plugin );

		parent::__construct( $args );
	}

	/**
	 * @access public
	 */
	public function after() {
	}

	public function header() {
	}

	public function footer() {
	}

	public function feedback( $string ) {
		if ( isset( $this->upgrader->strings[$string] ) ) {
			$string = $this->upgrader->strings[$string];
		}

		if ( strpos( $string, '%' ) !== FALSE ) {
			$args = func_get_args();
			$args = array_splice( $args, 1 );
			if ( $args ) {
				$args = array_map( 'strip_tags', $args );
				$args = array_map( 'esc_html', $args );
				$string = vsprintf( $string, $args );
			}
		}
		if ( empty( $string ) ) {
			return;
		}

		$this->messages[] = $string;
	}
}
=======
<?php

class US_Plugin_Upgrader_Skin extends WP_Upgrader_Skin {

	public $plugin = '';
	public $plugin_active = FALSE;
	public $plugin_network_active = FALSE;
	public $messages = array();

	/**
	 *
	 * @param array $args
	 */
	public function __construct( $args = array() ) {

		$defaults = array( 'url' => '', 'plugin' => '', 'nonce' => '', 'title' => '' );
		$args = wp_parse_args( $args, $defaults );

		$this->plugin = $args['plugin'];

		$this->plugin_active = is_plugin_active( $this->plugin );
		$this->plugin_network_active = is_plugin_active_for_network( $this->plugin );

		parent::__construct( $args );
	}

	/**
	 * @access public
	 */
	public function after() {
	}

	public function header() {
	}

	public function footer() {
	}

	public function feedback( $string ) {
		if ( isset( $this->upgrader->strings[$string] ) ) {
			$string = $this->upgrader->strings[$string];
		}

		if ( strpos( $string, '%' ) !== FALSE ) {
			$args = func_get_args();
			$args = array_splice( $args, 1 );
			if ( $args ) {
				$args = array_map( 'strip_tags', $args );
				$args = array_map( 'esc_html', $args );
				$string = vsprintf( $string, $args );
			}
		}
		if ( empty( $string ) ) {
			return;
		}

		$this->messages[] = $string;
	}
}
>>>>>>> 676c6ed3ea2781a8ef08b445789c78df38727548
