<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A system of medicine that originated in India over thousands of years and that focuses on integrating and balancing the body, mind, and spirit.
 * 
 * @method AyurvedicType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method AyurvedicType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method AyurvedicType setDescription(Property\DescriptionProperty $description)
 * @method AyurvedicType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method AyurvedicType setIdentifier(Property\IdentifierProperty $identifier)
 * @method AyurvedicType setImage(Property\ImageProperty $image)
 * @method AyurvedicType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method AyurvedicType setName(Property\NameProperty $name)
 * @method AyurvedicType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method AyurvedicType setSameAs(Property\SameAsProperty $sameAs)
 * @method AyurvedicType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method AyurvedicType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method AyurvedicType setUrl(Property\UrlProperty $url)
 */
class AyurvedicType extends MedicineSystemType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Ayurvedic';
	}
}