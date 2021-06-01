\<?php
/**
 * Created by PhpStorm.
 * User: nl
 * Date: 01/06/2021
 * Time: 19:48
 */
require_once '../Filters/FilterTrait.php';

abstract class AbstractRepository extends BaseRepository {

    use FilterTrait;

    protected $model;

    public abstract function model();


    // ham make nay su dung trong nhung truong hop can viet rieng query
    public function makeModel()
    {
        // get ra instance
        $model = $this->app->make($this->model());

        if (!$model instanceof Model) {
            throw new RepositoryException("Class {$this->model()} must be an instance of Illuminate\\Database\\Eloquent\\Model");
        }

        return $this->model = $model;
    }


    public function all($params, $colums  = ['*'])
    {
        $query = $this->makeModel();

        // apply filter follow param
        // goi ham apply filter se tu dong loc toi nhung class ton tai filter do

        // set filer name vao folder
        $this->namespaceFilter = 'Filters\\Users\\';


        $query = $this->applyFilter($query, $params);

        return $query->get();
    }
}