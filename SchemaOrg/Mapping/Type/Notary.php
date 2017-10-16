<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class Notary.
 * 
 * @method Notary setAdditionalType(Property\AdditionalType $additionalType)
 * @method Notary setAddress(Property\Address $address)
 * @method Notary setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method Notary setAlternateName(Property\AlternateName $alternateName)
 * @method Notary setAlumni(Property\Alumni $alumni)
 * @method Notary setAreaServed(Property\AreaServed $areaServed)
 * @method Notary setAward(Property\Award $award)
 * @method Notary setBrand(Property\Brand $brand)
 * @method Notary setContactPoint(Property\ContactPoint $contactPoint)
 * @method Notary setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method Notary setDepartment(Property\Department $department)
 * @method Notary setDescription(Property\Description $description)
 * @method Notary setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method Notary setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method Notary setDuns(Property\Duns $duns)
 * @method Notary setEmail(Property\Email $email)
 * @method Notary setEmployee(Property\Employee $employee)
 * @method Notary setEvent(Property\Event $event)
 * @method Notary setFaxNumber(Property\FaxNumber $faxNumber)
 * @method Notary setFounder(Property\Founder $founder)
 * @method Notary setFoundingDate(Property\FoundingDate $foundingDate)
 * @method Notary setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method Notary setFunder(Property\Funder $funder)
 * @method Notary setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method Notary setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method Notary setHasPOS(Property\HasPOS $hasPOS)
 * @method Notary setIdentifier(Property\Identifier $identifier)
 * @method Notary setImage(Property\Image $image)
 * @method Notary setIsicV4(Property\IsicV4 $isicV4)
 * @method Notary setLegalName(Property\LegalName $legalName)
 * @method Notary setLeiCode(Property\LeiCode $leiCode)
 * @method Notary setLocation(Property\Location $location)
 * @method Notary setLogo(Property\Logo $logo)
 * @method Notary setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method Notary setMakesOffer(Property\MakesOffer $makesOffer)
 * @method Notary setMember(Property\Member $member)
 * @method Notary setMemberOf(Property\MemberOf $memberOf)
 * @method Notary setNaics(Property\Naics $naics)
 * @method Notary setName(Property\Name $name)
 * @method Notary setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method Notary setOpeningHours(Property\OpeningHours $openingHours)
 * @method Notary setOwns(Property\Owns $owns)
 * @method Notary setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method Notary setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method Notary setPotentialAction(Property\PotentialAction $potentialAction)
 * @method Notary setPriceRange(Property\PriceRange $priceRange)
 * @method Notary setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method Notary setReview(Property\Review $review)
 * @method Notary setSameAs(Property\SameAs $sameAs)
 * @method Notary setSeeks(Property\Seeks $seeks)
 * @method Notary setSponsor(Property\Sponsor $sponsor)
 * @method Notary setSubOrganization(Property\SubOrganization $subOrganization)
 * @method Notary setTaxID(Property\TaxID $taxID)
 * @method Notary setTelephone(Property\Telephone $telephone)
 * @method Notary setUrl(Property\Url $url)
 * @method Notary setVatID(Property\VatID $vatID)
 */
class Notary extends LegalService {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/Notary';
	}
}