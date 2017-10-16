<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class TouristInformationCenter.
 * 
 * @method TouristInformationCenter setAdditionalType(Property\AdditionalType $additionalType)
 * @method TouristInformationCenter setAddress(Property\Address $address)
 * @method TouristInformationCenter setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method TouristInformationCenter setAlternateName(Property\AlternateName $alternateName)
 * @method TouristInformationCenter setAlumni(Property\Alumni $alumni)
 * @method TouristInformationCenter setAreaServed(Property\AreaServed $areaServed)
 * @method TouristInformationCenter setAward(Property\Award $award)
 * @method TouristInformationCenter setBrand(Property\Brand $brand)
 * @method TouristInformationCenter setContactPoint(Property\ContactPoint $contactPoint)
 * @method TouristInformationCenter setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method TouristInformationCenter setDepartment(Property\Department $department)
 * @method TouristInformationCenter setDescription(Property\Description $description)
 * @method TouristInformationCenter setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method TouristInformationCenter setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method TouristInformationCenter setDuns(Property\Duns $duns)
 * @method TouristInformationCenter setEmail(Property\Email $email)
 * @method TouristInformationCenter setEmployee(Property\Employee $employee)
 * @method TouristInformationCenter setEvent(Property\Event $event)
 * @method TouristInformationCenter setFaxNumber(Property\FaxNumber $faxNumber)
 * @method TouristInformationCenter setFounder(Property\Founder $founder)
 * @method TouristInformationCenter setFoundingDate(Property\FoundingDate $foundingDate)
 * @method TouristInformationCenter setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method TouristInformationCenter setFunder(Property\Funder $funder)
 * @method TouristInformationCenter setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method TouristInformationCenter setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method TouristInformationCenter setHasPOS(Property\HasPOS $hasPOS)
 * @method TouristInformationCenter setIdentifier(Property\Identifier $identifier)
 * @method TouristInformationCenter setImage(Property\Image $image)
 * @method TouristInformationCenter setIsicV4(Property\IsicV4 $isicV4)
 * @method TouristInformationCenter setLegalName(Property\LegalName $legalName)
 * @method TouristInformationCenter setLeiCode(Property\LeiCode $leiCode)
 * @method TouristInformationCenter setLocation(Property\Location $location)
 * @method TouristInformationCenter setLogo(Property\Logo $logo)
 * @method TouristInformationCenter setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method TouristInformationCenter setMakesOffer(Property\MakesOffer $makesOffer)
 * @method TouristInformationCenter setMember(Property\Member $member)
 * @method TouristInformationCenter setMemberOf(Property\MemberOf $memberOf)
 * @method TouristInformationCenter setNaics(Property\Naics $naics)
 * @method TouristInformationCenter setName(Property\Name $name)
 * @method TouristInformationCenter setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method TouristInformationCenter setOpeningHours(Property\OpeningHours $openingHours)
 * @method TouristInformationCenter setOwns(Property\Owns $owns)
 * @method TouristInformationCenter setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method TouristInformationCenter setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method TouristInformationCenter setPotentialAction(Property\PotentialAction $potentialAction)
 * @method TouristInformationCenter setPriceRange(Property\PriceRange $priceRange)
 * @method TouristInformationCenter setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method TouristInformationCenter setReview(Property\Review $review)
 * @method TouristInformationCenter setSameAs(Property\SameAs $sameAs)
 * @method TouristInformationCenter setSeeks(Property\Seeks $seeks)
 * @method TouristInformationCenter setSponsor(Property\Sponsor $sponsor)
 * @method TouristInformationCenter setSubOrganization(Property\SubOrganization $subOrganization)
 * @method TouristInformationCenter setTaxID(Property\TaxID $taxID)
 * @method TouristInformationCenter setTelephone(Property\Telephone $telephone)
 * @method TouristInformationCenter setUrl(Property\Url $url)
 * @method TouristInformationCenter setVatID(Property\VatID $vatID)
 */
class TouristInformationCenter extends LocalBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/TouristInformationCenter';
	}
}