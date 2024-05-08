<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Any medical imaging modality typically used for diagnostic purposes. Enumerated type.
 * 
 * @method MedicalImagingTechniqueType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MedicalImagingTechniqueType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MedicalImagingTechniqueType setDescription(Property\DescriptionProperty $description)
 * @method MedicalImagingTechniqueType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MedicalImagingTechniqueType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MedicalImagingTechniqueType setImage(Property\ImageProperty $image)
 * @method MedicalImagingTechniqueType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MedicalImagingTechniqueType setName(Property\NameProperty $name)
 * @method MedicalImagingTechniqueType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MedicalImagingTechniqueType setSameAs(Property\SameAsProperty $sameAs)
 * @method MedicalImagingTechniqueType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MedicalImagingTechniqueType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method MedicalImagingTechniqueType setUrl(Property\UrlProperty $url)
 */
class MedicalImagingTechniqueType extends MedicalEnumerationType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MedicalImagingTechnique';
	}
}