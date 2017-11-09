<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class OnlineOnlyType.
 * 
 * @method OnlineOnlyType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method OnlineOnlyType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method OnlineOnlyType setDescription(Property\DescriptionProperty $description)
 * @method OnlineOnlyType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method OnlineOnlyType setIdentifier(Property\IdentifierProperty $identifier)
 * @method OnlineOnlyType setImage(Property\ImageProperty $image)
 * @method OnlineOnlyType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method OnlineOnlyType setName(Property\NameProperty $name)
 * @method OnlineOnlyType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method OnlineOnlyType setSameAs(Property\SameAsProperty $sameAs)
 * @method OnlineOnlyType setUrl(Property\UrlProperty $url)
 */
class OnlineOnlyType extends ItemAvailabilityType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OnlineOnly';
	}
}