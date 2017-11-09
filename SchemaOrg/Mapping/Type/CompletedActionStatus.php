<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CompletedActionStatus.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\CompletedActionStatusType instead.
 * 
 * @method CompletedActionStatus setAdditionalType(Property\AdditionalType $additionalType)
 * @method CompletedActionStatus setAlternateName(Property\AlternateName $alternateName)
 * @method CompletedActionStatus setDescription(Property\Description $description)
 * @method CompletedActionStatus setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method CompletedActionStatus setIdentifier(Property\Identifier $identifier)
 * @method CompletedActionStatus setImage(Property\Image $image)
 * @method CompletedActionStatus setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method CompletedActionStatus setName(Property\Name $name)
 * @method CompletedActionStatus setPotentialAction(Property\PotentialAction $potentialAction)
 * @method CompletedActionStatus setSameAs(Property\SameAs $sameAs)
 * @method CompletedActionStatus setUrl(Property\Url $url)
 */
class CompletedActionStatus extends ActionStatusType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CompletedActionStatus';
	}
}