<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Any physical activity engaged in for recreational purposes. Examples may include ballroom dancing, roller skating, canoeing, fishing, etc.
 * 
 * @method LeisureTimeActivityType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method LeisureTimeActivityType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method LeisureTimeActivityType setDescription(Property\DescriptionProperty $description)
 * @method LeisureTimeActivityType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method LeisureTimeActivityType setIdentifier(Property\IdentifierProperty $identifier)
 * @method LeisureTimeActivityType setImage(Property\ImageProperty $image)
 * @method LeisureTimeActivityType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method LeisureTimeActivityType setName(Property\NameProperty $name)
 * @method LeisureTimeActivityType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method LeisureTimeActivityType setSameAs(Property\SameAsProperty $sameAs)
 * @method LeisureTimeActivityType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method LeisureTimeActivityType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method LeisureTimeActivityType setUrl(Property\UrlProperty $url)
 */
class LeisureTimeActivityType extends PhysicalActivityCategoryType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LeisureTimeActivity';
	}
}