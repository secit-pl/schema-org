<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ActiveActionStatus.
 * 
 * @method ActiveActionStatus setAdditionalType(Property\AdditionalType $additionalType)
 * @method ActiveActionStatus setAlternateName(Property\AlternateName $alternateName)
 * @method ActiveActionStatus setDescription(Property\Description $description)
 * @method ActiveActionStatus setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ActiveActionStatus setImage(Property\Image $image)
 * @method ActiveActionStatus setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ActiveActionStatus setName(Property\Name $name)
 * @method ActiveActionStatus setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ActiveActionStatus setSameAs(Property\SameAs $sameAs)
 * @method ActiveActionStatus setUrl(Property\Url $url)
 */
class ActiveActionStatus extends ActionStatusType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ActiveActionStatus';
	}
}