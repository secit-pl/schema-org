<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A type of medical procedure that involves percutaneous techniques, where access to organs or tissue is achieved via needle-puncture of the skin. For example, catheter-based procedures like stent delivery.
 * 
 * @method PercutaneousProcedureType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PercutaneousProcedureType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PercutaneousProcedureType setDescription(Property\DescriptionProperty $description)
 * @method PercutaneousProcedureType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PercutaneousProcedureType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PercutaneousProcedureType setImage(Property\ImageProperty $image)
 * @method PercutaneousProcedureType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PercutaneousProcedureType setName(Property\NameProperty $name)
 * @method PercutaneousProcedureType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PercutaneousProcedureType setSameAs(Property\SameAsProperty $sameAs)
 * @method PercutaneousProcedureType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PercutaneousProcedureType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method PercutaneousProcedureType setUrl(Property\UrlProperty $url)
 */
class PercutaneousProcedureType extends MedicalProcedureType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PercutaneousProcedure';
	}
}