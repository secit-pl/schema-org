<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A diet focused on reduced fat and cholesterol intake.
 * 
 * @method LowFatDietType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method LowFatDietType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method LowFatDietType setDescription(Property\DescriptionProperty $description)
 * @method LowFatDietType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method LowFatDietType setIdentifier(Property\IdentifierProperty $identifier)
 * @method LowFatDietType setImage(Property\ImageProperty $image)
 * @method LowFatDietType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method LowFatDietType setName(Property\NameProperty $name)
 * @method LowFatDietType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method LowFatDietType setSameAs(Property\SameAsProperty $sameAs)
 * @method LowFatDietType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method LowFatDietType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method LowFatDietType setUrl(Property\UrlProperty $url)
 */
class LowFatDietType extends RestrictedDietType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LowFatDiet';
	}
}