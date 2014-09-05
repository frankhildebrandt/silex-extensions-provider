<?php


namespace SilexExtensions\Container;

/**
 * Interface ContainerInterface
 * @package SilexExtensions
 */
interface ContainerInterface {

    /**
     * returns the container meta information
     * @return MetaDataInterface
     */
    public function getMetaData();
} 