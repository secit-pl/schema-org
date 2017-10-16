<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CheckOutAction.
 * 
 * @method CheckOutAction setInLanguage(Property\InLanguage $inLanguage)
 * @method CheckOutAction setRecipient(Property\Recipient $recipient)
 */
class CheckOutAction extends CommunicateAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CheckOutAction';
	}
}