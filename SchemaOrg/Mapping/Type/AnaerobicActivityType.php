<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Physical activity that is of high-intensity which utilizes the anaerobic metabolism of the body.
 * 
 * @method AnaerobicActivityType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AnaerobicActivityType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AnaerobicActivityType setDescription(Property\DescriptionProperty $description)
 * @method AnaerobicActivityType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AnaerobicActivityType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AnaerobicActivityType setImage(Property\ImageProperty $image)
 * @method AnaerobicActivityType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AnaerobicActivityType setName(Property\NameProperty $name)
 * @method AnaerobicActivityType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AnaerobicActivityType setSameAs(Property\SameAsProperty $sameAs)
 * @method AnaerobicActivityType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method AnaerobicActivityType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method AnaerobicActivityType setUrl(Property\UrlProperty $url)
 */
class AnaerobicActivityType extends PhysicalActivityCategoryType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AnaerobicActivity';
	}
}