CREATE TABLE IF NOT EXISTS CLASS (
  ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  TITLE VARCHAR(50) NOT NULL,
  DESCRIPTION VARCHAR(50)
)
ENGINE =MyISAM
AUTO_INCREMENT =0
DEFAULT CHARSET =utf8;

CREATE TABLE IF NOT EXISTS COMPETITION (
  ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  COMPETITION_TYPE_ID INT(6) UNSIGNED NOT NULL,
  WEAPON_TYPE_ID INT(6) UNSIGNED NOT NULL,
  DATE_AT DATETIME NOT NULL,
  LOCATION_ID INT(6) UNSIGNED NOT NULL,
  CHAMPIONSHIP BIT NOT NULL,
  COMMENT VARCHAR(50),
  START1 VARCHAR(36),
  START2 VARCHAR(36),
  START3 VARCHAR(36),
  START4 VARCHAR(36),
  START5 VARCHAR(36),
  CREATED_BY_ID INT(6) UNSIGNED NOT NULL
)
ENGINE =MyISAM
AUTO_INCREMENT =0
DEFAULT CHARSET =utf8;

CREATE TABLE IF NOT EXISTS COMPETITION_TYPE (
  ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  TITLE VARCHAR(50),
  DESCRIPTION VARCHAR(50),
  NO_RESULT BIT,
  PRECISION_RESULT BIT,
  FIELD_RESULT BIT,
  PPC_RESULT BIT,
  BLACK_POWDER_RESULT BIT
)
ENGINE =MyISAM
AUTO_INCREMENT =0
DEFAULT CHARSET =utf8;

CREATE TABLE IF NOT EXISTS LOCATION (
  ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  TITLE VARCHAR(50) NOT NULL,
  DESCRIPTION VARCHAR(50)
)
ENGINE =MyISAM
AUTO_INCREMENT =0
DEFAULT CHARSET =utf8;

CREATE TABLE IF NOT EXISTS MEMBER (
  ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  USER_ID INT(6) UNSIGNED NOT NULL,
  MEMBER_NUMBER INT(6) UNSIGNED NOT NULL,
  FIRST_NAME VARCHAR(100),
  LAST_NAME VARCHAR(100),
  BIRTHDAY DATE,
  EMAIL VARCHAR(100),
  CARD_NUMBER_NAT INT(6),
  CARD_NUMBER_SPORT INT(6),
  ADMIN BIT,
  POWER_USER BIT
)
ENGINE =MyISAM
AUTO_INCREMENT =0
DEFAULT CHARSET =utf8;

CREATE TABLE IF NOT EXISTS PARTICIPANT (
  ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  COMPETITION_ID INT(6) UNSIGNED NOT NULL,
  MEMBER_ID INT(6) UNSIGNED NOT NULL,
  WEAPON_TYPE_ID INT(6) UNSIGNED NOT NULL,
  MANUAL_SEPARATION BIT,
  PLACE BIT,
  RESULT VARCHAR(50)
)
ENGINE =MyISAM
AUTO_INCREMENT =0
DEFAULT CHARSET =utf8;

CREATE TABLE IF NOT EXISTS RESULT_BLACK_POWDER (
  ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  PARTICIPANT_ID INT(6) UNSIGNED NOT NULL,
  SERIE_NUMBER INT(2),
  POINTS1 INT(2),
  POINTS2 INT(2),
  POINTS3 INT(2),
  POINTS4 INT(2),
  POINTS5 INT(2),
  POINTS6 INT(2),
  POINTS7 INT(2),
  POINTS8 INT(2),
  POINTS9 INT(2),
  POINTS10 INT(2),
  POINTS11 INT(2),
  POINTS12 INT(2),
  POINTS13 INT(2),
  REMOVED1 INT(2),
  REMOVED2 INT(2),
  REMOVED3 INT(2)
)
ENGINE =MyISAM
AUTO_INCREMENT =0
DEFAULT CHARSET =utf8;


CREATE TABLE IF NOT EXISTS RESULT_FIELD (
  ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  PARTICIPANT_ID INT(6) UNSIGNED NOT NULL,
  STATION_NUMBER INT(2),
  HITS INT(2),
  TARGETS INT(2),
  POINTS INT(2)
)
ENGINE =MyISAM
AUTO_INCREMENT =0
DEFAULT CHARSET =utf8;

CREATE TABLE IF NOT EXISTS RESULT_PPC (
  ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  PARTICIPANT_ID INT(6) UNSIGNED NOT NULL,
  MATCH_NUMBER INT(2),
  X INT(2),
  TEN INT(2),
  NINE INT(2),
  EIGHT INT(2),
  SEVEN INT(2),
  ZERO INT(2),
  MISS INT(2)
)
ENGINE =MyISAM
AUTO_INCREMENT =0
DEFAULT CHARSET =utf8;

CREATE TABLE IF NOT EXISTS RESULT_TYPE (
  ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  TITLE VARCHAR(50) NOT NULL,
  DESCRIPTION VARCHAR(50)
)
ENGINE =MyISAM
AUTO_INCREMENT =0
DEFAULT CHARSET =utf8;

CREATE TABLE IF NOT EXISTS WEAPON_TYPE (
  ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  TITLE VARCHAR(20) NOT NULL,
  DESCRIPTION VARCHAR(40),
  SHOW_IN_COMPETITION BIT
)
ENGINE =MyISAM
AUTO_INCREMENT =0
DEFAULT CHARSET =utf8;
