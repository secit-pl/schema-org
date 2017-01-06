<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class MusicStore.
 * 
 * @method MusicStore setAdditionalType(Property\AdditionalType $additionalType)
 * @method MusicStore setAddress(Property\Address $address)
 * @method MusicStore setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method MusicStore setAlternateName(Property\AlternateName $alternateName)
 * @method MusicStore setAlumni(Property\Alumni $alumni)
 * @method MusicStore setAreaServed(Property\AreaServed $areaServed)
 * @method MusicStore setAward(Property\Award $award)
 * @method MusicStore setBrand(Property\Brand $brand)
 * @method MusicStore setContactPoint(Property\ContactPoint $contactPoint)
 * @method MusicStore setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method MusicStore setDepartment(Property\Department $department)
 * @method MusicStore setDescription(Property\Description $description)
 * @method MusicStore setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method MusicStore setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method MusicStore setDuns(Property\Duns $duns)
 * @method MusicStore setEmail(Property\Email $email)
 * @method MusicStore setEmployee(Property\Employee $employee)
 * @method MusicStore setEvent(Property\Event $event)
 * @method MusicStore setFaxNumber(Property\FaxNumber $faxNumber)
 * @method MusicStore setFounder(Property\Founder $founder)
 * @method MusicStore setFoundingDate(Property\FoundingDate $foundingDate)
 * @method MusicStore setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method MusicStore setFunder(Property\Funder $funder)
 * @method MusicStore setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method MusicStore setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method MusicStore setHasPOS(Property\HasPOS $hasPOS)
 * @method MusicStore setImage(Property\Image $image)
 * @method MusicStore setIsicV4(Property\IsicV4 $isicV4)
 * @method MusicStore setLegalName(Property\LegalName $legalName)
 * @method MusicStore setLeiCode(Property\LeiCode $leiCode)
 * @method MusicStore setLocation(Property\Location $location)
 * @method MusicStore setLogo(Property\Logo $logo)
 * @method MusicStore setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method MusicStore setMakesOffer(Property\MakesOffer $makesOffer)
 * @method MusicStore setMember(Property\Member $member)
 * @method MusicStore setMemberOf(Property\MemberOf $memberOf)
 * @method MusicStore setNaics(Property\Naics $naics)
 * @method MusicStore setName(Property\Name $name)
 * @method MusicStore setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method MusicStore setOpeningHours(Property\OpeningHours $openingHours)
 * @method MusicStore setOwns(Property\Owns $owns)
 * @method MusicStore setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method MusicStore setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method MusicStore setPotentialAction(Property\PotentialAction $potentialAction)
 * @method MusicStore setPriceRange(Property\PriceRange $priceRange)
 * @method MusicStore setReview(Property\Review $review)
 * @method MusicStore setSameAs(Property\SameAs $sameAs)
 * @method MusicStore setSeeks(Property\Seeks $seeks)
 * @method MusicStore setSponsor(Property\Sponsor $sponsor)
 * @method MusicStore setSubOrganization(Property\SubOrganization $subOrganization)
 * @method MusicStore setTaxID(Property\TaxID $taxID)
 * @method MusicStore setTelephone(Property\Telephone $telephone)
 * @method MusicStore setUrl(Property\Url $url)
 * @method MusicStore setVatID(Property\VatID $vatID)
 */
class MusicStore extends Store {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/MusicStore';
	}
}