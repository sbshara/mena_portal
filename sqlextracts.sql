-- DROP DATABASE IF EXISTS mena_portal;
-- CREATE DATABASE IF NOT EXISTS mena_portal;
-- GRANT ALL PRIVILEGES ON mena_portal.* TO 'mena_portal'@'localhost' IDENTIFIED BY 'P@ssw0rd';
USE mena_portal;

SET time_zone = "+04:00";

-- Users Table
DROP TABLE IF EXISTS users;
CREATE TABLE users (
    id                    INT(11) NOT NULL AUTO_INCREMENT,
    emp_id                INT(11) NOT NULL,
    username              VARCHAR(255) NOT NULL,
    password              VARCHAR(255) NOT NULL,
    active                TINYINT(1) DEFAULT 0,
    active_hash           VARCHAR(255) NULL DEFAULT NULL,
    recover_hash          VARCHAR(255) NULL DEFAULT NULL,
    remembere_identifier  VARCHAR(255) NULL DEFAULT NULL,
    remembere_token       VARCHAR(255) NULL DEFAULT NULL,
    created_at            TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at            TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Table Roles:
DROP TABLE IF EXISTS roles;
CREATE TABLE roles (
    id            INT(11) NOT NULL AUTO_INCREMENT,
    title         VARCHAR(255) COMMENT 'human readable name',
    created_at    TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at    TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Table Permissions:
DROP TABLE IF EXISTS permissions;
CREATE TABLE permissions (
    id          INT(11) NOT NULL AUTO_INCREMENT,
    module      VARCHAR(255) NOT NULL COMMENT 'module name',
    title       VARCHAR(255) NOT NULL COMMENT 'human readable name',
    funcs       VARCHAR(255) NOT NULL COMMENT 'func (key) name used in functions',
    created_at  TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at  TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Departments
DROP TABLE IF EXISTS departments;
CREATE TABLE departments (
    id          INT(11) NOT NULL AUTO_INCREMENT,
    dept_name   VARCHAR(255) NOT NULL,
    created_at  TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at  TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Applicants tables
DROP TABLE IF EXISTS applicants;
CREATE TABLE applicants (
    id                INT(11) NOT NULL AUTO_INCREMENT,
    first_name        VARCHAR(255) NOT NULL,
    last_name         VARCHAR(255) NOT NULL,
    per_email         VARCHAR(255) NOT NULL,
    nationality       INT(11) NOT NULL,
    mobile_phone      VARCHAR(255) NOT NULL,
    gender            ENUM('M','F') NOT NULL,
    birth_date        DATE NOT NULL DEFAULT '1984-09-03',
    prof_pic          VARCHAR(255) NOT NULL DEFAULT '/img/default.png',
    source            VARCHAR(255) NOT NULL DEFAULT 'Hiring Agency',
    created_at        TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at        TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Applicant Documents
DROP TABLE IF EXISTS applicant_docs;
CREATE TABLE applicant_docs (
    id                INT(11) NOT NULL AUTO_INCREMENT,
    applicant_id      INT(11) NOT NULL,
    doc_id            INT(11) NOT NULL,
    created_at        TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at        TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Employees
DROP TABLE IF EXISTS employees;
CREATE TABLE employees (
    id                          INT(11) NOT NULL AUTO_INCREMENT,
    applicant_id                INT(11) NOT NULL,
    emp_ref                     VARCHAR(4) NOT NULL,
    middle_name                 VARCHAR(255) NOT NULL,
    father_name                 VARCHAR(255) NOT NULL,
    mother_name                 VARCHAR(255) NOT NULL,
    birth_place                 INT(11) NOT NULL,
    country_origin              INT(11) NOT NULL,
    height                      VARCHAR(255) NOT NULL,
    weight                      VARCHAR(255) NOT NULL,
    emergency_contact_name      VARCHAR(255) NOT NULL,
    emergency_contact_number    VARCHAR(255) NOT NULL,
    visa_status                 ENUM(
                                    'Employee Residence',
                                    'Family Residence',
                                    'Investor Residence',
                                    'Maid Residence',
                                    'Relative Residence',
                                    'Student Residence',
                                    'Visit',
                                    'Tourist',
                                    'Mission',
                                    'Multiple Entry'
                                ) NOT NULL,
    marital_status            ENUM('Single','Married','Divorced', 'Widowed', 'No Answer') NOT NULL DEFAULT 'Single',
    religion                  ENUM('Christian','Muslim','Jew','Atheist', 'Other'),
    hire_date                 DATE NOT NULL DEFAULT '2011-07-03',
    extension                 VARCHAR(24) NULL DEFAULT '0000',
    business_email            VARCHAR(255) NULL DEFAULT 'user@domain.local',
    created_at                TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at                TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Profile Settings Table:
DROP TABLE IF EXISTS profile_settings;
CREATE TABLE profile_settings (
  id                    INT(11) NOT NULL AUTO_INCREMENT,
  user_id               INT(11) NOT NULL,
  theme_color           VARCHAR(255) NOT NULL DEFAULT 'skin-blue',
  sidebar_collapsed     BOOLEAN NOT NULL DEFAULT FALSE,
  sidebar_mini          BOOLEAN NOT NULL DEFAULT TRUE,
  sidebar_hover_expand  BOOLEAN NOT NULL DEFAULT FALSE COMMENT 'option cannot apply if sidebar-mini = true',
  layout_fixed          BOOLEAN NOT NULL DEFAULT FALSE,
  layout_boxed          BOOLEAN NOT NULL DEFAULT FALSE,
  rightbar_slide        BOOLEAN NOT NULL DEFAULT FALSE,
  rightbar_skin_dark    BOOLEAN NOT NULL DEFAULT TRUE,
  created_at            TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at            TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
) ENGINE = InnoDB CHARACTER SET utf8 COLLATE utf8_unicode_ci;

--  Leaves Table:
DROP TABLE IF EXISTS leaves;
CREATE TABLE leaves (
  id          INT(11) NOT NULL AUTO_INCREMENT,
  leave_name  VARCHAR(255) NOT NULL,
  leave_desc  TEXT,
  created_at  TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at  TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Salaries:
DROP TABLE IF EXISTS salaries;
CREATE TABLE salaries (
  id            INT(11) NOT NULL AUTO_INCREMENT,
  emp_id        INT(11) NOT NULL,
  salary        INT(11) NOT NULL,
  basic         INT(11) DEFAULT NULL,
  housing       INT(11) DEFAULT NULL,
  transport     INT(11) DEFAULT NULL,
  from_date     TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  to_date       TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  created_at    TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at    TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Titles:
DROP TABLE IF EXISTS titles;
CREATE TABLE titles (
  id            INT(11) NOT NULL AUTO_INCREMENT,
  title         VARCHAR(255) NOT NULL,
  description   TEXT NOT NULL,
  created_at    TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at    TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- emp_title
DROP TABLE IF EXISTS emp_title;
CREATE TABLE emp_title (
  id            INT(11) NOT NULL AUTO_INCREMENT,
  emp_id        INT(11) NOT NULL,
  tite_id       INT(11) NOT NULL,
  from_date     TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  to_date       TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  created_at    TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at    TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Department vs. Employees map
DROP TABLE IF EXISTS dept_emp;
CREATE TABLE dept_emp (
  id          INT(11) NOT NULL AUTO_INCREMENT,
  emp_id      INT(11) NOT NULL,
  dept_no     INT(11) NOT NULL,
  from_date   TIMESTAMP NOT NULL,
  to_date     TIMESTAMP NULL,
  created_at  TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at  TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Leaves Table:
DROP TABLE IF EXISTS emp_leaves;
CREATE TABLE emp_leaves (
  id          INT(11) NOT NULL AUTO_INCREMENT,
  emp_id      INT(11) NOT NULL,
  from_date   TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  to_date     TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  leave_type  INT(11) NOT NULL,
  created_at  TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at  TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- permission_role
DROP TABLE IF EXISTS perm_role;
CREATE TABLE perm_role (
  id              INT(11) NOT NULL AUTO_INCREMENT,
  perm_id         INT(11) NOT NULL COMMENT 'id from permissions table',
  role_id         INT(11) NOT NULL COMMENT 'id from roles table',
  perm_grant      TINYINT(1) NOT NULL DEFAULT 0 COMMENT '0 = deny, 1 = grant',
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- role_user
DROP TABLE IF EXISTS role_user;
CREATE TABLE role_user (
  role_id     INT(11) NOT NULL,
  user_id     INT(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- table countries
DROP TABLE IF EXISTS countries;
CREATE TABLE countries (
  id              INT(11) NOT NULL AUTO_INCREMENT,
  country_name    VARCHAR(255) NOT NULL,
  a2_iso          VARCHAR(2) NOT NULL COMMENT 'country_prefex2',
  a3_un           VARCHAR(3) NOT NULL COMMENT 'country_prefex3',
  num_un          INT(3) NOT NULL COMMENT 'country number in the UN',
  dialing_code    VARCHAR(24) NULL,
  notes           TEXT,
  flag            VARCHAR(255) NULL DEFAULT NULL,
  created_at      TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at      TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- table states
DROP TABLE IF EXISTS states;
CREATE TABLE states (
  id              INT(11) NOT NULL AUTO_INCREMENT,
  country_id      INT(11) NOT NULL,
  state_name      VARCHAR(255) NOT NULL,
  created_at      TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at      TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- table cities
DROP TABLE IF EXISTS cities;
CREATE TABLE cities (
  id              INT(11) NOT NULL AUTO_INCREMENT,
  state_id        INT(11) NOT NULL,
  city_name       VARCHAR(255) NOT NULL,
  dialing_code    VARCHAR(4) NOT NULL DEFAULT '0000',
  created_at      TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at      TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- table addresses
DROP TABLE IF EXISTS addresses;
CREATE TABLE addresses (
  id              INT(11) NOT NULL AUTO_INCREMENT,
  address_title   VARCHAR(255) NOT NULL,
  city_id         INT(11) NOT NULL,
  area            VARCHAR(255) NULL,
  street_name     VARCHAR(255) NULL,
  street_no       VARCHAR(24) NULL,
  building_name   VARCHAR(255) NULL,
  building_no     VARCHAR(24) NULL,
  floor           VARCHAR(10) NULL,
  apartment       VARCHAR(10) NULL,
  pobox           VARCHAR(255) NULL,
  landmark        VARCHAR(255) NULL,
  landline1       VARCHAR(255) NULL,
  landline2       VARCHAR(255) NULL,
  mobile1         VARCHAR(255) NULL,
  mobile2         VARCHAR(255) NULL,
  notes           TEXT NULL DEFAULT NULL,
  created_at      TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at      TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- applicant_addresses
DROP TABLE IF EXISTS applicants_addresses;
CREATE TABLE applicants_addresses (
  applicant_id  INT(11) NOT NULL,
  address_id    INT(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- skills table
DROP TABLE IF EXISTS skills;
CREATE TABLE skills (
  id              INT(11) NOT NULL AUTO_INCREMENT,
  skill_name      VARCHAR(255) NOT NULL,
  skill_desc      TEXT NULL,
  created_at      TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at      TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- applicant_degree
DROP TABLE IF EXISTS applicant_degree;
CREATE TABLE applicant_degree (
  applicant_id    INT(11) NOT NULL,
  degree          VARCHAR(255) NOT NULL,
  acquired_date   TIMESTAMP NOT NULL DEFAULT '2016-01-01 00:00:00',
  institute_name  VARCHAR(255) NOT NULL,
  city_id         INT(11) NOT NULL,
  created_at      TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at      TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- applicant_skills
DROP TABLE IF EXISTS applicant_skills;
CREATE TABLE applicant_skills (
  applicant_id    INT(11) NOT NULL,
  skill_id        INT(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- applicant_experience
DROP TABLE IF EXISTS applicant_experience;
CREATE TABLE applicant_experience (
  id            INT(11) NOT NULL AUTO_INCREMENT,
  applicant_id  INT(11) NOT NULL,
  city_id       INT(11) NOT NULL,
  title         INT(11) NOT NULL,
  company       VARCHAR(255) NOT NULL,
  details       TEXT NULL,
  from_date     TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  to_date       TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  created_at    TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at    TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- type of benefits
DROP TABLE IF EXISTS benefits;
CREATE TABLE benefits (
  id              INT(11) NOT NULL AUTO_INCREMENT,
  benefit_name    VARCHAR(255) NOT NULL,
  description     TEXT NULL,
  created_at      TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at      TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- emp_benifits
DROP TABLE IF EXISTS emp_benefits;
CREATE TABLE emp_benefits (
  id              INT(11) NOT NULL AUTO_INCREMENT,
  emp_id          INT(11) NOT NULL,
  benefit_id      INT(11) NOT NULL,
  created_at      TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at      TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- interviews
DROP TABLE IF EXISTS interviews;
CREATE TABLE interviews (
  id              INT(11) NOT NULL AUTO_INCREMENT,
  applicant_id    INT(11) NOT NULL,
  interview_date  TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  inter_details   TEXT NOT NULL,
  inter_result    ENUM('Approved', 'Rejected') NOT NULL,
  created_at      TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at      TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Interview Schedule:
DROP TABLE IF EXISTS interview_schedule;
CREATE TABLE interview_schedule (
  id                  INT(11) NOT NULL AUTO_INCREMENT,
  schedule_date       TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  schedule_notes      TEXT NOT NULL,
  scheduled_by        INT(11) NOT NULL,
  occurred            TINYINT(1) NOT NULL DEFAULT 0,
  occurance_details   TEXT NULL,
  created_at          TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at          TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Interview_schedule_mapping
DROP TABLE IF EXISTS interview_schedule_mapping;
CREATE TABLE interview_schedule_mapping (
  interview_id            INT(11) NOT NULL,
  interview_schedule_id   INT(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- interview mapping Interviewrs:
DROP TABLE IF EXISTS interview_interviewer;
CREATE TABLE interview_interviewer (
  interview_id            INT(11) NOT NULL,
  interviewer_id          INT(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- TABLE documents
DROP TABLE IF EXISTS documents;
CREATE TABLE documents (
  id              INT(11) NOT NULL AUTO_INCREMENT,
  doc_type        VARCHAR(255) NOT NULL,
  doc_issuer      VARCHAR(255) NOT NULL,
  doc_country     INT(11) NOT NULL,
  doc_issue_date  DATE NOT NULL DEFAULT '2016-11-29',
  doc_expiry_date DATE NOT NULL DEFAULT '2099-01-01',
  doc_loc         VARCHAR(255) NOT NULL,
  created_at      TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at      TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- TABLE leavetypes
DROP TABLE IF EXISTS leavetypes;
CREATE TABLE leavetypes (
  id                  INT(11) NOT NULL AUTO_INCREMENT,
  leave_type          VARCHAR(255) NOT NULL,
  leave_notes         TEXT NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
-- END OF TABLE: leavetypes

-- Alterations:
ALTER TABLE users
  ADD UNIQUE KEY (username),
  ADD CONSTRAINT users_emp_id FOREIGN KEY (emp_id) REFERENCES employees(id);

ALTER TABLE interviews
  ADD CONSTRAINT interviews_applicant_id FOREIGN KEY (applicant_id) REFERENCES applicants(id);

ALTER TABLE emp_benefits
  ADD CONSTRAINT emp_benefits_emp_no FOREIGN KEY (emp_id) REFERENCES employees(id),
  ADD CONSTRAINT emp_benefits_benefit_id FOREIGN KEY (benefit_id) REFERENCES benefits(id);

ALTER TABLE applicant_experience
  ADD CONSTRAINT app_exp_app_id FOREIGN KEY (applicant_id) REFERENCES applicants(id),
  ADD CONSTRAINT app_exp_city_id FOREIGN KEY (city_id) REFERENCES cities(id),
  ADD CONSTRAINT epp_exp_title_id FOREIGN KEY (title) REFERENCES titles(id);

ALTER TABLE applicant_skills
  ADD CONSTRAINT applicant_skills_appl_id FOREIGN KEY (applicant_id) REFERENCES applicants(id),
  ADD CONSTRAINT applicant_skill_id FOREIGN KEY (skill_id) REFERENCES skills(id);

ALTER TABLE applicants_addresses
  ADD CONSTRAINT applicants_addresses_address_id FOREIGN KEY (address_id) REFERENCES addresses(id),
  ADD CONSTRAINT applicants_addresses_applicant_id FOREIGN KEY (applicant_id) REFERENCES applicants(id);

ALTER TABLE addresses
  ADD CONSTRAINT addresses_city_id FOREIGN KEY (city_id) REFERENCES cities(id);

ALTER TABLE cities
  ADD CONSTRAINT cities_state_id FOREIGN KEY (state_id) REFERENCES states(id);

ALTER TABLE states
  ADD CONSTRAINT states_country_id FOREIGN KEY (country_id) REFERENCES countries(id);

ALTER TABLE role_user
  ADD CONSTRAINT role_user_role_id FOREIGN KEY (role_id) REFERENCES roles(id),
  ADD CONSTRAINT role_user_user_id FOREIGN KEY (user_id) REFERENCES users(id);

ALTER TABLE perm_role
  ADD CONSTRAINT perm_role_perm_id FOREIGN KEY (perm_id) REFERENCES permissions(id),
  ADD CONSTRAINT perm_role_role_id FOREIGN KEY (role_id) REFERENCES roles(id);

ALTER TABLE emp_leaves
  ADD CONSTRAINT emp_leaves_leave_type FOREIGN KEY (leave_type) REFERENCES leaves(id);

ALTER TABLE emp_title
  ADD CONSTRAINT emp_title_emp_no FOREIGN KEY (emp_id) REFERENCES employees(id),
  ADD CONSTRAINT emp_title_title_id FOREIGN KEY (title_id) REFERENCES titles(id);

ALTER TABLE salaries
  ADD CONSTRAINT salaries_emp_no FOREIGN KEY (emp_id) REFERENCES employees(id);

ALTER TABLE leaves
  ADD UNIQUE KEY leave_name (leave_name);

ALTER TABLE profile_settings
  ADD CONSTRAINT profile_settings_user_id FOREIGN KEY (user_id) REFERENCES users(id);

ALTER TABLE applicants
  ADD UNIQUE (per_email);

ALTER TABLE employees
  ADD UNIQUE KEY (emp_ref),
  ADD CONSTRAINT employees_applicant_id FOREIGN KEY (applicant_id) REFERENCES applicants(id),
  ADD CONSTRAINT employees_birth_place FOREIGN KEY (birth_place) REFERENCES cities(id),
  ADD CONSTRAINT employees_country_origin FOREIGN KEY (country_origin) REFERENCES countries(id);

ALTER TABLE departments
  ADD UNIQUE KEY dept_name (dept_name);

ALTER TABLE applicant_degree
  ADD CONSTRAINT applicant_degree_applicant_id FOREIGN KEY (applicant_id) REFERENCES applicants(id),
  ADD CONSTRAINT applicant_degree_city_id FOREIGN KEY (city_id) REFERENCES cities(id);

ALTER TABLE dept_emp
  ADD CONSTRAINT dept_emp_dept_no FOREIGN KEY (dept_no) REFERENCES departments(id);

ALTER TABLE applicant_docs
  ADD CONSTRAINT applicant_docs_applicant_id FOREIGN KEY (applicant_id) REFERENCES applicants(id);

ALTER TABLE documents
  ADD CONSTRAINT documents_doc_country FOREIGN KEY (doc_country) REFERENCES countries(id);-- END OF TABLE: documents

ALTER TABLE interview_schedule
  ADD CONSTRAINT interview_schedule_scheduled_by FOREIGN KEY (scheduled_by) REFERENCES employees(id);

ALTER TABLE interview_schedule_mapping
  ADD CONSTRAINT map_interview_id FOREIGN KEY (interview_id) REFERENCES interviews(id),
  ADD CONSTRAINT map_schedule_id FOREIGN KEY (interview_schedule_id) REFERENCES interview_schedule(id);

ALTER TABLE interview_interviewer
  ADD CONSTRAINT map_interviewer_interview_id FOREIGN KEY (interview_id) REFERENCES interviews(id),
  ADD CONSTRAINT map_interviewer_interviewer_id FOREIGN KEY (interviewer_id) REFERENCES employees(id);

-- END OF TABLE: documents_attachments
-- TABLE leaves
-- DROP TABLE IF EXISTS emp_leaves;
-- CREATE TABLE emp_leaves (
--     id                  INT(11) NOT NULL AUTO_INCREMENT,
--     emp_id              INT(11) NOT NULL,
--     leave_type          INT(11) NOT NULL,
--     leave_start_date    TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
--     leave_end_date      TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
--     rejoining_date      TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
--     leave_reason        VARCHAR(255) NOT NULL,
--     location_on_leave   INT(11) NOT NULL,
--     contact_on_leave    VARCHAR(255) NOT NULL,
--     manager             INT(11) NOT NULL,
--     manager_status      TINYINT(1) NOT NULL DEFAULT 0,
--     manager_approval    TINYINT(1) NOT NULL DEFAULT 0,
--     manager_comments    TEXT NOT NULL DEFAULT 'NO COMMENT PROVIDED BY MANAGER',
--     manager_date        TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
--     hr                  INT(11) NOT NULL,
--     hr_status           TINYINT(1) NOT NULL DEFAULT 0,
--     hr_approval         TINYINT(1) NOT NULL DEFAULT 0,
--     hr_comments         TEXT NOT NULL DEFAULT 'NO COMMENT PROVIDED BY HR',
--     hr_date             TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
--     accounts            INT(11) NOT NULL,
--     accounts_status     TINYINT(1) NOT NULL DEFAULT 0,
--     accounts_approval   TINYINT(1) NOT NULL DEFAULT 0,
--     accounts_comments   TEXT NOT NULL DEFAULT 'NO COMMENT PROVIDED BY ACCOUNTS',
--     accounts_date       TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
--     leave_status        TINYINT(1) NOT NULL DEFAULT 0,
--     created_at          TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
--     updated_at          TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
--     PRIMARY KEY (id)
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ALTER TABLE emp_leaves
--     ADD CONSTRAINT emp_leaves_emp_id FOREIGN KEY (emp_id) REFERENCES employees(id),
--     ADD CONSTRAINT emp_leaves_leave_type FOREIGN KEY (leave_type) REFERENCES leavetypes(id),
--     ADD CONSTRAINT emp_leaves_location_on_leave FOREIGN KEY (location_on_leave) REFERENCES cities(id),
--     ADD CONSTRAINT emp_leaves_manager FOREIGN KEY (manager) REFERENCES users(id),
--     ADD CONSTRAINT emp_leaves_hr FOREIGN KEY (hr) REFERENCES users(id),
--     ADD CONSTRAINT emp_leaves_accounts FOREIGN KEY (accounts) REFERENCES users(id);

-- END OF TABLE emp_leaves


-- TABLE emp_requests_transactions
-- DROP TABLE IF EXISTS trans_emp_requests;
-- CREATE TABLE trans_emp_requests (
--     id              INT(11) NOT NULL AUTO_INCREMENT,
--     requester       INT(11) NOT NULL,
--     request_type    INT(11) NOT NULL,
--     request_details TEXT NOT NULL DEFAULT 'THIS IS DEFAULT REQUEST DETAILS',
--     created_at          TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
--     updated_at          TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
--     PRIMARY KEY (id)
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table countries
INSERT INTO `countries` (`id`, `country_name`, `a2_iso`, `a3_un`, `num_un`, `dialing_code`, `notes`, `flag`, `created_at`, `updated_at`) VALUES
  (1, 'Afghanistan', 'AF', 'AFG', 4, '93', '', '/img/flags/AF.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (2, 'Albania', 'AL', 'ALB', 8, '355', '', '/img/flags/AL.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (3, 'Algeria', 'DZ', 'DZA', 12, '213', '', '/img/flags/DZ.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (4, 'American Samoa', 'AS', 'ASM', 16, '1-684', '', '/img/flags/AS.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (5, 'Andorra', 'AD', 'AND', 20, '376', '', '/img/flags/AD.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (6, 'Angola', 'AO', 'AGO', 24, '244', '', '/img/flags/AO.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (7, 'Anguilla', 'AI', 'AIA', 660, '1-264', '', '/img/flags/AI.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (8, 'Antarctica', 'AQ', 'ATA', 10, '672', '', '/img/flags/AQ.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (9, 'Antigua and Barbuda', 'AG', 'ATG', 28, '1-268', '', '/img/flags/AG.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (10, 'Argentina', 'AR', 'ARG', 32, '54', '', '/img/flags/AR.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (11, 'Armenia', 'AM', 'ARM', 51, '374', '', '/img/flags/AM.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (12, 'Aruba', 'AW', 'ABW', 533, '297', '', '/img/flags/AW.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (13, 'Australia', 'AU', 'AUS', 36, '61', '', '/img/flags/AU.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (14, 'Austria', 'AT', 'AUT', 40, '43', '', '/img/flags/AT.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (15, 'Azerbaijan', 'AZ', 'AZE', 31, '994', '', '/img/flags/AZ.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (16, 'Bahamas', 'BS', 'BHS', 44, '1-242', '', '/img/flags/BS.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (17, 'Bahrain', 'BH', 'BHR', 48, '973', '', '/img/flags/BH.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (18, 'Bangladesh', 'BD', 'BGD', 50, '880', '', '/img/flags/BD.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (19, 'Barbados', 'BB', 'BRB', 52, '1-246', '', '/img/flags/BB.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (20, 'Belarus', 'BY', 'BLR', 112, '375', '', '/img/flags/BY.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (21, 'Belgium', 'BE', 'BEL', 56, '32', '', '/img/flags/BE.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (22, 'Belize', 'BZ', 'BLZ', 84, '501', '', '/img/flags/BZ.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (23, 'Benin', 'BJ', 'BEN', 204, '229', '', '/img/flags/BJ.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (24, 'Bermuda', 'BM', 'BMU', 60, '1-441', '', '/img/flags/BM.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (25, 'Bhutan', 'BT', 'BTN', 64, '975', '', '/img/flags/BT.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (26, 'Bolivia', 'BO', 'BOL', 68, '591', '', '/img/flags/BO.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (27, 'Bosnia and Herzegovina', 'BA', 'BIH', 70, '387', '', '/img/flags/BA.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (28, 'Botswana', 'BW', 'BWA', 72, '267', '', '/img/flags/BW.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (29, 'Brazil', 'BR', 'BRA', 76, '55', '', '/img/flags/BR.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (30, 'Brunei Darussalam', 'BN', 'BRN', 96, '673', '', '/img/flags/BN.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (31, 'Bulgaria', 'BG', 'BGR', 100, '359', '', '/img/flags/BG.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (32, 'Burkina Faso', 'BF', 'BFA', 854, '226', '', '/img/flags/BF.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (33, 'Burundi', 'BI', 'BDI', 108, '257', '', '/img/flags/BI.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (34, 'Cambodia', 'KH', 'KHM', 116, '855', '', '/img/flags/KH.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (35, 'Cameroon', 'CM', 'CMR', 120, '237', '', '/img/flags/CM.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (36, 'Canada', 'CA', 'CAN', 124, '1', '', '/img/flags/CA.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (37, 'Cape Verde', 'CV', 'CPV', 132, '238', '', '/img/flags/CV.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (38, 'Cayman Islands', 'KY', 'CYM', 136, '1-345', '', '/img/flags/KY.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (39, 'Central African Republic', 'CF', 'CAF', 140, '236', '', '/img/flags/CF.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (40, 'Chad', 'TD', 'TCD', 148, '235', '', '/img/flags/TD.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (41, 'Chile', 'CL', 'CHL', 152, '56', '', '/img/flags/CL.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (42, 'China', 'CN', 'CHN', 156, '86', '', '/img/flags/CN.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (43, 'Christmas Island', 'CX', 'CXR', 162, '61', '', '/img/flags/CX.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (44, 'Cocos (Keeling) Islands', 'CC', 'CCK', 166, '61', '', '/img/flags/CC.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (45, 'Colombia', 'CO', 'COL', 170, '57', '', '/img/flags/CO.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (46, 'Comoros', 'KM', 'COM', 174, '269', '', '/img/flags/KM.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (47, 'Congo, Republic of(Brazzaville)', 'CG', 'COG', 178, '242', '', '/img/flags/CG.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (48, 'Cook Islands', 'CK', 'COK', 184, '682', '', '/img/flags/CK.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (49, 'Costa Rica', 'CR', 'CRI', 188, '506', '', '/img/flags/CR.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (50, 'Croatia', 'HR', 'HRV', 191, '385', '', '/img/flags/HR.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (51, 'Cuba', 'CU', 'CUB', 192, '53', '', '/img/flags/CU.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (52, 'Cyprus', 'CY', 'CYP', 196, '357', '', '/img/flags/CY.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (53, 'Czech Republic', 'CZ', 'CZE', 203, '420', '', '/img/flags/CZ.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (54, 'Democratic Republic of the Congo?(Kinshasa)', '', '', 0, '', '', '/img/flags/.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (55, 'Denmark', 'DK', 'DNK', 208, '45', '', '/img/flags/DK.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (56, 'Djibouti', 'DJ', 'DJI', 262, '253', '', '/img/flags/DJ.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (57, 'Dominica', 'DM', 'DMA', 212, '1-767', '', '/img/flags/DM.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (58, 'Dominican Republic', 'DO', 'DOM', 214, '1-809,1-829,1-849', '', '/img/flags/DO.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (59, 'East Timor?(Timor-Leste)', '', '', 0, '', '', '/img/flags/.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (60, 'Ecuador', 'EC', 'ECU', 218, '593', '', '/img/flags/EC.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (61, 'Egypt', 'EG', 'EGY', 818, '20', '', '/img/flags/EG.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (62, 'El Salvador', 'SV', 'SLV', 222, '503', '', '/img/flags/SV.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (63, 'Equatorial Guinea', 'GQ', 'GNQ', 226, '240', '', '/img/flags/GQ.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (64, 'Eritrea', 'ER', 'ERI', 232, '291', '', '/img/flags/ER.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (65, 'Estonia', 'EE', 'EST', 233, '372', '', '/img/flags/EE.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (66, 'Ethiopia', 'ET', 'ETH', 231, '251', '', '/img/flags/ET.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (67, 'Falkland Islands', '', '', 0, '', '', '/img/flags/.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (68, 'Faroe Islands', 'FO', 'FRO', 234, '298', '', '/img/flags/FO.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (69, 'Fiji', 'FJ', 'FJI', 242, '679', '', '/img/flags/FJ.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (70, 'Finland', 'FI', 'FIN', 246, '358', '', '/img/flags/FI.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (71, 'France', 'FR', 'FRA', 250, '33', '', '/img/flags/FR.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (72, 'French Guiana', 'GF', 'GUF', 254, '594', '', '/img/flags/GF.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (73, 'French Polynesia', 'PF', 'PYF', 258, '689', '', '/img/flags/PF.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (74, 'French Southern Territories', 'TF', 'ATF', 260, '262', '', '/img/flags/TF.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (75, 'Gabon', 'GA', 'GAB', 266, '241', '', '/img/flags/GA.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (76, 'Gambia', 'GM', 'GMB', 270, '220', '', '/img/flags/GM.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (77, 'Georgia', 'GE', 'GEO', 268, '995', '', '/img/flags/GE.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (78, 'Germany', 'DE', 'DEU', 276, '49', '', '/img/flags/DE.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (79, 'Ghana', 'GH', 'GHA', 288, '233', '', '/img/flags/GH.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (80, 'Gibraltar', 'GI', 'GIB', 292, '350', '', '/img/flags/GI.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (81, 'Great Britain', '', '', 0, '', '', '/img/flags/.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (82, 'Greece', 'GR', 'GRC', 300, '30', '', '/img/flags/GR.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (83, 'Greenland', 'GL', 'GRL', 304, '299', '', '/img/flags/GL.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (84, 'Grenada', 'GD', 'GRD', 308, '1-473', '', '/img/flags/GD.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (85, 'Guadeloupe', 'GP', 'GLP', 312, '590', '', '/img/flags/GP.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (86, 'Guam', 'GU', 'GUM', 316, '1-671', '', '/img/flags/GU.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (87, 'Guatemala', 'GT', 'GTM', 320, '502', '', '/img/flags/GT.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (88, 'Guinea', 'GN', 'GIN', 324, '224', '', '/img/flags/GN.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (89, 'Guinea-Bissau', 'GW', 'GNB', 624, '245', '', '/img/flags/GW.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (90, 'Guyana', 'GY', 'GUY', 328, '592', '', '/img/flags/GY.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (91, 'Haiti', 'HT', 'HTI', 332, '509', '', '/img/flags/HT.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (92, 'Holy See', '', '', 0, '', '', '/img/flags/.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (93, 'Honduras', 'HN', 'HND', 340, '504', '', '/img/flags/HN.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (94, 'Hong Kong', 'HK', 'HKG', 344, '852', '', '/img/flags/HK.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (95, 'Hungary', 'HU', 'HUN', 348, '36', '', '/img/flags/HU.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (96, 'Iceland', 'IS', 'ISL', 352, '354', '', '/img/flags/IS.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (97, 'India', 'IN', 'IND', 356, '91', '', '/img/flags/IN.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (98, 'Indonesia', 'ID', 'IDN', 360, '62', '', '/img/flags/ID.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (99, 'Iran (Islamic Republic of)', '', '', 0, '', '', '/img/flags/.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (100, 'Iraq', 'IQ', 'IRQ', 368, '964', '', '/img/flags/IQ.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (101, 'Ireland', 'IE', 'IRL', 372, '353', '', '/img/flags/IE.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (102, 'Israel', 'IL', 'ISR', 376, '972', '', '/img/flags/IL.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (103, 'Italy', 'IT', 'ITA', 380, '39', '', '/img/flags/IT.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (104, 'Ivory Coast', '', '', 0, '', '', '/img/flags/.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (105, 'Jamaica', 'JM', 'JAM', 388, '1-876', '', '/img/flags/JM.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (106, 'Japan', 'JP', 'JPN', 392, '81', '', '/img/flags/JP.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (107, 'Jordan', 'JO', 'JOR', 400, '962', '', '/img/flags/JO.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (108, 'Kazakhstan', 'KZ', 'KAZ', 398, '7', '', '/img/flags/KZ.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (109, 'Kenya', 'KE', 'KEN', 404, '254', '', '/img/flags/KE.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (110, 'Kiribati', 'KI', 'KIR', 296, '686', '', '/img/flags/KI.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (111, 'Korea, Democratic People''s Rep. (North Korea)', '', '', 0, '', '', '/img/flags/.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (112, 'Korea, Republic of (South Korea)', '', '', 0, '', '', '/img/flags/.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (113, 'Kosovo', '', '', 0, '', '', '/img/flags/.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (114, 'Kuwait', 'KW', 'KWT', 414, '965', '', '/img/flags/KW.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (115, 'Kyrgyzstan', 'KG', 'KGZ', 417, '996', '', '/img/flags/KG.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (116, 'Laos, People''s Democratic Republic', '', '', 0, '', '', '/img/flags/.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (117, 'Latvia', 'LV', 'LVA', 428, '371', '', '/img/flags/LV.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (118, 'Lebanon', 'LB', 'LBN', 422, '961', '', '/img/flags/LB.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (119, 'Lesotho', 'LS', 'LSO', 426, '266', '', '/img/flags/LS.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (120, 'Liberia', 'LR', 'LBR', 430, '231', '', '/img/flags/LR.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (121, 'Libya', 'LY', 'LBY', 434, '218', '', '/img/flags/LY.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (122, 'Liechtenstein', 'LI', 'LIE', 438, '423', '', '/img/flags/LI.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (123, 'Lithuania', 'LT', 'LTU', 440, '370', '', '/img/flags/LT.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (124, 'Luxembourg', 'LU', 'LUX', 442, '352', '', '/img/flags/LU.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (125, 'Macau', '', '', 0, '', '', '/img/flags/.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (126, 'Macedonia, Rep. of', '', '', 0, '', '', '/img/flags/.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (127, 'Madagascar', 'MG', 'MDG', 450, '261', '', '/img/flags/MG.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (128, 'Malawi', 'MW', 'MWI', 454, '265', '', '/img/flags/MW.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (129, 'Malaysia', 'MY', 'MYS', 458, '60', '', '/img/flags/MY.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (130, 'Maldives', 'MV', 'MDV', 462, '960', '', '/img/flags/MV.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (131, 'Mali', 'ML', 'MLI', 466, '223', '', '/img/flags/ML.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (132, 'Malta', 'MT', 'MLT', 470, '356', '', '/img/flags/MT.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (133, 'Marshall Islands', 'MH', 'MHL', 584, '692', '', '/img/flags/MH.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (134, 'Martinique', 'MQ', 'MTQ', 474, '596', '', '/img/flags/MQ.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (135, 'Mauritania', 'MR', 'MRT', 478, '222', '', '/img/flags/MR.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (136, 'Mauritius', 'MU', 'MUS', 480, '230', '', '/img/flags/MU.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (137, 'Mayotte', 'YT', 'MYT', 175, '262', '', '/img/flags/YT.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (138, 'Mexico', 'MX', 'MEX', 484, '52', '', '/img/flags/MX.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (139, 'Micronesia, Federal States of', '', '', 0, '', '', '/img/flags/.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (140, 'Moldova, Republic of', '', '', 0, '', '', '/img/flags/.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (141, 'Monaco', 'MC', 'MCO', 492, '377', '', '/img/flags/MC.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (142, 'Mongolia', 'MN', 'MNG', 496, '976', '', '/img/flags/MN.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (143, 'Montenegro', 'ME', 'MNE', 499, '382', '', '/img/flags/ME.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (144, 'Montserrat', 'MS', 'MSR', 500, '1-664', '', '/img/flags/MS.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (145, 'Morocco', 'MA', 'MAR', 504, '212', '', '/img/flags/MA.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (146, 'Mozambique', 'MZ', 'MOZ', 508, '258', '', '/img/flags/MZ.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (147, 'Myanmar, Burma', 'MM', 'MMR', 104, '95', '', '/img/flags/MM.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (148, 'Namibia', 'NA', 'NAM', 516, '264', '', '/img/flags/NA.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (149, 'Nauru', 'NR', 'NRU', 520, '674', '', '/img/flags/NR.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (150, 'Nepal', 'NP', 'NPL', 524, '977', '', '/img/flags/NP.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (151, 'Netherlands', 'NL', 'NLD', 528, '31', '', '/img/flags/NL.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (152, 'Netherlands Antilles', '', '', 0, '', '', '/img/flags/.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (153, 'New Caledonia', 'NC', 'NCL', 540, '687', '', '/img/flags/NC.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (154, 'New Zealand', 'NZ', 'NZL', 554, '64', '', '/img/flags/NZ.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (155, 'Nicaragua', 'NI', 'NIC', 558, '505', '', '/img/flags/NI.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (156, 'Niger', 'NE', 'NER', 562, '227', '', '/img/flags/NE.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (157, 'Nigeria', 'NG', 'NGA', 566, '234', '', '/img/flags/NG.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (158, 'Niue', 'NU', 'NIU', 570, '683', '', '/img/flags/NU.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (159, 'Northern Mariana Islands', 'MP', 'MNP', 580, '1-670', '', '/img/flags/MP.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (160, 'Norway', 'NO', 'NOR', 578, '47', '', '/img/flags/NO.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (161, 'Oman', 'OM', 'OMN', 512, '968', '', '/img/flags/OM.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (162, 'Pakistan', 'PK', 'PAK', 586, '92', '', '/img/flags/PK.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (163, 'Palau', 'PW', 'PLW', 585, '680', '', '/img/flags/PW.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (164, 'Palestine', '', '', 0, '', '', '/img/flags/.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (165, 'Panama', 'PA', 'PAN', 591, '507', '', '/img/flags/PA.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (166, 'Papua New Guinea', 'PG', 'PNG', 598, '675', '', '/img/flags/PG.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (167, 'Paraguay', 'PY', 'PRY', 600, '595', '', '/img/flags/PY.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (168, 'Peru', 'PE', 'PER', 604, '51', '', '/img/flags/PE.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (169, 'Philippines', 'PH', 'PHL', 608, '63', '', '/img/flags/PH.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (170, 'Pitcairn Island', '', '', 0, '', '', '/img/flags/.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (171, 'Poland', 'PL', 'POL', 616, '48', '', '/img/flags/PL.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (172, 'Portugal', 'PT', 'PRT', 620, '351', '', '/img/flags/PT.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (173, 'Puerto Rico', 'PR', 'PRI', 630, '1', '', '/img/flags/PR.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (174, 'Qatar', 'QA', 'QAT', 634, '974', '', '/img/flags/QA.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (175, 'Reunion Island', '', '', 0, '', '', '/img/flags/.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (176, 'Romania', 'RO', 'ROU', 642, '40', '', '/img/flags/RO.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (177, 'Russian Federation', 'RU', 'RUS', 643, '7', '', '/img/flags/RU.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (178, 'Rwanda', 'RW', 'RWA', 646, '250', '', '/img/flags/RW.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (179, 'Saint Kitts and Nevis', 'KN', 'KNA', 659, '1-869', '', '/img/flags/KN.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (180, 'Saint Lucia', 'LC', 'LCA', 662, '1-758', '', '/img/flags/LC.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (181, 'Saint Vincent and the Grenadines', 'VC', 'VCT', 670, '1-784', '', '/img/flags/VC.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (182, 'Samoa', 'WS', 'WSM', 882, '685', '', '/img/flags/WS.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (183, 'San Marino', 'SM', 'SMR', 674, '378', '', '/img/flags/SM.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (184, 'Sao Tome and Principe', 'ST', 'STP', 678, '239', '', '/img/flags/ST.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (185, 'Saudi Arabia', 'SA', 'SAU', 682, '966', '', '/img/flags/SA.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (186, 'Senegal', 'SN', 'SEN', 686, '221', '', '/img/flags/SN.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (187, 'Serbia', 'RS', 'SRB', 688, '381', '', '/img/flags/RS.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (188, 'Seychelles', 'SC', 'SYC', 690, '248', '', '/img/flags/SC.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (189, 'Sierra Leone', 'SL', 'SLE', 694, '232', '', '/img/flags/SL.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (190, 'Singapore', 'SG', 'SGP', 702, '65', '', '/img/flags/SG.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (191, 'Slovakia (Slovak Republic)', '', '', 0, '', '', '/img/flags/.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (192, 'Slovenia', 'SI', 'SVN', 705, '386', '', '/img/flags/SI.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (193, 'Solomon Islands', 'SB', 'SLB', 90, '677', '', '/img/flags/SB.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (194, 'Somalia', 'SO', 'SOM', 706, '252', '', '/img/flags/SO.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (195, 'South Africa', 'ZA', 'ZAF', 710, '27', '', '/img/flags/ZA.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (196, 'South Sudan', 'SS', 'SSD', 728, '211', '', '/img/flags/SS.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (197, 'Spain', 'ES', 'ESP', 724, '34', '', '/img/flags/ES.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (198, 'Sri Lanka', 'LK', 'LKA', 144, '94', '', '/img/flags/LK.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (199, 'Sudan', 'SD', 'SDN', 729, '249', '', '/img/flags/SD.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (200, 'Suriname', 'SR', 'SUR', 740, '597', '', '/img/flags/SR.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (201, 'Swaziland', 'SZ', 'SWZ', 748, '268', '', '/img/flags/SZ.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (202, 'Sweden', 'SE', 'SWE', 752, '46', '', '/img/flags/SE.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (203, 'Switzerland', 'CH', 'CHE', 756, '41', '', '/img/flags/CH.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (204, 'Syria, Syrian Arab Republic', 'SY', 'SYR', 0, '+963', '', '/img/flags/SYR.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (205, 'Taiwan?(Republic of China)', '', '', 0, '', '', '/img/flags/.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (206, 'Tajikistan', 'TJ', 'TJK', 762, '992', '', '/img/flags/TJ.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (207, 'Tanzania; United Republic of', '', '', 0, '', '', '/img/flags/.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (208, 'Thailand', 'TH', 'THA', 764, '66', '', '/img/flags/TH.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (209, 'Tibet', '', '', 0, '', '', '/img/flags/.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (210, 'Timor-Leste?(East Timor)', '', '', 0, '', '', '/img/flags/.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (211, 'Togo', 'TG', 'TGO', 768, '228', '', '/img/flags/TG.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (212, 'Tokelau', 'TK', 'TKL', 772, '690', '', '/img/flags/TK.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (213, 'Tonga', 'TO', 'TON', 776, '676', '', '/img/flags/TO.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (214, 'Trinidad and Tobago', 'TT', 'TTO', 780, '1-868', '', '/img/flags/TT.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (215, 'Tunisia', 'TN', 'TUN', 788, '216', '', '/img/flags/TN.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (216, 'Turkey', 'TR', 'TUR', 792, '90', '', '/img/flags/TR.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (217, 'Turkmenistan', 'TM', 'TKM', 795, '993', '', '/img/flags/TM.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (218, 'Turks and Caicos Islands', 'TC', 'TCA', 796, '1-649', '', '/img/flags/TC.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (219, 'Tuvalu', 'TV', 'TUV', 798, '688', '', '/img/flags/TV.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (220, 'Uganda', 'UG', 'UGA', 800, '256', '', '/img/flags/UG.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (221, 'Ukraine', 'UA', 'UKR', 804, '380', '', '/img/flags/UA.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (222, 'United Arab Emirates', 'AE', 'ARE', 784, '971', '', '/img/flags/AE.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (223, 'United Kingdom', 'GB', 'GBR', 826, '44', '', '/img/flags/GB.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (224, 'United States', 'US', 'USA', 840, '1', '', '/img/flags/US.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (225, 'Uruguay', 'UY', 'URY', 858, '598', '', '/img/flags/UY.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (226, 'Uzbekistan', 'UZ', 'UZB', 860, '998', '', '/img/flags/UZ.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (227, 'Vanuatu', 'VU', 'VUT', 548, '678', '', '/img/flags/VU.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (228, 'Vatican City State', '', '', 0, '', '', '/img/flags/.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (229, 'Venezuela', 'VE', 'VEN', 862, '58', '', '/img/flags/VE.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (230, 'Vietnam', '', '', 0, '', '', '/img/flags/.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (231, 'Virgin Islands (British)', '', '', 0, '', '', '/img/flags/.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (232, 'Virgin Islands (U.S.)', '', '', 0, '', '', '/img/flags/.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (233, 'Wallis and Futuna Islands', '', '', 0, '', '', '/img/flags/.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (234, 'Western Sahara', 'EH', 'ESH', 732, '212', '', '/img/flags/EH.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (235, 'Yemen', 'YE', 'YEM', 887, '967', '', '/img/flags/YE.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (236, 'Zambia', 'ZM', 'ZMB', 894, '260', '', '/img/flags/ZM.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15'),
  (237, 'Zimbabwe', 'ZW', 'ZWE', 716, '263', '', '/img/flags/ZW.png', '2016-11-20 11:11:15', '2016-11-20 11:11:15');

INSERT INTO `states` (`id`, `country_id`, `state_name`, `created_at`, `updated_at`) VALUES
  (1, 204, 'Daraa', '2016-12-04 07:07:40', '2016-12-04 07:07:40');

INSERT INTO `cities` (`id`, `state_id`, `city_name`, `created_at`, `updated_at`) VALUES
  (1, 1, 'Daraa', '2016-12-04 07:07:53', '2016-12-04 07:07:53');

INSERT INTO `applicants` (`id`, `first_name`, `last_name`, `per_email`, `nationality`, `mobile_phone`, `gender`, `birth_date`, `prof_pic`, `source`, `created_at`, `updated_at`) VALUES
  (1, 'Shiblie', 'Bshara', 'shb182@hotmail.com', 204, '+971 56 104 8021', 'M', '1984-09-02', '/img/shiblie.jpg', 'Friend', '2016-11-29 04:21:45', '2016-11-29 04:21:45');

INSERT INTO `employees` (`id`, `applicant_id`, `emp_ref`, `middle_name`, `father_name`, `mother_name`, `birth_place`, `country_origin`, `height`, `weight`, `emergency_contact_name`, `emergency_contact_number`, `visa_status`, `marital_status`, `religion`, `hire_date`, `extension`, `business_email`, `created_at`, `updated_at`) VALUES
  (1, 1, 'M072', 'NA', 'Wasif', 'Najah', 1, 204, '175 cms', '89 kgs', 'someone', 'somenumber', 'Employee Residence', 'Single', 'Christian', '2011-07-03', '2031', 'shiblie.bshara@menaa.local', '2016-12-04 07:08:10', '2016-12-04 07:08:10');

INSERT INTO `users` (`id`, `emp_id`, `username`, `password`, `active`, `active_hash`, `recover_hash`, `remembere_identifier`, `remembere_token`, `created_at`, `updated_at`) VALUES
  (2, 1, 'sbshara', '$2y$10$qoAGLOZ5v6uTf64F2Es4VOuH7Xks8lGKMmjiNT3qC5y4yu0Xf9kr2', 1, NULL, NULL, NULL, NULL, '2016-12-04 07:09:12', '2016-12-04 07:09:12');

INSERT INTO `departments` (`id`, `dept_name`, `created_at`, `updated_at`) VALUES
  (1, 'Development', '2016-12-04 07:03:03', '2016-12-04 07:03:03'),
  (2, 'Finance', '2016-12-04 07:03:03', '2016-12-04 07:03:03'),
  (3, 'Human Resources', '2016-12-04 07:03:03', '2016-12-04 07:03:03'),
  (4, 'Marketing', '2016-12-04 07:03:03', '2016-12-04 07:03:03'),
  (5, 'Operations', '2016-12-04 07:03:03', '2016-12-04 07:03:03'),
  (6, 'Production', '2016-12-04 07:03:03', '2016-12-04 07:03:03'),
  (7, 'Quality Management', '2016-12-04 07:03:03', '2016-12-04 07:03:03'),
  (8, 'Research', '2016-12-04 07:03:03', '2016-12-04 07:03:03'),
  (9, 'Sales', '2016-12-04 07:03:03', '2016-12-04 07:03:03');


