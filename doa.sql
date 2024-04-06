CREATE TABLE HomDecManagers (
 HomDecManagerID     INT            NOT NULL   AUTO_INCREMENT,
 emailAddress           VARCHAR(255)   NOT NULL   UNIQUE,
 password               VARCHAR(255)   NOT NULL,
 firstName              VARCHAR(60)    NOT NULL,
  lastName               VARCHAR(60)    NOT NULL,
  dateCreated            DATETIME       NOT NULL,
  PRIMARY KEY (HomeDecManagerID)
);


-- pwd: s3sam3

INSERT INTO administrators (HomeDecManagerID, emailAddress, password, firstName, lastName) VALUES

(1, 'admin@myguitarshop.com', '$2y$10$xIqN2cVy8HVuKNKUwxFQR.xRP9oRj.FF8r52spVc.XCaEFy7iLHmu', 'Admin', 'User'),

(2, 'joel@murach.com', '$2y$10$xIqN2cVy8HVuKNKUwxFQR.xRP9oRj.FF8r52spVc.XCaEFy7iLHmu', 'Joel', 'Murach'),

(3, 'mike@murach.com', '$2y$10$xIqN2cVy8HVuKNKUwxFQR.xRP9oRj.FF8r52spVc.XCaEFy7iLHmu', 'Mike', 'Murach');