<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A specific branch of medical science that pertains to diagnosis and treatment of disorders of skin.
 * 
 * @method DermatologyType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method DermatologyType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method DermatologyType setDescription(Property\DescriptionProperty $description)
 * @method DermatologyType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method DermatologyType setIdentifier(Property\IdentifierProperty $identifier)
 * @method DermatologyType setImage(Property\ImageProperty $image)
 * @method DermatologyType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method DermatologyType setName(Property\NameProperty $name)
 * @method DermatologyType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method DermatologyType setSameAs(Property\SameAsProperty $sameAs)
 * @method DermatologyType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method DermatologyType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method DermatologyType setUrl(Property\UrlProperty $url)
 */
class DermatologyType extends MedicalSpecialtyType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Dermatology';
	}
}