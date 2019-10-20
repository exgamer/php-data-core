<?php
namespace concepture\php\data\core\db\traits;


use concepture\php\data\core\db\ModifyQueryBuilderInterface;
use Exception;

/**
 * Trait StorageModifyMethodsTrait
 * @package concepture\php\data\core\db\traits
 * @author Olzhas Kulzhambekov <exgamer@live.ru>
 */
trait StorageModifyMethodsTrait
{
    /**
     * @param $params
     * @return mixed
     * @throws Exception
     */
    public function insert($params)
    {
        $this->getConnection()->beginTransaction();
        try {
            $builder =  $this->getModifyQueryBuilder();
            $builder->table($this->getTableName());
            $builder->data($params);
            $builder->makeInsertSql();
            $sql = $builder->getSql();
            $params = $builder->getParams();
            $stmt = $this->getConnection()->prepare($sql);
            foreach ($params as $name => $value) {
                $stmt->bindValue($name, $value);
            }
            $stmt->execute();
            $stmt = $this->getConnection()->query('SELECT last_insert_id()');
            $result = $stmt->fetchColumn();
            $this->getConnection()->commit();

            return $result;
        }catch (Exception $e){
            $this->getConnection()->rollBack();
            throw $e;
        }
    }

    public function updateById($id, $params)
    {
        $condition = [
            'id' => $id
        ];

        return $this->update($params, $condition);
    }

    /**
     * Обновляет записи в базе данных
     *
     * @param array $params
     * @param array|callable $condition
     *
     * Пример расширения запроса через $callback
     * function(ModifyQueryBuilderInterface $builder) {
     *       $builder->andWhere("object_type = :object_type", [':object_type' => 2]);
     * }
     *
     * @return bool
     */
    public function update(array $params, $condition) : bool
    {
        $builder =  $this->getModifyQueryBuilder();
        $builder->table($this->getTableName());
        $builder->data($params);
        if (is_callable($condition)){
            call_user_func($condition, $builder);
        }else{
            $builder->andWhere($condition);
        }
        $builder->makeUpdateSql();

        return $this->execute($builder);
    }

    /**
     * @param $id
     * @return bool
     */
    public function deleteById($id)
    {
        $condition = [
            'id' => $id
        ];

        return $this->delete($condition);
    }

    /**
     * Удаляет записи в базе данных
     *
     * @param array|callable $condition
     *
     * Пример расширения запроса через $callback
     * function(ModifyQueryBuilderInterface $builder) {
     *       $builder->andWhere("object_type = :object_type", [':object_type' => 2]);
     * }
     * @return bool
     */
    public function delete($condition)
    {
        $builder = $this->getModifyQueryBuilder();
        $builder->table($this->getTableName());
        if (is_callable($condition)){
            call_user_func($condition, $builder);
        }else{
            $builder->andWhere($condition);
        }
        $builder->makeDeleteSql();

        return $this->execute($builder);
    }

    /**
     * Выполняет запрос на модификацию
     *
     * @param ModifyQueryBuilderInterface $builder
     * @return mixed
     */
    private function execute(ModifyQueryBuilderInterface $builder)
    {
        $sql = $builder->getSql();
        $params = $builder->getParams();
        $stmt = $this->getConnection()->prepare($sql);
        foreach ($params as $name => $value){
            $stmt->bindValue($name, $value);
        }

        return $stmt->execute();
    }
}

