<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class ComedyClub.
 * 
 * @method ComedyClub setAdditionalType(Property\AdditionalType $additionalType)
 * @method ComedyClub setAddress(Property\Address $address)
 * @method ComedyClub setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method ComedyClub setAlternateName(Property\AlternateName $alternateName)
 * @method ComedyClub setAlumni(Property\Alumni $alumni)
 * @method ComedyClub setAreaServed(Property\AreaServed $areaServed)
 * @method ComedyClub setAward(Property\Award $award)
 * @method ComedyClub setBrand(Property\Brand $brand)
 * @method ComedyClub setContactPoint(Property\ContactPoint $contactPoint)
 * @method ComedyClub setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method ComedyClub setDepartment(Property\Department $department)
 * @method ComedyClub setDescription(Property\Description $description)
 * @method ComedyClub setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method ComedyClub setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method ComedyClub setDuns(Property\Duns $duns)
 * @method ComedyClub setEmail(Property\Email $email)
 * @method ComedyClub setEmployee(Property\Employee $employee)
 * @method ComedyClub setEvent(Property\Event $event)
 * @method ComedyClub setFaxNumber(Property\FaxNumber $faxNumber)
 * @method ComedyClub setFounder(Property\Founder $founder)
 * @method ComedyClub setFoundingDate(Property\FoundingDate $foundingDate)
 * @method ComedyClub setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method ComedyClub setFunder(Property\Funder $funder)
 * @method ComedyClub setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method ComedyClub setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method ComedyClub setHasPOS(Property\HasPOS $hasPOS)
 * @method ComedyClub setIdentifier(Property\Identifier $identifier)
 * @method ComedyClub setImage(Property\Image $image)
 * @method ComedyClub setIsicV4(Property\IsicV4 $isicV4)
 * @method ComedyClub setLegalName(Property\LegalName $legalName)
 * @method ComedyClub setLeiCode(Property\LeiCode $leiCode)
 * @method ComedyClub setLocation(Property\Location $location)
 * @method ComedyClub setLogo(Property\Logo $logo)
 * @method ComedyClub setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method ComedyClub setMakesOffer(Property\MakesOffer $makesOffer)
 * @method ComedyClub setMember(Property\Member $member)
 * @method ComedyClub setMemberOf(Property\MemberOf $memberOf)
 * @method ComedyClub setNaics(Property\Naics $naics)
 * @method ComedyClub setName(Property\Name $name)
 * @method ComedyClub setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method ComedyClub setOpeningHours(Property\OpeningHours $openingHours)
 * @method ComedyClub setOwns(Property\Owns $owns)
 * @method ComedyClub setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method ComedyClub setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method ComedyClub setPotentialAction(Property\PotentialAction $potentialAction)
 * @method ComedyClub setPriceRange(Property\PriceRange $priceRange)
 * @method ComedyClub setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method ComedyClub setReview(Property\Review $review)
 * @method ComedyClub setSameAs(Property\SameAs $sameAs)
 * @method ComedyClub setSeeks(Property\Seeks $seeks)
 * @method ComedyClub setSponsor(Property\Sponsor $sponsor)
 * @method ComedyClub setSubOrganization(Property\SubOrganization $subOrganization)
 * @method ComedyClub setTaxID(Property\TaxID $taxID)
 * @method ComedyClub setTelephone(Property\Telephone $telephone)
 * @method ComedyClub setUrl(Property\Url $url)
 * @method ComedyClub setVatID(Property\VatID $vatID)
 */
class ComedyClub extends EntertainmentBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/ComedyClub';
	}
}