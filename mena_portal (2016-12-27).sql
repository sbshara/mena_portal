-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 27, 2016 at 01:39 PM
-- Server version: 5.7.17
-- PHP Version: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mena_portal`
--

-- --------------------------------------------------------

--
-- Structure for view `usermaster`
--

CREATE ALGORITHM=UNDEFINED DEFINER=`mena_portal`@`localhost` SQL SECURITY DEFINER VIEW `usermaster`  AS  select `tblemp`.`emp_ref` AS `emp_ref`,`tblapp`.`first_name` AS `first_name`,`tblemp`.`middle_name` AS `middle_name`,`tblapp`.`last_name` AS `last_name`,`tblemp`.`father_name` AS `father_name`,`tblemp`.`mother_name` AS `mother_name`,`tblapp`.`birth_date` AS `birth_date`,`tblemp`.`birth_place` AS `birth_place`,`tblapp`.`gender` AS `gender`,`tblapp`.`mobile_phone` AS `primary_phone`,`tblapp`.`nationality` AS `nationality`,`tblemp`.`country_origin` AS `country_origin`,`tblapp`.`per_email` AS `personal_email`,`tblemp`.`business_email` AS `business_email`,`tblemp`.`extension` AS `local_extension`,`tblapp`.`prof_pic` AS `prof_pic`,`tblapp`.`source` AS `source`,`tblemp`.`hire_date` AS `joining_date`,`tblemp`.`religion` AS `religion`,`tblemp`.`marital_status` AS `marital_status`,`tblemp`.`emergency_contact_name` AS `emergency_contact_name`,`tblemp`.`emergency_contact_number` AS `emergency_contact_number`,`tblemp`.`height` AS `height`,`tblemp`.`weight` AS `weight`,`tblusr`.`active` AS `active`,`tblusr`.`username` AS `username`,`mapadr`.`address_id` AS `map_address_id`,`mapadr`.`applicant_id` AS `map_appplicant_id`,`tbladr`.`address_title` AS `address_title`,`tbladr`.`apartment` AS `apartment`,`tbladr`.`building_name` AS `building_name`,`tbladr`.`building_no` AS `building_no`,`tbladr`.`street_name` AS `street_name`,`tbladr`.`street_no` AS `street_no`,`tbladr`.`area` AS `area`,`tbladr`.`landmark` AS `landmark`,`tbladr`.`pobox` AS `pobox`,`tbladr`.`landline1` AS `landline1`,`tbladr`.`landline2` AS `landline2`,`tbladr`.`mobile1` AS `mobile1`,`tbladr`.`mobile2` AS `mobile2`,`tbladr`.`city_id` AS `tbladr_city_id`,`tbladr`.`notes` AS `notes`,`tbldgr`.`city_id` AS `tbldgr_acquired_city`,`tbldgr`.`acquired_date` AS `acquired_date`,`tbldgr`.`degree` AS `degree`,`tbldgr`.`institute_name` AS `tbldgr_acquired_from`,`mapdoc`.`doc_id` AS `mapdoc_doc_id`,`mapdoc`.`applicant_id` AS `mapdoc_applicant_id`,`tbldoc`.`doc_country` AS `document_country`,`tbldoc`.`doc_issue_date` AS `doc_issue_date`,`tbldoc`.`doc_expiry_date` AS `doc_expiry_date`,`tbldoc`.`doc_issuer` AS `doc_issuer`,`tbldoc`.`doc_loc` AS `doc_loc`,`tbldoc`.`doc_type` AS `doc_type`,`tblexp`.`city_id` AS `experience_city`,`tblexp`.`title` AS `job_title`,`tblexp`.`company` AS `company`,`tblexp`.`from_date` AS `exp_from_date`,`tblexp`.`to_date` AS `exp_to_date`,`tblexp`.`details` AS `exp_job_details`,`mapskl`.`applicant_id` AS `mapskl_applicant_id`,`mapskl`.`skill_id` AS `mapskl_skill_id`,`tblskl`.`skill_name` AS `skill_name`,`tblskl`.`skill_desc` AS `skill_desc`,`tblben`.`benefit_name` AS `benefit_name`,`tblben`.`description` AS `benefit_description`,`tblsal`.`salary` AS `salary`,`tblsal`.`benefit_id` AS `salary_benefit_id`,`tblsal`.`benefit_value` AS `benefit_value`,`tblsal`.`from_date` AS `salary_from_date`,`tblsal`.`to_date` AS `salary_to_date`,`mapdpt`.`emp_id` AS `dept_emp_id`,`mapdpt`.`dept_no` AS `dept_dept_no`,`tbldpt`.`dept_name` AS `dept_name`,`maplvs`.`leave_type` AS `leave_type`,`maplvs`.`emp_id` AS `maplvs_emp_id`,`maplvs`.`from_date` AS `maplvs_from_date`,`maplvs`.`to_date` AS `maplvs_to_date`,`tbllvt`.`leave_type` AS `tbllvt_leave_type`,`tbllvt`.`leave_notes` AS `leave_type_notes`,`mapttl`.`title_id` AS `mapttl_title_id`,`mapttl`.`emp_id` AS `mapttl_emp_id`,`mapttl`.`from_date` AS `mapttl_from_date`,`mapttl`.`to_date` AS `mapttl_to_date`,`tblttl`.`title` AS `title`,`tblttl`.`description` AS `tblttl_title_desc`,`mapint`.`interview_id` AS `mapint_interview_id`,`mapint`.`interviewer_id` AS `mapint_interviewer_id`,`tblisch`.`scheduled_by` AS `interview_scheduled_by`,`tblisch`.`schedule_date` AS `interview_schedule_date`,`tblisch`.`occurred` AS `interview_occurrred`,`tblisch`.`occurance_details` AS `interview_occurance_details`,`tblisch`.`schedule_notes` AS `interview_schedule_notes`,`mapisch`.`interview_id` AS `mapisch_interview_id`,`mapisch`.`interview_schedule_id` AS `mapisch_int_schedule_id`,`tblint`.`inter_details` AS `interview_details`,`tblint`.`inter_result` AS `interview_result`,`tblint`.`interview_date` AS `tblint_interview_date`,`tblpro`.`layout_boxed` AS `layout_boxed`,`tblpro`.`layout_fixed` AS `layout_fixed`,`tblpro`.`rightbar_skin_dark` AS `rightbar_skin_dark`,`tblpro`.`rightbar_slide` AS `rightbar_slide`,`tblpro`.`sidebar_collapsed` AS `sidebar_collapsed`,`tblpro`.`sidebar_hover_expand` AS `sidebar_hover_expand`,`tblpro`.`sidebar_mini` AS `sidebar_mini`,`tblpro`.`theme_color` AS `theme_color`,`tblvsa`.`file_number` AS `visa_file_number`,`tblvsa`.`sponsor` AS `visa_sponsor`,`tblvsa`.`visa_type` AS `visa_type`,`tblvsa`.`issue_date` AS `visa_issue_date`,`tblvsa`.`expiry_date` AS `visa_expiry_date`,`tblrol`.`title` AS `role_title`,`maprol`.`role_id` AS `maprol_role_id`,`maprol`.`user_id` AS `maprol_user_id`,`tblperm`.`funcs` AS `permission_functions`,`tblperm`.`module` AS `permission_module`,`tblperm`.`title` AS `permission_title`,`mapperm`.`perm_grant` AS `grant_permission` from ((((((((((((((((((((((((((((`applicants` `tblapp` left join `employees` `tblemp` on((`tblemp`.`applicant_id` = `tblapp`.`id`))) left join `users` `tblusr` on((`tblusr`.`emp_id` = `tblemp`.`id`))) left join `applicants_addresses` `mapadr` on((`tblapp`.`id` = `mapadr`.`applicant_id`))) left join `addresses` `tbladr` on((`mapadr`.`address_id` = `tbladr`.`id`))) left join `applicant_degree` `tbldgr` on((`tbldgr`.`applicant_id` = `tblapp`.`id`))) left join `applicant_docs` `mapdoc` on((`mapdoc`.`applicant_id` = `tblapp`.`id`))) left join `documents` `tbldoc` on((`tbldoc`.`id` = `mapdoc`.`doc_id`))) left join `applicant_experience` `tblexp` on((`tblexp`.`applicant_id` = `tblapp`.`id`))) left join `applicant_skills` `mapskl` on((`mapskl`.`applicant_id` = `tblapp`.`id`))) left join `skills` `tblskl` on((`tblskl`.`id` = `mapskl`.`skill_id`))) left join `salaries` `tblsal` on((`tblsal`.`emp_id` = `tblemp`.`id`))) left join `benefits` `tblben` on((`tblben`.`id` = `tblsal`.`benefit_id`))) left join `dept_emp` `mapdpt` on((`mapdpt`.`emp_id` = `tblemp`.`id`))) left join `departments` `tbldpt` on((`tbldpt`.`id` = `mapdpt`.`dept_no`))) left join `emp_leaves` `maplvs` on((`maplvs`.`emp_id` = `tblemp`.`id`))) left join `leavetypes` `tbllvt` on((`tbllvt`.`id` = `maplvs`.`leave_type`))) left join `emp_title` `mapttl` on((`mapttl`.`emp_id` = `tblemp`.`id`))) left join `titles` `tblttl` on((`tblttl`.`id` = `mapttl`.`title_id`))) left join `interview_interviewer` `mapint` on((`mapint`.`interviewer_id` = `tblusr`.`id`))) left join `interviews` `tblint` on((`tblint`.`id` = `tblapp`.`id`))) left join `interview_schedule_mapping` `mapisch` on((`mapisch`.`interview_id` = `tblint`.`id`))) left join `interview_schedule` `tblisch` on((`tblisch`.`id` = `mapisch`.`interview_schedule_id`))) left join `profile_settings` `tblpro` on((`tblpro`.`user_id` = `tblusr`.`id`))) left join `visa_status` `tblvsa` on((`tblvsa`.`applicant_id` = `tblapp`.`id`))) left join `role_user` `maprol` on((`maprol`.`user_id` = `tblusr`.`id`))) left join `roles` `tblrol` on((`tblrol`.`id` = `maprol`.`role_id`))) left join `perm_role` `mapperm` on((`mapperm`.`role_id` = `tblrol`.`id`))) left join `permissions` `tblperm` on((`tblperm`.`id` = `mapperm`.`perm_id`))) ;

--
-- VIEW  `usermaster`
-- Data: None
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
