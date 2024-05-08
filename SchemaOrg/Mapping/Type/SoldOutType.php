<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Indicates that the item has sold out.
 * 
 * @method SoldOutType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method SoldOutType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method SoldOutType setDescription(Property\DescriptionProperty $description)
 * @method SoldOutType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method SoldOutType setIdentifier(Property\IdentifierProperty $identifier)
 * @method SoldOutType setImage(Property\ImageProperty $image)
 * @method SoldOutType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method SoldOutType setName(Property\NameProperty $name)
 * @method SoldOutType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method SoldOutType setSameAs(Property\SameAsProperty $sameAs)
 * @method SoldOutType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method SoldOutType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method SoldOutType setUrl(Property\UrlProperty $url)
 */
class SoldOutType extends ItemAvailabilityType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/SoldOut';
	}
}