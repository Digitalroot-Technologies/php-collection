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
 * Collection Interface
 */
interface ICollection
{
    /**
     * @abstract
     * @param $item
     * @return mixed
     */
    public function Add($item);

    /**
     * @abstract
     * @param $item
     * @return mixed
     */
    public function Remove($item);

    /**
     * @abstract
     * @param $index
     * @return mixed
     */
    public function RemoveAt($index);

    /**
     * @abstract
     * @param $item
     * @param $index
     * @return mixed
     */
    public function Insert($item, $index);

    /**
     * @abstract
     * @return mixed
     */
    public function Count();

    /**
     * @abstract
     * @return mixed
     */
    public function Items();
}
