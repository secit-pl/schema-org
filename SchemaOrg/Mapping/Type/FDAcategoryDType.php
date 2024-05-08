<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A designation by the US FDA signifying that there is positive evidence of human fetal risk based on adverse reaction data from investigational or marketing experience or studies in humans, but potential benefits may warrant use of the drug in pregnant women despite potential risks.
 * 
 * @method FDAcategoryDType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method FDAcategoryDType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method FDAcategoryDType setDescription(Property\DescriptionProperty $description)
 * @method FDAcategoryDType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method FDAcategoryDType setIdentifier(Property\IdentifierProperty $identifier)
 * @method FDAcategoryDType setImage(Property\ImageProperty $image)
 * @method FDAcategoryDType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method FDAcategoryDType setName(Property\NameProperty $name)
 * @method FDAcategoryDType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method FDAcategoryDType setSameAs(Property\SameAsProperty $sameAs)
 * @method FDAcategoryDType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method FDAcategoryDType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method FDAcategoryDType setUrl(Property\UrlProperty $url)
 */
class FDAcategoryDType extends DrugPregnancyCategoryType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/FDAcategoryD';
	}
}