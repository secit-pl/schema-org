<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A diet restricted to certain foods or preparations for cultural, religious, health or lifestyle reasons.
 * 
 * @method RestrictedDietType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method RestrictedDietType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method RestrictedDietType setDescription(Property\DescriptionProperty $description)
 * @method RestrictedDietType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method RestrictedDietType setIdentifier(Property\IdentifierProperty $identifier)
 * @method RestrictedDietType setImage(Property\ImageProperty $image)
 * @method RestrictedDietType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method RestrictedDietType setName(Property\NameProperty $name)
 * @method RestrictedDietType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method RestrictedDietType setSameAs(Property\SameAsProperty $sameAs)
 * @method RestrictedDietType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method RestrictedDietType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method RestrictedDietType setUrl(Property\UrlProperty $url)
 */
class RestrictedDietType extends EnumerationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/RestrictedDiet';
	}
}