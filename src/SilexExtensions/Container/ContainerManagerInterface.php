<?php


namespace SilexExtensions\Container;

/**
 * Interface ContainerManagerInterface
 * @package SilexExtensions\Container
 */
interface ContainerManagerInterface
{

    /**
     * installs a container into the system
     * @param $pathToContainer
     * @return boolean
     */
    public function install($pathToContainer);

    /**
     * removed a container from the system
     * @param $pathToContainer
     * @return boolean
     */
    public function remove($pathToContainer);

    /**
     * build a new container from sourcepath
     * @param $pathToSource
     * @param $targetContainerPath
     * @return boolean
     */
    public function build($pathToSource, $targetContainerPath);

    /**
     * returns a list of installed container
     * @return array
     */
    public function getList();
}