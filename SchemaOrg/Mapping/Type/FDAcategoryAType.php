<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A designation by the US FDA signifying that adequate and well-controlled studies have failed to demonstrate a risk to the fetus in the first trimester of pregnancy (and there is no evidence of risk in later trimesters).
 * 
 * @method FDAcategoryAType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method FDAcategoryAType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method FDAcategoryAType setDescription(Property\DescriptionProperty $description)
 * @method FDAcategoryAType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method FDAcategoryAType setIdentifier(Property\IdentifierProperty $identifier)
 * @method FDAcategoryAType setImage(Property\ImageProperty $image)
 * @method FDAcategoryAType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method FDAcategoryAType setName(Property\NameProperty $name)
 * @method FDAcategoryAType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method FDAcategoryAType setSameAs(Property\SameAsProperty $sameAs)
 * @method FDAcategoryAType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method FDAcategoryAType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method FDAcategoryAType setUrl(Property\UrlProperty $url)
 */
class FDAcategoryAType extends DrugPregnancyCategoryType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/FDAcategoryA';
	}
}