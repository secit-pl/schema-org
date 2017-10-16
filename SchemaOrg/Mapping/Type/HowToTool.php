<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class HowToTool.
 * 
 * @method HowToTool setAdditionalType(Property\AdditionalType $additionalType)
 * @method HowToTool setAlternateName(Property\AlternateName $alternateName)
 * @method HowToTool setDescription(Property\Description $description)
 * @method HowToTool setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method HowToTool setIdentifier(Property\Identifier $identifier)
 * @method HowToTool setImage(Property\Image $image)
 * @method HowToTool setItem(Property\Item $item)
 * @method HowToTool setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method HowToTool setName(Property\Name $name)
 * @method HowToTool setNextItem(Property\NextItem $nextItem)
 * @method HowToTool setPosition(Property\Position $position)
 * @method HowToTool setPotentialAction(Property\PotentialAction $potentialAction)
 * @method HowToTool setPreviousItem(Property\PreviousItem $previousItem)
 * @method HowToTool setRequiredQuantity(Property\RequiredQuantity $requiredQuantity)
 * @method HowToTool setSameAs(Property\SameAs $sameAs)
 * @method HowToTool setUrl(Property\Url $url)
 */
class HowToTool extends HowToItem {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/HowToTool';
	}
}