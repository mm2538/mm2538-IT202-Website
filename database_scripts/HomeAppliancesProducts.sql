CREATE TABLE HomeApplianceProducts (
HomeApplianceProductID        INT(11)        NOT NULL,
HomeApplianceProductCode      VARCHAR(10)    NOT NULL   UNIQUE,
HomeApplianceProductName      VARCHAR(255)   NOT NULL,
HomeApplianceDescription      TEXT           NOT NULL,
OnSale                        VARCHAR(10)    NOT NULL,
HomeApplianceCategoryID       INT(11)        NOT NULL,
HomeApplianceWholesalePrice   DECIMAL(10,2)  NOT NULL,
HomeApplianceListPrice        DECIMAL(10,2)  NOT NULL,
DateCreated            DATETIME       NOT NULL,
PRIMARY KEY ( HomeApplianceProductID )
);

INSERT INTO HomeApplianceProducts
(HomeApplianceProductID, HomeApplianceProductCode, HomeApplianceProductName, HomeApplianceDescription, OnSale, HomeApplianceCategoryID, HomeApplianceWholesalePrice, HomeApplianceListPrice, DateCreated)
VALUES
(1000, 'SAMSUNG', 'Samsung Refridgerator', '31 cu. ft. Mega Capacity 3-Door French Door Refridgerator with Four Types of Ice in Stainless Steel.', 'Yes', 100, 1598.00, 1698.00, NOW());
INSERT INTO HomeApplianceProducts
(HomeApplianceProductID, HomeApplianceProductCode, HomeApplianceProductName, HomeApplianceDescription, OnSale, HomeApplianceCategoryID, HomeApplianceWholesalePrice, HomeApplianceListPrice, DateCreated)
VALUES
(2000, 'GE', 'GE Top Load Washer', '4.5 cu. ft. Top Load Washer in White with Cold Plus and Wash Boost.', 'Yes', 200, 578.00, 799.00, NOW());
INSERT INTO HomeApplianceProducts
(HomeApplianceProductID, HomeApplianceProductCode, HomeApplianceProductName, HomeApplianceDescription, OnSale, HomeApplianceCategoryID, HomeApplianceWholesalePrice, HomeApplianceListPrice, DateCreated)
VALUES
(3000, 'VISSANI', 'Vissani Countertop Convection Microwave', '1.5 cu. ft. Countertop Convection Microwave in Fingerprint Resistant Stainless Steel with Air Fryer and Sensor Cooking.', 'Yes', 300, 129.00, 229.00, NOW());
INSERT INTO HomeApplianceProducts
(HomeApplianceProductID, HomeApplianceProductCode, HomeApplianceProductName, HomeApplianceDescription, OnSale, HomeApplianceCategoryID, HomeApplianceWholesalePrice, HomeApplianceListPrice, DateCreated)
VALUES
(4000, 'HAMILTON', 'Hamilton Beach Black Drop Coffee Maker', 'BrewStation 12- Cup Programmable Black Drip Coffee Maker with Removable Water Reservoir.', 'No', 400, 39.00, 59.00, NOW());
INSERT INTO HomeApplianceProducts
(HomeApplianceProductID, HomeApplianceProductCode, HomeApplianceProductName, HomeApplianceDescription, OnSale, HomeApplianceCategoryID, HomeApplianceWholesalePrice, HomeApplianceListPrice, DateCreated)
VALUES
(5000, 'LEVOIT', 'LEVOIT True HEPA Air Purifier', 'VortexAir True HEPA Air Purifier, 220 Sq Ft.', 'No', 500, 69.00, 99.00, NOW());

SELECT * FROM `HomeApplianceProducts`;