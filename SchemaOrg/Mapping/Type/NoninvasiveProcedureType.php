<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A type of medical procedure that involves noninvasive techniques.
 * 
 * @method NoninvasiveProcedureType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method NoninvasiveProcedureType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method NoninvasiveProcedureType setDescription(Property\DescriptionProperty $description)
 * @method NoninvasiveProcedureType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method NoninvasiveProcedureType setIdentifier(Property\IdentifierProperty $identifier)
 * @method NoninvasiveProcedureType setImage(Property\ImageProperty $image)
 * @method NoninvasiveProcedureType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method NoninvasiveProcedureType setName(Property\NameProperty $name)
 * @method NoninvasiveProcedureType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method NoninvasiveProcedureType setSameAs(Property\SameAsProperty $sameAs)
 * @method NoninvasiveProcedureType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method NoninvasiveProcedureType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method NoninvasiveProcedureType setUrl(Property\UrlProperty $url)
 */
class NoninvasiveProcedureType extends MedicalProcedureType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/NoninvasiveProcedure';
	}
}