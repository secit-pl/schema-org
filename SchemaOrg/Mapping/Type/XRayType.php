<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * X-ray imaging.
 * 
 * @method XRayType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method XRayType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method XRayType setDescription(Property\DescriptionProperty $description)
 * @method XRayType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method XRayType setIdentifier(Property\IdentifierProperty $identifier)
 * @method XRayType setImage(Property\ImageProperty $image)
 * @method XRayType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method XRayType setName(Property\NameProperty $name)
 * @method XRayType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method XRayType setSameAs(Property\SameAsProperty $sameAs)
 * @method XRayType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method XRayType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method XRayType setUrl(Property\UrlProperty $url)
 */
class XRayType extends MedicalImagingTechniqueType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/XRay';
	}
}