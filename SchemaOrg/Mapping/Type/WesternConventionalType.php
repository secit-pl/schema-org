<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The conventional Western system of medicine, that aims to apply the best available evidence gained from the scientific method to clinical decision making. Also known as conventional or Western medicine.
 * 
 * @method WesternConventionalType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method WesternConventionalType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method WesternConventionalType setDescription(Property\DescriptionProperty $description)
 * @method WesternConventionalType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method WesternConventionalType setIdentifier(Property\IdentifierProperty $identifier)
 * @method WesternConventionalType setImage(Property\ImageProperty $image)
 * @method WesternConventionalType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method WesternConventionalType setName(Property\NameProperty $name)
 * @method WesternConventionalType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method WesternConventionalType setSameAs(Property\SameAsProperty $sameAs)
 * @method WesternConventionalType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method WesternConventionalType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method WesternConventionalType setUrl(Property\UrlProperty $url)
 */
class WesternConventionalType extends MedicineSystemType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/WesternConventional';
	}
}