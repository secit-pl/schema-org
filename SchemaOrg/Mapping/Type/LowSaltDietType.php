<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A diet focused on reduced sodium intake.
 * 
 * @method LowSaltDietType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method LowSaltDietType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method LowSaltDietType setDescription(Property\DescriptionProperty $description)
 * @method LowSaltDietType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method LowSaltDietType setIdentifier(Property\IdentifierProperty $identifier)
 * @method LowSaltDietType setImage(Property\ImageProperty $image)
 * @method LowSaltDietType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method LowSaltDietType setName(Property\NameProperty $name)
 * @method LowSaltDietType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method LowSaltDietType setSameAs(Property\SameAsProperty $sameAs)
 * @method LowSaltDietType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method LowSaltDietType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method LowSaltDietType setUrl(Property\UrlProperty $url)
 */
class LowSaltDietType extends RestrictedDietType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LowSaltDiet';
	}
}