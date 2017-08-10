<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AdultEntertainment.
 * 
 * @method AdultEntertainment setAddress(Property\Address $address)
 * @method AdultEntertainment setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method AdultEntertainment setAlumni(Property\Alumni $alumni)
 * @method AdultEntertainment setAreaServed(Property\AreaServed $areaServed)
 * @method AdultEntertainment setAward(Property\Award $award)
 * @method AdultEntertainment setBrand(Property\Brand $brand)
 * @method AdultEntertainment setContactPoint(Property\ContactPoint $contactPoint)
 * @method AdultEntertainment setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method AdultEntertainment setDepartment(Property\Department $department)
 * @method AdultEntertainment setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method AdultEntertainment setDuns(Property\Duns $duns)
 * @method AdultEntertainment setEmail(Property\Email $email)
 * @method AdultEntertainment setEmployee(Property\Employee $employee)
 * @method AdultEntertainment setEvent(Property\Event $event)
 * @method AdultEntertainment setFaxNumber(Property\FaxNumber $faxNumber)
 * @method AdultEntertainment setFounder(Property\Founder $founder)
 * @method AdultEntertainment setFoundingDate(Property\FoundingDate $foundingDate)
 * @method AdultEntertainment setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method AdultEntertainment setFunder(Property\Funder $funder)
 * @method AdultEntertainment setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method AdultEntertainment setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method AdultEntertainment setHasPOS(Property\HasPOS $hasPOS)
 * @method AdultEntertainment setIsicV4(Property\IsicV4 $isicV4)
 * @method AdultEntertainment setLegalName(Property\LegalName $legalName)
 * @method AdultEntertainment setLeiCode(Property\LeiCode $leiCode)
 * @method AdultEntertainment setLocation(Property\Location $location)
 * @method AdultEntertainment setLogo(Property\Logo $logo)
 * @method AdultEntertainment setMakesOffer(Property\MakesOffer $makesOffer)
 * @method AdultEntertainment setMember(Property\Member $member)
 * @method AdultEntertainment setMemberOf(Property\MemberOf $memberOf)
 * @method AdultEntertainment setNaics(Property\Naics $naics)
 * @method AdultEntertainment setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method AdultEntertainment setOpeningHours(Property\OpeningHours $openingHours)
 * @method AdultEntertainment setOwns(Property\Owns $owns)
 * @method AdultEntertainment setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method AdultEntertainment setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method AdultEntertainment setPriceRange(Property\PriceRange $priceRange)
 * @method AdultEntertainment setReview(Property\Review $review)
 * @method AdultEntertainment setSeeks(Property\Seeks $seeks)
 * @method AdultEntertainment setSponsor(Property\Sponsor $sponsor)
 * @method AdultEntertainment setSubOrganization(Property\SubOrganization $subOrganization)
 * @method AdultEntertainment setTaxID(Property\TaxID $taxID)
 * @method AdultEntertainment setTelephone(Property\Telephone $telephone)
 * @method AdultEntertainment setVatID(Property\VatID $vatID)
 */
class AdultEntertainment extends EntertainmentBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AdultEntertainment';
	}
}