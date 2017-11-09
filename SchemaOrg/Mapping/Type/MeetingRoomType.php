<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class MeetingRoomType.
 * 
 * @method MeetingRoomType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method MeetingRoomType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method MeetingRoomType setAddress(Property\AddressProperty $address)
 * @method MeetingRoomType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method MeetingRoomType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method MeetingRoomType setAmenityFeature(Property\AmenityFeatureProperty $amenityFeature)
 * @method MeetingRoomType setBranchCode(Property\BranchCodeProperty $branchCode)
 * @method MeetingRoomType setContainedInPlace(Property\ContainedInPlaceProperty $containedInPlace)
 * @method MeetingRoomType setContainsPlace(Property\ContainsPlaceProperty $containsPlace)
 * @method MeetingRoomType setDescription(Property\DescriptionProperty $description)
 * @method MeetingRoomType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method MeetingRoomType setEvent(Property\EventProperty $event)
 * @method MeetingRoomType setFaxNumber(Property\FaxNumberProperty $faxNumber)
 * @method MeetingRoomType setFloorSize(Property\FloorSizeProperty $floorSize)
 * @method MeetingRoomType setGeo(Property\GeoProperty $geo)
 * @method MeetingRoomType setGlobalLocationNumber(Property\GlobalLocationNumberProperty $globalLocationNumber)
 * @method MeetingRoomType setHasMap(Property\HasMapProperty $hasMap)
 * @method MeetingRoomType setIdentifier(Property\IdentifierProperty $identifier)
 * @method MeetingRoomType setImage(Property\ImageProperty $image)
 * @method MeetingRoomType setIsAccessibleForFree(Property\IsAccessibleForFreeProperty $isAccessibleForFree)
 * @method MeetingRoomType setIsicV4(Property\IsicV4Property $isicV4)
 * @method MeetingRoomType setLogo(Property\LogoProperty $logo)
 * @method MeetingRoomType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method MeetingRoomType setMaximumAttendeeCapacity(Property\MaximumAttendeeCapacityProperty $maximumAttendeeCapacity)
 * @method MeetingRoomType setName(Property\NameProperty $name)
 * @method MeetingRoomType setNumberOfRooms(Property\NumberOfRoomsProperty $numberOfRooms)
 * @method MeetingRoomType setOpeningHoursSpecification(Property\OpeningHoursSpecificationProperty $openingHoursSpecification)
 * @method MeetingRoomType setPermittedUsage(Property\PermittedUsageProperty $permittedUsage)
 * @method MeetingRoomType setPetsAllowed(Property\PetsAllowedProperty $petsAllowed)
 * @method MeetingRoomType setPhoto(Property\PhotoProperty $photo)
 * @method MeetingRoomType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method MeetingRoomType setPublicAccess(Property\PublicAccessProperty $publicAccess)
 * @method MeetingRoomType setReview(Property\ReviewProperty $review)
 * @method MeetingRoomType setSameAs(Property\SameAsProperty $sameAs)
 * @method MeetingRoomType setSmokingAllowed(Property\SmokingAllowedProperty $smokingAllowed)
 * @method MeetingRoomType setSpecialOpeningHoursSpecification(Property\SpecialOpeningHoursSpecificationProperty $specialOpeningHoursSpecification)
 * @method MeetingRoomType setTelephone(Property\TelephoneProperty $telephone)
 * @method MeetingRoomType setUrl(Property\UrlProperty $url)
 */
class MeetingRoomType extends RoomType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MeetingRoom';
	}
}