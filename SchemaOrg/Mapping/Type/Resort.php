<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Resort.
 * 
 * @method Resort setAddress(Property\Address $address)
 * @method Resort setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Resort setAlumni(Property\Alumni $alumni)
 * @method Resort setAmenityFeature(Property\AmenityFeature $amenityFeature)
 * @method Resort setAreaServed(Property\AreaServed $areaServed)
 * @method Resort setAudience(Property\Audience $audience)
 * @method Resort setAvailableLanguage(Property\AvailableLanguage $availableLanguage)
 * @method Resort setAward(Property\Award $award)
 * @method Resort setBrand(Property\Brand $brand)
 * @method Resort setCheckinTime(Property\CheckinTime $checkinTime)
 * @method Resort setCheckoutTime(Property\CheckoutTime $checkoutTime)
 * @method Resort setContactPoint(Property\ContactPoint $contactPoint)
 * @method Resort setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method Resort setDepartment(Property\Department $department)
 * @method Resort setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method Resort setDuns(Property\Duns $duns)
 * @method Resort setEmail(Property\Email $email)
 * @method Resort setEmployee(Property\Employee $employee)
 * @method Resort setEvent(Property\Event $event)
 * @method Resort setFaxNumber(Property\FaxNumber $faxNumber)
 * @method Resort setFounder(Property\Founder $founder)
 * @method Resort setFoundingDate(Property\FoundingDate $foundingDate)
 * @method Resort setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method Resort setFunder(Property\Funder $funder)
 * @method Resort setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method Resort setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method Resort setHasPOS(Property\HasPOS $hasPOS)
 * @method Resort setIsicV4(Property\IsicV4 $isicV4)
 * @method Resort setLegalName(Property\LegalName $legalName)
 * @method Resort setLeiCode(Property\LeiCode $leiCode)
 * @method Resort setLocation(Property\Location $location)
 * @method Resort setLogo(Property\Logo $logo)
 * @method Resort setMakesOffer(Property\MakesOffer $makesOffer)
 * @method Resort setMember(Property\Member $member)
 * @method Resort setMemberOf(Property\MemberOf $memberOf)
 * @method Resort setNaics(Property\Naics $naics)
 * @method Resort setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method Resort setOpeningHours(Property\OpeningHours $openingHours)
 * @method Resort setOwns(Property\Owns $owns)
 * @method Resort setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method Resort setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method Resort setPetsAllowed(Property\PetsAllowed $petsAllowed)
 * @method Resort setPriceRange(Property\PriceRange $priceRange)
 * @method Resort setReview(Property\Review $review)
 * @method Resort setSeeks(Property\Seeks $seeks)
 * @method Resort setSponsor(Property\Sponsor $sponsor)
 * @method Resort setStarRating(Property\StarRating $starRating)
 * @method Resort setSubOrganization(Property\SubOrganization $subOrganization)
 * @method Resort setTaxID(Property\TaxID $taxID)
 * @method Resort setTelephone(Property\Telephone $telephone)
 * @method Resort setVatID(Property\VatID $vatID)
 */
class Resort extends LodgingBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Resort';
	}
}