<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class RecyclingCenter.
 * 
 * @method RecyclingCenter setAdditionalType(Property\AdditionalType $additionalType)
 * @method RecyclingCenter setAddress(Property\Address $address)
 * @method RecyclingCenter setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method RecyclingCenter setAlternateName(Property\AlternateName $alternateName)
 * @method RecyclingCenter setAlumni(Property\Alumni $alumni)
 * @method RecyclingCenter setAreaServed(Property\AreaServed $areaServed)
 * @method RecyclingCenter setAward(Property\Award $award)
 * @method RecyclingCenter setBrand(Property\Brand $brand)
 * @method RecyclingCenter setContactPoint(Property\ContactPoint $contactPoint)
 * @method RecyclingCenter setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method RecyclingCenter setDepartment(Property\Department $department)
 * @method RecyclingCenter setDescription(Property\Description $description)
 * @method RecyclingCenter setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method RecyclingCenter setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method RecyclingCenter setDuns(Property\Duns $duns)
 * @method RecyclingCenter setEmail(Property\Email $email)
 * @method RecyclingCenter setEmployee(Property\Employee $employee)
 * @method RecyclingCenter setEvent(Property\Event $event)
 * @method RecyclingCenter setFaxNumber(Property\FaxNumber $faxNumber)
 * @method RecyclingCenter setFounder(Property\Founder $founder)
 * @method RecyclingCenter setFoundingDate(Property\FoundingDate $foundingDate)
 * @method RecyclingCenter setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method RecyclingCenter setFunder(Property\Funder $funder)
 * @method RecyclingCenter setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method RecyclingCenter setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method RecyclingCenter setHasPOS(Property\HasPOS $hasPOS)
 * @method RecyclingCenter setIdentifier(Property\Identifier $identifier)
 * @method RecyclingCenter setImage(Property\Image $image)
 * @method RecyclingCenter setIsicV4(Property\IsicV4 $isicV4)
 * @method RecyclingCenter setLegalName(Property\LegalName $legalName)
 * @method RecyclingCenter setLeiCode(Property\LeiCode $leiCode)
 * @method RecyclingCenter setLocation(Property\Location $location)
 * @method RecyclingCenter setLogo(Property\Logo $logo)
 * @method RecyclingCenter setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method RecyclingCenter setMakesOffer(Property\MakesOffer $makesOffer)
 * @method RecyclingCenter setMember(Property\Member $member)
 * @method RecyclingCenter setMemberOf(Property\MemberOf $memberOf)
 * @method RecyclingCenter setNaics(Property\Naics $naics)
 * @method RecyclingCenter setName(Property\Name $name)
 * @method RecyclingCenter setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method RecyclingCenter setOpeningHours(Property\OpeningHours $openingHours)
 * @method RecyclingCenter setOwns(Property\Owns $owns)
 * @method RecyclingCenter setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method RecyclingCenter setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method RecyclingCenter setPotentialAction(Property\PotentialAction $potentialAction)
 * @method RecyclingCenter setPriceRange(Property\PriceRange $priceRange)
 * @method RecyclingCenter setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method RecyclingCenter setReview(Property\Review $review)
 * @method RecyclingCenter setSameAs(Property\SameAs $sameAs)
 * @method RecyclingCenter setSeeks(Property\Seeks $seeks)
 * @method RecyclingCenter setSponsor(Property\Sponsor $sponsor)
 * @method RecyclingCenter setSubOrganization(Property\SubOrganization $subOrganization)
 * @method RecyclingCenter setTaxID(Property\TaxID $taxID)
 * @method RecyclingCenter setTelephone(Property\Telephone $telephone)
 * @method RecyclingCenter setUrl(Property\Url $url)
 * @method RecyclingCenter setVatID(Property\VatID $vatID)
 */
class RecyclingCenter extends LocalBusiness {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/RecyclingCenter';
	}
}