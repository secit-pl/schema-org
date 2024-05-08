<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Indicates that the item is damaged.
 * 
 * @method DamagedConditionType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DamagedConditionType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DamagedConditionType setDescription(Property\DescriptionProperty $description)
 * @method DamagedConditionType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DamagedConditionType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DamagedConditionType setImage(Property\ImageProperty $image)
 * @method DamagedConditionType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DamagedConditionType setName(Property\NameProperty $name)
 * @method DamagedConditionType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DamagedConditionType setSameAs(Property\SameAsProperty $sameAs)
 * @method DamagedConditionType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method DamagedConditionType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method DamagedConditionType setUrl(Property\UrlProperty $url)
 */
class DamagedConditionType extends OfferItemConditionType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DamagedCondition';
	}
}