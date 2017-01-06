<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BeautySalon.
 * 
 * @method BeautySalon setAdditionalType(Property\AdditionalType $additionalType)
 * @method BeautySalon setAddress(Property\Address $address)
 * @method BeautySalon setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method BeautySalon setAlternateName(Property\AlternateName $alternateName)
 * @method BeautySalon setAlumni(Property\Alumni $alumni)
 * @method BeautySalon setAreaServed(Property\AreaServed $areaServed)
 * @method BeautySalon setAward(Property\Award $award)
 * @method BeautySalon setBrand(Property\Brand $brand)
 * @method BeautySalon setContactPoint(Property\ContactPoint $contactPoint)
 * @method BeautySalon setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method BeautySalon setDepartment(Property\Department $department)
 * @method BeautySalon setDescription(Property\Description $description)
 * @method BeautySalon setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method BeautySalon setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method BeautySalon setDuns(Property\Duns $duns)
 * @method BeautySalon setEmail(Property\Email $email)
 * @method BeautySalon setEmployee(Property\Employee $employee)
 * @method BeautySalon setEvent(Property\Event $event)
 * @method BeautySalon setFaxNumber(Property\FaxNumber $faxNumber)
 * @method BeautySalon setFounder(Property\Founder $founder)
 * @method BeautySalon setFoundingDate(Property\FoundingDate $foundingDate)
 * @method BeautySalon setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method BeautySalon setFunder(Property\Funder $funder)
 * @method BeautySalon setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method BeautySalon setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method BeautySalon setHasPOS(Property\HasPOS $hasPOS)
 * @method BeautySalon setImage(Property\Image $image)
 * @method BeautySalon setIsicV4(Property\IsicV4 $isicV4)
 * @method BeautySalon setLegalName(Property\LegalName $legalName)
 * @method BeautySalon setLeiCode(Property\LeiCode $leiCode)
 * @method BeautySalon setLocation(Property\Location $location)
 * @method BeautySalon setLogo(Property\Logo $logo)
 * @method BeautySalon setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method BeautySalon setMakesOffer(Property\MakesOffer $makesOffer)
 * @method BeautySalon setMember(Property\Member $member)
 * @method BeautySalon setMemberOf(Property\MemberOf $memberOf)
 * @method BeautySalon setNaics(Property\Naics $naics)
 * @method BeautySalon setName(Property\Name $name)
 * @method BeautySalon setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method BeautySalon setOpeningHours(Property\OpeningHours $openingHours)
 * @method BeautySalon setOwns(Property\Owns $owns)
 * @method BeautySalon setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method BeautySalon setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method BeautySalon setPotentialAction(Property\PotentialAction $potentialAction)
 * @method BeautySalon setPriceRange(Property\PriceRange $priceRange)
 * @method BeautySalon setReview(Property\Review $review)
 * @method BeautySalon setSameAs(Property\SameAs $sameAs)
 * @method BeautySalon setSeeks(Property\Seeks $seeks)
 * @method BeautySalon setSponsor(Property\Sponsor $sponsor)
 * @method BeautySalon setSubOrganization(Property\SubOrganization $subOrganization)
 * @method BeautySalon setTaxID(Property\TaxID $taxID)
 * @method BeautySalon setTelephone(Property\Telephone $telephone)
 * @method BeautySalon setUrl(Property\Url $url)
 * @method BeautySalon setVatID(Property\VatID $vatID)
 */
class BeautySalon extends HealthAndBeautyBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BeautySalon';
	}
}