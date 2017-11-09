<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class WarrantyScopeType.
 * 
 * @method WarrantyScopeType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method WarrantyScopeType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method WarrantyScopeType setDescription(Property\DescriptionProperty $description)
 * @method WarrantyScopeType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method WarrantyScopeType setIdentifier(Property\IdentifierProperty $identifier)
 * @method WarrantyScopeType setImage(Property\ImageProperty $image)
 * @method WarrantyScopeType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method WarrantyScopeType setName(Property\NameProperty $name)
 * @method WarrantyScopeType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method WarrantyScopeType setSameAs(Property\SameAsProperty $sameAs)
 * @method WarrantyScopeType setUrl(Property\UrlProperty $url)
 */
class WarrantyScopeType extends EnumerationType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/WarrantyScope';
	}
}