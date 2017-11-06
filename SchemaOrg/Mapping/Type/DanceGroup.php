<?php

namespace SecIT\SchemaOrg\Mapping\Type;

use SecIT\SchemaOrg\Mapping\Property;

/**
 * Class DanceGroup.
 * 
 * @method DanceGroup setAdditionalType(Property\AdditionalType $additionalType)
 * @method DanceGroup setAddress(Property\Address $address)
 * @method DanceGroup setAggregateRating(Property\AggregateRating $aggregateRating)
 * @method DanceGroup setAlternateName(Property\AlternateName $alternateName)
 * @method DanceGroup setAlumni(Property\Alumni $alumni)
 * @method DanceGroup setAreaServed(Property\AreaServed $areaServed)
 * @method DanceGroup setAward(Property\Award $award)
 * @method DanceGroup setBrand(Property\Brand $brand)
 * @method DanceGroup setContactPoint(Property\ContactPoint $contactPoint)
 * @method DanceGroup setDepartment(Property\Department $department)
 * @method DanceGroup setDescription(Property\Description $description)
 * @method DanceGroup setDisambiguatingDescription(Property\DisambiguatingDescription $disambiguatingDescription)
 * @method DanceGroup setDissolutionDate(Property\DissolutionDate $dissolutionDate)
 * @method DanceGroup setDuns(Property\Duns $duns)
 * @method DanceGroup setEmail(Property\Email $email)
 * @method DanceGroup setEmployee(Property\Employee $employee)
 * @method DanceGroup setEvent(Property\Event $event)
 * @method DanceGroup setFaxNumber(Property\FaxNumber $faxNumber)
 * @method DanceGroup setFounder(Property\Founder $founder)
 * @method DanceGroup setFoundingDate(Property\FoundingDate $foundingDate)
 * @method DanceGroup setFoundingLocation(Property\FoundingLocation $foundingLocation)
 * @method DanceGroup setFunder(Property\Funder $funder)
 * @method DanceGroup setGlobalLocationNumber(Property\GlobalLocationNumber $globalLocationNumber)
 * @method DanceGroup setHasOfferCatalog(Property\HasOfferCatalog $hasOfferCatalog)
 * @method DanceGroup setHasPOS(Property\HasPOS $hasPOS)
 * @method DanceGroup setIdentifier(Property\Identifier $identifier)
 * @method DanceGroup setImage(Property\Image $image)
 * @method DanceGroup setIsicV4(Property\IsicV4 $isicV4)
 * @method DanceGroup setLegalName(Property\LegalName $legalName)
 * @method DanceGroup setLeiCode(Property\LeiCode $leiCode)
 * @method DanceGroup setLocation(Property\Location $location)
 * @method DanceGroup setLogo(Property\Logo $logo)
 * @method DanceGroup setMainEntityOfPage(Property\MainEntityOfPage $mainEntityOfPage)
 * @method DanceGroup setMakesOffer(Property\MakesOffer $makesOffer)
 * @method DanceGroup setMember(Property\Member $member)
 * @method DanceGroup setMemberOf(Property\MemberOf $memberOf)
 * @method DanceGroup setNaics(Property\Naics $naics)
 * @method DanceGroup setName(Property\Name $name)
 * @method DanceGroup setNumberOfEmployees(Property\NumberOfEmployees $numberOfEmployees)
 * @method DanceGroup setOwns(Property\Owns $owns)
 * @method DanceGroup setParentOrganization(Property\ParentOrganization $parentOrganization)
 * @method DanceGroup setPotentialAction(Property\PotentialAction $potentialAction)
 * @method DanceGroup setPublishingPrinciples(Property\PublishingPrinciples $publishingPrinciples)
 * @method DanceGroup setReview(Property\Review $review)
 * @method DanceGroup setSameAs(Property\SameAs $sameAs)
 * @method DanceGroup setSeeks(Property\Seeks $seeks)
 * @method DanceGroup setSponsor(Property\Sponsor $sponsor)
 * @method DanceGroup setSubOrganization(Property\SubOrganization $subOrganization)
 * @method DanceGroup setTaxID(Property\TaxID $taxID)
 * @method DanceGroup setTelephone(Property\Telephone $telephone)
 * @method DanceGroup setUrl(Property\Url $url)
 * @method DanceGroup setVatID(Property\VatID $vatID)
 */
class DanceGroup extends Organization {

	/**
	 * Get schema URL.
	 * 
	 * @return string
	 */
	public function getSchemaUrl() {
		return 'https://schema.org/DanceGroup';
	}
}