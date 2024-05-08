<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Enumerated for values for itemListOrder for indicating how an ordered ItemList is organized.
 * 
 * @method ItemListOrderType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ItemListOrderType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ItemListOrderType setDescription(Property\DescriptionProperty $description)
 * @method ItemListOrderType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ItemListOrderType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ItemListOrderType setImage(Property\ImageProperty $image)
 * @method ItemListOrderType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ItemListOrderType setName(Property\NameProperty $name)
 * @method ItemListOrderType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ItemListOrderType setSameAs(Property\SameAsProperty $sameAs)
 * @method ItemListOrderType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ItemListOrderType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method ItemListOrderType setUrl(Property\UrlProperty $url)
 */
class ItemListOrderType extends EnumerationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ItemListOrderType';
	}
}