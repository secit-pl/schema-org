<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A diet appropriate for people with lactose intolerance.
 * 
 * @method LowLactoseDietType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method LowLactoseDietType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method LowLactoseDietType setDescription(Property\DescriptionProperty $description)
 * @method LowLactoseDietType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method LowLactoseDietType setIdentifier(Property\IdentifierProperty $identifier)
 * @method LowLactoseDietType setImage(Property\ImageProperty $image)
 * @method LowLactoseDietType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method LowLactoseDietType setName(Property\NameProperty $name)
 * @method LowLactoseDietType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method LowLactoseDietType setSameAs(Property\SameAsProperty $sameAs)
 * @method LowLactoseDietType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method LowLactoseDietType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method LowLactoseDietType setUrl(Property\UrlProperty $url)
 */
class LowLactoseDietType extends RestrictedDietType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/LowLactoseDiet';
	}
}