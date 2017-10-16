<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ConfirmAction.
 * 
 * @method ConfirmAction setEvent(Property\Event $event)
 * @method ConfirmAction setInLanguage(Property\InLanguage $inLanguage)
 * @method ConfirmAction setRecipient(Property\Recipient $recipient)
 */
class ConfirmAction extends InformAction {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ConfirmAction';
	}
}