<?php

namespace SilexExtensions;

/**
 * Interface ExtensionInterface
 * @package SilexExtensions
 */
interface ExtensionInterface {

    /**
     * returns the identifier for this extension
     *
     * the identifier has to be unique
     *
     * @return string
     */
    public function getExtensionIdentifier();

} 