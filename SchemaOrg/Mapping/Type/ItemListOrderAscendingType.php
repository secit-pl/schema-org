<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * An ItemList ordered with lower values listed first.
 * 
 * @method ItemListOrderAscendingType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ItemListOrderAscendingType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ItemListOrderAscendingType setDescription(Property\DescriptionProperty $description)
 * @method ItemListOrderAscendingType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ItemListOrderAscendingType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ItemListOrderAscendingType setImage(Property\ImageProperty $image)
 * @method ItemListOrderAscendingType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ItemListOrderAscendingType setName(Property\NameProperty $name)
 * @method ItemListOrderAscendingType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ItemListOrderAscendingType setSameAs(Property\SameAsProperty $sameAs)
 * @method ItemListOrderAscendingType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ItemListOrderAscendingType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method ItemListOrderAscendingType setUrl(Property\UrlProperty $url)
 */
class ItemListOrderAscendingType extends ItemListOrderType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ItemListOrderAscending';
	}
}