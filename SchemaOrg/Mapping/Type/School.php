<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class School.
 * 
 * @method School setAdditionalType(Property\AdditionalType $additionalType)
 * @method School setAddress(Property\Address $address)
 * @method School setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method School setAlternateName(Property\AlternateName $alternateName)
 * @method School setAlumni(Property\Alumni $alumni)
 * @method School setAreaServed(Property\AreaServed $areaServed)
 * @method School setAward(Property\Award $award)
 * @method School setBrand(Property\Brand $brand)
 * @method School setContactPoint(Property\ContactPoint $contactPoint)
 * @method School setDepartment(Property\Department $department)
 * @method School setDescription(Property\Description $description)
 * @method School setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method School setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method School setDuns(Property\Duns $duns)
 * @method School setEmail(Property\Email $email)
 * @method School setEmployee(Property\Employee $employee)
 * @method School setEvent(Property\Event $event)
 * @method School setFaxNumber(Property\FaxNumber $faxNumber)
 * @method School setFounder(Property\Founder $founder)
 * @method School setFoundingDate(Property\FoundingDate $foundingDate)
 * @method School setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method School setFunder(Property\Funder $funder)
 * @method School setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method School setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method School setHasPOS(Property\HasPOS $hasPOS)
 * @method School setIdentifier(Property\Identifier $identifier)
 * @method School setImage(Property\Image $image)
 * @method School setIsicV4(Property\IsicV4 $isicV4)
 * @method School setLegalName(Property\LegalName $legalName)
 * @method School setLeiCode(Property\LeiCode $leiCode)
 * @method School setLocation(Property\Location $location)
 * @method School setLogo(Property\Logo $logo)
 * @method School setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method School setMakesOffer(Property\MakesOffer $makesOffer)
 * @method School setMember(Property\Member $member)
 * @method School setMemberOf(Property\MemberOf $memberOf)
 * @method School setNaics(Property\Naics $naics)
 * @method School setName(Property\Name $name)
 * @method School setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method School setOwns(Property\Owns $owns)
 * @method School setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method School setPotentialAction(Property\PotentialAction $potentialAction)
 * @method School setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method School setReview(Property\Review $review)
 * @method School setSameAs(Property\SameAs $sameAs)
 * @method School setSeeks(Property\Seeks $seeks)
 * @method School setSponsor(Property\Sponsor $sponsor)
 * @method School setSubOrganization(Property\SubOrganization $subOrganization)
 * @method School setTaxID(Property\TaxID $taxID)
 * @method School setTelephone(Property\Telephone $telephone)
 * @method School setUrl(Property\Url $url)
 * @method School setVatID(Property\VatID $vatID)
 */
class School extends EducationalOrganization {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/School';
	}
}