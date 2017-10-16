<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class HowToTip.
 * 
 * @method HowToTip setAdditionalType(Property\AdditionalType $additionalType)
 * @method HowToTip setAlternateName(Property\AlternateName $alternateName)
 * @method HowToTip setDescription(Property\Description $description)
 * @method HowToTip setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method HowToTip setIdentifier(Property\Identifier $identifier)
 * @method HowToTip setImage(Property\Image $image)
 * @method HowToTip setItem(Property\Item $item)
 * @method HowToTip setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method HowToTip setName(Property\Name $name)
 * @method HowToTip setNextItem(Property\NextItem $nextItem)
 * @method HowToTip setPosition(Property\Position $position)
 * @method HowToTip setPotentialAction(Property\PotentialAction $potentialAction)
 * @method HowToTip setPreviousItem(Property\PreviousItem $previousItem)
 * @method HowToTip setSameAs(Property\SameAs $sameAs)
 * @method HowToTip setUrl(Property\Url $url)
 */
class HowToTip extends ListItem {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/HowToTip';
	}
}