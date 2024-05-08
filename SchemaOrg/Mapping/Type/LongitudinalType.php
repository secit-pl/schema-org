<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Unlike cross-sectional studies, longitudinal studies track the same people, and therefore the differences observed in those people are less likely to be the result of cultural differences across generations. Longitudinal studies are also used in medicine to uncover predictors of certain diseases.
 * 
 * @method LongitudinalType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method LongitudinalType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method LongitudinalType setDescription(Property\DescriptionProperty $description)
 * @method LongitudinalType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method LongitudinalType setIdentifier(Property\IdentifierProperty $identifier)
 * @method LongitudinalType setImage(Property\ImageProperty $image)
 * @method LongitudinalType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method LongitudinalType setName(Property\NameProperty $name)
 * @method LongitudinalType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method LongitudinalType setSameAs(Property\SameAsProperty $sameAs)
 * @method LongitudinalType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method LongitudinalType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method LongitudinalType setUrl(Property\UrlProperty $url)
 */
class LongitudinalType extends MedicalObservationalStudyDesignType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Longitudinal';
	}
}