<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class HealthAndBeautyBusiness.
 * 
 * @method HealthAndBeautyBusiness setAddress(Property\Address $address)
 * @method HealthAndBeautyBusiness setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method HealthAndBeautyBusiness setAlumni(Property\Alumni $alumni)
 * @method HealthAndBeautyBusiness setAreaServed(Property\AreaServed $areaServed)
 * @method HealthAndBeautyBusiness setAward(Property\Award $award)
 * @method HealthAndBeautyBusiness setBrand(Property\Brand $brand)
 * @method HealthAndBeautyBusiness setContactPoint(Property\ContactPoint $contactPoint)
 * @method HealthAndBeautyBusiness setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method HealthAndBeautyBusiness setDepartment(Property\Department $department)
 * @method HealthAndBeautyBusiness setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method HealthAndBeautyBusiness setDuns(Property\Duns $duns)
 * @method HealthAndBeautyBusiness setEmail(Property\Email $email)
 * @method HealthAndBeautyBusiness setEmployee(Property\Employee $employee)
 * @method HealthAndBeautyBusiness setEvent(Property\Event $event)
 * @method HealthAndBeautyBusiness setFaxNumber(Property\FaxNumber $faxNumber)
 * @method HealthAndBeautyBusiness setFounder(Property\Founder $founder)
 * @method HealthAndBeautyBusiness setFoundingDate(Property\FoundingDate $foundingDate)
 * @method HealthAndBeautyBusiness setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method HealthAndBeautyBusiness setFunder(Property\Funder $funder)
 * @method HealthAndBeautyBusiness setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method HealthAndBeautyBusiness setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method HealthAndBeautyBusiness setHasPOS(Property\HasPOS $hasPOS)
 * @method HealthAndBeautyBusiness setIsicV4(Property\IsicV4 $isicV4)
 * @method HealthAndBeautyBusiness setLegalName(Property\LegalName $legalName)
 * @method HealthAndBeautyBusiness setLeiCode(Property\LeiCode $leiCode)
 * @method HealthAndBeautyBusiness setLocation(Property\Location $location)
 * @method HealthAndBeautyBusiness setLogo(Property\Logo $logo)
 * @method HealthAndBeautyBusiness setMakesOffer(Property\MakesOffer $makesOffer)
 * @method HealthAndBeautyBusiness setMember(Property\Member $member)
 * @method HealthAndBeautyBusiness setMemberOf(Property\MemberOf $memberOf)
 * @method HealthAndBeautyBusiness setNaics(Property\Naics $naics)
 * @method HealthAndBeautyBusiness setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method HealthAndBeautyBusiness setOpeningHours(Property\OpeningHours $openingHours)
 * @method HealthAndBeautyBusiness setOwns(Property\Owns $owns)
 * @method HealthAndBeautyBusiness setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method HealthAndBeautyBusiness setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method HealthAndBeautyBusiness setPriceRange(Property\PriceRange $priceRange)
 * @method HealthAndBeautyBusiness setReview(Property\Review $review)
 * @method HealthAndBeautyBusiness setSeeks(Property\Seeks $seeks)
 * @method HealthAndBeautyBusiness setSponsor(Property\Sponsor $sponsor)
 * @method HealthAndBeautyBusiness setSubOrganization(Property\SubOrganization $subOrganization)
 * @method HealthAndBeautyBusiness setTaxID(Property\TaxID $taxID)
 * @method HealthAndBeautyBusiness setTelephone(Property\Telephone $telephone)
 * @method HealthAndBeautyBusiness setVatID(Property\VatID $vatID)
 */
class HealthAndBeautyBusiness extends LocalBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/HealthAndBeautyBusiness';
	}
}