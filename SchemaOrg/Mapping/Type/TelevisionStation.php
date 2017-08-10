<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class TelevisionStation.
 * 
 * @method TelevisionStation setAddress(Property\Address $address)
 * @method TelevisionStation setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method TelevisionStation setAlumni(Property\Alumni $alumni)
 * @method TelevisionStation setAreaServed(Property\AreaServed $areaServed)
 * @method TelevisionStation setAward(Property\Award $award)
 * @method TelevisionStation setBrand(Property\Brand $brand)
 * @method TelevisionStation setContactPoint(Property\ContactPoint $contactPoint)
 * @method TelevisionStation setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method TelevisionStation setDepartment(Property\Department $department)
 * @method TelevisionStation setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method TelevisionStation setDuns(Property\Duns $duns)
 * @method TelevisionStation setEmail(Property\Email $email)
 * @method TelevisionStation setEmployee(Property\Employee $employee)
 * @method TelevisionStation setEvent(Property\Event $event)
 * @method TelevisionStation setFaxNumber(Property\FaxNumber $faxNumber)
 * @method TelevisionStation setFounder(Property\Founder $founder)
 * @method TelevisionStation setFoundingDate(Property\FoundingDate $foundingDate)
 * @method TelevisionStation setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method TelevisionStation setFunder(Property\Funder $funder)
 * @method TelevisionStation setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method TelevisionStation setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method TelevisionStation setHasPOS(Property\HasPOS $hasPOS)
 * @method TelevisionStation setIsicV4(Property\IsicV4 $isicV4)
 * @method TelevisionStation setLegalName(Property\LegalName $legalName)
 * @method TelevisionStation setLeiCode(Property\LeiCode $leiCode)
 * @method TelevisionStation setLocation(Property\Location $location)
 * @method TelevisionStation setLogo(Property\Logo $logo)
 * @method TelevisionStation setMakesOffer(Property\MakesOffer $makesOffer)
 * @method TelevisionStation setMember(Property\Member $member)
 * @method TelevisionStation setMemberOf(Property\MemberOf $memberOf)
 * @method TelevisionStation setNaics(Property\Naics $naics)
 * @method TelevisionStation setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method TelevisionStation setOpeningHours(Property\OpeningHours $openingHours)
 * @method TelevisionStation setOwns(Property\Owns $owns)
 * @method TelevisionStation setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method TelevisionStation setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method TelevisionStation setPriceRange(Property\PriceRange $priceRange)
 * @method TelevisionStation setReview(Property\Review $review)
 * @method TelevisionStation setSeeks(Property\Seeks $seeks)
 * @method TelevisionStation setSponsor(Property\Sponsor $sponsor)
 * @method TelevisionStation setSubOrganization(Property\SubOrganization $subOrganization)
 * @method TelevisionStation setTaxID(Property\TaxID $taxID)
 * @method TelevisionStation setTelephone(Property\Telephone $telephone)
 * @method TelevisionStation setVatID(Property\VatID $vatID)
 */
class TelevisionStation extends LocalBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TelevisionStation';
	}
}