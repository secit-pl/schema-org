<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A diet conforming to Hindu dietary practices, in particular, beef-free.
 * 
 * @method HinduDietType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method HinduDietType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method HinduDietType setDescription(Property\DescriptionProperty $description)
 * @method HinduDietType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method HinduDietType setIdentifier(Property\IdentifierProperty $identifier)
 * @method HinduDietType setImage(Property\ImageProperty $image)
 * @method HinduDietType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method HinduDietType setName(Property\NameProperty $name)
 * @method HinduDietType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method HinduDietType setSameAs(Property\SameAsProperty $sameAs)
 * @method HinduDietType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method HinduDietType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method HinduDietType setUrl(Property\UrlProperty $url)
 */
class HinduDietType extends RestrictedDietType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/HinduDiet';
	}
}