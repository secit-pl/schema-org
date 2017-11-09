<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class CarType.
 * 
 * @method CarType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method CarType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method CarType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method CarType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method CarType setAudience(Property\AudienceProperty $audience)
 * @method CarType setAward(Property\AwardProperty $award)
 * @method CarType setBrand(Property\BrandProperty $brand)
 * @method CarType setCargoVolume(Property\CargoVolumeProperty $cargoVolume)
 * @method CarType setCategory(Property\CategoryProperty $category)
 * @method CarType setColor(Property\ColorProperty $color)
 * @method CarType setDateVehicleFirstRegistered(Property\DateVehicleFirstRegisteredProperty $dateVehicleFirstRegistered)
 * @method CarType setDepth(Property\DepthProperty $depth)
 * @method CarType setDescription(Property\DescriptionProperty $description)
 * @method CarType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method CarType setDriveWheelConfiguration(Property\DriveWheelConfigurationProperty $driveWheelConfiguration)
 * @method CarType setFuelConsumption(Property\FuelConsumptionProperty $fuelConsumption)
 * @method CarType setFuelEfficiency(Property\FuelEfficiencyProperty $fuelEfficiency)
 * @method CarType setFuelType(Property\FuelTypeProperty $fuelType)
 * @method CarType setGtin12(Property\Gtin12Property $gtin12)
 * @method CarType setGtin13(Property\Gtin13Property $gtin13)
 * @method CarType setGtin14(Property\Gtin14Property $gtin14)
 * @method CarType setGtin8(Property\Gtin8Property $gtin8)
 * @method CarType setHeight(Property\HeightProperty $height)
 * @method CarType setIdentifier(Property\IdentifierProperty $identifier)
 * @method CarType setImage(Property\ImageProperty $image)
 * @method CarType setIsAccessoryOrSparePartFor(Property\IsAccessoryOrSparePartForProperty $isAccessoryOrSparePartFor)
 * @method CarType setIsConsumableFor(Property\IsConsumableForProperty $isConsumableFor)
 * @method CarType setIsRelatedTo(Property\IsRelatedToProperty $isRelatedTo)
 * @method CarType setIsSimilarTo(Property\IsSimilarToProperty $isSimilarTo)
 * @method CarType setItemCondition(Property\ItemConditionProperty $itemCondition)
 * @method CarType setKnownVehicleDamages(Property\KnownVehicleDamagesProperty $knownVehicleDamages)
 * @method CarType setLogo(Property\LogoProperty $logo)
 * @method CarType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method CarType setManufacturer(Property\ManufacturerProperty $manufacturer)
 * @method CarType setMaterial(Property\MaterialProperty $material)
 * @method CarType setMileageFromOdometer(Property\MileageFromOdometerProperty $mileageFromOdometer)
 * @method CarType setModel(Property\ModelProperty $model)
 * @method CarType setMpn(Property\MpnProperty $mpn)
 * @method CarType setName(Property\NameProperty $name)
 * @method CarType setNumberOfAirbags(Property\NumberOfAirbagsProperty $numberOfAirbags)
 * @method CarType setNumberOfAxles(Property\NumberOfAxlesProperty $numberOfAxles)
 * @method CarType setNumberOfDoors(Property\NumberOfDoorsProperty $numberOfDoors)
 * @method CarType setNumberOfForwardGears(Property\NumberOfForwardGearsProperty $numberOfForwardGears)
 * @method CarType setNumberOfPreviousOwners(Property\NumberOfPreviousOwnersProperty $numberOfPreviousOwners)
 * @method CarType setOffers(Property\OffersProperty $offers)
 * @method CarType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method CarType setProductID(Property\ProductIDProperty $productID)
 * @method CarType setProductionDate(Property\ProductionDateProperty $productionDate)
 * @method CarType setPurchaseDate(Property\PurchaseDateProperty $purchaseDate)
 * @method CarType setReleaseDate(Property\ReleaseDateProperty $releaseDate)
 * @method CarType setReview(Property\ReviewProperty $review)
 * @method CarType setSameAs(Property\SameAsProperty $sameAs)
 * @method CarType setSku(Property\SkuProperty $sku)
 * @method CarType setSteeringPosition(Property\SteeringPositionProperty $steeringPosition)
 * @method CarType setUrl(Property\UrlProperty $url)
 * @method CarType setVehicleConfiguration(Property\VehicleConfigurationProperty $vehicleConfiguration)
 * @method CarType setVehicleEngine(Property\VehicleEngineProperty $vehicleEngine)
 * @method CarType setVehicleIdentificationNumber(Property\VehicleIdentificationNumberProperty $vehicleIdentificationNumber)
 * @method CarType setVehicleInteriorColor(Property\VehicleInteriorColorProperty $vehicleInteriorColor)
 * @method CarType setVehicleInteriorType(Property\VehicleInteriorTypeProperty $vehicleInteriorType)
 * @method CarType setVehicleModelDate(Property\VehicleModelDateProperty $vehicleModelDate)
 * @method CarType setVehicleSeatingCapacity(Property\VehicleSeatingCapacityProperty $vehicleSeatingCapacity)
 * @method CarType setVehicleTransmission(Property\VehicleTransmissionProperty $vehicleTransmission)
 * @method CarType setWeight(Property\WeightProperty $weight)
 * @method CarType setWidth(Property\WidthProperty $width)
 */
class CarType extends VehicleType {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Car';
	}
}