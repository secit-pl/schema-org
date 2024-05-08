<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Something relating to or practicing dermatology.
 * 
 * @method DermatologicType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DermatologicType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DermatologicType setDescription(Property\DescriptionProperty $description)
 * @method DermatologicType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DermatologicType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DermatologicType setImage(Property\ImageProperty $image)
 * @method DermatologicType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DermatologicType setName(Property\NameProperty $name)
 * @method DermatologicType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DermatologicType setSameAs(Property\SameAsProperty $sameAs)
 * @method DermatologicType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method DermatologicType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method DermatologicType setUrl(Property\UrlProperty $url)
 */
class DermatologicType extends MedicalSpecialtyType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Dermatologic';
	}
}