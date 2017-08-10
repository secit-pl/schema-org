<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class GeneralContractor.
 * 
 * @method GeneralContractor setAddress(Property\Address $address)
 * @method GeneralContractor setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method GeneralContractor setAlumni(Property\Alumni $alumni)
 * @method GeneralContractor setAreaServed(Property\AreaServed $areaServed)
 * @method GeneralContractor setAward(Property\Award $award)
 * @method GeneralContractor setBrand(Property\Brand $brand)
 * @method GeneralContractor setContactPoint(Property\ContactPoint $contactPoint)
 * @method GeneralContractor setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method GeneralContractor setDepartment(Property\Department $department)
 * @method GeneralContractor setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method GeneralContractor setDuns(Property\Duns $duns)
 * @method GeneralContractor setEmail(Property\Email $email)
 * @method GeneralContractor setEmployee(Property\Employee $employee)
 * @method GeneralContractor setEvent(Property\Event $event)
 * @method GeneralContractor setFaxNumber(Property\FaxNumber $faxNumber)
 * @method GeneralContractor setFounder(Property\Founder $founder)
 * @method GeneralContractor setFoundingDate(Property\FoundingDate $foundingDate)
 * @method GeneralContractor setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method GeneralContractor setFunder(Property\Funder $funder)
 * @method GeneralContractor setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method GeneralContractor setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method GeneralContractor setHasPOS(Property\HasPOS $hasPOS)
 * @method GeneralContractor setIsicV4(Property\IsicV4 $isicV4)
 * @method GeneralContractor setLegalName(Property\LegalName $legalName)
 * @method GeneralContractor setLeiCode(Property\LeiCode $leiCode)
 * @method GeneralContractor setLocation(Property\Location $location)
 * @method GeneralContractor setLogo(Property\Logo $logo)
 * @method GeneralContractor setMakesOffer(Property\MakesOffer $makesOffer)
 * @method GeneralContractor setMember(Property\Member $member)
 * @method GeneralContractor setMemberOf(Property\MemberOf $memberOf)
 * @method GeneralContractor setNaics(Property\Naics $naics)
 * @method GeneralContractor setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method GeneralContractor setOpeningHours(Property\OpeningHours $openingHours)
 * @method GeneralContractor setOwns(Property\Owns $owns)
 * @method GeneralContractor setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method GeneralContractor setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method GeneralContractor setPriceRange(Property\PriceRange $priceRange)
 * @method GeneralContractor setReview(Property\Review $review)
 * @method GeneralContractor setSeeks(Property\Seeks $seeks)
 * @method GeneralContractor setSponsor(Property\Sponsor $sponsor)
 * @method GeneralContractor setSubOrganization(Property\SubOrganization $subOrganization)
 * @method GeneralContractor setTaxID(Property\TaxID $taxID)
 * @method GeneralContractor setTelephone(Property\Telephone $telephone)
 * @method GeneralContractor setVatID(Property\VatID $vatID)
 */
class GeneralContractor extends HomeAndConstructionBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/GeneralContractor';
	}
}