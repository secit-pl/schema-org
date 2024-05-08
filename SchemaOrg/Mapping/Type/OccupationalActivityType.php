<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Any physical activity engaged in for job-related purposes. Examples may include waiting tables, maid service, carrying a mailbag, picking fruits or vegetables, construction work, etc.
 * 
 * @method OccupationalActivityType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method OccupationalActivityType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method OccupationalActivityType setDescription(Property\DescriptionProperty $description)
 * @method OccupationalActivityType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method OccupationalActivityType setIdentifier(Property\IdentifierProperty $identifier)
 * @method OccupationalActivityType setImage(Property\ImageProperty $image)
 * @method OccupationalActivityType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method OccupationalActivityType setName(Property\NameProperty $name)
 * @method OccupationalActivityType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method OccupationalActivityType setSameAs(Property\SameAsProperty $sameAs)
 * @method OccupationalActivityType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method OccupationalActivityType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method OccupationalActivityType setUrl(Property\UrlProperty $url)
 */
class OccupationalActivityType extends PhysicalActivityCategoryType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/OccupationalActivity';
	}
}