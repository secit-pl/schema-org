<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ShareAction.
 * 
 * @method ShareAction setAbout(Property\About $about)
 * @method ShareAction setInLanguage(Property\InLanguage $inLanguage)
 * @method ShareAction setRecipient(Property\Recipient $recipient)
 */
class ShareAction extends CommunicateAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ShareAction';
	}
}