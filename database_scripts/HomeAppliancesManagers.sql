/*Michael Makowski, 2/28/24, IT202:006, Phase 1 Assignment, mm2538@njit.edu*/

CREATE TABLE HomeAppliancesManagers (
 HomeAppliancesManagerID     INT(11)        NOT NULL   AUTO_INCREMENT,
 emailAddress           VARCHAR(255)   NOT NULL   UNIQUE,
 password               VARCHAR(64)    NOT NULL,
  pronouns               VARCHAR(60)    NOT NULL,
  firstName              VARCHAR(60)    NOT NULL,
 lastName               VARCHAR(60)    NOT NULL,
 dateCreated            DATETIME       NOT NULL,
 PRIMARY KEY (HomeAppliancesManagerID)
);

INSERT INTO HomeAppliancesManagers
(emailAddress, password, pronouns, firstName, lastName, dateCreated)
VALUES
('mikehawk@gmail.com', SHA2('myL0ngP@ssword', 256), 'He/Him', 'Mike', 'Hawk', NOW());
INSERT INTO HomeAppliancesManagers
(emailAddress, password, pronouns, firstName, lastName, dateCreated)
VALUES
('janedoe@gmail.com', SHA2('myL0ngP@ssword', 256), 'She/Her', 'Jane', 'Doe', NOW());
INSERT INTO HomeAppliancesManagers
(emailAddress, password, pronouns, firstName, lastName, dateCreated)
VALUES
('johnmadden@gmail.com', SHA2('myL0ngP@ssword', 256), 'He/Him', 'John', 'Madden', NOW());