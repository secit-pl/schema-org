<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A specific branch of medical science that is concerned with the ear, nose and throat and their respective disease states.
 * 
 * @method OtolaryngologicType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method OtolaryngologicType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method OtolaryngologicType setDescription(Property\DescriptionProperty $description)
 * @method OtolaryngologicType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method OtolaryngologicType setIdentifier(Property\IdentifierProperty $identifier)
 * @method OtolaryngologicType setImage(Property\ImageProperty $image)
 * @method OtolaryngologicType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method OtolaryngologicType setName(Property\NameProperty $name)
 * @method OtolaryngologicType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method OtolaryngologicType setSameAs(Property\SameAsProperty $sameAs)
 * @method OtolaryngologicType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method OtolaryngologicType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method OtolaryngologicType setUrl(Property\UrlProperty $url)
 */
class OtolaryngologicType extends MedicalSpecialtyType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Otolaryngologic';
	}
}