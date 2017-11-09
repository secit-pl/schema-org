<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class RealEstateAgent.
 * 
 * @deprecated This class is deprecated and will be removed in release 3.4. Use SecIT\SchemaOrg\Mapping\Type\RealEstateAgentType instead.
 * 
 * @method RealEstateAgent setAdditionalType(Property\AdditionalType $additionalType)
 * @method RealEstateAgent setAddress(Property\Address $address)
 * @method RealEstateAgent setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method RealEstateAgent setAlternateName(Property\AlternateName $alternateName)
 * @method RealEstateAgent setAlumni(Property\Alumni $alumni)
 * @method RealEstateAgent setAreaServed(Property\AreaServed $areaServed)
 * @method RealEstateAgent setAward(Property\Award $award)
 * @method RealEstateAgent setBrand(Property\Brand $brand)
 * @method RealEstateAgent setContactPoint(Property\ContactPoint $contactPoint)
 * @method RealEstateAgent setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method RealEstateAgent setDepartment(Property\Department $department)
 * @method RealEstateAgent setDescription(Property\Description $description)
 * @method RealEstateAgent setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method RealEstateAgent setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method RealEstateAgent setDuns(Property\Duns $duns)
 * @method RealEstateAgent setEmail(Property\Email $email)
 * @method RealEstateAgent setEmployee(Property\Employee $employee)
 * @method RealEstateAgent setEvent(Property\Event $event)
 * @method RealEstateAgent setFaxNumber(Property\FaxNumber $faxNumber)
 * @method RealEstateAgent setFounder(Property\Founder $founder)
 * @method RealEstateAgent setFoundingDate(Property\FoundingDate $foundingDate)
 * @method RealEstateAgent setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method RealEstateAgent setFunder(Property\Funder $funder)
 * @method RealEstateAgent setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method RealEstateAgent setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method RealEstateAgent setHasPOS(Property\HasPOS $hasPOS)
 * @method RealEstateAgent setIdentifier(Property\Identifier $identifier)
 * @method RealEstateAgent setImage(Property\Image $image)
 * @method RealEstateAgent setIsicV4(Property\IsicV4 $isicV4)
 * @method RealEstateAgent setLegalName(Property\LegalName $legalName)
 * @method RealEstateAgent setLeiCode(Property\LeiCode $leiCode)
 * @method RealEstateAgent setLocation(Property\Location $location)
 * @method RealEstateAgent setLogo(Property\Logo $logo)
 * @method RealEstateAgent setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method RealEstateAgent setMakesOffer(Property\MakesOffer $makesOffer)
 * @method RealEstateAgent setMember(Property\Member $member)
 * @method RealEstateAgent setMemberOf(Property\MemberOf $memberOf)
 * @method RealEstateAgent setNaics(Property\Naics $naics)
 * @method RealEstateAgent setName(Property\Name $name)
 * @method RealEstateAgent setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method RealEstateAgent setOpeningHours(Property\OpeningHours $openingHours)
 * @method RealEstateAgent setOwns(Property\Owns $owns)
 * @method RealEstateAgent setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method RealEstateAgent setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method RealEstateAgent setPotentialAction(Property\PotentialAction $potentialAction)
 * @method RealEstateAgent setPriceRange(Property\PriceRange $priceRange)
 * @method RealEstateAgent setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method RealEstateAgent setReview(Property\Review $review)
 * @method RealEstateAgent setSameAs(Property\SameAs $sameAs)
 * @method RealEstateAgent setSeeks(Property\Seeks $seeks)
 * @method RealEstateAgent setSponsor(Property\Sponsor $sponsor)
 * @method RealEstateAgent setSubOrganization(Property\SubOrganization $subOrganization)
 * @method RealEstateAgent setTaxID(Property\TaxID $taxID)
 * @method RealEstateAgent setTelephone(Property\Telephone $telephone)
 * @method RealEstateAgent setUrl(Property\Url $url)
 * @method RealEstateAgent setVatID(Property\VatID $vatID)
 */
class RealEstateAgent extends LocalBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/RealEstateAgent';
	}
}