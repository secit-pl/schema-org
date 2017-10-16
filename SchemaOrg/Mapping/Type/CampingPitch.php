<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CampingPitch.
 * 
 * @method CampingPitch setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method CampingPitch setAdditionalType(Property\AdditionalType $additionalType)
 * @method CampingPitch setAddress(Property\Address $address)
 * @method CampingPitch setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method CampingPitch setAlternateName(Property\AlternateName $alternateName)
 * @method CampingPitch setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method CampingPitch setBranchCode(Property\BranchCode $branchCode)
 * @method CampingPitch setContainedInPlace(Property\ContainedInPlace $containedInPlace)
 * @method CampingPitch setContainsPlace(Property\ContainsPlace $containsPlace)
 * @method CampingPitch setDescription(Property\Description $description)
 * @method CampingPitch setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method CampingPitch setEvent(Property\Event $event)
 * @method CampingPitch setFaxNumber(Property\FaxNumber $faxNumber)
 * @method CampingPitch setFloorSize(Property\FloorSize $floorSize)
 * @method CampingPitch setGeo(Property\Geo $geo)
 * @method CampingPitch setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method CampingPitch setHasMap(Property\HasMap $hasMap)
 * @method CampingPitch setIdentifier(Property\Identifier $identifier)
 * @method CampingPitch setImage(Property\Image $image)
 * @method CampingPitch setIsAccessibleForFree(Property\IsAccessibleForFree $isAccessibleForFree)
 * @method CampingPitch setIsicV4(Property\IsicV4 $isicV4)
 * @method CampingPitch setLogo(Property\Logo $logo)
 * @method CampingPitch setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method CampingPitch setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacity $maximumAttendeeCapacity)
 * @method CampingPitch setName(Property\Name $name)
 * @method CampingPitch setNumberOfRooms(Property\NumberOfRooms $numberOfRooms)
 * @method CampingPitch setOpeningHoursSpecification(Property\OpeningHoursSpecification $openingHoursSpecification)
 * @method CampingPitch setPermittedUsage(Property\PermittedUsage $permittedUsage)
 * @method CampingPitch setPetsAllowed(Property\PetsAllowed $petsAllowed)
 * @method CampingPitch setPhoto(Property\Photo $photo)
 * @method CampingPitch setPotentialAction(Property\PotentialAction $potentialAction)
 * @method CampingPitch setPublicAccess(Property\PublicAccess $publicAccess)
 * @method CampingPitch setReview(Property\Review $review)
 * @method CampingPitch setSameAs(Property\SameAs $sameAs)
 * @method CampingPitch setSmokingAllowed(Property\SmokingAllowed $smokingAllowed)
 * @method CampingPitch setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecification $specialOpeningHoursSpecification)
 * @method CampingPitch setTelephone(Property\Telephone $telephone)
 * @method CampingPitch setUrl(Property\Url $url)
 */
class CampingPitch extends Accommodation {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/CampingPitch';
	}
}