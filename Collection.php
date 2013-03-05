<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * LICENSE:
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 59 Temple Place - Suite 330, Boston, MA 02111-1307, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @author      Nicholas Dunnaway
 * @copyright   2012 Digitalroot
 * @license     http://www.gnu.org/copyleft/gpl.html
 * @link        http://www.digitalroot.net
 */

/**
 * Collection Class
 */
class Collection implements ICollection
{
    /**
     * Item Storage
     * @var array
     */
    private $_items;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->_items = Array();
    }

    /**
     * Add an item to the collection.
     * @param $item
     * @return void
     */
    public function Add($item)
    {
        $this->_items[] = $item;
    }

    /**
     * Removes the first instance of an item from the collection.
     * @param $item
     * @return void
     */
    public function Remove($item)
    {
        $index = array_search($item, $this->_items, true);
        if ($index) 
        {
            $this->RemoveAt($index);
        }
    }

    /**
     * Removes an item from the collection at an index.
     * @param $index
     * @return void
     */
    public function RemoveAt($index)
    {
        unset($this->_items[$index]);
    }

    /**
     * Insert an item at an index.
     * @param $item
     * @param $index
     * @return void
     */
    public function Insert($item, $index)
    {
        $this->_items[$index] = $item;
    }

    /**
     * Count the number of items in the collection.
     * @return int
     */
    public function Count()
    {
        return count($this->_items);
    }

    /**
     * List of items in the collection.
     * @return array
     */
    public function Items()
    {
        return $this->_items;
    }
}
