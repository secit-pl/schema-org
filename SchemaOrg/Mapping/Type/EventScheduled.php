<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class EventScheduled.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\EventScheduledType instead.
 * 
 * @method EventScheduled setAdditionalType(Property\AdditionalType $additionalType)
 * @method EventScheduled setAlternateName(Property\AlternateName $alternateName)
 * @method EventScheduled setDescription(Property\Description $description)
 * @method EventScheduled setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method EventScheduled setIdentifier(Property\Identifier $identifier)
 * @method EventScheduled setImage(Property\Image $image)
 * @method EventScheduled setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method EventScheduled setName(Property\Name $name)
 * @method EventScheduled setPotentialAction(Property\PotentialAction $potentialAction)
 * @method EventScheduled setSameAs(Property\SameAs $sameAs)
 * @method EventScheduled setUrl(Property\Url $url)
 */
class EventScheduled extends EventStatusType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/EventScheduled';
	}
}