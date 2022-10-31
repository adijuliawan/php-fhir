<?php declare(strict_types=1);

namespace RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRLocation;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: October 31st, 2022 07:37+0000
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2022 Daniel Carbone (daniel.p.carbone@gmail.com)
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *        http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 *
 * FHIR Copyright Notice:
 *
 *  * #%L
 *  * org.hl7.fhir.r5
 *  * %%
 *  * Copyright (C) 2014 - 2019 Health Level 7
 *  * %%
 *  * Licensed under the Apache License, Version 2.0 (the "License");
 *  * you may not use this file except in compliance with the License.
 *  * You may obtain a copy of the License at
 *  *
 *  *      http://www.apache.org/licenses/LICENSE-2.0
 *  *
 *  * Unless required by applicable law or agreed to in writing, software
 *  * distributed under the License is distributed on an "AS IS" BASIS,
 *  * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  * See the License for the specific language governing permissions and
 *  * limitations under the License.
 *  * #L%
 *  
 * 
 * 
 *   Copyright (c) 2011+, HL7, Inc.
 *   All rights reserved.
 * 
 *   Redistribution and use in source and binary forms, with or without modification,
 *   are permitted provided that the following conditions are met:
 * 
 *    * Redistributions of source code must retain the above copyright notice, this
 *      list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright notice,
 *      this list of conditions and the following disclaimer in the documentation
 *      and/or other materials provided with the distribution.
 *    * Neither the name of HL7 nor the names of its contributors may be used to
 *      endorse or promote products derived from this software without specific
 *      prior written permission.
 * 
 *   THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 *   ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 *   WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 *   IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
 *   INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 *   NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 *   PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 *   WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *   ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *   POSSIBILITY OF SUCH DAMAGE.
 * 
 * 
 *   Generated on Sat, May 28, 2022 12:47+1000 for FHIR v4.3.0
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRDecimal;
use RistekUSDI\FHIR\R4B\FHIRElement\FHIRExtension;
use RistekUSDI\FHIR\R4B\FHIRStringPrimitive;
use RistekUSDI\FHIR\R4B\PHPFHIRConstants;
use RistekUSDI\FHIR\R4B\PHPFHIRTypeInterface;

/**
 * Details and position information for a physical place where services are
 * provided and resources and participants may be stored, found, contained, or
 * accommodated.
 *
 * Class FHIRLocationPosition
 * @package \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRLocation
 */
class FHIRLocationPosition extends FHIRBackboneElement
{
    // name of FHIR type this class describes
    const FHIR_TYPE_NAME = PHPFHIRConstants::TYPE_NAME_LOCATION_DOT_POSITION;
    const FIELD_LONGITUDE = 'longitude';
    const FIELD_LONGITUDE_EXT = '_longitude';
    const FIELD_LATITUDE = 'latitude';
    const FIELD_LATITUDE_EXT = '_latitude';
    const FIELD_ALTITUDE = 'altitude';
    const FIELD_ALTITUDE_EXT = '_altitude';

    /** @var string */
    private $_xmlns = '';

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Longitude. The value domain and the interpretation are the same as for the text
     * of the longitude element in KML (see notes below).
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRDecimalPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRDecimal
     */
    protected ?FHIRDecimal $longitude = null;

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Latitude. The value domain and the interpretation are the same as for the text
     * of the latitude element in KML (see notes below).
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRDecimalPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRDecimal
     */
    protected ?FHIRDecimal $latitude = null;

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Altitude. The value domain and the interpretation are the same as for the text
     * of the altitude element in KML (see notes below).
     *
     * @var null|\RistekUSDI\FHIR\R4B\FHIRDecimalPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRDecimal
     */
    protected ?FHIRDecimal $altitude = null;

    /**
     * Validation map for fields in type Location.Position
     * @var array
     */
    private static array $_validationRules = [    ];

    /**
     * FHIRLocationPosition Constructor
     * @param null|array $data
     */
    public function __construct($data = null)
    {
        if (null === $data || [] === $data) {
            return;
        }
        if (!is_array($data)) {
            throw new \InvalidArgumentException(sprintf(
                'FHIRLocationPosition::_construct - $data expected to be null or array, %s seen',
                gettype($data)
            ));
        }
        parent::__construct($data);
        if (isset($data[self::FIELD_LONGITUDE]) || isset($data[self::FIELD_LONGITUDE_EXT])) {
            $value = $data[self::FIELD_LONGITUDE] ?? null;
            $ext = (isset($data[self::FIELD_LONGITUDE_EXT]) && is_array($data[self::FIELD_LONGITUDE_EXT])) ? $data[self::FIELD_LONGITUDE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setLongitude($value);
                } else if (is_array($value)) {
                    $this->setLongitude(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setLongitude(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setLongitude(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_LATITUDE]) || isset($data[self::FIELD_LATITUDE_EXT])) {
            $value = $data[self::FIELD_LATITUDE] ?? null;
            $ext = (isset($data[self::FIELD_LATITUDE_EXT]) && is_array($data[self::FIELD_LATITUDE_EXT])) ? $data[self::FIELD_LATITUDE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setLatitude($value);
                } else if (is_array($value)) {
                    $this->setLatitude(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setLatitude(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setLatitude(new FHIRDecimal($ext));
            }
        }
        if (isset($data[self::FIELD_ALTITUDE]) || isset($data[self::FIELD_ALTITUDE_EXT])) {
            $value = $data[self::FIELD_ALTITUDE] ?? null;
            $ext = (isset($data[self::FIELD_ALTITUDE_EXT]) && is_array($data[self::FIELD_ALTITUDE_EXT])) ? $data[self::FIELD_ALTITUDE_EXT] : [];
            if (null !== $value) {
                if ($value instanceof FHIRDecimal) {
                    $this->setAltitude($value);
                } else if (is_array($value)) {
                    $this->setAltitude(new FHIRDecimal(array_merge($ext, $value)));
                } else {
                    $this->setAltitude(new FHIRDecimal([FHIRDecimal::FIELD_VALUE => $value] + $ext));
                }
            } elseif ([] !== $ext) {
                $this->setAltitude(new FHIRDecimal($ext));
            }
        }
    }

    /**
     * @return string
     */
    public function _getFHIRTypeName(): string
    {
        return self::FHIR_TYPE_NAME;
    }

    /**
     * @return string
     */
    public function _getFHIRXMLElementDefinition(): string
    {
        $xmlns = $this->_getFHIRXMLNamespace();
        if ('' !==  $xmlns) {
            $xmlns = " xmlns=\"{$xmlns}\"";
        }
        return "<LocationPosition{$xmlns}></LocationPosition>";
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Longitude. The value domain and the interpretation are the same as for the text
     * of the longitude element in KML (see notes below).
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRDecimalPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRDecimal
     */
    public function getLongitude(): ?FHIRDecimal
    {
        return $this->longitude;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Longitude. The value domain and the interpretation are the same as for the text
     * of the longitude element in KML (see notes below).
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRDecimalPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRDecimal $longitude
     * @return static
     */
    public function setLongitude($longitude = null): object
    {
        if (null !== $longitude && !($longitude instanceof FHIRDecimal)) {
            $longitude = new FHIRDecimal($longitude);
        }
        $this->_trackValueSet($this->longitude, $longitude);
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Latitude. The value domain and the interpretation are the same as for the text
     * of the latitude element in KML (see notes below).
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRDecimalPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRDecimal
     */
    public function getLatitude(): ?FHIRDecimal
    {
        return $this->latitude;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Latitude. The value domain and the interpretation are the same as for the text
     * of the latitude element in KML (see notes below).
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRDecimalPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRDecimal $latitude
     * @return static
     */
    public function setLatitude($latitude = null): object
    {
        if (null !== $latitude && !($latitude instanceof FHIRDecimal)) {
            $latitude = new FHIRDecimal($latitude);
        }
        $this->_trackValueSet($this->latitude, $latitude);
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Altitude. The value domain and the interpretation are the same as for the text
     * of the altitude element in KML (see notes below).
     *
     * @return null|\RistekUSDI\FHIR\R4B\FHIRDecimalPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRDecimal
     */
    public function getAltitude(): ?FHIRDecimal
    {
        return $this->altitude;
    }

    /**
     * A rational number with implicit precision
     * Do not use an IEEE type floating point type, instead use something that works
     * like a true decimal, with inbuilt precision (e.g. Java BigInteger)
     * If the element is present, it must have either a \@value, an \@id, or extensions
     *
     * Altitude. The value domain and the interpretation are the same as for the text
     * of the altitude element in KML (see notes below).
     *
     * @param null|\RistekUSDI\FHIR\R4B\FHIRDecimalPrimitive|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRDecimal $altitude
     * @return static
     */
    public function setAltitude($altitude = null): object
    {
        if (null !== $altitude && !($altitude instanceof FHIRDecimal)) {
            $altitude = new FHIRDecimal($altitude);
        }
        $this->_trackValueSet($this->altitude, $altitude);
        $this->altitude = $altitude;
        return $this;
    }

    /**
     * Returns the validation rules that this type's fields must comply with to be considered "valid"
     * The returned array is in ["fieldname[.offset]" => ["rule" => {constraint}]]
     *
     * @return array
     */
    public function _getValidationRules(): array
    {
        return self::$_validationRules;
    }

    /**
     * Validates that this type conforms to the specifications set forth for it by FHIR.  An empty array must be seen as
     * passing.
     *
     * @return array
     */
    public function _getValidationErrors(): array
    {
        $errs = parent::_getValidationErrors();
        $validationRules = $this->_getValidationRules();
        if (null !== ($v = $this->getLongitude())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LONGITUDE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getLatitude())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_LATITUDE] = $fieldErrs;
            }
        }
        if (null !== ($v = $this->getAltitude())) {
            if ([] !== ($fieldErrs = $v->_getValidationErrors())) {
                $errs[self::FIELD_ALTITUDE] = $fieldErrs;
            }
        }
        if (isset($validationRules[self::FIELD_LONGITUDE])) {
            $v = $this->getLongitude();
            foreach($validationRules[self::FIELD_LONGITUDE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_LOCATION_DOT_POSITION, self::FIELD_LONGITUDE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LONGITUDE])) {
                        $errs[self::FIELD_LONGITUDE] = [];
                    }
                    $errs[self::FIELD_LONGITUDE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_LATITUDE])) {
            $v = $this->getLatitude();
            foreach($validationRules[self::FIELD_LATITUDE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_LOCATION_DOT_POSITION, self::FIELD_LATITUDE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_LATITUDE])) {
                        $errs[self::FIELD_LATITUDE] = [];
                    }
                    $errs[self::FIELD_LATITUDE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ALTITUDE])) {
            $v = $this->getAltitude();
            foreach($validationRules[self::FIELD_ALTITUDE] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_LOCATION_DOT_POSITION, self::FIELD_ALTITUDE, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ALTITUDE])) {
                        $errs[self::FIELD_ALTITUDE] = [];
                    }
                    $errs[self::FIELD_ALTITUDE][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_MODIFIER_EXTENSION])) {
            $v = $this->getModifierExtension();
            foreach($validationRules[self::FIELD_MODIFIER_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_BACKBONE_ELEMENT, self::FIELD_MODIFIER_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_MODIFIER_EXTENSION])) {
                        $errs[self::FIELD_MODIFIER_EXTENSION] = [];
                    }
                    $errs[self::FIELD_MODIFIER_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_EXTENSION])) {
            $v = $this->getExtension();
            foreach($validationRules[self::FIELD_EXTENSION] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_EXTENSION, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_EXTENSION])) {
                        $errs[self::FIELD_EXTENSION] = [];
                    }
                    $errs[self::FIELD_EXTENSION][$rule] = $err;
                }
            }
        }
        if (isset($validationRules[self::FIELD_ID])) {
            $v = $this->getId();
            foreach($validationRules[self::FIELD_ID] as $rule => $constraint) {
                $err = $this->_performValidation(PHPFHIRConstants::TYPE_NAME_ELEMENT, self::FIELD_ID, $rule, $constraint, $v);
                if (null !== $err) {
                    if (!isset($errs[self::FIELD_ID])) {
                        $errs[self::FIELD_ID] = [];
                    }
                    $errs[self::FIELD_ID][$rule] = $err;
                }
            }
        }
        return $errs;
    }

    /**
     * @param null|string|\DOMElement $element
     * @param null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationPosition $type
     * @param null|int $libxmlOpts
     * @return null|\RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationPosition
     */
    public static function xmlUnserialize($element = null, PHPFHIRTypeInterface $type = null, ?int $libxmlOpts = 591872): ?PHPFHIRTypeInterface
    {
        if (null === $element) {
            return null;
        }
        if (is_string($element)) {
            libxml_use_internal_errors(true);
            $dom = new \DOMDocument();
            if (false === $dom->loadXML($element, $libxmlOpts)) {
                throw new \DomainException(sprintf('FHIRLocationPosition::xmlUnserialize - String provided is not parseable as XML: %s', implode(', ', array_map(function(\libXMLError $err) { return $err->message; }, libxml_get_errors()))));
            }
            libxml_use_internal_errors(false);
            $element = $dom->documentElement;
        }
        if (!($element instanceof \DOMElement)) {
            throw new \InvalidArgumentException(sprintf('FHIRLocationPosition::xmlUnserialize - $node value must be null, \\DOMElement, or valid XML string, %s seen', is_object($element) ? get_class($element) : gettype($element)));
        }
        if (null === $type) {
            $type = new FHIRLocationPosition(null);
        } elseif (!is_object($type) || !($type instanceof FHIRLocationPosition)) {
            throw new \RuntimeException(sprintf(
                'FHIRLocationPosition::xmlUnserialize - $type must be instance of \RistekUSDI\FHIR\R4B\FHIRElement\FHIRBackboneElement\FHIRLocation\FHIRLocationPosition or null, %s seen.',
                is_object($type) ? get_class($type) : gettype($type)
            ));
        }
        if ('' === $type->_getFHIRXMLNamespace() && (null === $element->parentNode || $element->namespaceURI !== $element->parentNode->namespaceURI)) {
            $type->_setFHIRXMLNamespace($element->namespaceURI);
        }
        for ($i = 0; $i < $element->childNodes->length; $i++) {
            $n = $element->childNodes->item($i);
            if (!($n instanceof \DOMElement)) {
                continue;
            }
            if (self::FIELD_LONGITUDE === $n->nodeName) {
                $type->setLongitude(FHIRDecimal::xmlUnserialize($n));
            } elseif (self::FIELD_LATITUDE === $n->nodeName) {
                $type->setLatitude(FHIRDecimal::xmlUnserialize($n));
            } elseif (self::FIELD_ALTITUDE === $n->nodeName) {
                $type->setAltitude(FHIRDecimal::xmlUnserialize($n));
            } elseif (self::FIELD_MODIFIER_EXTENSION === $n->nodeName) {
                $type->addModifierExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_EXTENSION === $n->nodeName) {
                $type->addExtension(FHIRExtension::xmlUnserialize($n));
            } elseif (self::FIELD_ID === $n->nodeName) {
                $type->setId(FHIRStringPrimitive::xmlUnserialize($n));
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_LONGITUDE);
        if (null !== $n) {
            $pt = $type->getLongitude();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setLongitude($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_LATITUDE);
        if (null !== $n) {
            $pt = $type->getLatitude();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setLatitude($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_ALTITUDE);
        if (null !== $n) {
            $pt = $type->getAltitude();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setAltitude($n->nodeValue);
            }
        }
        $n = $element->attributes->getNamedItem(self::FIELD_ID);
        if (null !== $n) {
            $pt = $type->getId();
            if (null !== $pt) {
                $pt->setValue($n->nodeValue);
            } else {
                $type->setId($n->nodeValue);
            }
        }
        return $type;
    }

    /**
     * @param null|\DOMElement $element
     * @param null|int $libxmlOpts
     * @return \DOMElement
     */
    public function xmlSerialize(\DOMElement $element = null, ?int $libxmlOpts = 591872): \DOMElement
    {
        if (null === $element) {
            $dom = new \DOMDocument();
            $dom->loadXML($this->_getFHIRXMLElementDefinition(), $libxmlOpts);
            $element = $dom->documentElement;
        } elseif (null === $element->namespaceURI && '' !== ($xmlns = $this->_getFHIRXMLNamespace())) {
            $element->setAttribute('xmlns', $xmlns);
        }
        parent::xmlSerialize($element);
        if (null !== ($v = $this->getLongitude())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_LONGITUDE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getLatitude())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_LATITUDE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        if (null !== ($v = $this->getAltitude())) {
            $telement = $element->ownerDocument->createElement(self::FIELD_ALTITUDE);
            $element->appendChild($telement);
            $v->xmlSerialize($telement);
        }
        return $element;
    }

    /**
     * @return \stdClass
     */
    public function jsonSerialize()
    {
        $out = parent::jsonSerialize();
        if (null !== ($v = $this->getLongitude())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_LONGITUDE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDecimal::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_LONGITUDE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getLatitude())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_LATITUDE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDecimal::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_LATITUDE_EXT} = $ext;
            }
        }
        if (null !== ($v = $this->getAltitude())) {
            if (null !== ($val = $v->getValue())) {
                $out->{self::FIELD_ALTITUDE} = $val;
            }
            $ext = $v->jsonSerialize();
            unset($ext->{FHIRDecimal::FIELD_VALUE});
            if (count((array)$ext) > 0) {
                $out->{self::FIELD_ALTITUDE_EXT} = $ext;
            }
        }

        return $out;
    }


    /**
     * @return string
     */
    public function __toString(): string
    {
        return self::FHIR_TYPE_NAME;
    }
}