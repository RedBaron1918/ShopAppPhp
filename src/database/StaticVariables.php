<?php 
class StaticVariables{
  //queries to create user  and products table
  static $user = "CREATE TABLE `users` (
    `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `email` varchar(70) NOT NULL,
    `name` varchar(70) NOT NULL,
    `password` varchar(255) NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;";


    static $products =  "CREATE TABLE `products` (
        `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
        `product_name` varchar(70) NOT NULL,
        `description` varchar(255) NOT NULL,
        `price` float UNSIGNED NOT NULL,
        `img_url` varchar(255) NOT NULL
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;";


    


      //TODO make this less painful to look at and create models 

      //this is dummy data that gets inserted in user and products table
    
    static $dataForProducts = "
VALUES
    (NULL, 'Product 1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit minus obcaecati possimus officia quisquam sit, iure corrupti animi optio temporibus dolor adipisci cupiditate blanditiis omnis labore repudiandae natus porro a.', 10.99, 'https://i.dummyjson.com/data/products/1/1.jpg'),
    (NULL, 'Product 2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit minus obcaecati possimus officia quisquam sit, iure corrupti animi optio temporibus dolor adipisci cupiditate blanditiis omnis labore repudiandae natus porro a.', 19.99, 'https://i.dummyjson.com/data/products/2/1.jpg'),
    (NULL, 'Product 3', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit minus obcaecati possimus officia quisquam sit, iure corrupti animi optio temporibus dolor adipisci cupiditate blanditiis omnis labore repudiandae natus porro a.', 12.50, 'https://i.dummyjson.com/data/products/3/1.jpg'),
    (NULL, 'Product 4', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit minus obcaecati possimus officia quisquam sit, iure corrupti animi optio temporibus dolor adipisci cupiditate blanditiis omnis labore repudiandae natus porro a.', 20.50, 'https://i.dummyjson.com/data/products/4/1.jpg'),
    (NULL, 'Product 5', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit minus obcaecati possimus officia quisquam sit, iure corrupti animi optio temporibus dolor adipisci cupiditate blanditiis omnis labore repudiandae natus porro a.', 3.50, 'https://i.dummyjson.com/data/products/5/1.jpg'),
    (NULL, 'Product 6', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit minus obcaecati possimus officia quisquam sit, iure corrupti animi optio temporibus dolor adipisci cupiditate blanditiis omnis labore repudiandae natus porro a.', 4.50, 'https://i.dummyjson.com/data/products/6/1.png'),
    (NULL, 'Product 7', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit minus obcaecati possimus officia quisquam sit, iure corrupti animi optio temporibus dolor adipisci cupiditate blanditiis omnis labore repudiandae natus porro a.', 6.50, 'https://i.dummyjson.com/data/products/7/1.jpg'),
    (NULL, 'Product 8', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit minus obcaecati possimus officia quisquam sit, iure corrupti animi optio temporibus dolor adipisci cupiditate blanditiis omnis labore repudiandae natus porro a.', 7.50, 'https://i.dummyjson.com/data/products/8/1.jpg'),
    (NULL, 'Product 9', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit minus obcaecati possimus officia quisquam sit, iure corrupti animi optio temporibus dolor adipisci cupiditate blanditiis omnis labore repudiandae natus porro a.', 45.50, 'https://i.dummyjson.com/data/products/9/1.jpg'),
    (NULL, 'Product 10', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit minus obcaecati possimus officia quisquam sit, iure corrupti animi optio temporibus dolor adipisci cupiditate blanditiis omnis labore repudiandae natus porro a.', 32.50, 'https://i.dummyjson.com/data/products/10/1.jpg'),
    (NULL, 'Product 11', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit minus obcaecati possimus officia quisquam sit, iure corrupti animi optio temporibus dolor adipisci cupiditate blanditiis omnis labore repudiandae natus porro a.', 10.50, 'https://i.dummyjson.com/data/products/11/1.jpg'),
    (NULL, 'Product 12', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit minus obcaecati possimus officia quisquam sit, iure corrupti animi optio temporibus dolor adipisci cupiditate blanditiis omnis labore repudiandae natus porro a.', 5.50, 'https://i.dummyjson.com/data/products/12/1.jpg')";

    static $dataForUsers = "
VALUES
    (NULL, 'user1@example.com', 'user1', 'password1', CURRENT_TIMESTAMP),
    (NULL, 'user2@example.com', 'user2', 'password2', CURRENT_TIMESTAMP),
    (NULL, 'user3@example.com', 'user3', 'password3', CURRENT_TIMESTAMP)
    ";

}

?>
