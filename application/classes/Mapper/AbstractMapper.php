<?php

namespace Mapper;

use DB;
use Entity\AbstractEntity as AbstractEntity;

abstract class AbstractMapper {

	/**
	 * @var Entity\Scenario
	 */
	protected $_prototype = NULL;

	/**
	 * @var string
	 */
	protected $_table_name = '';

	/*
	 * @param Entity\Scenario $prototype the prototype to be used
	 */
	public function __construct(AbstractEntity $prototype = NULL)
	{
		$this->_prototype = $prototype;
	}

	public function find_by_id($id)
	{
		$data = DB::select()
			->from($this->_table_name)
			->where('id', '=', $id)
			->execute();

		if ( ! count($data))
			return FALSE;

		return $this->from_array(clone $this->get_prototype(), $data->current());
	}

	public function from_array($entity, array $data)
	{
		foreach ($data as $field => $value)
		{
			$setter = 'set_'.$field;
			$entity->$setter($value);
		}

		return $entity;
	}

	public function persist(AbstractEntity $entity)
	{
		if ($entity->get_id())
		{
			return $this->update($entity);
		}
		else
		{
			return $this->insert($entity);
		}
	}

	public function insert(AbstractEntity $entity)
	{
		$entity_array = $entity->as_array();

		$keys = array_keys($entity_array);
		$values = array_values($entity_array);

		$id = DB::insert($this->_table_name, $keys)
			->values($values)
			->execute();

		$entity->set_id($id[0]);

		return $id;
	}

	public function update(AbstractEntity $entity)
	{
		$entity_array = $entity->as_array();
		unset($entity_array['id']);

		return DB::update($this->_table_name)
			->set($entity_array)
			->where('id', '=', $entity->get_id())
			->execute();
	}

	public function get_prototype()
	{
		return $this->_prototype;
	}

	public function set_prototype($prototype)
	{
		$this->_prototype = $prototype;
		return $this;
	}
}