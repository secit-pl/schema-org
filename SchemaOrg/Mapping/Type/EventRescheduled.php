<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class EventRescheduled.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\EventRescheduledType instead.
 * 
 * @method EventRescheduled setAdditionalType(Property\AdditionalType $additionalType)
 * @method EventRescheduled setAlternateName(Property\AlternateName $alternateName)
 * @method EventRescheduled setDescription(Property\Description $description)
 * @method EventRescheduled setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method EventRescheduled setIdentifier(Property\Identifier $identifier)
 * @method EventRescheduled setImage(Property\Image $image)
 * @method EventRescheduled setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method EventRescheduled setName(Property\Name $name)
 * @method EventRescheduled setPotentialAction(Property\PotentialAction $potentialAction)
 * @method EventRescheduled setSameAs(Property\SameAs $sameAs)
 * @method EventRescheduled setUrl(Property\Url $url)
 */
class EventRescheduled extends EventStatusType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/EventRescheduled';
	}
}