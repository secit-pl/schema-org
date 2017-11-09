<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class FailedActionStatus.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\FailedActionStatusType instead.
 * 
 * @method FailedActionStatus setAdditionalType(Property\AdditionalType $additionalType)
 * @method FailedActionStatus setAlternateName(Property\AlternateName $alternateName)
 * @method FailedActionStatus setDescription(Property\Description $description)
 * @method FailedActionStatus setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method FailedActionStatus setIdentifier(Property\Identifier $identifier)
 * @method FailedActionStatus setImage(Property\Image $image)
 * @method FailedActionStatus setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method FailedActionStatus setName(Property\Name $name)
 * @method FailedActionStatus setPotentialAction(Property\PotentialAction $potentialAction)
 * @method FailedActionStatus setSameAs(Property\SameAs $sameAs)
 * @method FailedActionStatus setUrl(Property\Url $url)
 */
class FailedActionStatus extends ActionStatusType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/FailedActionStatus';
	}
}