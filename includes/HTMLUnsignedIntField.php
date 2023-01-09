<?php

/**
 * A field that must contain a number
 */
class HTMLUnsignedIntField extends HTMLIntField {
	/** @inheritDoc */
	public function validate( $value, $alldata ) {
		$p = parent::validate( $value, $alldata );

		if ( $p !== true ) {
			return $p;
		}

		if ( !preg_match( '/^([1-9][0-9]*)?$/', trim( $value ?? '' ) ) ) {
			return $this->msg( 'htmlform-unsigned-int-invalid' )->parseAsBlock();
		}

		return true;
	}
}
