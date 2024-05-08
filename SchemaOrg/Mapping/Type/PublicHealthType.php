<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Branch of medicine that pertains to the health services to improve and protect community health, especially epidemiology, sanitation, immunization, and preventive medicine.
 * 
 * @method PublicHealthType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PublicHealthType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PublicHealthType setDescription(Property\DescriptionProperty $description)
 * @method PublicHealthType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PublicHealthType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PublicHealthType setImage(Property\ImageProperty $image)
 * @method PublicHealthType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PublicHealthType setName(Property\NameProperty $name)
 * @method PublicHealthType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PublicHealthType setSameAs(Property\SameAsProperty $sameAs)
 * @method PublicHealthType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PublicHealthType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method PublicHealthType setUrl(Property\UrlProperty $url)
 */
class PublicHealthType extends MedicalSpecialtyType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PublicHealth';
	}
}