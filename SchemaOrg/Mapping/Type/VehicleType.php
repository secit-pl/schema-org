<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * A vehicle is a device that is designed or used to transport people or cargo over land, water, air, or through space.
 * 
 * @method VehicleType setAdditionalProperty(Property\AdditionalProperty $additionalProperty)
 * @method VehicleType setAdditionalType(Property\AdditionalTypeProperty $additionalType)
 * @method VehicleType setAggregateRating(Property\AggregateRatingProperty $aggregateRating)
 * @method VehicleType setAlternateName(Property\AlternateNameProperty $alternateName)
 * @method VehicleType setAudience(Property\AudienceProperty $audience)
 * @method VehicleType setAward(Property\AwardProperty $award)
 * @method VehicleType setBrand(Property\BrandProperty $brand)
 * @method VehicleType setCategory(Property\CategoryProperty $category)
 * @method VehicleType setColor(Property\ColorProperty $color)
 * @method VehicleType setCountryOfOrigin(Property\CountryOfOriginProperty $countryOfOrigin)
 * @method VehicleType setDepth(Property\DepthProperty $depth)
 * @method VehicleType setDescription(Property\DescriptionProperty $description)
 * @method VehicleType setDisambiguatingDescription(Property\DisambiguatingDescriptionProperty $disambiguatingDescription)
 * @method VehicleType setGtin12(Property\Gtin12Property $gtin12)
 * @method VehicleType setGtin13(Property\Gtin13Property $gtin13)
 * @method VehicleType setGtin14(Property\Gtin14Property $gtin14)
 * @method VehicleType setGtin8(Property\Gtin8Property $gtin8)
 * @method VehicleType setHasCertification(Property\HasCertificationProperty $hasCertification)
 * @method VehicleType setHeight(Property\HeightProperty $height)
 * @method VehicleType setIdentifier(Property\IdentifierProperty $identifier)
 * @method VehicleType setImage(Property\ImageProperty $image)
 * @method VehicleType setIsAccessoryOrSparePartFor(Property\IsAccessoryOrSparePartForProperty $isAccessoryOrSparePartFor)
 * @method VehicleType setIsConsumableFor(Property\IsConsumableForProperty $isConsumableFor)
 * @method VehicleType setIsFamilyFriendly(Property\IsFamilyFriendlyProperty $isFamilyFriendly)
 * @method VehicleType setIsRelatedTo(Property\IsRelatedToProperty $isRelatedTo)
 * @method VehicleType setIsSimilarTo(Property\IsSimilarToProperty $isSimilarTo)
 * @method VehicleType setIsVariantOf(Property\IsVariantOfProperty $isVariantOf)
 * @method VehicleType setItemCondition(Property\ItemConditionProperty $itemCondition)
 * @method VehicleType setKeywords(Property\KeywordsProperty $keywords)
 * @method VehicleType setLogo(Property\LogoProperty $logo)
 * @method VehicleType setMainEntityOfPage(Property\MainEntityOfPageProperty $mainEntityOfPage)
 * @method VehicleType setManufacturer(Property\ManufacturerProperty $manufacturer)
 * @method VehicleType setMaterial(Property\MaterialProperty $material)
 * @method VehicleType setModel(Property\ModelProperty $model)
 * @method VehicleType setMpn(Property\MpnProperty $mpn)
 * @method VehicleType setName(Property\NameProperty $name)
 * @method VehicleType setOffers(Property\OffersProperty $offers)
 * @method VehicleType setPotentialAction(Property\PotentialActionProperty $potentialAction)
 * @method VehicleType setProductID(Property\ProductIDProperty $productID)
 * @method VehicleType setProductionDate(Property\ProductionDateProperty $productionDate)
 * @method VehicleType setPurchaseDate(Property\PurchaseDateProperty $purchaseDate)
 * @method VehicleType setReleaseDate(Property\ReleaseDateProperty $releaseDate)
 * @method VehicleType setReview(Property\ReviewProperty $review)
 * @method VehicleType setSameAs(Property\SameAsProperty $sameAs)
 * @method VehicleType setSku(Property\SkuProperty $sku)
 * @method VehicleType setSlogan(Property\SloganProperty $slogan)
 * @method VehicleType setSubjectOf(Property\SubjectOfProperty $subjectOf)
 * @method VehicleType setUrl(Property\UrlProperty $url)
 * @method VehicleType setWeight(Property\WeightProperty $weight)
 * @method VehicleType setWidth(Property\WidthProperty $width)
 */
class VehicleType extends ProductType {

	/**
	 * @var Property\AccelerationTimeProperty
	 */
	private $accelerationTime;

	/**
	 * @var Property\BodyTypeProperty
	 */
	private $bodyType;

	/**
	 * @var Property\CargoVolumeProperty
	 */
	private $cargoVolume;

	/**
	 * @var Property\DateVehicleFirstRegisteredProperty
	 */
	private $dateVehicleFirstRegistered;

	/**
	 * @var Property\DriveWheelConfigurationProperty
	 */
	private $driveWheelConfiguration;

	/**
	 * @var Property\EmissionsCO2Property
	 */
	private $emissionsCO2;

	/**
	 * @var Property\FuelCapacityProperty
	 */
	private $fuelCapacity;

	/**
	 * @var Property\FuelConsumptionProperty
	 */
	private $fuelConsumption;

	/**
	 * @var Property\FuelEfficiencyProperty
	 */
	private $fuelEfficiency;

	/**
	 * @var Property\FuelTypeProperty
	 */
	private $fuelType;

	/**
	 * @var Property\KnownVehicleDamagesProperty
	 */
	private $knownVehicleDamages;

	/**
	 * @var Property\MeetsEmissionStandardProperty
	 */
	private $meetsEmissionStandard;

	/**
	 * @var Property\MileageFromOdometerProperty
	 */
	private $mileageFromOdometer;

	/**
	 * @var Property\ModelDateProperty
	 */
	private $modelDate;

	/**
	 * @var Property\NumberOfAirbagsProperty
	 */
	private $numberOfAirbags;

	/**
	 * @var Property\NumberOfAxlesProperty
	 */
	private $numberOfAxles;

	/**
	 * @var Property\NumberOfDoorsProperty
	 */
	private $numberOfDoors;

	/**
	 * @var Property\NumberOfForwardGearsProperty
	 */
	private $numberOfForwardGears;

	/**
	 * @var Property\NumberOfPreviousOwnersProperty
	 */
	private $numberOfPreviousOwners;

	/**
	 * @var Property\PayloadProperty
	 */
	private $payload;

	/**
	 * @var Property\ProductionDateProperty
	 */
	private $productionDate;

	/**
	 * @var Property\PurchaseDateProperty
	 */
	private $purchaseDate;

	/**
	 * @var Property\SeatingCapacityProperty
	 */
	private $seatingCapacity;

	/**
	 * @var Property\SpeedProperty
	 */
	private $speed;

	/**
	 * @var Property\SteeringPositionProperty
	 */
	private $steeringPosition;

	/**
	 * @var Property\TongueWeightProperty
	 */
	private $tongueWeight;

	/**
	 * @var Property\TrailerWeightProperty
	 */
	private $trailerWeight;

	/**
	 * @var Property\VehicleConfigurationProperty
	 */
	private $vehicleConfiguration;

	/**
	 * @var Property\VehicleEngineProperty
	 */
	private $vehicleEngine;

	/**
	 * @var Property\VehicleIdentificationNumberProperty
	 */
	private $vehicleIdentificationNumber;

	/**
	 * @var Property\VehicleInteriorColorProperty
	 */
	private $vehicleInteriorColor;

	/**
	 * @var Property\VehicleInteriorTypeProperty
	 */
	private $vehicleInteriorType;

	/**
	 * @var Property\VehicleModelDateProperty
	 */
	private $vehicleModelDate;

	/**
	 * @var Property\VehicleSeatingCapacityProperty
	 */
	private $vehicleSeatingCapacity;

	/**
	 * @var Property\VehicleSpecialUsageProperty
	 */
	private $vehicleSpecialUsage;

	/**
	 * @var Property\VehicleTransmissionProperty
	 */
	private $vehicleTransmission;

	/**
	 * @var Property\WeightTotalProperty
	 */
	private $weightTotal;

	/**
	 * @var Property\WheelbaseProperty
	 */
	private $wheelbase;

	/**
	 * Get acceleration time.
	 *
	 * @return Property\AccelerationTimeProperty
	 */
	public function getAccelerationTime() {
		return $this->accelerationTime;
	}

	/**
	 * Get body type.
	 *
	 * @return Property\BodyTypeProperty
	 */
	public function getBodyType() {
		return $this->bodyType;
	}

	/**
	 * Get cargo volume.
	 *
	 * @return Property\CargoVolumeProperty
	 */
	public function getCargoVolume() {
		return $this->cargoVolume;
	}

	/**
	 * Get date vehicle first registered.
	 *
	 * @return Property\DateVehicleFirstRegisteredProperty
	 */
	public function getDateVehicleFirstRegistered() {
		return $this->dateVehicleFirstRegistered;
	}

	/**
	 * Get drive wheel configuration.
	 *
	 * @return Property\DriveWheelConfigurationProperty
	 */
	public function getDriveWheelConfiguration() {
		return $this->driveWheelConfiguration;
	}

	/**
	 * Get emissionsco2.
	 *
	 * @return Property\EmissionsCO2Property
	 */
	public function getEmissionsCO2() {
		return $this->emissionsCO2;
	}

	/**
	 * Get fuel capacity.
	 *
	 * @return Property\FuelCapacityProperty
	 */
	public function getFuelCapacity() {
		return $this->fuelCapacity;
	}

	/**
	 * Get fuel consumption.
	 *
	 * @return Property\FuelConsumptionProperty
	 */
	public function getFuelConsumption() {
		return $this->fuelConsumption;
	}

	/**
	 * Get fuel efficiency.
	 *
	 * @return Property\FuelEfficiencyProperty
	 */
	public function getFuelEfficiency() {
		return $this->fuelEfficiency;
	}

	/**
	 * Get fuel type.
	 *
	 * @return Property\FuelTypeProperty
	 */
	public function getFuelType() {
		return $this->fuelType;
	}

	/**
	 * Get known vehicle damages.
	 *
	 * @return Property\KnownVehicleDamagesProperty
	 */
	public function getKnownVehicleDamages() {
		return $this->knownVehicleDamages;
	}

	/**
	 * Get meets emission standard.
	 *
	 * @return Property\MeetsEmissionStandardProperty
	 */
	public function getMeetsEmissionStandard() {
		return $this->meetsEmissionStandard;
	}

	/**
	 * Get mileage from odometer.
	 *
	 * @return Property\MileageFromOdometerProperty
	 */
	public function getMileageFromOdometer() {
		return $this->mileageFromOdometer;
	}

	/**
	 * Get model date.
	 *
	 * @return Property\ModelDateProperty
	 */
	public function getModelDate() {
		return $this->modelDate;
	}

	/**
	 * Get number of airbags.
	 *
	 * @return Property\NumberOfAirbagsProperty
	 */
	public function getNumberOfAirbags() {
		return $this->numberOfAirbags;
	}

	/**
	 * Get number of axles.
	 *
	 * @return Property\NumberOfAxlesProperty
	 */
	public function getNumberOfAxles() {
		return $this->numberOfAxles;
	}

	/**
	 * Get number of doors.
	 *
	 * @return Property\NumberOfDoorsProperty
	 */
	public function getNumberOfDoors() {
		return $this->numberOfDoors;
	}

	/**
	 * Get number of forward gears.
	 *
	 * @return Property\NumberOfForwardGearsProperty
	 */
	public function getNumberOfForwardGears() {
		return $this->numberOfForwardGears;
	}

	/**
	 * Get number of previous owners.
	 *
	 * @return Property\NumberOfPreviousOwnersProperty
	 */
	public function getNumberOfPreviousOwners() {
		return $this->numberOfPreviousOwners;
	}

	/**
	 * Get payload.
	 *
	 * @return Property\PayloadProperty
	 */
	public function getPayload() {
		return $this->payload;
	}

	/**
	 * Get production date.
	 *
	 * @return Property\ProductionDateProperty
	 */
	public function getProductionDate() {
		return $this->productionDate;
	}

	/**
	 * Get purchase date.
	 *
	 * @return Property\PurchaseDateProperty
	 */
	public function getPurchaseDate() {
		return $this->purchaseDate;
	}

	/**
	 * Get schema URL.
	 *
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Vehicle';
	}

	/**
	 * Get seating capacity.
	 *
	 * @return Property\SeatingCapacityProperty
	 */
	public function getSeatingCapacity() {
		return $this->seatingCapacity;
	}

	/**
	 * Get speed.
	 *
	 * @return Property\SpeedProperty
	 */
	public function getSpeed() {
		return $this->speed;
	}

	/**
	 * Get steering position.
	 *
	 * @return Property\SteeringPositionProperty
	 */
	public function getSteeringPosition() {
		return $this->steeringPosition;
	}

	/**
	 * Get tongue weight.
	 *
	 * @return Property\TongueWeightProperty
	 */
	public function getTongueWeight() {
		return $this->tongueWeight;
	}

	/**
	 * Get trailer weight.
	 *
	 * @return Property\TrailerWeightProperty
	 */
	public function getTrailerWeight() {
		return $this->trailerWeight;
	}

	/**
	 * Get vehicle configuration.
	 *
	 * @return Property\VehicleConfigurationProperty
	 */
	public function getVehicleConfiguration() {
		return $this->vehicleConfiguration;
	}

	/**
	 * Get vehicle engine.
	 *
	 * @return Property\VehicleEngineProperty
	 */
	public function getVehicleEngine() {
		return $this->vehicleEngine;
	}

	/**
	 * Get vehicle identification number.
	 *
	 * @return Property\VehicleIdentificationNumberProperty
	 */
	public function getVehicleIdentificationNumber() {
		return $this->vehicleIdentificationNumber;
	}

	/**
	 * Get vehicle interior color.
	 *
	 * @return Property\VehicleInteriorColorProperty
	 */
	public function getVehicleInteriorColor() {
		return $this->vehicleInteriorColor;
	}

	/**
	 * Get vehicle interior type.
	 *
	 * @return Property\VehicleInteriorTypeProperty
	 */
	public function getVehicleInteriorType() {
		return $this->vehicleInteriorType;
	}

	/**
	 * Get vehicle model date.
	 *
	 * @return Property\VehicleModelDateProperty
	 */
	public function getVehicleModelDate() {
		return $this->vehicleModelDate;
	}

	/**
	 * Get vehicle seating capacity.
	 *
	 * @return Property\VehicleSeatingCapacityProperty
	 */
	public function getVehicleSeatingCapacity() {
		return $this->vehicleSeatingCapacity;
	}

	/**
	 * Get vehicle special usage.
	 *
	 * @return Property\VehicleSpecialUsageProperty
	 */
	public function getVehicleSpecialUsage() {
		return $this->vehicleSpecialUsage;
	}

	/**
	 * Get vehicle transmission.
	 *
	 * @return Property\VehicleTransmissionProperty
	 */
	public function getVehicleTransmission() {
		return $this->vehicleTransmission;
	}

	/**
	 * Get weight total.
	 *
	 * @return Property\WeightTotalProperty
	 */
	public function getWeightTotal() {
		return $this->weightTotal;
	}

	/**
	 * Get wheelbase.
	 *
	 * @return Property\WheelbaseProperty
	 */
	public function getWheelbase() {
		return $this->wheelbase;
	}

	/**
	 * Set acceleration time.
	 *
	 * @param Property\AccelerationTimeProperty $accelerationTime
	 * @return VehicleType
	 */
	public function setAccelerationTime(Property\AccelerationTimeProperty $accelerationTime) {
		$this->accelerationTime = $accelerationTime;

		return $this;
	}

	/**
	 * Set body type.
	 *
	 * @param Property\BodyTypeProperty $bodyType
	 * @return VehicleType
	 */
	public function setBodyType(Property\BodyTypeProperty $bodyType) {
		$this->bodyType = $bodyType;

		return $this;
	}

	/**
	 * Set cargo volume.
	 *
	 * @param Property\CargoVolumeProperty $cargoVolume
	 * @return VehicleType
	 */
	public function setCargoVolume(Property\CargoVolumeProperty $cargoVolume) {
		$this->cargoVolume = $cargoVolume;

		return $this;
	}

	/**
	 * Set date vehicle first registered.
	 *
	 * @param Property\DateVehicleFirstRegisteredProperty $dateVehicleFirstRegistered
	 * @return VehicleType
	 */
	public function setDateVehicleFirstRegistered(Property\DateVehicleFirstRegisteredProperty $dateVehicleFirstRegistered) {
		$this->dateVehicleFirstRegistered = $dateVehicleFirstRegistered;

		return $this;
	}

	/**
	 * Set drive wheel configuration.
	 *
	 * @param Property\DriveWheelConfigurationProperty $driveWheelConfiguration
	 * @return VehicleType
	 */
	public function setDriveWheelConfiguration(Property\DriveWheelConfigurationProperty $driveWheelConfiguration) {
		$this->driveWheelConfiguration = $driveWheelConfiguration;

		return $this;
	}

	/**
	 * Set emissionsco2.
	 *
	 * @param Property\EmissionsCO2Property $emissionsCO2
	 * @return VehicleType
	 */
	public function setEmissionsCO2(Property\EmissionsCO2Property $emissionsCO2) {
		$this->emissionsCO2 = $emissionsCO2;

		return $this;
	}

	/**
	 * Set fuel capacity.
	 *
	 * @param Property\FuelCapacityProperty $fuelCapacity
	 * @return VehicleType
	 */
	public function setFuelCapacity(Property\FuelCapacityProperty $fuelCapacity) {
		$this->fuelCapacity = $fuelCapacity;

		return $this;
	}

	/**
	 * Set fuel consumption.
	 *
	 * @param Property\FuelConsumptionProperty $fuelConsumption
	 * @return VehicleType
	 */
	public function setFuelConsumption(Property\FuelConsumptionProperty $fuelConsumption) {
		$this->fuelConsumption = $fuelConsumption;

		return $this;
	}

	/**
	 * Set fuel efficiency.
	 *
	 * @param Property\FuelEfficiencyProperty $fuelEfficiency
	 * @return VehicleType
	 */
	public function setFuelEfficiency(Property\FuelEfficiencyProperty $fuelEfficiency) {
		$this->fuelEfficiency = $fuelEfficiency;

		return $this;
	}

	/**
	 * Set fuel type.
	 *
	 * @param Property\FuelTypeProperty $fuelType
	 * @return VehicleType
	 */
	public function setFuelType(Property\FuelTypeProperty $fuelType) {
		$this->fuelType = $fuelType;

		return $this;
	}

	/**
	 * Set known vehicle damages.
	 *
	 * @param Property\KnownVehicleDamagesProperty $knownVehicleDamages
	 * @return VehicleType
	 */
	public function setKnownVehicleDamages(Property\KnownVehicleDamagesProperty $knownVehicleDamages) {
		$this->knownVehicleDamages = $knownVehicleDamages;

		return $this;
	}

	/**
	 * Set meets emission standard.
	 *
	 * @param Property\MeetsEmissionStandardProperty $meetsEmissionStandard
	 * @return VehicleType
	 */
	public function setMeetsEmissionStandard(Property\MeetsEmissionStandardProperty $meetsEmissionStandard) {
		$this->meetsEmissionStandard = $meetsEmissionStandard;

		return $this;
	}

	/**
	 * Set mileage from odometer.
	 *
	 * @param Property\MileageFromOdometerProperty $mileageFromOdometer
	 * @return VehicleType
	 */
	public function setMileageFromOdometer(Property\MileageFromOdometerProperty $mileageFromOdometer) {
		$this->mileageFromOdometer = $mileageFromOdometer;

		return $this;
	}

	/**
	 * Set model date.
	 *
	 * @param Property\ModelDateProperty $modelDate
	 * @return VehicleType
	 */
	public function setModelDate(Property\ModelDateProperty $modelDate) {
		$this->modelDate = $modelDate;

		return $this;
	}

	/**
	 * Set number of airbags.
	 *
	 * @param Property\NumberOfAirbagsProperty $numberOfAirbags
	 * @return VehicleType
	 */
	public function setNumberOfAirbags(Property\NumberOfAirbagsProperty $numberOfAirbags) {
		$this->numberOfAirbags = $numberOfAirbags;

		return $this;
	}

	/**
	 * Set number of axles.
	 *
	 * @param Property\NumberOfAxlesProperty $numberOfAxles
	 * @return VehicleType
	 */
	public function setNumberOfAxles(Property\NumberOfAxlesProperty $numberOfAxles) {
		$this->numberOfAxles = $numberOfAxles;

		return $this;
	}

	/**
	 * Set number of doors.
	 *
	 * @param Property\NumberOfDoorsProperty $numberOfDoors
	 * @return VehicleType
	 */
	public function setNumberOfDoors(Property\NumberOfDoorsProperty $numberOfDoors) {
		$this->numberOfDoors = $numberOfDoors;

		return $this;
	}

	/**
	 * Set number of forward gears.
	 *
	 * @param Property\NumberOfForwardGearsProperty $numberOfForwardGears
	 * @return VehicleType
	 */
	public function setNumberOfForwardGears(Property\NumberOfForwardGearsProperty $numberOfForwardGears) {
		$this->numberOfForwardGears = $numberOfForwardGears;

		return $this;
	}

	/**
	 * Set number of previous owners.
	 *
	 * @param Property\NumberOfPreviousOwnersProperty $numberOfPreviousOwners
	 * @return VehicleType
	 */
	public function setNumberOfPreviousOwners(Property\NumberOfPreviousOwnersProperty $numberOfPreviousOwners) {
		$this->numberOfPreviousOwners = $numberOfPreviousOwners;

		return $this;
	}

	/**
	 * Set payload.
	 *
	 * @param Property\PayloadProperty $payload
	 * @return VehicleType
	 */
	public function setPayload(Property\PayloadProperty $payload) {
		$this->payload = $payload;

		return $this;
	}

	/**
	 * Set production date.
	 *
	 * @param Property\ProductionDateProperty $productionDate
	 * @return VehicleType
	 */
	public function setProductionDate(Property\ProductionDateProperty $productionDate) {
		$this->productionDate = $productionDate;

		return $this;
	}

	/**
	 * Set purchase date.
	 *
	 * @param Property\PurchaseDateProperty $purchaseDate
	 * @return VehicleType
	 */
	public function setPurchaseDate(Property\PurchaseDateProperty $purchaseDate) {
		$this->purchaseDate = $purchaseDate;

		return $this;
	}

	/**
	 * Set seating capacity.
	 *
	 * @param Property\SeatingCapacityProperty $seatingCapacity
	 * @return VehicleType
	 */
	public function setSeatingCapacity(Property\SeatingCapacityProperty $seatingCapacity) {
		$this->seatingCapacity = $seatingCapacity;

		return $this;
	}

	/**
	 * Set speed.
	 *
	 * @param Property\SpeedProperty $speed
	 * @return VehicleType
	 */
	public function setSpeed(Property\SpeedProperty $speed) {
		$this->speed = $speed;

		return $this;
	}

	/**
	 * Set steering position.
	 *
	 * @param Property\SteeringPositionProperty $steeringPosition
	 * @return VehicleType
	 */
	public function setSteeringPosition(Property\SteeringPositionProperty $steeringPosition) {
		$this->steeringPosition = $steeringPosition;

		return $this;
	}

	/**
	 * Set tongue weight.
	 *
	 * @param Property\TongueWeightProperty $tongueWeight
	 * @return VehicleType
	 */
	public function setTongueWeight(Property\TongueWeightProperty $tongueWeight) {
		$this->tongueWeight = $tongueWeight;

		return $this;
	}

	/**
	 * Set trailer weight.
	 *
	 * @param Property\TrailerWeightProperty $trailerWeight
	 * @return VehicleType
	 */
	public function setTrailerWeight(Property\TrailerWeightProperty $trailerWeight) {
		$this->trailerWeight = $trailerWeight;

		return $this;
	}

	/**
	 * Set vehicle configuration.
	 *
	 * @param Property\VehicleConfigurationProperty $vehicleConfiguration
	 * @return VehicleType
	 */
	public function setVehicleConfiguration(Property\VehicleConfigurationProperty $vehicleConfiguration) {
		$this->vehicleConfiguration = $vehicleConfiguration;

		return $this;
	}

	/**
	 * Set vehicle engine.
	 *
	 * @param Property\VehicleEngineProperty $vehicleEngine
	 * @return VehicleType
	 */
	public function setVehicleEngine(Property\VehicleEngineProperty $vehicleEngine) {
		$this->vehicleEngine = $vehicleEngine;

		return $this;
	}

	/**
	 * Set vehicle identification number.
	 *
	 * @param Property\VehicleIdentificationNumberProperty $vehicleIdentificationNumber
	 * @return VehicleType
	 */
	public function setVehicleIdentificationNumber(Property\VehicleIdentificationNumberProperty $vehicleIdentificationNumber) {
		$this->vehicleIdentificationNumber = $vehicleIdentificationNumber;

		return $this;
	}

	/**
	 * Set vehicle interior color.
	 *
	 * @param Property\VehicleInteriorColorProperty $vehicleInteriorColor
	 * @return VehicleType
	 */
	public function setVehicleInteriorColor(Property\VehicleInteriorColorProperty $vehicleInteriorColor) {
		$this->vehicleInteriorColor = $vehicleInteriorColor;

		return $this;
	}

	/**
	 * Set vehicle interior type.
	 *
	 * @param Property\VehicleInteriorTypeProperty $vehicleInteriorType
	 * @return VehicleType
	 */
	public function setVehicleInteriorType(Property\VehicleInteriorTypeProperty $vehicleInteriorType) {
		$this->vehicleInteriorType = $vehicleInteriorType;

		return $this;
	}

	/**
	 * Set vehicle model date.
	 *
	 * @param Property\VehicleModelDateProperty $vehicleModelDate
	 * @return VehicleType
	 */
	public function setVehicleModelDate(Property\VehicleModelDateProperty $vehicleModelDate) {
		$this->vehicleModelDate = $vehicleModelDate;

		return $this;
	}

	/**
	 * Set vehicle seating capacity.
	 *
	 * @param Property\VehicleSeatingCapacityProperty $vehicleSeatingCapacity
	 * @return VehicleType
	 */
	public function setVehicleSeatingCapacity(Property\VehicleSeatingCapacityProperty $vehicleSeatingCapacity) {
		$this->vehicleSeatingCapacity = $vehicleSeatingCapacity;

		return $this;
	}

	/**
	 * Set vehicle special usage.
	 *
	 * @param Property\VehicleSpecialUsageProperty $vehicleSpecialUsage
	 * @return VehicleType
	 */
	public function setVehicleSpecialUsage(Property\VehicleSpecialUsageProperty $vehicleSpecialUsage) {
		$this->vehicleSpecialUsage = $vehicleSpecialUsage;

		return $this;
	}

	/**
	 * Set vehicle transmission.
	 *
	 * @param Property\VehicleTransmissionProperty $vehicleTransmission
	 * @return VehicleType
	 */
	public function setVehicleTransmission(Property\VehicleTransmissionProperty $vehicleTransmission) {
		$this->vehicleTransmission = $vehicleTransmission;

		return $this;
	}

	/**
	 * Set weight total.
	 *
	 * @param Property\WeightTotalProperty $weightTotal
	 * @return VehicleType
	 */
	public function setWeightTotal(Property\WeightTotalProperty $weightTotal) {
		$this->weightTotal = $weightTotal;

		return $this;
	}

	/**
	 * Set wheelbase.
	 *
	 * @param Property\WheelbaseProperty $wheelbase
	 * @return VehicleType
	 */
	public function setWheelbase(Property\WheelbaseProperty $wheelbase) {
		$this->wheelbase = $wheelbase;

		return $this;
	}
}