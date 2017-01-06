<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class MusicVenue.
 * 
 * @method MusicVenue setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method MusicVenue setAdditionalType(Property\AdditionalType $additionalType)
 * @method MusicVenue setAddress(Property\Address $address)
 * @method MusicVenue setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method MusicVenue setAlternateName(Property\AlternateName $alternateName)
 * @method MusicVenue setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method MusicVenue setBranchCode(Property\BranchCode $branchCode)
 * @method MusicVenue setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method MusicVenue setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method MusicVenue setDescription(Property\Description $description)
 * @method MusicVenue setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method MusicVenue setEvent(Property\Event $event)
 * @method MusicVenue setFaxNumber(Property\FaxNumber $faxNumber)
 * @method MusicVenue setGeo(Property\Geo $geo)
 * @method MusicVenue setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method MusicVenue setHasMap(Property\HasMap $hasMap)
 * @method MusicVenue setImage(Property\Image $image)
 * @method MusicVenue setIsicV4(Property\IsicV4 $isicV4)
 * @method MusicVenue setLogo(Property\Logo $logo)
 * @method MusicVenue setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method MusicVenue setName(Property\Name $name)
 * @method MusicVenue setOpeningHours(Property\OpeningHours $openingHours)
 * @method MusicVenue setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method MusicVenue setPhoto(Property\Photo $photo)
 * @method MusicVenue setPotentialAction(Property\PotentialAction $potentialAction)
 * @method MusicVenue setReview(Property\Review $review)
 * @method MusicVenue setSameAs(Property\SameAs $sameAs)
 * @method MusicVenue setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method MusicVenue setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method MusicVenue setTelephone(Property\Telephone $telephone)
 * @method MusicVenue setUrl(Property\Url $url)
 */
class MusicVenue extends CivicStructure {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MusicVenue';
	}
}