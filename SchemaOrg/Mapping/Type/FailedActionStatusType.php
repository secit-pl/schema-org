<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class FailedActionStatusType.
 * 
 * @method FailedActionStatusType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method FailedActionStatusType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method FailedActionStatusType setDescription(Property\DescriptionProperty $description)
 * @method FailedActionStatusType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method FailedActionStatusType setIdentifier(Property\IdentifierProperty $identifier)
 * @method FailedActionStatusType setImage(Property\ImageProperty $image)
 * @method FailedActionStatusType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method FailedActionStatusType setName(Property\NameProperty $name)
 * @method FailedActionStatusType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method FailedActionStatusType setSameAs(Property\SameAsProperty $sameAs)
 * @method FailedActionStatusType setUrl(Property\UrlProperty $url)
 */
class FailedActionStatusType extends ActionStatusType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/FailedActionStatus';
	}
}