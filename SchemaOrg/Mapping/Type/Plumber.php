<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Plumber.
 * 
 * @method Plumber setAddress(Property\Address $address)
 * @method Plumber setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Plumber setAlumni(Property\Alumni $alumni)
 * @method Plumber setAreaServed(Property\AreaServed $areaServed)
 * @method Plumber setAward(Property\Award $award)
 * @method Plumber setBrand(Property\Brand $brand)
 * @method Plumber setContactPoint(Property\ContactPoint $contactPoint)
 * @method Plumber setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method Plumber setDepartment(Property\Department $department)
 * @method Plumber setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method Plumber setDuns(Property\Duns $duns)
 * @method Plumber setEmail(Property\Email $email)
 * @method Plumber setEmployee(Property\Employee $employee)
 * @method Plumber setEvent(Property\Event $event)
 * @method Plumber setFaxNumber(Property\FaxNumber $faxNumber)
 * @method Plumber setFounder(Property\Founder $founder)
 * @method Plumber setFoundingDate(Property\FoundingDate $foundingDate)
 * @method Plumber setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method Plumber setFunder(Property\Funder $funder)
 * @method Plumber setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method Plumber setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method Plumber setHasPOS(Property\HasPOS $hasPOS)
 * @method Plumber setIsicV4(Property\IsicV4 $isicV4)
 * @method Plumber setLegalName(Property\LegalName $legalName)
 * @method Plumber setLeiCode(Property\LeiCode $leiCode)
 * @method Plumber setLocation(Property\Location $location)
 * @method Plumber setLogo(Property\Logo $logo)
 * @method Plumber setMakesOffer(Property\MakesOffer $makesOffer)
 * @method Plumber setMember(Property\Member $member)
 * @method Plumber setMemberOf(Property\MemberOf $memberOf)
 * @method Plumber setNaics(Property\Naics $naics)
 * @method Plumber setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method Plumber setOpeningHours(Property\OpeningHours $openingHours)
 * @method Plumber setOwns(Property\Owns $owns)
 * @method Plumber setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method Plumber setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method Plumber setPriceRange(Property\PriceRange $priceRange)
 * @method Plumber setReview(Property\Review $review)
 * @method Plumber setSeeks(Property\Seeks $seeks)
 * @method Plumber setSponsor(Property\Sponsor $sponsor)
 * @method Plumber setSubOrganization(Property\SubOrganization $subOrganization)
 * @method Plumber setTaxID(Property\TaxID $taxID)
 * @method Plumber setTelephone(Property\Telephone $telephone)
 * @method Plumber setVatID(Property\VatID $vatID)
 */
class Plumber extends HomeAndConstructionBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Plumber';
	}
}