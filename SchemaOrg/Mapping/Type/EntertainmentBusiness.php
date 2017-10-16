<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class EntertainmentBusiness.
 * 
 * @method EntertainmentBusiness setAdditionalType(Property\AdditionalType $additionalType)
 * @method EntertainmentBusiness setAddress(Property\Address $address)
 * @method EntertainmentBusiness setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method EntertainmentBusiness setAlternateName(Property\AlternateName $alternateName)
 * @method EntertainmentBusiness setAlumni(Property\Alumni $alumni)
 * @method EntertainmentBusiness setAreaServed(Property\AreaServed $areaServed)
 * @method EntertainmentBusiness setAward(Property\Award $award)
 * @method EntertainmentBusiness setBrand(Property\Brand $brand)
 * @method EntertainmentBusiness setContactPoint(Property\ContactPoint $contactPoint)
 * @method EntertainmentBusiness setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method EntertainmentBusiness setDepartment(Property\Department $department)
 * @method EntertainmentBusiness setDescription(Property\Description $description)
 * @method EntertainmentBusiness setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method EntertainmentBusiness setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method EntertainmentBusiness setDuns(Property\Duns $duns)
 * @method EntertainmentBusiness setEmail(Property\Email $email)
 * @method EntertainmentBusiness setEmployee(Property\Employee $employee)
 * @method EntertainmentBusiness setEvent(Property\Event $event)
 * @method EntertainmentBusiness setFaxNumber(Property\FaxNumber $faxNumber)
 * @method EntertainmentBusiness setFounder(Property\Founder $founder)
 * @method EntertainmentBusiness setFoundingDate(Property\FoundingDate $foundingDate)
 * @method EntertainmentBusiness setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method EntertainmentBusiness setFunder(Property\Funder $funder)
 * @method EntertainmentBusiness setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method EntertainmentBusiness setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method EntertainmentBusiness setHasPOS(Property\HasPOS $hasPOS)
 * @method EntertainmentBusiness setIdentifier(Property\Identifier $identifier)
 * @method EntertainmentBusiness setImage(Property\Image $image)
 * @method EntertainmentBusiness setIsicV4(Property\IsicV4 $isicV4)
 * @method EntertainmentBusiness setLegalName(Property\LegalName $legalName)
 * @method EntertainmentBusiness setLeiCode(Property\LeiCode $leiCode)
 * @method EntertainmentBusiness setLocation(Property\Location $location)
 * @method EntertainmentBusiness setLogo(Property\Logo $logo)
 * @method EntertainmentBusiness setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method EntertainmentBusiness setMakesOffer(Property\MakesOffer $makesOffer)
 * @method EntertainmentBusiness setMember(Property\Member $member)
 * @method EntertainmentBusiness setMemberOf(Property\MemberOf $memberOf)
 * @method EntertainmentBusiness setNaics(Property\Naics $naics)
 * @method EntertainmentBusiness setName(Property\Name $name)
 * @method EntertainmentBusiness setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method EntertainmentBusiness setOpeningHours(Property\OpeningHours $openingHours)
 * @method EntertainmentBusiness setOwns(Property\Owns $owns)
 * @method EntertainmentBusiness setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method EntertainmentBusiness setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method EntertainmentBusiness setPotentialAction(Property\PotentialAction $potentialAction)
 * @method EntertainmentBusiness setPriceRange(Property\PriceRange $priceRange)
 * @method EntertainmentBusiness setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method EntertainmentBusiness setReview(Property\Review $review)
 * @method EntertainmentBusiness setSameAs(Property\SameAs $sameAs)
 * @method EntertainmentBusiness setSeeks(Property\Seeks $seeks)
 * @method EntertainmentBusiness setSponsor(Property\Sponsor $sponsor)
 * @method EntertainmentBusiness setSubOrganization(Property\SubOrganization $subOrganization)
 * @method EntertainmentBusiness setTaxID(Property\TaxID $taxID)
 * @method EntertainmentBusiness setTelephone(Property\Telephone $telephone)
 * @method EntertainmentBusiness setUrl(Property\Url $url)
 * @method EntertainmentBusiness setVatID(Property\VatID $vatID)
 */
class EntertainmentBusiness extends LocalBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/EntertainmentBusiness';
	}
}