<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Store.
 * 
 * @method Store setAddress(Property\Address $address)
 * @method Store setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Store setAlumni(Property\Alumni $alumni)
 * @method Store setAreaServed(Property\AreaServed $areaServed)
 * @method Store setAward(Property\Award $award)
 * @method Store setBrand(Property\Brand $brand)
 * @method Store setContactPoint(Property\ContactPoint $contactPoint)
 * @method Store setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method Store setDepartment(Property\Department $department)
 * @method Store setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method Store setDuns(Property\Duns $duns)
 * @method Store setEmail(Property\Email $email)
 * @method Store setEmployee(Property\Employee $employee)
 * @method Store setEvent(Property\Event $event)
 * @method Store setFaxNumber(Property\FaxNumber $faxNumber)
 * @method Store setFounder(Property\Founder $founder)
 * @method Store setFoundingDate(Property\FoundingDate $foundingDate)
 * @method Store setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method Store setFunder(Property\Funder $funder)
 * @method Store setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method Store setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method Store setHasPOS(Property\HasPOS $hasPOS)
 * @method Store setIsicV4(Property\IsicV4 $isicV4)
 * @method Store setLegalName(Property\LegalName $legalName)
 * @method Store setLeiCode(Property\LeiCode $leiCode)
 * @method Store setLocation(Property\Location $location)
 * @method Store setLogo(Property\Logo $logo)
 * @method Store setMakesOffer(Property\MakesOffer $makesOffer)
 * @method Store setMember(Property\Member $member)
 * @method Store setMemberOf(Property\MemberOf $memberOf)
 * @method Store setNaics(Property\Naics $naics)
 * @method Store setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method Store setOpeningHours(Property\OpeningHours $openingHours)
 * @method Store setOwns(Property\Owns $owns)
 * @method Store setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method Store setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method Store setPriceRange(Property\PriceRange $priceRange)
 * @method Store setReview(Property\Review $review)
 * @method Store setSeeks(Property\Seeks $seeks)
 * @method Store setSponsor(Property\Sponsor $sponsor)
 * @method Store setSubOrganization(Property\SubOrganization $subOrganization)
 * @method Store setTaxID(Property\TaxID $taxID)
 * @method Store setTelephone(Property\Telephone $telephone)
 * @method Store setVatID(Property\VatID $vatID)
 */
class Store extends LocalBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Store';
	}
}