CREATE TABLE `shareposts`.`posts`
 (
     `id` INT NOT NULL AUTO_INCREMENT ,
     `user_id` INT NOT NULL ,
     `title` VARCHAR(255) NOT NULL ,
     `body` TEXT NOT NULL ,
     `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ,
     PRIMARY KEY (`id`)
  ) ENGINE = InnoDB;

CREATE TABLE `shareposts`.`users`
 (
    `id` INT NOT NULL AUTO_INCREMENT ,
    `name` VARCHAR(255) NOT NULL ,
    `email` VARCHAR(255) NOT NULL ,
    `password` VARCHAR(255) NOT NULL ,
    `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ,
     PRIMARY KEY (`id`)
 ) ENGINE = InnoDB;

