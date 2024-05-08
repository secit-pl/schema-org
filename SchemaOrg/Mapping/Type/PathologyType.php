<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A specific branch of medical science that is concerned with the study of the cause, origin and nature of a disease state, including its consequences as a result of manifestation of the disease. In clinical care, the term is used to designate a branch of medicine using laboratory tests to diagnose and determine the prognostic significance of illness.
 * 
 * @method PathologyType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PathologyType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PathologyType setDescription(Property\DescriptionProperty $description)
 * @method PathologyType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PathologyType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PathologyType setImage(Property\ImageProperty $image)
 * @method PathologyType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PathologyType setName(Property\NameProperty $name)
 * @method PathologyType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PathologyType setSameAs(Property\SameAsProperty $sameAs)
 * @method PathologyType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PathologyType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method PathologyType setUrl(Property\UrlProperty $url)
 */
class PathologyType extends MedicalSpecialtyType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Pathology';
	}
}