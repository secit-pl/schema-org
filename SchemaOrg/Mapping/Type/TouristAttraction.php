<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class TouristAttraction.
 * 
 * @method TouristAttraction setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method TouristAttraction setAdditionalType(Property\AdditionalType $additionalType)
 * @method TouristAttraction setAddress(Property\Address $address)
 * @method TouristAttraction setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method TouristAttraction setAlternateName(Property\AlternateName $alternateName)
 * @method TouristAttraction setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method TouristAttraction setBranchCode(Property\BranchCode $branchCode)
 * @method TouristAttraction setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method TouristAttraction setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method TouristAttraction setDescription(Property\Description $description)
 * @method TouristAttraction setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method TouristAttraction setEvent(Property\Event $event)
 * @method TouristAttraction setFaxNumber(Property\FaxNumber $faxNumber)
 * @method TouristAttraction setGeo(Property\Geo $geo)
 * @method TouristAttraction setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method TouristAttraction setHasMap(Property\HasMap $hasMap)
 * @method TouristAttraction setImage(Property\Image $image)
 * @method TouristAttraction setIsicV4(Property\IsicV4 $isicV4)
 * @method TouristAttraction setLogo(Property\Logo $logo)
 * @method TouristAttraction setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method TouristAttraction setName(Property\Name $name)
 * @method TouristAttraction setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method TouristAttraction setPhoto(Property\Photo $photo)
 * @method TouristAttraction setPotentialAction(Property\PotentialAction $potentialAction)
 * @method TouristAttraction setReview(Property\Review $review)
 * @method TouristAttraction setSameAs(Property\SameAs $sameAs)
 * @method TouristAttraction setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method TouristAttraction setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method TouristAttraction setTelephone(Property\Telephone $telephone)
 * @method TouristAttraction setUrl(Property\Url $url)
 */
class TouristAttraction extends Place {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TouristAttraction';
	}
}