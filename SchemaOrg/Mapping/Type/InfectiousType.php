<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Something in medical science that pertains to infectious diseases, i.e. caused by bacterial, viral, fungal or parasitic infections.
 * 
 * @method InfectiousType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method InfectiousType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method InfectiousType setDescription(Property\DescriptionProperty $description)
 * @method InfectiousType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method InfectiousType setIdentifier(Property\IdentifierProperty $identifier)
 * @method InfectiousType setImage(Property\ImageProperty $image)
 * @method InfectiousType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method InfectiousType setName(Property\NameProperty $name)
 * @method InfectiousType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method InfectiousType setSameAs(Property\SameAsProperty $sameAs)
 * @method InfectiousType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method InfectiousType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method InfectiousType setUrl(Property\UrlProperty $url)
 */
class InfectiousType extends MedicalSpecialtyType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Infectious';
	}
}