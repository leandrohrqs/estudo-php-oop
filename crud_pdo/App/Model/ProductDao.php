<?php

namespace App\Model;

class ProductDao
{
    public function createProduct(Product $product)
    {
        $sql = 'INSERT INTO products (name, description) VALUES (?,?)';

        $stmt = Connection::getConn()->prepare($sql);
        $stmt->bindValue(1, $product->getName());
        $stmt->bindValue(2, $product->getDescription());

        $stmt->execute();
    }

    public function read()
    {
        $sql = 'SELECT * FROM products';

        $stmt = Connection::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0)
        {
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }
        return [];
    }

    public function update(Product $product)
    {
        $sql = 'UPDATE products SET name = ?, description = ? WHERE id = ?';

        $stmt = Connection::getConn()->prepare($sql);
        $stmt->bindValue(1, $product->getName());
        $stmt->bindValue(2, $product->getDescription());
        $stmt->bindValue(3, $product->getId());

        $stmt->execute();
    }

    public function delete($id)
    {
        $sql = 'DELETE FROM products WHERE id = ?';

        $stmt = Connection::getConn()->prepare($sql);
        $stmt->bindValue(1, $id);

        $stmt->execute();
    }
}