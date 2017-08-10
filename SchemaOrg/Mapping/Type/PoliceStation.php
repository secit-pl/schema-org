<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class PoliceStation.
 * 
 * @method PoliceStation setAddress(Property\Address $address)
 * @method PoliceStation setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method PoliceStation setAlumni(Property\Alumni $alumni)
 * @method PoliceStation setAreaServed(Property\AreaServed $areaServed)
 * @method PoliceStation setAward(Property\Award $award)
 * @method PoliceStation setBrand(Property\Brand $brand)
 * @method PoliceStation setContactPoint(Property\ContactPoint $contactPoint)
 * @method PoliceStation setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method PoliceStation setDepartment(Property\Department $department)
 * @method PoliceStation setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method PoliceStation setDuns(Property\Duns $duns)
 * @method PoliceStation setEmail(Property\Email $email)
 * @method PoliceStation setEmployee(Property\Employee $employee)
 * @method PoliceStation setEvent(Property\Event $event)
 * @method PoliceStation setFaxNumber(Property\FaxNumber $faxNumber)
 * @method PoliceStation setFounder(Property\Founder $founder)
 * @method PoliceStation setFoundingDate(Property\FoundingDate $foundingDate)
 * @method PoliceStation setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method PoliceStation setFunder(Property\Funder $funder)
 * @method PoliceStation setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method PoliceStation setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method PoliceStation setHasPOS(Property\HasPOS $hasPOS)
 * @method PoliceStation setIsicV4(Property\IsicV4 $isicV4)
 * @method PoliceStation setLegalName(Property\LegalName $legalName)
 * @method PoliceStation setLeiCode(Property\LeiCode $leiCode)
 * @method PoliceStation setLocation(Property\Location $location)
 * @method PoliceStation setLogo(Property\Logo $logo)
 * @method PoliceStation setMakesOffer(Property\MakesOffer $makesOffer)
 * @method PoliceStation setMember(Property\Member $member)
 * @method PoliceStation setMemberOf(Property\MemberOf $memberOf)
 * @method PoliceStation setNaics(Property\Naics $naics)
 * @method PoliceStation setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method PoliceStation setOpeningHours(Property\OpeningHours $openingHours)
 * @method PoliceStation setOwns(Property\Owns $owns)
 * @method PoliceStation setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method PoliceStation setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method PoliceStation setPriceRange(Property\PriceRange $priceRange)
 * @method PoliceStation setReview(Property\Review $review)
 * @method PoliceStation setSeeks(Property\Seeks $seeks)
 * @method PoliceStation setSponsor(Property\Sponsor $sponsor)
 * @method PoliceStation setSubOrganization(Property\SubOrganization $subOrganization)
 * @method PoliceStation setTaxID(Property\TaxID $taxID)
 * @method PoliceStation setTelephone(Property\Telephone $telephone)
 * @method PoliceStation setVatID(Property\VatID $vatID)
 */
class PoliceStation extends EmergencyService {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/PoliceStation';
	}
}