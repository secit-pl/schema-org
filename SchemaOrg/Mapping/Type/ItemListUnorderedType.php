<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * An ItemList ordered with no explicit order.
 * 
 * @method ItemListUnorderedType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method ItemListUnorderedType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method ItemListUnorderedType setDescription(Property\DescriptionProperty $description)
 * @method ItemListUnorderedType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method ItemListUnorderedType setIdentifier(Property\IdentifierProperty $identifier)
 * @method ItemListUnorderedType setImage(Property\ImageProperty $image)
 * @method ItemListUnorderedType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method ItemListUnorderedType setName(Property\NameProperty $name)
 * @method ItemListUnorderedType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method ItemListUnorderedType setSameAs(Property\SameAsProperty $sameAs)
 * @method ItemListUnorderedType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method ItemListUnorderedType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method ItemListUnorderedType setUrl(Property\UrlProperty $url)
 */
class ItemListUnorderedType extends ItemListOrderType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ItemListUnordered';
	}
}