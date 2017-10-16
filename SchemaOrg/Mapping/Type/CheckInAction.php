<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CheckInAction.
 * 
 * @method CheckInAction setInLanguage(Property\InLanguage $inLanguage)
 * @method CheckInAction setRecipient(Property\Recipient $recipient)
 */
class CheckInAction extends CommunicateAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CheckInAction';
	}
}