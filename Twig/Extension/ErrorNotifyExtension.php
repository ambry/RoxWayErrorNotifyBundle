<?php

namespace RoxWay\Bundle\ErrorNotifyBundle\Twig\Extension;

class ErrorNotifyExtension extends \Twig_Extension
{
    /**
     * Return an array of custom filters defined in this class
     *
     * @return array
     */
    public function getFilters()
    {
        return array(
            'display' => new \Twig_Filter_Method($this, 'displayFilter', array (
                'pre_escape' => 'html',
                'is_safe' => array('html'),
            )),
        );
    }

    /**
     * Format an item for display
     *
     * @param mixed item
     */
    public function displayFilter($item)
    {
        if (is_string($item)) {
            return $item;
        } elseif (is_object($item) && method_exists($item, '__toString')) {
            return $item->__toString();
        }

        ob_start();
        var_dump($item);
        $str = ob_get_clean();

        return $str;
    }

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'roxway';
    }
}
