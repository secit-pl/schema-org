<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BedAndBreakfast.
 * 
 * @method BedAndBreakfast setAddress(Property\Address $address)
 * @method BedAndBreakfast setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method BedAndBreakfast setAlumni(Property\Alumni $alumni)
 * @method BedAndBreakfast setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method BedAndBreakfast setAreaServed(Property\AreaServed $areaServed)
 * @method BedAndBreakfast setAudience(Property\Audience $audience)
 * @method BedAndBreakfast setAvailableLanguage(Property\AvailableLanguage $availableLanguage)
 * @method BedAndBreakfast setAward(Property\Award $award)
 * @method BedAndBreakfast setBrand(Property\Brand $brand)
 * @method BedAndBreakfast setCheckinTime(Property\CheckinTime $checkinTime)
 * @method BedAndBreakfast setCheckoutTime(Property\CheckoutTime $checkoutTime)
 * @method BedAndBreakfast setContactPoint(Property\ContactPoint $contactPoint)
 * @method BedAndBreakfast setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method BedAndBreakfast setDepartment(Property\Department $department)
 * @method BedAndBreakfast setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method BedAndBreakfast setDuns(Property\Duns $duns)
 * @method BedAndBreakfast setEmail(Property\Email $email)
 * @method BedAndBreakfast setEmployee(Property\Employee $employee)
 * @method BedAndBreakfast setEvent(Property\Event $event)
 * @method BedAndBreakfast setFaxNumber(Property\FaxNumber $faxNumber)
 * @method BedAndBreakfast setFounder(Property\Founder $founder)
 * @method BedAndBreakfast setFoundingDate(Property\FoundingDate $foundingDate)
 * @method BedAndBreakfast setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method BedAndBreakfast setFunder(Property\Funder $funder)
 * @method BedAndBreakfast setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method BedAndBreakfast setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method BedAndBreakfast setHasPOS(Property\HasPOS $hasPOS)
 * @method BedAndBreakfast setIsicV4(Property\IsicV4 $isicV4)
 * @method BedAndBreakfast setLegalName(Property\LegalName $legalName)
 * @method BedAndBreakfast setLeiCode(Property\LeiCode $leiCode)
 * @method BedAndBreakfast setLocation(Property\Location $location)
 * @method BedAndBreakfast setLogo(Property\Logo $logo)
 * @method BedAndBreakfast setMakesOffer(Property\MakesOffer $makesOffer)
 * @method BedAndBreakfast setMember(Property\Member $member)
 * @method BedAndBreakfast setMemberOf(Property\MemberOf $memberOf)
 * @method BedAndBreakfast setNaics(Property\Naics $naics)
 * @method BedAndBreakfast setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method BedAndBreakfast setOpeningHours(Property\OpeningHours $openingHours)
 * @method BedAndBreakfast setOwns(Property\Owns $owns)
 * @method BedAndBreakfast setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method BedAndBreakfast setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method BedAndBreakfast setPetsAllowed(Property\PetsAllowed $petsAllowed)
 * @method BedAndBreakfast setPriceRange(Property\PriceRange $priceRange)
 * @method BedAndBreakfast setReview(Property\Review $review)
 * @method BedAndBreakfast setSeeks(Property\Seeks $seeks)
 * @method BedAndBreakfast setSponsor(Property\Sponsor $sponsor)
 * @method BedAndBreakfast setStarRating(Property\StarRating $starRating)
 * @method BedAndBreakfast setSubOrganization(Property\SubOrganization $subOrganization)
 * @method BedAndBreakfast setTaxID(Property\TaxID $taxID)
 * @method BedAndBreakfast setTelephone(Property\Telephone $telephone)
 * @method BedAndBreakfast setVatID(Property\VatID $vatID)
 */
class BedAndBreakfast extends LodgingBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BedAndBreakfast';
	}
}