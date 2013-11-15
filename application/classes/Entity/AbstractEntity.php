<?php

namespace Entity;

use BadMethodCallExeption;
use InvalidArgumentException;

abstract class AbstractEntity {

	protected $_object = array();

	/**
	 * Handles magic getters and setters
	 * @param  string $method
	 * @param  array $args   [description]
	 * @return [type]         [description]
	 */
	public function __call($method, array $args)
	{
		// If the method name is less than or equal to four characters
		// then it's not a getter or a setter
		if (strlen($method) <= 4)
			throw new BadMethodCallExeption('Method not found');

		// Whether we are setting or getting
		$type = substr($method, 0, 3);

		if ($type !== 'get' AND $type !== 'set')
			throw new BadMethodCallExeption('Method not found');

		// Get the property name
		$property = substr($method, 4);

		// Make sure the property
		if ( ! array_key_exists($property, $this->_object))
			throw new InvalidArgumentException('Property not found');

		if ($type === 'get')
		{
			// Return the property
			return $this->_object[$property];
		}
		else if ($type === 'set')
		{
			// Set the property
			$this->_object[$property] = $args[0];

			// Fluent interface
			return $this;
		}
	}

	public function as_array()
	{
		return $this->_object;
	}

	public function from_array(array $values)
	{
		foreach ($this->_object as $key => $value)
		{
			if (array_key_exists($key, $values))
			{
				$setter = 'set_'.$key;
				$this->$setter($values[$key]);
			}
		}

		return $this;
	}
}