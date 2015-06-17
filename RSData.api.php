<?php
/**
 * <doc>
 */

class RSDataApi extends ApiBase {
	/**
	 * <doc>
	 */
	public function execute() {
		// only allow looking up runescape.com URLs
		// use a whitelist of URLs manageable via a mediawiki message? see i18n

		// should it throw an error if it encounters anything that isn't JSON or CSV?
		// should it require edit tokens to prevent it beng used by 3rd parties?
	}

	/**
	 * <doc>
	 */
	public function getDescription() {}

	/**
	 * <doc>
	 */
	public function getAllowedParams() {
		return array_merge(
			parent::getAllowedParams(),
			array(
				'rsurl'	=> array(
					ApiBase::PARAM_TYPE	=> 'string',
					ApiBase::PARAM_REQUIRED	=> true
				)
			)
		);
	}

	/**
	 * <doc>
	 */
	public function getParamDescription() {
		return array_merge(
			parent::getParamDescription(),
			array(
				'rsurl'	=> 'rsurl description',
			)
		);
	}

	/**
	 * <doc>
	 */
	public function getExamples() {}
}
