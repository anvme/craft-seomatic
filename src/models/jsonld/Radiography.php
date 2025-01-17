<?php

/**
 * SEOmatic plugin for Craft CMS 3
 *
 * A turnkey SEO implementation for Craft CMS that is comprehensive, powerful, and flexible
 *
 * @link      https://nystudio107.com
 * @copyright Copyright (c) 2023 nystudio107
 */

namespace nystudio107\seomatic\models\jsonld;

use nystudio107\seomatic\models\MetaJsonLd;

/**
 * schema.org version: v15.0-release
 * Radiography - Radiography is an imaging technique that uses electromagnetic radiation
 * other than visible light, especially X-rays, to view the internal structure
 * of a non-uniformly composed and opaque object such as the human body.
 *
 * @author    nystudio107
 * @package   Seomatic
 * @see       https://schema.org/Radiography
 */
class Radiography extends MetaJsonLd implements RadiographyInterface
{
	use RadiographyTrait;

	/**
	 * The Schema.org Type Name
	 *
	 * @var string
	 */
	public static $schemaTypeName = 'Radiography';

	/**
	 * The Schema.org Type Scope
	 *
	 * @var string
	 */
	public static $schemaTypeScope = 'https://schema.org/Radiography';

	/**
	 * The Schema.org Type Extends
	 *
	 * @var string
	 */
	public static $schemaTypeExtends = 'Thing';

	/**
	 * The Schema.org Type Description
	 *
	 * @var string
	 */
	public static $schemaTypeDescription = 'Radiography is an imaging technique that uses electromagnetic radiation other than visible light, especially X-rays, to view the internal structure of a non-uniformly composed and opaque object such as the human body.';


	/**
	 * @inheritdoc
	 */
	public function getSchemaPropertyNames(): array
	{
		return array_keys($this->getSchemaPropertyExpectedTypes());
	}


	/**
	 * @inheritdoc
	 */
	public function getSchemaPropertyExpectedTypes(): array
	{
		return [

		];
	}


	/**
	 * @inheritdoc
	 */
	public function getSchemaPropertyDescriptions(): array
	{
		return [

		];
	}


	/**
	 * @inheritdoc
	 */
	public function getGoogleRequiredSchema(): array
	{
		return [];
	}


	/**
	 * @inheritdoc
	 */
	public function getGoogleRecommendedSchema(): array
	{
		return [];
	}


	/**
	 * @inheritdoc
	 */
	public function defineRules(): array
	{
		$rules = parent::defineRules();
		    $rules = array_merge($rules, [
		        [$this->getSchemaPropertyNames(), 'validateJsonSchema'],
		        [$this->getGoogleRequiredSchema(), 'required', 'on' => ['google'], 'message' => 'This property is required by Google.'],
		        [$this->getGoogleRecommendedSchema(), 'required', 'on' => ['google'], 'message' => 'This property is recommended by Google.']
		    ]);

		    return $rules;
	}
}
