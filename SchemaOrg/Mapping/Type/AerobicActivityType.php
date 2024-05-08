<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Physical activity of relatively low intensity that depends primarily on the aerobic energy-generating process; during activity, the aerobic metabolism uses oxygen to adequately meet energy demands during exercise.
 * 
 * @method AerobicActivityType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AerobicActivityType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AerobicActivityType setDescription(Property\DescriptionProperty $description)
 * @method AerobicActivityType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AerobicActivityType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AerobicActivityType setImage(Property\ImageProperty $image)
 * @method AerobicActivityType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AerobicActivityType setName(Property\NameProperty $name)
 * @method AerobicActivityType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AerobicActivityType setSameAs(Property\SameAsProperty $sameAs)
 * @method AerobicActivityType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method AerobicActivityType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method AerobicActivityType setUrl(Property\UrlProperty $url)
 */
class AerobicActivityType extends PhysicalActivityCategoryType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AerobicActivity';
	}
}