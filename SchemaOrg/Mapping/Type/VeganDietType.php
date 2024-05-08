<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A diet exclusive of all animal products.
 * 
 * @method VeganDietType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method VeganDietType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method VeganDietType setDescription(Property\DescriptionProperty $description)
 * @method VeganDietType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method VeganDietType setIdentifier(Property\IdentifierProperty $identifier)
 * @method VeganDietType setImage(Property\ImageProperty $image)
 * @method VeganDietType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method VeganDietType setName(Property\NameProperty $name)
 * @method VeganDietType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method VeganDietType setSameAs(Property\SameAsProperty $sameAs)
 * @method VeganDietType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method VeganDietType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method VeganDietType setUrl(Property\UrlProperty $url)
 */
class VeganDietType extends RestrictedDietType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/VeganDiet';
	}
}