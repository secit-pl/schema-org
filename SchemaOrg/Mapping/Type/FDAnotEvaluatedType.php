<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A designation that the drug in question has not been assigned a pregnancy category designation by the US FDA.
 * 
 * @method FDAnotEvaluatedType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method FDAnotEvaluatedType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method FDAnotEvaluatedType setDescription(Property\DescriptionProperty $description)
 * @method FDAnotEvaluatedType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method FDAnotEvaluatedType setIdentifier(Property\IdentifierProperty $identifier)
 * @method FDAnotEvaluatedType setImage(Property\ImageProperty $image)
 * @method FDAnotEvaluatedType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method FDAnotEvaluatedType setName(Property\NameProperty $name)
 * @method FDAnotEvaluatedType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method FDAnotEvaluatedType setSameAs(Property\SameAsProperty $sameAs)
 * @method FDAnotEvaluatedType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method FDAnotEvaluatedType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method FDAnotEvaluatedType setUrl(Property\UrlProperty $url)
 */
class FDAnotEvaluatedType extends DrugPregnancyCategoryType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/FDAnotEvaluated';
	}
}