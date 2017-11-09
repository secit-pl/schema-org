<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class EventCancelled.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\EventCancelledType instead.
 * 
 * @method EventCancelled setAdditionalType(Property\AdditionalType $additionalType)
 * @method EventCancelled setAlternateName(Property\AlternateName $alternateName)
 * @method EventCancelled setDescription(Property\Description $description)
 * @method EventCancelled setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method EventCancelled setIdentifier(Property\Identifier $identifier)
 * @method EventCancelled setImage(Property\Image $image)
 * @method EventCancelled setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method EventCancelled setName(Property\Name $name)
 * @method EventCancelled setPotentialAction(Property\PotentialAction $potentialAction)
 * @method EventCancelled setSameAs(Property\SameAs $sameAs)
 * @method EventCancelled setUrl(Property\Url $url)
 */
class EventCancelled extends EventStatusType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/EventCancelled';
	}
}