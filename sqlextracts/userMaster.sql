select
  tblemp.emp_ref AS emp_ref,
  tblapp.first_name AS first_name,
  tblemp.middle_name AS middle_name,
  tblapp.last_name AS last_name,
  tblemp.father_name AS father_name,
  tblemp.mother_name AS mother_name,
  tblapp.birth_date AS birth_date,
  tblcti.city_name AS birth_place,
  tblapp.gender AS gender,
  tblapp.mobile_phone AS primary_phone,
  tblcnry.country_name AS nationality,
  tblemp.country_origin AS country_origin,
  tblapp.per_email AS personal_email,
  tblemp.business_email AS business_email,
  tblemp.extension AS local_extension,
  tblapp.prof_pic AS prof_pic,
  tblapp.source AS source,
  tblemp.hire_date AS joining_date,
  tblemp.religion AS religion,
  tblemp.marital_status AS marital_status,
  tblemp.emergency_contact_name AS emergency_contact_name,
  tblemp.emergency_contact_number AS emergency_contact_number,
  tblemp.height AS height,
  tblemp.weight AS weight,
  tblusr.active AS active,
  tblusr.username AS username,
  tblusr.id AS u_id,
  mapadr.address_id AS map_address_id,
  mapadr.applicant_id AS map_appplicant_id,
  tbladr.address_title AS address_title,
  tbladr.apartment AS apartment,
  tbladr.building_name AS building_name,
  tbladr.building_no AS building_no,
  tbladr.street_name AS street_name,
  tbladr.street_no AS street_no,
  tbladr.area AS area,
  tbladr.landmark AS landmark,
  tbladr.pobox AS pobox,
  tbladr.landline1 AS landline1,
  tbladr.landline2 AS landline2,
  tbladr.mobile1 AS mobile1,
  tbladr.mobile2 AS mobile2,
  tbladr.city_id AS tbladr_city_id,
  tbladr.notes AS notes,
  tbldgr.city_id AS tbldgr_acquired_city,
  tbldgr.acquired_date AS acquired_date,
  tbldgr.degree AS degree,
  tbldgr.institute_name AS tbldgr_acquired_from,
  mapdoc.doc_id AS mapdoc_doc_id,
  mapdoc.applicant_id AS mapdoc_applicant_id,
  tbldoc.doc_country AS document_country,
  tbldoc.doc_issue_date AS doc_issue_date,
  tbldoc.doc_expiry_date AS doc_expiry_date,
  tbldoc.doc_issuer AS doc_issuer,
  tbldoc.doc_loc AS doc_loc,
  tbldoc.doc_type AS doc_type,
  tblexp.city_id AS experience_city,
  tblexp.title AS job_title,
  tblexp.company AS company,
  tblexp.from_date AS exp_from_date,
  tblexp.to_date AS exp_to_date,
  tblexp.details AS exp_job_details,
  mapskl.applicant_id AS mapskl_applicant_id,
  mapskl.skill_id AS mapskl_skill_id,
  tblskl.skill_name AS skill_name,
  tblskl.skill_desc AS skill_desc,
  tblben.benefit_name AS benefit_name,
  tblben.description AS benefit_description,
  tblsal.salary AS salary,
  tblsal.benefit_id AS salary_benefit_id,
  tblsal.benefit_value AS benefit_value,
  tblsal.from_date AS salary_from_date,
  tblsal.to_date AS salary_to_date,
  mapdpt.emp_id AS dept_emp_id,
  mapdpt.dept_no AS dept_dept_no,
  tbldpt.dept_name AS dept_name,
  maplvs.leave_type AS leave_type,
  maplvs.emp_id AS maplvs_emp_id,
  maplvs.from_date AS maplvs_from_date,
  maplvs.to_date AS maplvs_to_date,
  tbllvt.leave_type AS tbllvt_leave_type,
  tbllvt.leave_notes AS leave_type_notes,
  mapttl.title_id AS mapttl_title_id,
  mapttl.emp_id AS mapttl_emp_id,
  mapttl.from_date AS mapttl_from_date,
  mapttl.to_date AS mapttl_to_date,
  tblttl.title AS title,
  tblttl.description AS tblttl_title_desc,
  mapint.interview_id AS mapint_interview_id,
  mapint.interviewer_id AS mapint_interviewer_id,
  tblisch.scheduled_by AS interview_scheduled_by,
  tblisch.schedule_date AS interview_schedule_date,
  tblisch.occurred AS interview_occurrred,
  tblisch.occurance_details AS interview_occurance_details,
  tblisch.schedule_notes AS interview_schedule_notes,
  mapisch.interview_id AS mapisch_interview_id,
  mapisch.interview_schedule_id AS mapisch_int_schedule_id,
  tblint.inter_details AS interview_details,
  tblint.inter_result AS interview_result,
  tblint.interview_date AS tblint_interview_date,
  tblpro.layout_boxed AS layout_boxed,
  tblpro.layout_fixed AS layout_fixed,
  tblpro.rightbar_skin_dark AS rightbar_skin_dark,
  tblpro.rightbar_slide AS rightbar_slide,
  tblpro.sidebar_collapsed AS sidebar_collapsed,
  tblpro.sidebar_hover_expand AS sidebar_hover_expand,
  tblpro.sidebar_mini AS sidebar_mini,
  tblpro.theme_color AS theme_color,
  tblvsa.file_number AS visa_file_number,
  tblvsa.sponsor AS visa_sponsor,
  tblvsa.visa_type AS visa_type,
  tblvsa.issue_date AS visa_issue_date,
  tblvsa.expiry_date AS visa_expiry_date,
  tblrol.title AS role_title,
  maprol.role_id AS maprol_role_id,
  maprol.user_id AS maprol_user_id,
  tblperm.funcs AS permission_functions,
  tblperm.module AS permission_module,
  tblperm.title AS permission_title,
  mapperm.perm_grant AS grant_permission
from (((((((((((((((((((((((((((((
    mena_portal.applicants tblapp left join
      mena_portal.employees tblemp on ((tblemp.applicant_id = tblapp.id))) left join
      mena_portal.users tblusr on((tblusr.emp_id = tblemp.id))) left join
      mena_portal.applicants_addresses mapadr on((tblapp.id = mapadr.applicant_id))) left join
      mena_portal.addresses tbladr on((mapadr.address_id = tbladr.id))) left join
      mena_portal.applicant_degree tbldgr on((tbldgr.applicant_id = tblapp.id))) left join
      mena_portal.applicant_docs mapdoc on((mapdoc.applicant_id = tblapp.id))) left join
      mena_portal.documents tbldoc on((tbldoc.id = mapdoc.doc_id))) left join
      mena_portal.applicant_experience tblexp on((tblexp.applicant_id = tblapp.id))) left join
      mena_portal.applicant_skills mapskl on((mapskl.applicant_id = tblapp.id))) left join
      mena_portal.skills tblskl on((tblskl.id = mapskl.skill_id))) left join
      mena_portal.salaries tblsal on((tblsal.emp_id = tblemp.id))) left join
      mena_portal.benefits tblben on((tblben.id = tblsal.benefit_id))) left join
      mena_portal.dept_emp mapdpt on((mapdpt.emp_id = tblemp.id))) left join
      mena_portal.departments tbldpt on((tbldpt.id = mapdpt.dept_no))) left join
      mena_portal.emp_leaves maplvs on((maplvs.emp_id = tblemp.id))) left join
      mena_portal.leavetypes tbllvt on((tbllvt.id = maplvs.leave_type))) left join
      mena_portal.emp_title mapttl on((mapttl.emp_id = tblemp.id))) left join
      mena_portal.titles tblttl on((tblttl.id = mapttl.title_id))) left join
      mena_portal.interview_interviewer mapint on((mapint.interviewer_id = tblusr.id))) left join
      mena_portal.interviews tblint on((tblint.id = tblapp.id))) left join
      mena_portal.interview_schedule_mapping mapisch on((mapisch.interview_id = tblint.id))) left join
      mena_portal.interview_schedule tblisch on((tblisch.id = mapisch.interview_schedule_id))) left join
      mena_portal.profile_settings tblpro on((tblpro.user_id = tblusr.id))) left join
      mena_portal.visa_status tblvsa on((tblvsa.applicant_id = tblapp.id))) left join
      mena_portal.role_user maprol on((maprol.user_id = tblusr.id))) left join
      mena_portal.roles tblrol on((tblrol.id = maprol.role_id))) left join
      mena_portal.perm_role mapperm on((mapperm.role_id = tblrol.id)))left join
      mena_portal.permissions tblperm on((tblperm.id = mapperm.perm_id))) LEFT JOIN
      mena_portal.countries tblcnry on ((tblapp.nationality = tblcnry.id)) LEFT JOIN
      mena_portal.cities tblcti on ((tblemp.birth_place = tblcti.id)));
