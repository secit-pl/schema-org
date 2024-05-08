<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A specific branch of medical science that specializes in the care of infants, children and adolescents.
 * 
 * @method PediatricType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PediatricType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PediatricType setDescription(Property\DescriptionProperty $description)
 * @method PediatricType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PediatricType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PediatricType setImage(Property\ImageProperty $image)
 * @method PediatricType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PediatricType setName(Property\NameProperty $name)
 * @method PediatricType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PediatricType setSameAs(Property\SameAsProperty $sameAs)
 * @method PediatricType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PediatricType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method PediatricType setUrl(Property\UrlProperty $url)
 */
class PediatricType extends MedicalSpecialtyType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Pediatric';
	}
}