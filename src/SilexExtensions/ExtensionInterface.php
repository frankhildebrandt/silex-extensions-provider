<?php

namespace SilexExtensions;

use Pimple\ServiceProviderInterface;
use Silex\Api\ControllerProviderInterface;

/**
 * Interface ExtensionInterface
 * @package SilexExtensions
 */
interface ExtensionInterface {

    /**
     * returns the identifier for the extension
     *
     * the identifier has to be unique
     *
     * @return string
     */
    public function getExtensionIdentifier();

    /**
     * returns the public serviceprovider for the extension
     *
     * @return ServiceProviderInterface[]
     */
    public function getServiceProvider();

    /**
     * returns an hash with features supported by the extension
     *
     * @return string[]
     */
    public function getProvidedFeatures();

    /**
     * returns an hash with features required by the extension
     *
     * @return string[]
     */
    public function getRequiredFeatures();

    /**
     * returns an array with event subscriber from the extension
     * @return mixed
     */
    public function getEventSubscriber();
}