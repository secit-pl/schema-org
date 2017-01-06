<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class BowlingAlley.
 * 
 * @method BowlingAlley setAdditionalType(Property\AdditionalType $additionalType)
 * @method BowlingAlley setAddress(Property\Address $address)
 * @method BowlingAlley setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method BowlingAlley setAlternateName(Property\AlternateName $alternateName)
 * @method BowlingAlley setAlumni(Property\Alumni $alumni)
 * @method BowlingAlley setAreaServed(Property\AreaServed $areaServed)
 * @method BowlingAlley setAward(Property\Award $award)
 * @method BowlingAlley setBrand(Property\Brand $brand)
 * @method BowlingAlley setContactPoint(Property\ContactPoint $contactPoint)
 * @method BowlingAlley setCurrenciesAccepted(Property\CurrenciesAccepted $currenciesAccepted)
 * @method BowlingAlley setDepartment(Property\Department $department)
 * @method BowlingAlley setDescription(Property\Description $description)
 * @method BowlingAlley setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method BowlingAlley setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method BowlingAlley setDuns(Property\Duns $duns)
 * @method BowlingAlley setEmail(Property\Email $email)
 * @method BowlingAlley setEmployee(Property\Employee $employee)
 * @method BowlingAlley setEvent(Property\Event $event)
 * @method BowlingAlley setFaxNumber(Property\FaxNumber $faxNumber)
 * @method BowlingAlley setFounder(Property\Founder $founder)
 * @method BowlingAlley setFoundingDate(Property\FoundingDate $foundingDate)
 * @method BowlingAlley setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method BowlingAlley setFunder(Property\Funder $funder)
 * @method BowlingAlley setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method BowlingAlley setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method BowlingAlley setHasPOS(Property\HasPOS $hasPOS)
 * @method BowlingAlley setImage(Property\Image $image)
 * @method BowlingAlley setIsicV4(Property\IsicV4 $isicV4)
 * @method BowlingAlley setLegalName(Property\LegalName $legalName)
 * @method BowlingAlley setLeiCode(Property\LeiCode $leiCode)
 * @method BowlingAlley setLocation(Property\Location $location)
 * @method BowlingAlley setLogo(Property\Logo $logo)
 * @method BowlingAlley setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method BowlingAlley setMakesOffer(Property\MakesOffer $makesOffer)
 * @method BowlingAlley setMember(Property\Member $member)
 * @method BowlingAlley setMemberOf(Property\MemberOf $memberOf)
 * @method BowlingAlley setNaics(Property\Naics $naics)
 * @method BowlingAlley setName(Property\Name $name)
 * @method BowlingAlley setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method BowlingAlley setOpeningHours(Property\OpeningHours $openingHours)
 * @method BowlingAlley setOwns(Property\Owns $owns)
 * @method BowlingAlley setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method BowlingAlley setPaymentAccepted(Property\PaymentAccepted $paymentAccepted)
 * @method BowlingAlley setPotentialAction(Property\PotentialAction $potentialAction)
 * @method BowlingAlley setPriceRange(Property\PriceRange $priceRange)
 * @method BowlingAlley setReview(Property\Review $review)
 * @method BowlingAlley setSameAs(Property\SameAs $sameAs)
 * @method BowlingAlley setSeeks(Property\Seeks $seeks)
 * @method BowlingAlley setSponsor(Property\Sponsor $sponsor)
 * @method BowlingAlley setSubOrganization(Property\SubOrganization $subOrganization)
 * @method BowlingAlley setTaxID(Property\TaxID $taxID)
 * @method BowlingAlley setTelephone(Property\Telephone $telephone)
 * @method BowlingAlley setUrl(Property\Url $url)
 * @method BowlingAlley setVatID(Property\VatID $vatID)
 */
class BowlingAlley extends SportsActivityLocation {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/BowlingAlley';
	}
}