<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class InStoreOnlyType.
 * 
 * @method InStoreOnlyType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method InStoreOnlyType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method InStoreOnlyType setDescription(Property\DescriptionProperty $description)
 * @method InStoreOnlyType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method InStoreOnlyType setIdentifier(Property\IdentifierProperty $identifier)
 * @method InStoreOnlyType setImage(Property\ImageProperty $image)
 * @method InStoreOnlyType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method InStoreOnlyType setName(Property\NameProperty $name)
 * @method InStoreOnlyType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method InStoreOnlyType setSameAs(Property\SameAsProperty $sameAs)
 * @method InStoreOnlyType setUrl(Property\UrlProperty $url)
 */
class InStoreOnlyType extends ItemAvailabilityType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/InStoreOnly';
	}
}