<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A specific branch of medical science that pertains to diagnosis and treatment of disorders of heart and vasculature.
 * 
 * @method CardiovascularType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method CardiovascularType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method CardiovascularType setDescription(Property\DescriptionProperty $description)
 * @method CardiovascularType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method CardiovascularType setIdentifier(Property\IdentifierProperty $identifier)
 * @method CardiovascularType setImage(Property\ImageProperty $image)
 * @method CardiovascularType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method CardiovascularType setName(Property\NameProperty $name)
 * @method CardiovascularType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method CardiovascularType setSameAs(Property\SameAsProperty $sameAs)
 * @method CardiovascularType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method CardiovascularType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method CardiovascularType setUrl(Property\UrlProperty $url)
 */
class CardiovascularType extends MedicalSpecialtyType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Cardiovascular';
	}
}