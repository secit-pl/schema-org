<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Physical activity that is engaged to help maintain posture and balance.
 * 
 * @method BalanceType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method BalanceType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method BalanceType setDescription(Property\DescriptionProperty $description)
 * @method BalanceType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method BalanceType setIdentifier(Property\IdentifierProperty $identifier)
 * @method BalanceType setImage(Property\ImageProperty $image)
 * @method BalanceType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method BalanceType setName(Property\NameProperty $name)
 * @method BalanceType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method BalanceType setSameAs(Property\SameAsProperty $sameAs)
 * @method BalanceType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method BalanceType setSupersededBy(Property\SupersededByProperty $supersededBy)
 * @method BalanceType setUrl(Property\UrlProperty $url)
 */
class BalanceType extends PhysicalActivityCategoryType {

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Balance';
	}
}