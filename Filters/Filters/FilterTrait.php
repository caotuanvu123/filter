<?php
/**
 * Created by PhpStorm.
 * User: nl
 * Date: 01/06/2021
 * Time: 19:34
 */
class FilterTrait {

    private $namespaceFilter;

    public function applyFilter($query, $params)
    {
        foreach ($params as $filterName => $value) {
            $decorator = $this->createFilterDecorator($filterName);
            if ($this->isValidDecorator($decorator)) {
                $query = $decorator::apply($query, $value);
            }
        }

        return $query;
    }

    /**
     * @param $name
     * @return string
     * @throws Exception
     */
    private function createFilterDecorator($name)
    {
        if (!$this->namespaceFilter) {
            throw new \Exception('Namespace not found');

        }
        return $this->namespaceFilter . studly_case($name);
    }

    /**
     * Check decorator
     *
     * @param $decorator
     * @return bool
     */
    private function isValidDecorator($decorator)
    {
        return class_exists($decorator);
    }

    protected function setNamespaceFilter($namespaceFilter)
    {
        $this->namespaceFilter = $namespaceFilter;
    }

}