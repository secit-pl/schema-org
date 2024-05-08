<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Radiography is an imaging technique that uses electromagnetic radiation other than visible light, especially X-rays, to view the internal structure of a non-uniformly composed and opaque object such as the human body.
 * 
 * @method RadiographyType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method RadiographyType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method RadiographyType setDescription(Property\DescriptionProperty $description)
 * @method RadiographyType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method RadiographyType setIdentifier(Property\IdentifierProperty $identifier)
 * @method RadiographyType setImage(Property\ImageProperty $image)
 * @method RadiographyType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method RadiographyType setName(Property\NameProperty $name)
 * @method RadiographyType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method RadiographyType setSameAs(Property\SameAsProperty $sameAs)
 * @method RadiographyType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method RadiographyType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method RadiographyType setUrl(Property\UrlProperty $url)
 */
class RadiographyType extends MedicalImagingTechniqueType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Radiography';
	}
}