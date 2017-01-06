<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class EventPostponed.
 * 
 * @method EventPostponed setAdditionalType(Property\AdditionalType $additionalType)
 * @method EventPostponed setAlternateName(Property\AlternateName $alternateName)
 * @method EventPostponed setDescription(Property\Description $description)
 * @method EventPostponed setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method EventPostponed setImage(Property\Image $image)
 * @method EventPostponed setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method EventPostponed setName(Property\Name $name)
 * @method EventPostponed setPotentialAction(Property\PotentialAction $potentialAction)
 * @method EventPostponed setSameAs(Property\SameAs $sameAs)
 * @method EventPostponed setUrl(Property\Url $url)
 */
class EventPostponed extends EventStatusType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/EventPostponed';
	}
}