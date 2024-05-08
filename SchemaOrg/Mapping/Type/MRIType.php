<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Magnetic resonance imaging.
 * 
 * @method MRIType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MRIType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MRIType setDescription(Property\DescriptionProperty $description)
 * @method MRIType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MRIType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MRIType setImage(Property\ImageProperty $image)
 * @method MRIType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MRIType setName(Property\NameProperty $name)
 * @method MRIType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MRIType setSameAs(Property\SameAsProperty $sameAs)
 * @method MRIType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method MRIType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method MRIType setUrl(Property\UrlProperty $url)
 */
class MRIType extends MedicalImagingTechniqueType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MRI';
	}
}