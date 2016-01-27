CREATE TABLE depart(
    id  INT NOT NULL AUTO_INCREMENT,
    name    VARCHAR(100) NOT NULL,
    initials VARCHAR(10) NOT NULL UNIQUE,
    CONSTRAINT pk_depart PRIMARY KEY (id)
);

CREATE TABLE clients (
    id          INT NOT NULL AUTO_INCREMENT,
    name        VARCHAR(100),
    depart_id   INT NOT NULL,
    fone        INT,
    email       VARCHAR(100),
    CONSTRAINT pk_client PRIMARY KEY (id)
);

CREATE TABLE calls (
    id          INT NOT NULL AUTO_INCREMENT,
    client_id  INT NOT NULL,
    depart_id   INT NOT NULL,
    description TEXT NOT NULL,
    status      CHAR(1) DEFAULT 'O', // O-pen - W-aiting - P-ending - C-losed
    created     DATETIME,
    modified    DATETIME,
    closed      DATETIME,
    CONSTRAINT pk_calls PRIMARY KEY (id),
    CONSTRAINT fk_depart_calls FOREIGN KEY (depart_id) REFERENCES depart (id),
    CONSTRAINT fk_client_calls FOREIGN KEY (client_id) REFERENCES clients (id)
);

CREATE TABLE users (
    id      INT NOT NULL AUTO_INCREMENT,
    name    VARCHAR(100) NOT NULL,
    login   VARCHAR(100) NOT NULL,
    passwd  VARCHAR(100) NOT NULL,
    level   INT DEFAULT 0,
    active  BOOLEAN DEFAULT FALSE,
    CONSTRAINT pk_user PRIMARY KEY (id)
);

CREATE TABLE actions (
    call_id INT NOT NULL,
    user_id INT NOT NULL,
    desc_act TEXT,
    daytime DATETIME,
    CONSTRAINT pk_action PRIMARY KEY (call_id, user_id, daytime)
);
