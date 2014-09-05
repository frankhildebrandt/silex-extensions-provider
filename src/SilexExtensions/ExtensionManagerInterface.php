<?php


namespace SilexExtensions;

/**
 * Interface ExtensionManagerInterface
 * @package SilexExtensions
 */
interface ExtensionManagerInterface {

    /**
     * returns all installed extensions
     * @return ExtensionInterface[]
     */
    public function getExtensions();

    /**
     * registers or updates a new extension
     * @return mixed
     */
    public function registerExtension();
}