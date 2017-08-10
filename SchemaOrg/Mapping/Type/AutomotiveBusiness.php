<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class AutomotiveBusiness.
 * 
 * @method AutomotiveBusiness setAddress(Property\Address $address)
 * @method AutomotiveBusiness setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method AutomotiveBusiness setAlumni(Property\Alumni $alumni)
 * @method AutomotiveBusiness setAreaServed(Property\AreaServed $areaServed)
 * @method AutomotiveBusiness setAward(Property\Award $award)
 * @method AutomotiveBusiness setBrand(Property\Brand $brand)
 * @method AutomotiveBusiness setContactPoint(Property\ContactPoint $contactPoint)
 * @method AutomotiveBusiness setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method AutomotiveBusiness setDepartment(Property\Department $department)
 * @method AutomotiveBusiness setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method AutomotiveBusiness setDuns(Property\Duns $duns)
 * @method AutomotiveBusiness setEmail(Property\Email $email)
 * @method AutomotiveBusiness setEmployee(Property\Employee $employee)
 * @method AutomotiveBusiness setEvent(Property\Event $event)
 * @method AutomotiveBusiness setFaxNumber(Property\FaxNumber $faxNumber)
 * @method AutomotiveBusiness setFounder(Property\Founder $founder)
 * @method AutomotiveBusiness setFoundingDate(Property\FoundingDate $foundingDate)
 * @method AutomotiveBusiness setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method AutomotiveBusiness setFunder(Property\Funder $funder)
 * @method AutomotiveBusiness setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method AutomotiveBusiness setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method AutomotiveBusiness setHasPOS(Property\HasPOS $hasPOS)
 * @method AutomotiveBusiness setIsicV4(Property\IsicV4 $isicV4)
 * @method AutomotiveBusiness setLegalName(Property\LegalName $legalName)
 * @method AutomotiveBusiness setLeiCode(Property\LeiCode $leiCode)
 * @method AutomotiveBusiness setLocation(Property\Location $location)
 * @method AutomotiveBusiness setLogo(Property\Logo $logo)
 * @method AutomotiveBusiness setMakesOffer(Property\MakesOffer $makesOffer)
 * @method AutomotiveBusiness setMember(Property\Member $member)
 * @method AutomotiveBusiness setMemberOf(Property\MemberOf $memberOf)
 * @method AutomotiveBusiness setNaics(Property\Naics $naics)
 * @method AutomotiveBusiness setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method AutomotiveBusiness setOpeningHours(Property\OpeningHours $openingHours)
 * @method AutomotiveBusiness setOwns(Property\Owns $owns)
 * @method AutomotiveBusiness setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method AutomotiveBusiness setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method AutomotiveBusiness setPriceRange(Property\PriceRange $priceRange)
 * @method AutomotiveBusiness setReview(Property\Review $review)
 * @method AutomotiveBusiness setSeeks(Property\Seeks $seeks)
 * @method AutomotiveBusiness setSponsor(Property\Sponsor $sponsor)
 * @method AutomotiveBusiness setSubOrganization(Property\SubOrganization $subOrganization)
 * @method AutomotiveBusiness setTaxID(Property\TaxID $taxID)
 * @method AutomotiveBusiness setTelephone(Property\Telephone $telephone)
 * @method AutomotiveBusiness setVatID(Property\VatID $vatID)
 */
class AutomotiveBusiness extends LocalBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/AutomotiveBusiness';
	}
}