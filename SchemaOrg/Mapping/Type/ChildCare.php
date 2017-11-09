<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ChildCare.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\ChildCareType instead.
 * 
 * @method ChildCare setAdditionalType(Property\AdditionalType $additionalType)
 * @method ChildCare setAddress(Property\Address $address)
 * @method ChildCare setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method ChildCare setAlternateName(Property\AlternateName $alternateName)
 * @method ChildCare setAlumni(Property\Alumni $alumni)
 * @method ChildCare setAreaServed(Property\AreaServed $areaServed)
 * @method ChildCare setAward(Property\Award $award)
 * @method ChildCare setBrand(Property\Brand $brand)
 * @method ChildCare setContactPoint(Property\ContactPoint $contactPoint)
 * @method ChildCare setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method ChildCare setDepartment(Property\Department $department)
 * @method ChildCare setDescription(Property\Description $description)
 * @method ChildCare setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ChildCare setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method ChildCare setDuns(Property\Duns $duns)
 * @method ChildCare setEmail(Property\Email $email)
 * @method ChildCare setEmployee(Property\Employee $employee)
 * @method ChildCare setEvent(Property\Event $event)
 * @method ChildCare setFaxNumber(Property\FaxNumber $faxNumber)
 * @method ChildCare setFounder(Property\Founder $founder)
 * @method ChildCare setFoundingDate(Property\FoundingDate $foundingDate)
 * @method ChildCare setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method ChildCare setFunder(Property\Funder $funder)
 * @method ChildCare setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method ChildCare setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method ChildCare setHasPOS(Property\HasPOS $hasPOS)
 * @method ChildCare setIdentifier(Property\Identifier $identifier)
 * @method ChildCare setImage(Property\Image $image)
 * @method ChildCare setIsicV4(Property\IsicV4 $isicV4)
 * @method ChildCare setLegalName(Property\LegalName $legalName)
 * @method ChildCare setLeiCode(Property\LeiCode $leiCode)
 * @method ChildCare setLocation(Property\Location $location)
 * @method ChildCare setLogo(Property\Logo $logo)
 * @method ChildCare setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ChildCare setMakesOffer(Property\MakesOffer $makesOffer)
 * @method ChildCare setMember(Property\Member $member)
 * @method ChildCare setMemberOf(Property\MemberOf $memberOf)
 * @method ChildCare setNaics(Property\Naics $naics)
 * @method ChildCare setName(Property\Name $name)
 * @method ChildCare setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method ChildCare setOpeningHours(Property\OpeningHours $openingHours)
 * @method ChildCare setOwns(Property\Owns $owns)
 * @method ChildCare setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method ChildCare setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method ChildCare setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ChildCare setPriceRange(Property\PriceRange $priceRange)
 * @method ChildCare setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method ChildCare setReview(Property\Review $review)
 * @method ChildCare setSameAs(Property\SameAs $sameAs)
 * @method ChildCare setSeeks(Property\Seeks $seeks)
 * @method ChildCare setSponsor(Property\Sponsor $sponsor)
 * @method ChildCare setSubOrganization(Property\SubOrganization $subOrganization)
 * @method ChildCare setTaxID(Property\TaxID $taxID)
 * @method ChildCare setTelephone(Property\Telephone $telephone)
 * @method ChildCare setUrl(Property\Url $url)
 * @method ChildCare setVatID(Property\VatID $vatID)
 */
class ChildCare extends LocalBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ChildCare';
	}
}