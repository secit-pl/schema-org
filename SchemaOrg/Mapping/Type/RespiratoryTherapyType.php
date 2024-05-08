<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The therapy that is concerned with the maintenance or improvement of respiratory function (as in patients with pulmonary disease).
 * 
 * @method RespiratoryTherapyType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method RespiratoryTherapyType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method RespiratoryTherapyType setDescription(Property\DescriptionProperty $description)
 * @method RespiratoryTherapyType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method RespiratoryTherapyType setIdentifier(Property\IdentifierProperty $identifier)
 * @method RespiratoryTherapyType setImage(Property\ImageProperty $image)
 * @method RespiratoryTherapyType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method RespiratoryTherapyType setName(Property\NameProperty $name)
 * @method RespiratoryTherapyType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method RespiratoryTherapyType setSameAs(Property\SameAsProperty $sameAs)
 * @method RespiratoryTherapyType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method RespiratoryTherapyType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method RespiratoryTherapyType setUrl(Property\UrlProperty $url)
 */
class RespiratoryTherapyType extends MedicalSpecialtyType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/RespiratoryTherapy';
	}
}