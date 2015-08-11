<?php
/**
 * Created by PhpStorm.
 * User: breathbath
 * Date: 12.08.15
 * Time: 0:23
 */

namespace HRProject\Bugs;

class DbGateway
{
    /**
     * @var \PDO
     */
    private $pdo;

    public function __construct()
    {
        $this->pdo = new \PDO('mysql:host=localhost;dbname=wingsta', 'root', 'root');
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $this->pdo->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
    }

    /**
     * @param Select $select
     * @param int $fetchStyle
     * @throws \Exception
     * @return array
     */
    public function execute(Select $select, $fetchStyle = \PDO::FETCH_ASSOC)
    {
        $statement = $this->pdo->prepare((string)$select);
        $statement->execute();

        $result = $statement->fetchAll($fetchStyle);
//        var_dump($statement->errorCode());
//        if (count($statement->errorInfo())) {
//            throw new \Exception ('Error occurred:' . implode(":", $statement->errorInfo()));
//        }
    }
} 