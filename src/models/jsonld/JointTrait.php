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

/**
 * schema.org version: v15.0-release
 * Trait for Joint.
 *
 * @author    nystudio107
 * @package   Seomatic
 * @see       https://schema.org/Joint
 */
trait JointTrait
{
    /**
     * The name given to how bone physically connects to each other.
     *
     * @var string|Text
     */
    public $structuralClass;

    /**
     * The degree of mobility the joint allows.
     *
     * @var string|MedicalEntity|Text
     */
    public $functionalClass;

    /**
     * The biomechanical properties of the bone.
     *
     * @var string|Text
     */
    public $biomechnicalClass;
}
