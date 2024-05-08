<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Positron emission tomography imaging.
 * 
 * @method PETType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PETType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PETType setDescription(Property\DescriptionProperty $description)
 * @method PETType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PETType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PETType setImage(Property\ImageProperty $image)
 * @method PETType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PETType setName(Property\NameProperty $name)
 * @method PETType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PETType setSameAs(Property\SameAsProperty $sameAs)
 * @method PETType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PETType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method PETType setUrl(Property\UrlProperty $url)
 */
class PETType extends MedicalImagingTechniqueType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PET';
	}
}