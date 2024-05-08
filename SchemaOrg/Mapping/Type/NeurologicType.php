<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A specific branch of medical science that studies the nerves and nervous system and its respective disease states.
 * 
 * @method NeurologicType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method NeurologicType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method NeurologicType setDescription(Property\DescriptionProperty $description)
 * @method NeurologicType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method NeurologicType setIdentifier(Property\IdentifierProperty $identifier)
 * @method NeurologicType setImage(Property\ImageProperty $image)
 * @method NeurologicType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method NeurologicType setName(Property\NameProperty $name)
 * @method NeurologicType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method NeurologicType setSameAs(Property\SameAsProperty $sameAs)
 * @method NeurologicType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method NeurologicType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method NeurologicType setUrl(Property\UrlProperty $url)
 */
class NeurologicType extends MedicalSpecialtyType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Neurologic';
	}
}