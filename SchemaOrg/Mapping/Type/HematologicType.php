<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A specific branch of medical science that pertains to diagnosis and treatment of disorders of blood and blood producing organs.
 * 
 * @method HematologicType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method HematologicType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method HematologicType setDescription(Property\DescriptionProperty $description)
 * @method HematologicType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method HematologicType setIdentifier(Property\IdentifierProperty $identifier)
 * @method HematologicType setImage(Property\ImageProperty $image)
 * @method HematologicType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method HematologicType setName(Property\NameProperty $name)
 * @method HematologicType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method HematologicType setSameAs(Property\SameAsProperty $sameAs)
 * @method HematologicType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method HematologicType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method HematologicType setUrl(Property\UrlProperty $url)
 */
class HematologicType extends MedicalSpecialtyType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Hematologic';
	}
}