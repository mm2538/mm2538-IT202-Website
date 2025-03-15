CREATE TABLE HomeApplianceCategories (
HomeApplianceCategoryID       INT(11)        NOT NULL,
HomeApplianceCategoryCode     VARCHAR(255)   NOT NULL   UNIQUE,
HomeApplianceCategoryName     VARCHAR(255)   NOT NULL,
AisleNumber                   INT(11)        NOT NULL,
DateCreated                   DATETIME       NOT NULL,
PRIMARY KEY ( HomeApplianceCategoryID )
);
INSERT INTO HomeApplianceCategories
(HomeApplianceCategoryID, HomeApplianceCategoryCode, HomeApplianceCategoryName, AisleNumber, DateCreated)
VALUES
(100, 'RFG', 'Refridgerators', 1, NOW());
INSERT INTO HomeApplianceCategories
(HomeApplianceCategoryID, HomeApplianceCategoryCode, HomeApplianceCategoryName, AisleNumber, DateCreated)
VALUES
(200, 'WSH', 'Washing Machines', 2, NOW());
INSERT INTO HomeApplianceCategories
(HomeApplianceCategoryID, HomeApplianceCategoryCode, HomeApplianceCategoryName, AisleNumber, DateCreated)
VALUES
(300, 'MCR', 'Microwave Ovens', 3, NOW());
INSERT INTO HomeApplianceCategories
(HomeApplianceCategoryID, HomeApplianceCategoryCode, HomeApplianceCategoryName, AisleNumber, DateCreated)
VALUES
(400, 'CFM', 'Coffee Makers', 4, NOW());
INSERT INTO HomeApplianceCategories
(HomeApplianceCategoryID, HomeApplianceCategoryCode, HomeApplianceCategoryName, AisleNumber, DateCreated)
VALUES
(500, 'APF', 'Air Purifiers', 5, NOW());

SELECT * FROM HomeApplianceCategories;

