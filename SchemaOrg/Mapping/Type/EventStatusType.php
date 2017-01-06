<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class EventStatusType.
 * 
 * @method EventStatusType setAdditionalType(Property\AdditionalType $additionalType)
 * @method EventStatusType setAlternateName(Property\AlternateName $alternateName)
 * @method EventStatusType setDescription(Property\Description $description)
 * @method EventStatusType setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method EventStatusType setImage(Property\Image $image)
 * @method EventStatusType setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method EventStatusType setName(Property\Name $name)
 * @method EventStatusType setPotentialAction(Property\PotentialAction $potentialAction)
 * @method EventStatusType setSameAs(Property\SameAs $sameAs)
 * @method EventStatusType setUrl(Property\Url $url)
 */
class EventStatusType extends Enumeration {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/EventStatusType';
	}
}