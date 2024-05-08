<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * The drug's cost represents the retail cost of the drug.
 * 
 * @method RetailType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method RetailType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method RetailType setDescription(Property\DescriptionProperty $description)
 * @method RetailType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method RetailType setIdentifier(Property\IdentifierProperty $identifier)
 * @method RetailType setImage(Property\ImageProperty $image)
 * @method RetailType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method RetailType setName(Property\NameProperty $name)
 * @method RetailType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method RetailType setSameAs(Property\SameAsProperty $sameAs)
 * @method RetailType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method RetailType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method RetailType setUrl(Property\UrlProperty $url)
 */
class RetailType extends DrugCostCategoryType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Retail';
	}
}