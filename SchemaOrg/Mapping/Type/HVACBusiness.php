<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class HVACBusiness.
 * 
 * @method HVACBusiness setAdditionalType(Property\AdditionalType $additionalType)
 * @method HVACBusiness setAddress(Property\Address $address)
 * @method HVACBusiness setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method HVACBusiness setAlternateName(Property\AlternateName $alternateName)
 * @method HVACBusiness setAlumni(Property\Alumni $alumni)
 * @method HVACBusiness setAreaServed(Property\AreaServed $areaServed)
 * @method HVACBusiness setAward(Property\Award $award)
 * @method HVACBusiness setBrand(Property\Brand $brand)
 * @method HVACBusiness setContactPoint(Property\ContactPoint $contactPoint)
 * @method HVACBusiness setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method HVACBusiness setDepartment(Property\Department $department)
 * @method HVACBusiness setDescription(Property\Description $description)
 * @method HVACBusiness setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method HVACBusiness setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method HVACBusiness setDuns(Property\Duns $duns)
 * @method HVACBusiness setEmail(Property\Email $email)
 * @method HVACBusiness setEmployee(Property\Employee $employee)
 * @method HVACBusiness setEvent(Property\Event $event)
 * @method HVACBusiness setFaxNumber(Property\FaxNumber $faxNumber)
 * @method HVACBusiness setFounder(Property\Founder $founder)
 * @method HVACBusiness setFoundingDate(Property\FoundingDate $foundingDate)
 * @method HVACBusiness setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method HVACBusiness setFunder(Property\Funder $funder)
 * @method HVACBusiness setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method HVACBusiness setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method HVACBusiness setHasPOS(Property\HasPOS $hasPOS)
 * @method HVACBusiness setIdentifier(Property\Identifier $identifier)
 * @method HVACBusiness setImage(Property\Image $image)
 * @method HVACBusiness setIsicV4(Property\IsicV4 $isicV4)
 * @method HVACBusiness setLegalName(Property\LegalName $legalName)
 * @method HVACBusiness setLeiCode(Property\LeiCode $leiCode)
 * @method HVACBusiness setLocation(Property\Location $location)
 * @method HVACBusiness setLogo(Property\Logo $logo)
 * @method HVACBusiness setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method HVACBusiness setMakesOffer(Property\MakesOffer $makesOffer)
 * @method HVACBusiness setMember(Property\Member $member)
 * @method HVACBusiness setMemberOf(Property\MemberOf $memberOf)
 * @method HVACBusiness setNaics(Property\Naics $naics)
 * @method HVACBusiness setName(Property\Name $name)
 * @method HVACBusiness setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method HVACBusiness setOpeningHours(Property\OpeningHours $openingHours)
 * @method HVACBusiness setOwns(Property\Owns $owns)
 * @method HVACBusiness setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method HVACBusiness setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method HVACBusiness setPotentialAction(Property\PotentialAction $potentialAction)
 * @method HVACBusiness setPriceRange(Property\PriceRange $priceRange)
 * @method HVACBusiness setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method HVACBusiness setReview(Property\Review $review)
 * @method HVACBusiness setSameAs(Property\SameAs $sameAs)
 * @method HVACBusiness setSeeks(Property\Seeks $seeks)
 * @method HVACBusiness setSponsor(Property\Sponsor $sponsor)
 * @method HVACBusiness setSubOrganization(Property\SubOrganization $subOrganization)
 * @method HVACBusiness setTaxID(Property\TaxID $taxID)
 * @method HVACBusiness setTelephone(Property\Telephone $telephone)
 * @method HVACBusiness setUrl(Property\Url $url)
 * @method HVACBusiness setVatID(Property\VatID $vatID)
 */
class HVACBusiness extends HomeAndConstructionBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/HVACBusiness';
	}
}