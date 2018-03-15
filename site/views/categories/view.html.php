<?php

/**
 * @package     Simple File Manager
 * @author      Giovanni Mansillo
 * @license     GNU General Public License version 2 or later; see LICENSE.md
 */
defined('_JEXEC') or die;

/**
 * Content categories view.
 *
 * @since  1.6
 */
class SimplefilemanagerViewCategories extends JViewCategories {

    /**
     * Language key for default page heading
     *
     * @var    string
     * @since  3.2
     */
    protected $pageHeading = 'COM_SIMPLEFILEMANAGER_DEFAULT_PAGE_TITLE';

    /**
     * @var    string  The name of the extension for the category
     * @since  3.2
     */
    protected $extension = 'com_simplefilemanager';

}