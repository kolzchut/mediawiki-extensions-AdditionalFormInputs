<?php

/**
 * The version of HTMLTitleTextField in MW 1.29 doesn't allow
 * an empty field. Since patching our version isn't stable,
 * I put a fixed version here. I still left the default
 * 'required' = true, to keep compatibility with the source.
 * Don't use it for MW >= 1.32.
 *
 * Implements a text input field for page titles.
 * Automatically does validation that the title is valid,
 * as well as autocompletion if using the OOUI display format.
 *
 * Optional parameters:
 * 'namespace' - Namespace the page must be in
 * 'relative' - If true and 'namespace' given, strip/add the namespace from/to the title as needed
 * 'creatable' - Whether to validate the title is creatable (not a special page)
 * 'exists' - Whether to validate that the title already exists
 *
 * @since 1.26
 */
class HTMLTitleTextFieldFixed extends HTMLTitleTextField {
	public function __construct( $params ) {
		$params += [
			'required' => true
		];
		parent::__construct( $params );
	}

	public function validate( $value, $alldata ) {
		// Default value (from getDefault()) is null, which breaks Title::newFromTextThrow() below
		if ( $value === null ) {
			$value = '';
		}

		if ( !$this->mParams[ 'required' ] && $value === '' ) {
			// If this field is not required and the value is empty, that's okay, just skip
			// HTMLTitleTextField's validation
			return HTMLTextField::validate( $value, $alldata );
		}

		return parent::validate( $value, $alldata );
	}
}

