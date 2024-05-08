<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A specific branch of medical science that pertains to therapeutic or cosmetic repair or re-formation of missing, injured or malformed tissues or body parts by manual and instrumental means.
 * 
 * @method PlasticSurgeryType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method PlasticSurgeryType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method PlasticSurgeryType setDescription(Property\DescriptionProperty $description)
 * @method PlasticSurgeryType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method PlasticSurgeryType setIdentifier(Property\IdentifierProperty $identifier)
 * @method PlasticSurgeryType setImage(Property\ImageProperty $image)
 * @method PlasticSurgeryType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method PlasticSurgeryType setName(Property\NameProperty $name)
 * @method PlasticSurgeryType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method PlasticSurgeryType setSameAs(Property\SameAsProperty $sameAs)
 * @method PlasticSurgeryType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method PlasticSurgeryType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method PlasticSurgeryType setUrl(Property\UrlProperty $url)
 */
class PlasticSurgeryType extends MedicalSpecialtyType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PlasticSurgery';
	}
}