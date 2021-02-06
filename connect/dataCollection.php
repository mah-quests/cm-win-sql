<?php

//include 'connectDB.php';

##########  Dashboard Data (generating graphs) #########
$sql = " SELECT * FROM summary_tbl WHERE DATE(completed_datetime) between '2020/10/01' and '2020/10/31' ";
$result = sqlsrv_query($db, $sql);
$numOfSurveysOct20 = sqlsrv_num_rows($result);

$sql = " SELECT * FROM summary_tbl WHERE DATE(completed_datetime) between '2020/11/01' and '2020/11/30' ";
$result = sqlsrv_query($db, $sql);
$numOfSurveysNov20 = sqlsrv_num_rows($result);


$sql = " SELECT * FROM summary_tbl WHERE DATE(completed_datetime) between '2020/12/01' and '2020/12/31' ";
$result = sqlsrv_query($db, $sql);
$numOfSurveysDec20 = sqlsrv_num_rows($result);


$sql = " SELECT * FROM summary_tbl WHERE DATE(completed_datetime) between '2021/01/01' and '2021/01/31' ";
$result = sqlsrv_query($db, $sql);
$numOfSurveysJan21 = sqlsrv_num_rows($result);


$sql = " SELECT * FROM summary_tbl WHERE DATE(completed_datetime) between '2021/02/01' and '2021/02/28' ";
$result = sqlsrv_query($db, $sql);
$numOfSurveysFeb21 = sqlsrv_num_rows($result);


$sql = " SELECT * FROM summary_tbl WHERE DATE(completed_datetime) between '2021/03/01' and '2021/03/31' ";
$result = sqlsrv_query($db, $sql);
$numOfSurveysMar21 = sqlsrv_num_rows($result);


$sql = " SELECT * FROM summary_tbl WHERE DATE(completed_datetime) between '2021/04/01' and '2021/04/30' ";
$result = sqlsrv_query($db, $sql);
$numOfSurveysApr21 = sqlsrv_num_rows($result);


$sql = " SELECT * FROM summary_tbl WHERE DATE(completed_datetime) between '2021/05/01' and '2021/05/31' ";
$result = sqlsrv_query($db, $sql);
$numOfSurveysMay21 = sqlsrv_num_rows($result);


$sql = " SELECT * FROM summary_tbl WHERE DATE(completed_datetime) between '2021/06/01' and '2021/06/30' ";
$result = sqlsrv_query($db, $sql);
$numOfSurveysJun21 = sqlsrv_num_rows($result);


$sql = " SELECT * FROM summary_tbl WHERE DATE(completed_datetime) between '2021/07/01' and '2021/07/31' ";
$result = sqlsrv_query($db, $sql);
$numOfSurveysJul21 = sqlsrv_num_rows($result);


$sql = " SELECT * FROM summary_tbl WHERE DATE(completed_datetime) between '2021/08/01' and '2021/08/31' ";
$result = sqlsrv_query($db, $sql);
$numOfSurveysAug21 = sqlsrv_num_rows($result);


$sql = " SELECT * FROM summary_tbl WHERE DATE(completed_datetime) between '2021/09/01' and '2021/09/30' ";
$result = sqlsrv_query($db, $sql);
$numOfSurveysSep21 = sqlsrv_num_rows($result);

$sql = " SELECT * FROM summary_tbl WHERE DATE(completed_datetime) between '2021/10/01' and '2021/10/31' ";
$result = sqlsrv_query($db, $sql);
$numOfSurveysOct21 = sqlsrv_num_rows($result);

##########  Dashboard Data (mobiliser info) #########

$sql = "SELECT * FROM summary_tbl WHERE date(completed_datetime)=CURDATE() - interval 1 day";
$result = sqlsrv_query($db, $sql);
$numOfCompletedSurveyYesterday = sqlsrv_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE date(completed_datetime)=CURDATE() - interval 2 day";
$result = sqlsrv_query($db, $sql);
$numOfCompletedSurvey2DaysAgo = sqlsrv_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE date(completed_datetime)=CURDATE() - interval 3 day";
$result = sqlsrv_query($db, $sql);
$numOfCompletedSurvey3DaysAgo = sqlsrv_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE date(completed_datetime)=CURDATE() - interval 4 day";
$result = sqlsrv_query($db, $sql);
$numOfCompletedSurvey4DaysAgo = sqlsrv_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE date(completed_datetime)=CURDATE() - interval 5 day";
$result = sqlsrv_query($db, $sql);
$numOfCompletedSurvey5DaysAgo = sqlsrv_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE date(completed_datetime)=CURDATE() - interval 6 day";
$result = sqlsrv_query($db, $sql);
$numOfCompletedSurvey6DaysAgo = sqlsrv_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE date(completed_datetime)=CURDATE() - interval 7 day";
$result = sqlsrv_query($db, $sql);
$numOfCompletedSurvey7DaysAgo = sqlsrv_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE date(completed_datetime)=CURDATE() - interval 8 day";
$result = sqlsrv_query($db, $sql);
$numOfCompletedSurvey8DaysAgo = sqlsrv_num_rows($result);




##########  Dashboard Data (survey info) #########

$sql = "SELECT * FROM mobiliser_tbl WHERE date(created_date)=CURDATE() - interval 1 day";
$result = sqlsrv_query($db, $sql);
$numOfRegisteredMobilisersYesterday = sqlsrv_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl WHERE date(created_date)=CURDATE() - interval 2 day";
$result = sqlsrv_query($db, $sql);
$numOfRegisteredMobilisers2DaysAgo = sqlsrv_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl WHERE date(created_date)=CURDATE() - interval 3 day";
$result = sqlsrv_query($db, $sql);
$numOfRegisteredMobilisers3DaysAgo = sqlsrv_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl WHERE date(created_date)=CURDATE() - interval 4 day";
$result = sqlsrv_query($db, $sql);
$numOfRegisteredMobilisers4DaysAgo = sqlsrv_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl WHERE date(created_date)=CURDATE() - interval 5 day";
$result = sqlsrv_query($db, $sql);
$numOfRegisteredMobilisers5DaysAgo = sqlsrv_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl WHERE date(created_date)=CURDATE() - interval 6 day";
$result = sqlsrv_query($db, $sql);
$numOfRegisteredMobilisers6DaysAgo = sqlsrv_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl WHERE date(created_date)=CURDATE() - interval 7 day";
$result = sqlsrv_query($db, $sql);
$numOfRegisteredMobilisers7DaysAgo = sqlsrv_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl WHERE date(created_date)=CURDATE() - interval 8 day";
$result = sqlsrv_query($db, $sql);
$numOfRegisteredMobilisers8DaysAgo = sqlsrv_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl WHERE date(created_date)=CURDATE() - interval 9 day";
$result = sqlsrv_query($db, $sql);
$numOfRegisteredMobilisers9DaysAgo = sqlsrv_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl WHERE date(created_date)=CURDATE() - interval 10 day";
$result = sqlsrv_query($db, $sql);
$numOfRegisteredMobilisers10DaysAgo = sqlsrv_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl WHERE date(created_date)=CURDATE() - interval 11 day";
$result = sqlsrv_query($db, $sql);
$numOfRegisteredMobilisers11DaysAgo = sqlsrv_num_rows($result);

##########  Overall Mobiliser Stats #########

// Total number of mobilisers registered on the app
$sql = "SELECT * FROM mobiliser_tbl";
$result = sqlsrv_query($db, $sql);
$numOfRegisteredMobilisers = sqlsrv_num_rows($result);


##########  Provincial Mobiliser Data Stats #########
$sql = "SELECT * FROM mobiliser_tbl WHERE province = 'Gauteng' ";
$result = sqlsrv_query($db, $sql);
$gautengMobilisers = sqlsrv_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl WHERE province = 'Free State' ";
$result = sqlsrv_query($db, $sql);
$freeStateMobilisers = sqlsrv_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl WHERE province = 'North West' ";
$result = sqlsrv_query($db, $sql);
$northWestMobilisers = sqlsrv_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl WHERE province = 'Mpumalanga' ";
$result = sqlsrv_query($db, $sql);
$mpumalangaMobilisers = sqlsrv_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl WHERE province = 'Limpopo' ";
$result = sqlsrv_query($db, $sql);
$limpopoMobilisers = sqlsrv_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl WHERE province = 'Kwazulu Natal' ";
$result = sqlsrv_query($db, $sql);
$kznMobilisers = sqlsrv_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl WHERE province = 'Northern Cape' ";
$result = sqlsrv_query($db, $sql);
$northernCapeMobilisers = sqlsrv_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl WHERE province = 'Eastern Cape' ";
$result = sqlsrv_query($db, $sql);
$easternCapeMobilisers = sqlsrv_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl WHERE province = 'Western Cape' ";
$result = sqlsrv_query($db, $sql);
$westernCapeMobilisers = sqlsrv_num_rows($result);


##########  Overall Surveys Stats #########

// Total number of surveys completed across the provinces
$sql = "SELECT * FROM summary_tbl";
$result = sqlsrv_query($db, $sql);
$numOfCompletedSurveys = sqlsrv_num_rows($result);

##########  Provincial Survey Data Stats #########

$sql = "SELECT * FROM summary_tbl WHERE province = 'Gauteng' ";
$result = sqlsrv_query($db, $sql);
$gautengCompletedSurveys = sqlsrv_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE province = 'Free State' ";
$result = sqlsrv_query($db, $sql);
$freeStateCompletedSurveys = sqlsrv_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE province = 'North West' ";
$result = sqlsrv_query($db, $sql);
$northWestCompletedSurveys = sqlsrv_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE province = 'Mpumalanga' ";
$result = sqlsrv_query($db, $sql);
$mpumalangaCompletedSurveys = sqlsrv_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE province = 'Limpopo' ";
$result = sqlsrv_query($db, $sql);
$limpopoCompletedSurveys = sqlsrv_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE province = 'Kwazulu Natal' ";
$result = sqlsrv_query($db, $sql);
$kznCompletedSurveys = sqlsrv_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE province = 'Northern Cape' ";
$result = sqlsrv_query($db, $sql);
$northernCapeCompletedSurveys = sqlsrv_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE province = 'Eastern Cape' ";
$result = sqlsrv_query($db, $sql);
$easternCapeCompletedSurveys = sqlsrv_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE province = 'Western Cape' ";
$result = sqlsrv_query($db, $sql);
$westernCapeCompletedSurveys = sqlsrv_num_rows($result);


##########  Stats for today #########

// Total number of agents registered on the app
$sql = "SELECT * FROM mobiliser_tbl WHERE date(created_date)=CURDATE()";
$result = sqlsrv_query($db, $sql);
$numOfRegisteredMobilisersToday = sqlsrv_num_rows($result);


$sql = "SELECT DISTINCT mobiliser_id FROM summary_tbl where date(completed_datetime)=CURDATE()";
$result = sqlsrv_query($db, $sql);
$numOfActiveAgentsToday = sqlsrv_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE date(completed_datetime)=CURDATE() AND province = 'Gauteng' ";
$result = sqlsrv_query($db, $sql);
$gautengCompletedSurveysToday = sqlsrv_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE date(completed_datetime)=CURDATE() AND province = 'Free State' ";
$result = sqlsrv_query($db, $sql);
$freeStateCompletedSurveysToday = sqlsrv_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE date(completed_datetime)=CURDATE() AND province = 'North West' ";
$result = sqlsrv_query($db, $sql);
$northWestCompletedSurveysToday = sqlsrv_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE date(completed_datetime)=CURDATE() AND province = 'Mpumalanga' ";
$result = sqlsrv_query($db, $sql);
$mpumalangaCompletedSurveysToday = sqlsrv_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE date(completed_datetime)=CURDATE() AND province = 'Limpopo' ";
$result = sqlsrv_query($db, $sql);
$limpopoCompletedSurveysToday = sqlsrv_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE date(completed_datetime)=CURDATE() AND province = 'Kwazulu Natal' ";
$result = sqlsrv_query($db, $sql);
$kznCompletedSurveysToday = sqlsrv_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE date(completed_datetime)=CURDATE() AND province = 'Northern Cape' ";
$result = sqlsrv_query($db, $sql);
$northernCapeCompletedSurveysToday = sqlsrv_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE date(completed_datetime)=CURDATE() AND province = 'Eastern Cape' ";
$result = sqlsrv_query($db, $sql);
$easternCapeCompletedSurveysToday = sqlsrv_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE date(completed_datetime)=CURDATE() AND province = 'Western Cape' ";
$result = sqlsrv_query($db, $sql);
$westernCapeCompletedSurveysToday = sqlsrv_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE date(completed_datetime)=CURDATE()";
$result = sqlsrv_query($db, $sql);
$numOfCompletedSurveysToday = sqlsrv_num_rows($result);

##########  Sector Mobiliser Details #########

$sql = "SELECT * FROM mobiliser_tbl where net_structure='Faith' ";
$result = sqlsrv_query($db, $sql);
$faithMobilisers = sqlsrv_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl where net_structure='People Living with HIV and AIDS (PLHIV)' ";
$result = sqlsrv_query($db, $sql);
$plhivMobilisers = sqlsrv_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl where net_structure='Non-Governmental Organisations' ";
$result = sqlsrv_query($db, $sql);
$npoMobilisers = sqlsrv_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl where net_structure='Sex Workers' ";
$result = sqlsrv_query($db, $sql);
$sexWorkerMobilisers = sqlsrv_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl where net_structure='Men' ";
$result = sqlsrv_query($db, $sql);
$menMobilisers = sqlsrv_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl where net_structure='LGBTIQ' ";
$result = sqlsrv_query($db, $sql);
$lgbtiMobilisers = sqlsrv_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl where net_structure='Youth' ";
$result = sqlsrv_query($db, $sql);
$youthMobilisers = sqlsrv_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl where net_structure='People with Disabilities' ";
$result = sqlsrv_query($db, $sql);
$peopleWithDisabilitiesMobilisers = sqlsrv_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl where net_structure='Sport, Arts & Culture' ";
$result = sqlsrv_query($db, $sql);
$sacMobilisers = sqlsrv_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl where net_structure='Traditional Health Practitioners' ";
$result = sqlsrv_query($db, $sql);
$traditionalhealthMobilisers = sqlsrv_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl where net_structure='Women' ";
$result = sqlsrv_query($db, $sql);
$womenMobilisers = sqlsrv_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl where net_structure='Children' ";
$result = sqlsrv_query($db, $sql);
$childrenMobilisers = sqlsrv_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl where net_structure='Health Professionals' ";
$result = sqlsrv_query($db, $sql);
$healthProfessionalsMobilisers = sqlsrv_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl where net_structure='Research' ";
$result = sqlsrv_query($db, $sql);
$researchMobilisers = sqlsrv_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl where net_structure='Traditional Leaders' ";
$result = sqlsrv_query($db, $sql);
$traditionalLeadersMobilisers = sqlsrv_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl where net_structure='Law & Human Rights' ";
$result = sqlsrv_query($db, $sql);
$humanRightsMobilisers = sqlsrv_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl where net_structure='Higer Education' ";
$result = sqlsrv_query($db, $sql);
$higerEducationMobilisers = sqlsrv_num_rows($result);


$sql = "SELECT * FROM mobiliser_tbl where net_structure='Labour' ";
$result = sqlsrv_query($db, $sql);
$labourMobilisers = sqlsrv_num_rows($result);


##########  Sector Survey Details #########

$sql = "SELECT * FROM summary_tbl WHERE mobiliser_id IN  
(SELECT mobiliser_id FROM mobiliser_tbl where net_structure = 'Faith') ";
$result = sqlsrv_query($db, $sql);
$faithSurveys = sqlsrv_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE mobiliser_id IN 
(SELECT mobiliser_id FROM mobiliser_tbl where net_structure = 'People Living with HIV and AIDS (PLHIV)') ";
$result = sqlsrv_query($db, $sql);
$plhivSurveys = sqlsrv_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE mobiliser_id IN 
(SELECT mobiliser_id FROM mobiliser_tbl where net_structure = 'Non-Governmental Organisations') ";
$result = sqlsrv_query($db, $sql);
$npoSurveys = sqlsrv_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE mobiliser_id IN 
(SELECT mobiliser_id FROM mobiliser_tbl where net_structure = 'Sex Workers') ";
$result = sqlsrv_query($db, $sql);
$sexWorkerSurveys = sqlsrv_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE mobiliser_id IN 
(SELECT mobiliser_id FROM mobiliser_tbl where net_structure = 'Men') ";
$result = sqlsrv_query($db, $sql);
$menSurveys = sqlsrv_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE mobiliser_id IN 
(SELECT mobiliser_id FROM mobiliser_tbl where net_structure = 'LGBTIQ') ";
$result = sqlsrv_query($db, $sql);
$lgbtiSurveys = sqlsrv_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE mobiliser_id IN 
(SELECT mobiliser_id FROM mobiliser_tbl where net_structure = 'Youth') ";   
$result = sqlsrv_query($db, $sql);
$youthSurveys = sqlsrv_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE mobiliser_id IN 
(SELECT mobiliser_id FROM mobiliser_tbl where net_structure = 'People with Disabilities') ";
$result = sqlsrv_query($db, $sql);
$peopleWithDisabilitiesSurveys = sqlsrv_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE mobiliser_id IN 
(SELECT mobiliser_id FROM mobiliser_tbl where net_structure = 'Sport, Arts & Culture') ";
$result = sqlsrv_query($db, $sql);
$sacSurveys = sqlsrv_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE mobiliser_id IN 
(SELECT mobiliser_id FROM mobiliser_tbl where net_structure = 'Traditional Health Practitioners') ";
$result = sqlsrv_query($db, $sql);
$traditionalhealthSurveys = sqlsrv_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE mobiliser_id IN 
(SELECT mobiliser_id FROM mobiliser_tbl where net_structure = 'Women') ";
$result = sqlsrv_query($db, $sql);
$womenSurveys = sqlsrv_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE mobiliser_id IN 
(SELECT mobiliser_id FROM mobiliser_tbl where net_structure = 'Children') ";
$result = sqlsrv_query($db, $sql);
$childrenSurveys = sqlsrv_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE mobiliser_id IN 
(SELECT mobiliser_id FROM mobiliser_tbl where net_structure = 'Health Professionals') ";
$result = sqlsrv_query($db, $sql);
$healthProfessionalsSurveys = sqlsrv_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE mobiliser_id IN 
(SELECT mobiliser_id FROM mobiliser_tbl where net_structure = 'Research') ";
$result = sqlsrv_query($db, $sql);
$researchSurveys = sqlsrv_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE mobiliser_id IN 
(SELECT mobiliser_id FROM mobiliser_tbl where net_structure = 'Traditional Leaders') ";
$result = sqlsrv_query($db, $sql);
$traditionalLeadersSurveys = sqlsrv_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE mobiliser_id IN 
(SELECT mobiliser_id FROM mobiliser_tbl where net_structure = 'Law & Human Rights') ";
$result = sqlsrv_query($db, $sql);
$humanRightsSurveys = sqlsrv_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE mobiliser_id IN 
(SELECT mobiliser_id FROM mobiliser_tbl where net_structure = 'Higer Education') ";
$result = sqlsrv_query($db, $sql);
$higerEducationSurveys = sqlsrv_num_rows($result);


$sql = "SELECT * FROM summary_tbl WHERE mobiliser_id IN 
(SELECT mobiliser_id FROM mobiliser_tbl where net_structure = 'Labour') ";
$result = sqlsrv_query($db, $sql);
$labourSurveys = sqlsrv_num_rows($result);


// Stats for yesterday
//SELECT count(DISTINCT mobiliser_id) FROM summary_tbl where date(completed_datetime)=CURDATE() - interval 1 day";
$sql = "SELECT count(DISTINCT mobiliser_id) FROM summary_tbl where date(completed_datetime)=CURDATE() - interval 1 day";
$result = sqlsrv_query($db, $sql);
$numOfActiveAgentsYesterday = sqlsrv_num_rows($result);


##########  Data Analysis (reports page) #########
// Age brackets
$sql = "SELECT * FROM respondant_contact_tbl where age_bracket='18-24' ";
$result = sqlsrv_query($db, $sql);
$numOfAge18to24 = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where age_bracket='25-34' ";
$result = sqlsrv_query($db, $sql);
$numOfAge25to34 = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where age_bracket='35-44' ";
$result = sqlsrv_query($db, $sql);
$numOfAge35to44 = sqlsrv_num_rows($result);


$sql = "SELECT * FROM respondant_contact_tbl where age_bracket='45-54' ";
$result = sqlsrv_query($db, $sql);
$numOfAge45to54 = sqlsrv_num_rows($result);


$sql = "SELECT * FROM respondant_contact_tbl where age_bracket='55-65' ";
$result = sqlsrv_query($db, $sql);
$numOfAge55to64 = sqlsrv_num_rows($result);


$sql = "SELECT * FROM respondant_contact_tbl where age_bracket='65+' ";
$result = sqlsrv_query($db, $sql);
$numOfAge65plus = sqlsrv_num_rows($result);


// Race 
$sql = "SELECT * FROM respondant_contact_tbl where race='Black' ";
$result = sqlsrv_query($db, $sql);
$numOfRaceBlack = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where race='Asian' ";
$result = sqlsrv_query($db, $sql);
$numOfRaceAsian = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where race='Colored' ";
$result = sqlsrv_query($db, $sql);
$numOfRaceColored = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where race='Indian' ";
$result = sqlsrv_query($db, $sql);
$numOfRaceIndian = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where race='White' ";
$result = sqlsrv_query($db, $sql);
$numOfRaceWhite = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where race='Other' ";
$result = sqlsrv_query($db, $sql);
$numOfRaceOther = sqlsrv_num_rows($result);


// Religion 
$sql = "SELECT * FROM respondant_contact_tbl where religion='Christian' ";
$result = sqlsrv_query($db, $sql);
$numOfReligionChristian = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where religion='Islam' ";
$result = sqlsrv_query($db, $sql);
$numOfReligionIslam = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where religion='Hinduism' ";
$result = sqlsrv_query($db, $sql);
$numOfReligionHinduism = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where religion='African-Religion' ";
$result = sqlsrv_query($db, $sql);
$numOfReligionAfrican = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where religion='Judaism' ";
$result = sqlsrv_query($db, $sql);
$numOfReligionJudaism = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where religion='Atheist' ";
$result = sqlsrv_query($db, $sql);
$numOfReligionAtheist = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where religion='Rastafarian' ";
$result = sqlsrv_query($db, $sql);
$numOfReligionRastafarian = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where religion='Prefer not to say' ";
$result = sqlsrv_query($db, $sql);
$numOfReligionUnknown = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where religion='Other' ";
$result = sqlsrv_query($db, $sql);
$numOfReligionOther = sqlsrv_num_rows($result);

// Gender Identity
$sql = "SELECT * FROM respondant_contact_tbl where gender_id='Bisexual' ";
$result = sqlsrv_query($db, $sql);
$numOfGenderIDBisexual = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where gender_id='Heterosexual' ";
$result = sqlsrv_query($db, $sql);
$numOfGenderIDHeterosexual = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where gender_id='Homosexual' ";
$result = sqlsrv_query($db, $sql);
$numOfGenderIDHomosexual = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where gender_id='prefer-not' ";
$result = sqlsrv_query($db, $sql);
$numOfGenderIDUnknown = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where gender_id='Other' ";
$result = sqlsrv_query($db, $sql);
$numOfGenderIDOther = sqlsrv_num_rows($result);

//Gender
$sql = "SELECT * FROM respondant_contact_tbl where gender='Cisgender' ";
$result = sqlsrv_query($db, $sql);
$numOfGenderCisgender = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where gender='Gender Non-Conforming' ";
$result = sqlsrv_query($db, $sql);
$numOfGenderNonConform = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where gender='Transgender' ";
$result = sqlsrv_query($db, $sql);
$numOfGenderTransgender = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where gender='Queer/ Questioning' ";
$result = sqlsrv_query($db, $sql);
$numOfGenderQueer = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where gender='prefer-not' ";
$result = sqlsrv_query($db, $sql);
$numOfGenderUnknown = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where gender='Other' ";
$result = sqlsrv_query($db, $sql);
$numOfGenderOther = sqlsrv_num_rows($result);

// Sex Composition
$sql = "SELECT * FROM respondant_contact_tbl where sex='Male' ";
$result = sqlsrv_query($db, $sql);
$numOfSexMale = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where sex='Female' ";
$result = sqlsrv_query($db, $sql);
$numOfSexFemale = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where sex='Intersex' ";
$result = sqlsrv_query($db, $sql);
$numOfSexIntersex = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where sex='prefer-not' ";
$result = sqlsrv_query($db, $sql);
$numOfSexUnknown = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where sex='Other' ";
$result = sqlsrv_query($db, $sql);
$numOfSexOther = sqlsrv_num_rows($result);

//Pronous
$sql = "SELECT * FROM respondant_contact_tbl where pronouns='He' ";
$result = sqlsrv_query($db, $sql);
$numOfPronounsHeOld = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where pronouns='Him' ";
$result = sqlsrv_query($db, $sql);
$numOfPronounsHimOld = sqlsrv_num_rows($result);

$numOfPronounsHimNew = $numOfPronounsHeOld + $numOfPronounsHimOld;

$sql = "SELECT * FROM respondant_contact_tbl where pronouns='They' ";
$result = sqlsrv_query($db, $sql);
$numOfPronounsTheyOld = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where pronouns='Them' ";
$result = sqlsrv_query($db, $sql);
$numOfPronounsThemOld = sqlsrv_num_rows($result);

$numOfPronounsThemNew = $numOfPronounsTheyOld + $numOfPronounsThemOld;

$sql = "SELECT * FROM respondant_contact_tbl where pronouns='She' ";
$result = sqlsrv_query($db, $sql);
$numOfPronounsSheOld = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where pronouns='Her' ";
$result = sqlsrv_query($db, $sql);
$numOfPronounsHerOld = sqlsrv_num_rows($result);

$numOfPronounsHerNew = $numOfPronounsSheOld + $numOfPronounsHerOld;

$sql = "SELECT * FROM respondant_contact_tbl where pronouns='Other' ";
$result = sqlsrv_query($db, $sql);
$numOfPronounsOther = sqlsrv_num_rows($result);

//Disability
$sql = "SELECT * FROM respondant_contact_tbl where disable='Yes' ";
$result = sqlsrv_query($db, $sql);
$numOfDisabled = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where disability_type='Physical disability' ";
$result = sqlsrv_query($db, $sql);
$numOfDisabledPhysical = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where disability_type='Vision Impairment' ";
$result = sqlsrv_query($db, $sql);
$numOfDisabledImpairment = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where disability_type='Deaf or hard of hearing' ";
$result = sqlsrv_query($db, $sql);
$numOfDisabledDeaf = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where disability_type='Intellectual disability' ";
$result = sqlsrv_query($db, $sql);
$numOfDisabledIntellectual = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where disability_type='Acquired brain injury' ";
$result = sqlsrv_query($db, $sql);
$numOfDisabledBrainInjury = sqlsrv_num_rows($result);

//Employment Status
$sql = "SELECT * FROM respondant_contact_tbl where employment_status='Student' ";
$result = sqlsrv_query($db, $sql);
$numOfStudent = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where employment_status='Employed, working 1-20 hours per week' ";
$result = sqlsrv_query($db, $sql);
$numOfEmployed1to20 = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where employment_status='Employed, working 21 – 40+ or more hours per week' ";
$result = sqlsrv_query($db, $sql);
$numOfEmployed21to40 = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where employment_status='Not employed, looking for work' ";
$result = sqlsrv_query($db, $sql);
$numOfUnEmployedLooking = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where employment_status='Not employed, NOT looking for work' ";
$result = sqlsrv_query($db, $sql);
$numOfUnEmployedNotLooking = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where employment_status='Retired / Pensioner' ";
$result = sqlsrv_query($db, $sql);
$numOfUnEmployedRetired = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where employment_status='Disabled, not able to work' ";
$result = sqlsrv_query($db, $sql);
$numOfUnEmployedDisabled = sqlsrv_num_rows($result);

//Employment Status
/*$sql = "SELECT * FROM respondant_contact_tbl where employment_status='Employed, working 1-20 hours per week' ";
$result = sqlsrv_query($db, $sql);
$numOfEmployed1to20 = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where employment_status='Employed, working 21 – 40+ or more hours per week' ";
$result = sqlsrv_query($db, $sql);
$numOfEmployed21to40 = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where employment_status='Not employed, looking for work' ";
$result = sqlsrv_query($db, $sql);
$numOfUnEmployedLooking = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where employment_status='Not employed, NOT looking for work' ";
$result = sqlsrv_query($db, $sql);
$numOfUnEmployedNotLooking = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where employment_status='Retired / Pensioner' ";
$result = sqlsrv_query($db, $sql);
$numOfUnEmployedRetired = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where employment_status='Disabled, not able to work' ";
$result = sqlsrv_query($db, $sql);
$numOfUnEmployedDisabled = sqlsrv_num_rows($result);
*/

##########  Data Analysis (respondants table) #########
// Age brackets
$sql = "SELECT * FROM respondant_contact_tbl where age_bracket='18-24' ";
$result = sqlsrv_query($db, $sql);
$numOfAge18to24 = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where age_bracket='25-34' ";
$result = sqlsrv_query($db, $sql);
$numOfAge25to34 = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where age_bracket='35-44' ";
$result = sqlsrv_query($db, $sql);
$numOfAge35to44 = sqlsrv_num_rows($result);


$sql = "SELECT * FROM respondant_contact_tbl where age_bracket='45-54' ";
$result = sqlsrv_query($db, $sql);
$numOfAge45to54 = sqlsrv_num_rows($result);


$sql = "SELECT * FROM respondant_contact_tbl where age_bracket='55-65' ";
$result = sqlsrv_query($db, $sql);
$numOfAge55to64 = sqlsrv_num_rows($result);


$sql = "SELECT * FROM respondant_contact_tbl where age_bracket='65+' ";
$result = sqlsrv_query($db, $sql);
$numOfAge65plus = sqlsrv_num_rows($result);


// Race 
$sql = "SELECT * FROM respondant_contact_tbl where race='Black' ";
$result = sqlsrv_query($db, $sql);
$numOfRaceBlack = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where race='Asian' ";
$result = sqlsrv_query($db, $sql);
$numOfRaceAsian = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where race='Colored' ";
$result = sqlsrv_query($db, $sql);
$numOfRaceColored = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where race='Indian' ";
$result = sqlsrv_query($db, $sql);
$numOfRaceIndian = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where race='White' ";
$result = sqlsrv_query($db, $sql);
$numOfRaceWhite = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where race='Other' ";
$result = sqlsrv_query($db, $sql);
$numOfRaceOther = sqlsrv_num_rows($result);


// Religion 
$sql = "SELECT * FROM respondant_contact_tbl where religion='Christian' ";
$result = sqlsrv_query($db, $sql);
$numOfReligionChristian = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where religion='Islam' ";
$result = sqlsrv_query($db, $sql);
$numOfReligionIslam = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where religion='Hinduism' ";
$result = sqlsrv_query($db, $sql);
$numOfReligionHinduism = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where religion='African-Religion' ";
$result = sqlsrv_query($db, $sql);
$numOfReligionAfrican = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where religion='Judaism' ";
$result = sqlsrv_query($db, $sql);
$numOfReligionJudaism = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where religion='Atheist' ";
$result = sqlsrv_query($db, $sql);
$numOfReligionAtheist = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where religion='Rastafarian' ";
$result = sqlsrv_query($db, $sql);
$numOfReligionRastafarian = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where religion='Prefer not to say' ";
$result = sqlsrv_query($db, $sql);
$numOfReligionUnknown = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where religion='Other' ";
$result = sqlsrv_query($db, $sql);
$numOfReligionOther = sqlsrv_num_rows($result);

// Gender Identity
$sql = "SELECT * FROM respondant_contact_tbl where gender_id='Bisexual' ";
$result = sqlsrv_query($db, $sql);
$numOfGenderIDBisexual = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where gender_id='Heterosexual' ";
$result = sqlsrv_query($db, $sql);
$numOfGenderIDHeterosexual = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where gender_id='Homosexual' ";
$result = sqlsrv_query($db, $sql);
$numOfGenderIDHomosexual = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where gender_id='prefer-not' ";
$result = sqlsrv_query($db, $sql);
$numOfGenderIDUnknown = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where gender_id='Other' ";
$result = sqlsrv_query($db, $sql);
$numOfGenderIDOther = sqlsrv_num_rows($result);

//Gender
$sql = "SELECT * FROM respondant_contact_tbl where gender='Cisgender' ";
$result = sqlsrv_query($db, $sql);
$numOfGenderCisgender = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where gender='Gender Non-Conforming' ";
$result = sqlsrv_query($db, $sql);
$numOfGenderNonConform = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where gender='Transgender' ";
$result = sqlsrv_query($db, $sql);
$numOfGenderTransgender = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where gender='Queer/ Questioning' ";
$result = sqlsrv_query($db, $sql);
$numOfGenderQueer = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where gender='prefer-not' ";
$result = sqlsrv_query($db, $sql);
$numOfGenderUnknown = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where gender='Other' ";
$result = sqlsrv_query($db, $sql);
$numOfGenderOther = sqlsrv_num_rows($result);

// Sex Composition
$sql = "SELECT * FROM respondant_contact_tbl where sex='Male' ";
$result = sqlsrv_query($db, $sql);
$numOfSexMale = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where sex='Female' ";
$result = sqlsrv_query($db, $sql);
$numOfSexFemale = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where sex='Intersex' ";
$result = sqlsrv_query($db, $sql);
$numOfSexIntersex = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where sex='prefer-not' ";
$result = sqlsrv_query($db, $sql);
$numOfSexUnknown = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where sex='Other' ";
$result = sqlsrv_query($db, $sql);
$numOfSexOther = sqlsrv_num_rows($result);

//Pronous
$sql = "SELECT * FROM respondant_contact_tbl where pronouns='He' ";
$result = sqlsrv_query($db, $sql);
$numOfPronounsHe = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where pronouns='Him' ";
$result = sqlsrv_query($db, $sql);
$numOfPronounsHim = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where pronouns='They' ";
$result = sqlsrv_query($db, $sql);
$numOfPronounsThey = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where pronouns='Them' ";
$result = sqlsrv_query($db, $sql);
$numOfPronounsThem = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where pronouns='She' ";
$result = sqlsrv_query($db, $sql);
$numOfPronounsShe = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where pronouns='Her' ";
$result = sqlsrv_query($db, $sql);
$numOfPronounsHer = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where pronouns='Other' ";
$result = sqlsrv_query($db, $sql);
$numOfPronounsOther = sqlsrv_num_rows($result);

//Disability
$sql = "SELECT * FROM respondant_contact_tbl where disable='Yes' ";
$result = sqlsrv_query($db, $sql);
$numOfDisabled = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where disability_type='Physical disability' ";
$result = sqlsrv_query($db, $sql);
$numOfDisabledPhysical = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where disability_type='Vision Impairment' ";
$result = sqlsrv_query($db, $sql);
$numOfDisabledImpairment = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where disability_type='Deaf or hard of hearing' ";
$result = sqlsrv_query($db, $sql);
$numOfDisabledDeaf = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where disability_type='Intellectual disability' ";
$result = sqlsrv_query($db, $sql);
$numOfDisabledIntellectual = sqlsrv_num_rows($result);

$sql = "SELECT * FROM respondant_contact_tbl where disability_type='Acquired brain injury' ";
$result = sqlsrv_query($db, $sql);
$numOfDisabledBrainInjury = sqlsrv_num_rows($result);



##########  Data Analysis (module 1 : surviving covid) #########
// Tested Positive
$sql = "SELECT * FROM surviving_covid_tbl where tested_covid='Yes' ";
$result = sqlsrv_query($db, $sql);
$numOfYesTestedPositive = sqlsrv_num_rows($result);


$sql = "SELECT * FROM surviving_covid_tbl where tested_covid='No' ";
$result = sqlsrv_query($db, $sql);
$numOfNoTestedPositive = sqlsrv_num_rows($result);


$sql = "SELECT * FROM surviving_covid_tbl where tested_covid='Unsure' ";
$result = sqlsrv_query($db, $sql);
$numOfUnsureTestedPositive = sqlsrv_num_rows($result);

$totalNumberOfTests = $numOfYesTestedPositive + $numOfNoTestedPositive + $numOfUnsureTestedPositive;

// Hospitalized
$sql = "SELECT * FROM surviving_covid_tbl where hospitalised='Yes' ";
$result = sqlsrv_query($db, $sql);
$numOfYesHospitalised = sqlsrv_num_rows($result);


$sql = "SELECT * FROM surviving_covid_tbl where hospitalised='No' ";
$result = sqlsrv_query($db, $sql);
$numOfNoHospitalised = sqlsrv_num_rows($result);


// Isolation
$sql = "SELECT * FROM surviving_covid_tbl where isolate_info='Isolated in my own household' ";
$result = sqlsrv_query($db, $sql);
$numOfIsolatedHousehold = sqlsrv_num_rows($result);


$sql = "SELECT * FROM surviving_covid_tbl where isolate_info='Isolated in a separate dwelling outside of my usual house' ";
$result = sqlsrv_query($db, $sql);
$numOfIsolatedOutside = sqlsrv_num_rows($result);


$sql = "SELECT * FROM surviving_covid_tbl where isolate_info='I did not self-isolate' ";
$result = sqlsrv_query($db, $sql);
$numOfDidNotIsolate = sqlsrv_num_rows($result);


// Access to support services
$sql = "SELECT * FROM surviving_covid_tbl where counselling_support='Yes' ";
$result = sqlsrv_query($db, $sql);
$numOfAccessToCounselling = sqlsrv_num_rows($result);


$sql = "SELECT * FROM surviving_covid_tbl where physical_rehab='Yes' ";
$result = sqlsrv_query($db, $sql);
$numOfPhysicalRehab = sqlsrv_num_rows($result);


$sql = "SELECT * FROM surviving_covid_tbl where disability_grant='Yes' ";
$result = sqlsrv_query($db, $sql);
$numOfDisabilityGrant = sqlsrv_num_rows($result);


$sql = "SELECT * FROM surviving_covid_tbl where access_medication='Yes' ";
$result = sqlsrv_query($db, $sql);
$numOfAccessMedication = sqlsrv_num_rows($result);


$sql = "SELECT * FROM surviving_covid_tbl where information='Yes' ";
$result = sqlsrv_query($db, $sql);
$numOfInformation = sqlsrv_num_rows($result);


$sql = "SELECT * FROM surviving_covid_tbl where no_access='Yes' ";
$result = sqlsrv_query($db, $sql);
$numOfNoAccess = sqlsrv_num_rows($result);


$sql = "SELECT * FROM surviving_covid_tbl where other='Yes' ";
$result = sqlsrv_query($db, $sql);
$numOfOtherAccess = sqlsrv_num_rows($result);


// Need to support services
$sql = "SELECT * FROM surviving_covid_tbl where need_counselling_support='Yes' ";
$result = sqlsrv_query($db, $sql);
$numOfNeedAccessToCounselling = sqlsrv_num_rows($result);


$sql = "SELECT * FROM surviving_covid_tbl where need_physical_rehab='Yes' ";
$result = sqlsrv_query($db, $sql);
$numOfNeedPhysicalRehab = sqlsrv_num_rows($result);


$sql = "SELECT * FROM surviving_covid_tbl where need_disability_grant='Yes' ";
$result = sqlsrv_query($db, $sql);
$numOfNeedDisabilityGrant = sqlsrv_num_rows($result);


$sql = "SELECT * FROM surviving_covid_tbl where need_access_medication='Yes' ";
$result = sqlsrv_query($db, $sql);
$numOfNeedAccessMedication = sqlsrv_num_rows($result);


$sql = "SELECT * FROM surviving_covid_tbl where need_information='Yes' ";
$result = sqlsrv_query($db, $sql);
$numOfNeedInformation = sqlsrv_num_rows($result);


$sql = "SELECT * FROM surviving_covid_tbl where need_no_access='Yes' ";
$result = sqlsrv_query($db, $sql);
$numOfNeedNoAccess = sqlsrv_num_rows($result);


$sql = "SELECT * FROM surviving_covid_tbl where need_other='Yes' ";
$result = sqlsrv_query($db, $sql);
$numOfNeedOtherAccess = sqlsrv_num_rows($result);

##########  Data Analysis (module 2 : lifestyle changes) #########
// Lifestyle Changes
$sql = "SELECT * FROM social_behaviour_tbl where family='Yes' ";
$result = sqlsrv_query($db, $sql);
$numOfFamilyLifeStyleChange = sqlsrv_num_rows($result);


$sql = "SELECT * FROM social_behaviour_tbl where worship='Yes' ";
$result = sqlsrv_query($db, $sql);
$numOfWorshipLifeStyleChange = sqlsrv_num_rows($result);


$sql = "SELECT * FROM social_behaviour_tbl where friends='Yes' ";
$result = sqlsrv_query($db, $sql);
$numOfFriendsLifeStyleChange = sqlsrv_num_rows($result);


$sql = "SELECT * FROM social_behaviour_tbl where work='Yes' ";
$result = sqlsrv_query($db, $sql);
$numOfWorkLifeStyleChange = sqlsrv_num_rows($result);


$sql = "SELECT * FROM social_behaviour_tbl where shopping='Yes' ";
$result = sqlsrv_query($db, $sql);
$numOfShoppingLifeStyleChange = sqlsrv_num_rows($result);


$sql = "SELECT * FROM social_behaviour_tbl where travel='Yes' ";
$result = sqlsrv_query($db, $sql);
$numOfTravelLifeStyleChange = sqlsrv_num_rows($result);


//$sql = "SELECT * FROM social_behaviour_tbl where other='Yes' ";
//$result = sqlsrv_query($db, $sql);
//$numOfOtherLifeStyleChange = sqlsrv_num_rows($result);


$sql = "SELECT * FROM social_behaviour_tbl where family_social_distancing='Yes' ";
$result = sqlsrv_query($db, $sql);
$numOfYesPracticeSocialDistancing = sqlsrv_num_rows($result);

$sql = "SELECT * FROM social_behaviour_tbl where family_social_distancing='No' ";
$result = sqlsrv_query($db, $sql);
$numOfNoPracticeSocialDistancing = sqlsrv_num_rows($result);


$sql = "SELECT * FROM social_behaviour_tbl where family_social_distancing='Most times' ";
$result = sqlsrv_query($db, $sql);
$numOfMostTimesPracticeSocialDistancing = sqlsrv_num_rows($result);


$sql = "SELECT * FROM social_behaviour_tbl where family_social_distancing='Sometimes' ";
$result = sqlsrv_query($db, $sql);
$numOfSometimesPracticeSocialDistancing = sqlsrv_num_rows($result);


$sql = "SELECT * FROM social_behaviour_tbl where see_friends='Much less' ";
$result = sqlsrv_query($db, $sql);
$numOfMuchLessSeeFriends = sqlsrv_num_rows($result);


$sql = "SELECT * FROM social_behaviour_tbl where see_friends='Less' ";
$result = sqlsrv_query($db, $sql);
$numOfLessSeeFriends = sqlsrv_num_rows($result);


$sql = "SELECT * FROM social_behaviour_tbl where see_friends='The same' ";
$result = sqlsrv_query($db, $sql);
$numOfTheSameSeeFriends = sqlsrv_num_rows($result);


$sql = "SELECT * FROM social_behaviour_tbl where see_friends='More' ";
$result = sqlsrv_query($db, $sql);
$numOfMoreSeeFriends = sqlsrv_num_rows($result);


$sql = "SELECT * FROM social_behaviour_tbl where see_friends='Much more' ";
$result = sqlsrv_query($db, $sql);
$numOfMuchMoreSeeFriends = sqlsrv_num_rows($result);


$sql = "SELECT * FROM social_behaviour_tbl where health_improvements='Better' ";
$result = sqlsrv_query($db, $sql);
$numOfBetterHealthImprovements = sqlsrv_num_rows($result);


$sql = "SELECT * FROM social_behaviour_tbl where health_improvements='The same' ";
$result = sqlsrv_query($db, $sql);
$numOfTheSameHealthImprovements = sqlsrv_num_rows($result);


$sql = "SELECT * FROM social_behaviour_tbl where health_improvements='Worse' ";
$result = sqlsrv_query($db, $sql);
$numOfWorseHealthImprovements = sqlsrv_num_rows($result);


$sql = "SELECT * FROM social_behaviour_tbl where health_improvements='Not sure' ";
$result = sqlsrv_query($db, $sql);
$numOfNotSureHealthImprovements = sqlsrv_num_rows($result);


$sql = "SELECT * FROM social_behaviour_tbl where healthy_food='Much less' ";
$result = sqlsrv_query($db, $sql);
$numOfMuchLessDailyMeals = sqlsrv_num_rows($result);


$sql = "SELECT * FROM social_behaviour_tbl where healthy_food='Less' ";
$result = sqlsrv_query($db, $sql);
$numOfLessDailyMeals = sqlsrv_num_rows($result);


$sql = "SELECT * FROM social_behaviour_tbl where healthy_food='The same' ";
$result = sqlsrv_query($db, $sql);
$numOfTheSameDailyMeals = sqlsrv_num_rows($result);


$sql = "SELECT * FROM social_behaviour_tbl where healthy_food='More' ";
$result = sqlsrv_query($db, $sql);
$numOfMoreDailyMeals = sqlsrv_num_rows($result);


$sql = "SELECT * FROM social_behaviour_tbl where healthy_food='Much more' ";
$result = sqlsrv_query($db, $sql);
$numOfMuchMoreDailyMeals = sqlsrv_num_rows($result);


##########  Data Analysis (module 3 : access to public falicity) #########

$sql = "SELECT * FROM public_facilities_tbl where community_access_points='Yes' ";
$result = sqlsrv_query($db, $sql);
$numOfCommunityAccessPoints = sqlsrv_num_rows($result);


$sql = "SELECT * FROM public_facilities_tbl where flushing_toilet_inside_dwelling='Yes' ";
$result = sqlsrv_query($db, $sql);
$numOfToiletInsideDwelling = sqlsrv_num_rows($result);


$sql = "SELECT * FROM public_facilities_tbl where flushing_toilet_outside_dwelling='Yes' ";
$result = sqlsrv_query($db, $sql);
$numOfToiletOutsideDwelling = sqlsrv_num_rows($result);


$sql = "SELECT * FROM public_facilities_tbl where tap_inside_dwelling='Yes' ";
$result = sqlsrv_query($db, $sql);
$numOfTapInsideDwelling = sqlsrv_num_rows($result);


$sql = "SELECT * FROM public_facilities_tbl where tap_outside_dwelling='Yes' ";
$result = sqlsrv_query($db, $sql);
$numOfTapOutsideDwelling = sqlsrv_num_rows($result);


$sql = "SELECT * FROM public_facilities_tbl where earning_living='Self employed' ";
$result = sqlsrv_query($db, $sql);
$numOfSelfEmployed = sqlsrv_num_rows($result);


$sql = "SELECT * FROM public_facilities_tbl where earning_living='Unemployed' ";
$result = sqlsrv_query($db, $sql);
$numOfUnemployed = sqlsrv_num_rows($result);


$sql = "SELECT * FROM public_facilities_tbl where earning_living='Employed (part time)' ";
$result = sqlsrv_query($db, $sql);
$numOfEmployedPartTime = sqlsrv_num_rows($result);


$sql = "SELECT * FROM public_facilities_tbl where earning_living='Employed (permanent)' ";
$result = sqlsrv_query($db, $sql);
$numOfEmployedPermanent = sqlsrv_num_rows($result);


$sql = "SELECT * FROM public_facilities_tbl where earning_living='Informal trader' ";
$result = sqlsrv_query($db, $sql);
$numOfInformalTrader = sqlsrv_num_rows($result);


$sql = "SELECT * FROM public_facilities_tbl where changed_employment='Yes' ";
$result = sqlsrv_query($db, $sql);
$numOfYesChangedEmployment = sqlsrv_num_rows($result);


$sql = "SELECT * FROM public_facilities_tbl where changed_employment='No' ";
$result = sqlsrv_query($db, $sql);
$numOfNoChangedEmployment = sqlsrv_num_rows($result);


$sql = "SELECT * FROM public_facilities_tbl where changed_employment='Unsure?' ";
$result = sqlsrv_query($db, $sql);
$numOfUnsureChangedEmployment = sqlsrv_num_rows($result);


$sql = "SELECT * FROM public_facilities_tbl where government_support='Yes' ";
$result = sqlsrv_query($db, $sql);
$numOfYesGovernmentSupport = sqlsrv_num_rows($result);


$sql = "SELECT * FROM public_facilities_tbl where government_support='No' ";
$result = sqlsrv_query($db, $sql);
$numOfNoGovernmentSupport = sqlsrv_num_rows($result);


$sql = "SELECT * FROM public_facilities_tbl where government_support='Unsure?' ";
$result = sqlsrv_query($db, $sql);
$numOfUnsureGovernmentSupport = sqlsrv_num_rows($result);


$sql = "SELECT * FROM public_facilities_tbl where applied_sassa='Yes' ";
$result = sqlsrv_query($db, $sql);
$numOfYesAppliedSassa = sqlsrv_num_rows($result);


$sql = "SELECT * FROM public_facilities_tbl where applied_sassa='No' ";
$result = sqlsrv_query($db, $sql);
$numOfNoAppliedSassa = sqlsrv_num_rows($result);


$sql = "SELECT * FROM public_facilities_tbl where which_grant='old' ";
$result = sqlsrv_query($db, $sql);
$numOfOldPersonsGrant = sqlsrv_num_rows($result);


$sql = "SELECT * FROM public_facilities_tbl where which_grant='disability' ";
$result = sqlsrv_query($db, $sql);
$numOfDisabilityGrant = sqlsrv_num_rows($result);


$sql = "SELECT * FROM public_facilities_tbl where which_grant='care-dependency' ";
$result = sqlsrv_query($db, $sql);
$numOfCareDependencyGrant = sqlsrv_num_rows($result);


$sql = "SELECT * FROM public_facilities_tbl where which_grant='war-veteran' ";
$result = sqlsrv_query($db, $sql);
$numOfWarVeteranGrant = sqlsrv_num_rows($result);


$sql = "SELECT * FROM public_facilities_tbl where which_grant='child-support' ";
$result = sqlsrv_query($db, $sql);
$numOfChildSupportGrant = sqlsrv_num_rows($result);


$sql = "SELECT * FROM public_facilities_tbl where which_grant='foster-child' ";
$result = sqlsrv_query($db, $sql);
$numOfFosterChildGrant = sqlsrv_num_rows($result);


$sql = "SELECT * FROM public_facilities_tbl where which_grant='in-aid' ";
$result = sqlsrv_query($db, $sql);
$numOfInAidGrant = sqlsrv_num_rows($result);


$sql = "SELECT * FROM public_facilities_tbl where applied_assistance='Yes' ";
$result = sqlsrv_query($db, $sql);
$numOfYesAppliedAssistance = sqlsrv_num_rows($result);


$sql = "SELECT * FROM public_facilities_tbl where applied_assistance='No' ";
$result = sqlsrv_query($db, $sql);
$numOfNoAppliedAssistance = sqlsrv_num_rows($result);


$sql = "SELECT * FROM public_facilities_tbl where applied_assistance='Unsure?' ";
$result = sqlsrv_query($db, $sql);
$numOfUnsureAppliedAssistance = sqlsrv_num_rows($result);


$sql = "SELECT * FROM public_facilities_tbl where application_success='Yes' ";
$result = sqlsrv_query($db, $sql);
$numOfYesApplicationSuccess = sqlsrv_num_rows($result);


$sql = "SELECT * FROM public_facilities_tbl where application_success='No' ";
$result = sqlsrv_query($db, $sql);
$numOfNoApplicationSuccess = sqlsrv_num_rows($result);


$sql = "SELECT * FROM public_facilities_tbl where application_success='Unsure?' ";
$result = sqlsrv_query($db, $sql);
$numOfUnsureApplicationSuccess = sqlsrv_num_rows($result);


##########  Data Analysis (module 4 : work safety on Covid-19) #########

$sql = "SELECT * FROM work_safety_tbl where employer_safe_environment='Yes' ";
$result = sqlsrv_query($db, $sql);
$numOfYesSafeWorkplace = sqlsrv_num_rows($result);


$sql = "SELECT * FROM work_safety_tbl where employer_safe_environment='No' ";
$result = sqlsrv_query($db, $sql);
$numOfNoSafeWorkplace = sqlsrv_num_rows($result);


$sql = "SELECT * FROM work_safety_tbl where employer_safe_environment='Somewhat' ";
$result = sqlsrv_query($db, $sql);
$numOfSomewhatSafeWorkplace = sqlsrv_num_rows($result);


$sql = "SELECT * FROM work_safety_tbl where employer_measures='COVID-19-manager-onsite' ";
$result = sqlsrv_query($db, $sql);
$numOfCOVIDManagerOld = sqlsrv_num_rows($result);


$sql = "SELECT * FROM work_safety_tbl where covid_19_manager='Yes' ";
$result = sqlsrv_query($db, $sql);
$numOfCOVIDManagerNew = sqlsrv_num_rows($result);

$numOfCOVIDManager = $numOfCOVIDManagerOld  + $numOfCOVIDManagerNew;

$sql = "SELECT * FROM work_safety_tbl where employer_measures='daily-temperature-checks' ";
$result = sqlsrv_query($db, $sql);
$numOfDailyTemperatureChecksOld = sqlsrv_num_rows($result);

$sql = "SELECT * FROM work_safety_tbl where daily_temperature='Yes' ";
$result = sqlsrv_query($db, $sql);
$numOfDailyTemperatureChecksNew = sqlsrv_num_rows($result);

$numOfDailyTemperatureChecks = $numOfDailyTemperatureChecksOld + $numOfDailyTemperatureChecksNew;

$sql = "SELECT * FROM work_safety_tbl where employer_measures='changed-policies?' ";
$result = sqlsrv_query($db, $sql);
$numOfChangedPoliciesOld = sqlsrv_num_rows($result);

$sql = "SELECT * FROM work_safety_tbl where changed_policies='yes' ";
$result = sqlsrv_query($db, $sql);
$numOfChangedPoliciesNew = sqlsrv_num_rows($result);

$numOfChangedPolicies = $numOfChangedPoliciesOld + $numOfChangedPoliciesNew;

$sql = "SELECT * FROM work_safety_tbl where sanitised_at_entry='Yes' ";
$result = sqlsrv_query($db, $sql);
$numOfsanitised_at_entry = sqlsrv_num_rows($result);

$sql = "SELECT * FROM work_safety_tbl where wearing_masks='Yes' ";
$result = sqlsrv_query($db, $sql);
$numOfwearing_masks = sqlsrv_num_rows($result);

$sql = "SELECT * FROM work_safety_tbl where driver_wearing_mask='Yes' ";
$result = sqlsrv_query($db, $sql);
$numOfdriver_wearing_mask = sqlsrv_num_rows($result);

$sql = "SELECT * FROM work_safety_tbl where window_open='Yes' ";
$result = sqlsrv_query($db, $sql);
$numOfwindow_open = sqlsrv_num_rows($result);

$sql = "SELECT * FROM work_safety_tbl where one_space='Yes' ";
$result = sqlsrv_query($db, $sql);
$numOfone_space = sqlsrv_num_rows($result);


$sql = "SELECT * FROM work_safety_tbl where workplace_guidelines='Yes' ";
$result = sqlsrv_query($db, $sql);
$numOfKnownWorkplaceGuidelines = sqlsrv_num_rows($result);


$sql = "SELECT * FROM work_safety_tbl where workplace_guidelines='No' ";
$result = sqlsrv_query($db, $sql);
$numOfUnKnownWorkplaceGuidelines = sqlsrv_num_rows($result);


$sql = "SELECT * FROM work_safety_tbl where workplace_guidelines='Some' ";
$result = sqlsrv_query($db, $sql);
$numOfSomeKnownWorkplaceGuidelines = sqlsrv_num_rows($result);


$sql = "SELECT * FROM work_safety_tbl where access_infomation='Work Office' ";
$result = sqlsrv_query($db, $sql);
$numOfWorkOfficeAccessInfomation = sqlsrv_num_rows($result);


$sql = "SELECT * FROM work_safety_tbl where access_infomation='My Manager' ";
$result = sqlsrv_query($db, $sql);
$numOfMyManagerAccessInfomation = sqlsrv_num_rows($result);


$sql = "SELECT * FROM work_safety_tbl where access_infomation='E-mail' ";
$result = sqlsrv_query($db, $sql);
$numOfEMailAccessInfomation = sqlsrv_num_rows($result);


$sql = "SELECT * FROM work_safety_tbl where access_infomation='Social Media' ";
$result = sqlsrv_query($db, $sql);
$numOfSocialMediaAccessInfomation = sqlsrv_num_rows($result);


$sql = "SELECT * FROM work_safety_tbl where access_infomation='Billboards' ";
$result = sqlsrv_query($db, $sql);
$numOfBillboardsAccessInfomation = sqlsrv_num_rows($result);


$sql = "SELECT * FROM work_safety_tbl where access_infomation='Some' ";
$result = sqlsrv_query($db, $sql);
$numOfSomeAccessInfomation = sqlsrv_num_rows($result);


$sql = "SELECT * FROM work_safety_tbl where access_infomation='Internet Search' ";
$result = sqlsrv_query($db, $sql);
$numOfInternetSearchAccessInfomation = sqlsrv_num_rows($result);


$sql = "SELECT * FROM work_safety_tbl where access_infomation='Printed Media' ";
$result = sqlsrv_query($db, $sql);
$numOfPrintedMediaAccessInfomation = sqlsrv_num_rows($result);


$sql = "SELECT * FROM work_safety_tbl where access_infomation='SMS' ";
$result = sqlsrv_query($db, $sql);
$numOfSMSAccessInfomation = sqlsrv_num_rows($result);


$sql = "SELECT * FROM work_safety_tbl where access_infomation='Radio and TV' ";
$result = sqlsrv_query($db, $sql);
$numOfRadioTVAccessInfomation = sqlsrv_num_rows($result);


$sql = "SELECT * FROM work_safety_tbl where access_infomation='Municipalities' ";
$result = sqlsrv_query($db, $sql);
$numOfMunicipalitiesAccessInfomation = sqlsrv_num_rows($result);


$sql = "SELECT * FROM work_safety_tbl where access_infomation='Neighbourhood Committee' ";
$result = sqlsrv_query($db, $sql);
$numOfNeighbourhoodCommitteeAccessInfomation = sqlsrv_num_rows($result);


$sql = "SELECT * FROM work_safety_tbl where access_infomation='Local NPOs' ";
$result = sqlsrv_query($db, $sql);
$numOfLocalNPOCommitteeAccessInfomation = sqlsrv_num_rows($result);


$sql = "SELECT * FROM work_safety_tbl where travel_to_work='Own-car' ";
$result = sqlsrv_query($db, $sql);
$numOfOwnCarWorkTravel = sqlsrv_num_rows($result);


$sql = "SELECT * FROM work_safety_tbl where travel_to_work='Car-pool' ";
$result = sqlsrv_query($db, $sql);
$numOfCarPoolWorkTravel = sqlsrv_num_rows($result);


$sql = "SELECT * FROM work_safety_tbl where travel_to_work='Minibus Taxi' ";
$result = sqlsrv_query($db, $sql);
$numOfMinibusTaxiWorkTravel = sqlsrv_num_rows($result);


$sql = "SELECT * FROM work_safety_tbl where travel_to_work='Bus' ";
$result = sqlsrv_query($db, $sql);
$numOfBusTaxiWorkTravel = sqlsrv_num_rows($result);


$sql = "SELECT * FROM work_safety_tbl where travel_to_work='Train' ";
$result = sqlsrv_query($db, $sql);
$numOfTrainWorkTravel = sqlsrv_num_rows($result);


$sql = "SELECT * FROM work_safety_tbl where travel_to_work='High-speed' ";
$result = sqlsrv_query($db, $sql);
$numOfHighSpeedWorkTravel = sqlsrv_num_rows($result);


$sql = "SELECT * FROM work_safety_tbl where travel_to_work='Uber-Taxify' ";
$result = sqlsrv_query($db, $sql);
$numOfUberTaxifyWorkTravel = sqlsrv_num_rows($result);


$sql = "SELECT * FROM work_safety_tbl where travel_to_work='Other' ";
$result = sqlsrv_query($db, $sql);
$numOfOtherWorkTravel = sqlsrv_num_rows($result);


$sql = "SELECT * FROM work_safety_tbl where public_transport='sanitised-at-entry' ";
$result = sqlsrv_query($db, $sql);
$numOfSanitisedAtEntryOld = sqlsrv_num_rows($result);

$sql = "SELECT * FROM work_safety_tbl where sanitised_at_entry='Yes' ";
$result = sqlsrv_query($db, $sql);
$numOfSanitisedAtEntryNew = sqlsrv_num_rows($result);

$numOfSanitisedAtEntry = $numOfSanitisedAtEntryOld + $numOfSanitisedAtEntryNew;

$sql = "SELECT * FROM work_safety_tbl where public_transport='wearing-masks' ";
$result = sqlsrv_query($db, $sql);
$numOfWearingMasksOld = sqlsrv_num_rows($result);

$sql = "SELECT * FROM work_safety_tbl where wearing_masks='Yes' ";
$result = sqlsrv_query($db, $sql);
$numOfWearingMasksNew = sqlsrv_num_rows($result);

$numOfWearingMasks = $numOfWearingMasksOld + $numOfWearingMasksNew;

$sql = "SELECT * FROM work_safety_tbl where public_transport='driver-wearing-mask' ";
$result = sqlsrv_query($db, $sql);
$numOfDriverWearingMaskOld = sqlsrv_num_rows($result);

$sql = "SELECT * FROM work_safety_tbl where driver_wearing_mask='Yes' ";
$result = sqlsrv_query($db, $sql);
$numOfDriverWearingMaskNew = sqlsrv_num_rows($result);

$numOfDriverWearingMask = $numOfDriverWearingMaskOld + $numOfDriverWearingMaskNew;

$sql = "SELECT * FROM work_safety_tbl where public_transport='window-open' ";
$result = sqlsrv_query($db, $sql);
$numOfWindowOpenOld = sqlsrv_num_rows($result);

$sql = "SELECT * FROM work_safety_tbl where window_open='Yes' ";
$result = sqlsrv_query($db, $sql);
$numOfWindowOpenNew = sqlsrv_num_rows($result);

$numOfWindowOpen = $numOfWindowOpenOld + $numOfWindowOpenNew;

$sql = "SELECT * FROM work_safety_tbl where one_space='Yes' ";
$result = sqlsrv_query($db, $sql);
$numOf1SpaceNew = sqlsrv_num_rows($result);

$sql = "SELECT * FROM work_safety_tbl where public_transport='1-space' ";
$result = sqlsrv_query($db, $sql);
$numOf1SpaceOld = sqlsrv_num_rows($result);

$numOf1Space = $numOf1SpaceOld + $numOf1SpaceNew;

// Hygiene MODULE 5 ( wash hands)

$sql = "SELECT * FROM hygiene_tbl where wash_hands='throughout-the-day' ";
$result = sqlsrv_query($db, $sql);
$numOfWashHandsThroughDay = sqlsrv_num_rows($result);

$sql = "SELECT * FROM hygiene_tbl where wash_hands='daily' ";
$result = sqlsrv_query($db, $sql);
$numOfWashHandsDaily =sqlsrv_num_rows($result); 

$sql = "SELECT * FROM hygiene_tbl where wash_hands='few-times-week' ";
$result = sqlsrv_query($db, $sql);
$numOfWashHandsFewTimesWeek = sqlsrv_num_rows($result);

$sql = "SELECT * FROM hygiene_tbl where wash_hands='weekly' ";
$result = sqlsrv_query($db, $sql);
$numOfWashHandsWeekly = sqlsrv_num_rows($result);

$sql = "SELECT * FROM hygiene_tbl where wash_hands='3-times-month' ";
$result = sqlsrv_query($db, $sql);
$numOfWashHands3TimesMonth =sqlsrv_num_rows($result); 

$sql = "SELECT * FROM hygiene_tbl where wash_hands='never' ";
$result = sqlsrv_query($db, $sql);
$numOfWashHandsNever = sqlsrv_num_rows($result);


// : Use Alcohol-based Sanitiser

$sql = "SELECT * FROM hygiene_tbl where alcohol_based_sanitisers='throughout-the-day' ";
$result = sqlsrv_query($db, $sql);
$numOfUseSanitisersThroughDay = sqlsrv_num_rows($result);

$sql = "SELECT * FROM hygiene_tbl where alcohol_based_sanitisers='daily' ";
$result = sqlsrv_query($db, $sql);
$numOfUseSanitisersDaily = sqlsrv_num_rows($result);

$sql = "SELECT * FROM hygiene_tbl where alcohol_based_sanitisers='few-times-week' ";
$result = sqlsrv_query($db, $sql);
$numOfUseSanitisersFewTimesWeek = sqlsrv_num_rows($result);

$sql = "SELECT * FROM hygiene_tbl where alcohol_based_sanitisers='weekly' ";
$result = sqlsrv_query($db, $sql);
$numOfUseSanitisersWeekly = sqlsrv_num_rows($result);

$sql = "SELECT * FROM hygiene_tbl where alcohol_based_sanitisers='3-times-month' ";
$result = sqlsrv_query($db, $sql);
$numOfUseSanitisers3TimesMonth = sqlsrv_num_rows($result);

$sql = "SELECT * FROM hygiene_tbl where alcohol_based_sanitisers='never' ";
$result = sqlsrv_query($db, $sql);
$numOfUseSanitisersNever = sqlsrv_num_rows($result);

// : Avoid Touching eyes,nose,and mouth (face)

$sql = "SELECT * FROM hygiene_tbl where avoid_touching='throughout-the-day' ";
$result = sqlsrv_query($db, $sql);
$numOfAvoidTouchingFaceThroughDay = sqlsrv_num_rows($result);

$sql = "SELECT * FROM hygiene_tbl where avoid_touching='daily' ";
$result = sqlsrv_query($db, $sql);
$numOfAvoidTouchingFaceDaily = sqlsrv_num_rows($result);

$sql = "SELECT * FROM hygiene_tbl where avoid_touching='few-times-week' ";
$result = sqlsrv_query($db, $sql);
$numOfAvoidTouchingFaceFewTimesWeek = sqlsrv_num_rows($result);

$sql = "SELECT * FROM hygiene_tbl where avoid_touching='weekly' ";
$result = sqlsrv_query($db, $sql);
$numOfAvoidTouchingFaceWeekly = sqlsrv_num_rows($result);

$sql = "SELECT * FROM hygiene_tbl where avoid_touching='3-times-month' ";
$result = sqlsrv_query($db, $sql);
$numOfAvoidTouchingFace3TimesMonth = sqlsrv_num_rows($result);

$sql = "SELECT * FROM hygiene_tbl where avoid_touching='never' ";
$result = sqlsrv_query($db, $sql);
$numOfAvoidTouchingFaceNever = sqlsrv_num_rows($result);

// : Increase the amount of fresh air

$sql = "SELECT * FROM hygiene_tbl where fresh_air='throughout-the-day' ";
$result = sqlsrv_query($db, $sql);
$numOfFreshAirThroughDay = sqlsrv_num_rows($result);

$sql = "SELECT * FROM hygiene_tbl where fresh_air='daily' ";
$result = sqlsrv_query($db, $sql);
$numOfFreshAirDaily = sqlsrv_num_rows($result);

$sql = "SELECT * FROM hygiene_tbl where fresh_air='few-times-week' ";
$result = sqlsrv_query($db, $sql);
$numOfFreshAirFewTimesWeek = sqlsrv_num_rows($result);

$sql = "SELECT * FROM hygiene_tbl where fresh_air='weekly' ";
$result = sqlsrv_query($db, $sql);
$numOfFreshAirWeekly = sqlsrv_num_rows($result);

$sql = "SELECT * FROM hygiene_tbl where fresh_air='3-times-month' ";
$result = sqlsrv_query($db, $sql);
$numOfFreshAir3TimesMonth = sqlsrv_num_rows($result);

$sql = "SELECT * FROM hygiene_tbl where fresh_air='never' ";
$result = sqlsrv_query($db, $sql);
$numOfFreshAirNever = sqlsrv_num_rows($result);

// : Clean and disinfect surfaces you use (disinfect)

$sql = "SELECT * FROM hygiene_tbl where disinfect_surfaces='throughout-the-day' ";
$result = sqlsrv_query($db, $sql);
$numOfDisinfectSurfacesThroughDay = sqlsrv_num_rows($result);

$sql = "SELECT * FROM hygiene_tbl where disinfect_surfaces='daily' ";
$result = sqlsrv_query($db, $sql);
$numOfDisinfectSurfacesDaily = sqlsrv_num_rows($result);

$sql = "SELECT * FROM hygiene_tbl where disinfect_surfaces='few-times-week' ";
$result = sqlsrv_query($db, $sql);
$numOfDisinfectSurfacesFewTimesWeek = sqlsrv_num_rows($result);

$sql = "SELECT * FROM hygiene_tbl where disinfect_surfaces='weekly' ";
$result = sqlsrv_query($db, $sql);
$numOfDisinfectSurfacesWeekly = sqlsrv_num_rows($result);

$sql = "SELECT * FROM hygiene_tbl where disinfect_surfaces='3-times-month' ";
$result = sqlsrv_query($db, $sql);
$numOfDisinfectSurfaces3TimesMonth = sqlsrv_num_rows($result);

$sql = "SELECT * FROM hygiene_tbl where disinfect_surfaces='never' ";
$result = sqlsrv_query($db, $sql);
$numOfDisinfectSurfacesNever = sqlsrv_num_rows($result);

// : Clean and disinfect Object you use (disinfect)

$sql = "SELECT * FROM hygiene_tbl where disinfect_objects='throughout-the-day' ";
$result = sqlsrv_query($db, $sql);
$numOfDisinfectObjectsThroughDay = sqlsrv_num_rows($result);

$sql = "SELECT * FROM hygiene_tbl where disinfect_objects='daily' ";
$result = sqlsrv_query($db, $sql);
$numOfDisinfectObjectsDaily = sqlsrv_num_rows($result);

$sql = "SELECT * FROM hygiene_tbl where disinfect_objects='few-times-week' ";
$result = sqlsrv_query($db, $sql);
$numOfDisinfectObjectsFewTimesWeek = sqlsrv_num_rows($result);

$sql = "SELECT * FROM hygiene_tbl where disinfect_objects='weekly' ";
$result = sqlsrv_query($db, $sql);
$numOfDisinfectObjectsWeekly = sqlsrv_num_rows($result);

$sql = "SELECT * FROM hygiene_tbl where disinfect_objects='3-times-month' ";
$result = sqlsrv_query($db, $sql);
$numOfDisinfectObjects3TimesMonth = sqlsrv_num_rows($result);

$sql = "SELECT * FROM hygiene_tbl where disinfect_objects='never' ";
$result = sqlsrv_query($db, $sql);
$numOfDisinfectObjectsNever = sqlsrv_num_rows($result);



// : Practice Social Distancing

$sql = "SELECT * FROM hygiene_tbl where social_distance='throughout-the-day' ";
$result = sqlsrv_query($db, $sql);
$numOfSocialDistanceThroughDay = sqlsrv_num_rows($result);

$sql = "SELECT * FROM hygiene_tbl where social_distance='daily' ";
$result = sqlsrv_query($db, $sql);
$numOfSocialDistanceDaily = sqlsrv_num_rows($result);

$sql = "SELECT * FROM hygiene_tbl where social_distance='few-times-week' ";
$result = sqlsrv_query($db, $sql);
$numOfSocialDistanceFewTimesWeek = sqlsrv_num_rows($result);

$sql = "SELECT * FROM hygiene_tbl where social_distance='weekly' ";
$result = sqlsrv_query($db, $sql);
$numOfSocialDistanceWeekly = sqlsrv_num_rows($result);

$sql = "SELECT * FROM hygiene_tbl where social_distance='3-times-month' ";
$result = sqlsrv_query($db, $sql);
$numOfSocialDistance3TimesMonth = sqlsrv_num_rows($result);

$sql = "SELECT * FROM hygiene_tbl where social_distance='never' ";
$result = sqlsrv_query($db, $sql);
$numOfSocialDistanceNever = sqlsrv_num_rows($result);

// Module 6: (Attitudes to the Vaccine) roll out vaccine as quick as possible

$sql = "SELECT * FROM vaccine_opinion_tbl where quickly_as_possible='Strongly Agree' ";
$result = sqlsrv_query($db, $sql);
$numOfQuicklyAsPossibleSAgree = sqlsrv_num_rows($result);

$sql = "SELECT * FROM vaccine_opinion_tbl where quickly_as_possible='Agree' ";
$result = sqlsrv_query($db, $sql);
$numOfQuicklyAsPossibleAgree = sqlsrv_num_rows($result);

$sql = "SELECT * FROM vaccine_opinion_tbl where quickly_as_possible=' Neither Agree nor Disagree' ";
$result = sqlsrv_query($db, $sql);
$numOfQuicklyAsPossibleNutral = sqlsrv_num_rows($result);

$sql = "SELECT * FROM vaccine_opinion_tbl where quickly_as_possible='Disagree' ";
$result = sqlsrv_query($db, $sql);
$numOfQuicklyAsPossibleDisagree = sqlsrv_num_rows($result);

$sql = "SELECT * FROM vaccine_opinion_tbl where quickly_as_possible='Strongly Disagree' ";
$result = sqlsrv_query($db, $sql);
$numOfQuicklyAsPossibleSDisagree = sqlsrv_num_rows($result);

//prioritised Health workers

$sql = "SELECT * FROM vaccine_opinion_tbl where prioritised_health_workers='Strongly Agree' ";
$result = sqlsrv_query($db, $sql);
$numOfPrioritiseHWSAgree = sqlsrv_num_rows($result);

$sql = "SELECT * FROM vaccine_opinion_tbl where prioritised_health_workers='Agree' ";
$result = sqlsrv_query($db, $sql);
$numOfPrioritiseHWAgree = sqlsrv_num_rows($result);

$sql = "SELECT * FROM vaccine_opinion_tbl where prioritised_health_workers=' Neither Agree nor Disagree' ";
$result = sqlsrv_query($db, $sql);
$numOfPrioritiseHWNutral = sqlsrv_num_rows($result);

$sql = "SELECT * FROM vaccine_opinion_tbl where prioritised_health_workers='Disagree' ";
$result = sqlsrv_query($db, $sql);
$numOfPrioritiseHWDisagree = sqlsrv_num_rows($result);

$sql = "SELECT * FROM vaccine_opinion_tbl where prioritised_health_workers='Strongly Disagree' ";
$result = sqlsrv_query($db, $sql);
$numOfPrioritiseHWSDisagree = sqlsrv_num_rows($result);

//Prioritise Teachers

$sql = "SELECT * FROM vaccine_opinion_tbl where prioritised_teachers='Strongly Agree' ";
$result = sqlsrv_query($db, $sql);
$numOfPrioritiseTeachersSAgree = sqlsrv_num_rows($result);

$sql = "SELECT * FROM vaccine_opinion_tbl where prioritised_teachers='Agree' ";
$result = sqlsrv_query($db, $sql);
$numOfPrioritiseTeachersAgree = sqlsrv_num_rows($result);

$sql = "SELECT * FROM vaccine_opinion_tbl where prioritised_teachers=' Neither Agree nor Disagree' ";
$result = sqlsrv_query($db, $sql);
$numOfPrioritiseTeachersNutral = sqlsrv_num_rows($result);

$sql = "SELECT * FROM vaccine_opinion_tbl where prioritised_teachers='Disagree' ";
$result = sqlsrv_query($db, $sql);
$numOfPrioritiseTeachersDisagree = sqlsrv_num_rows($result);

$sql = "SELECT * FROM vaccine_opinion_tbl where prioritised_teachers='Strongly Disagree' ";
$result = sqlsrv_query($db, $sql);
$numOfPrioritiseTeachersSDisagree = sqlsrv_num_rows($result);

// : Informed Enough

$sql = "SELECT * FROM vaccine_opinion_tbl where informed_enough='Strongly Agree' ";
$result = sqlsrv_query($db, $sql);
$numOfInformedEnoughSAgree = sqlsrv_num_rows($result);

$sql = "SELECT * FROM vaccine_opinion_tbl where informed_enough='Agree' ";
$result = sqlsrv_query($db, $sql);
$numOfInformedEnoughAgree = sqlsrv_num_rows($result);

$sql = "SELECT * FROM vaccine_opinion_tbl where informed_enough=' Neither Agree nor Disagree' ";
$result = sqlsrv_query($db, $sql);
$numOfInformedEnoughNutral = sqlsrv_num_rows($result);

$sql = "SELECT * FROM vaccine_opinion_tbl where informed_enough='Disagree' ";
$result = sqlsrv_query($db, $sql);
$numOfInformedEnoughDisagree = sqlsrv_num_rows($result);

$sql = "SELECT * FROM vaccine_opinion_tbl where informed_enough='Strongly Disagree' ";
$result = sqlsrv_query($db, $sql);
$numOfInformedEnoughSDisagree = sqlsrv_num_rows($result);

//Vaccine safe

$sql = "SELECT * FROM vaccine_opinion_tbl where vaccines_safe='Strongly Agree' ";
$result = sqlsrv_query($db, $sql);
$numOfVaccineSafeSAgree = sqlsrv_num_rows($result);

$sql = "SELECT * FROM vaccine_opinion_tbl where vaccines_safe='Agree' ";
$result = sqlsrv_query($db, $sql);
$numOfVaccineSafeAgree = sqlsrv_num_rows($result);

$sql = "SELECT * FROM vaccine_opinion_tbl where vaccines_safe=' Neither Agree nor Disagree' ";
$result = sqlsrv_query($db, $sql);
$numOfVaccineSafeNutral = sqlsrv_num_rows($result);

$sql = "SELECT * FROM vaccine_opinion_tbl where vaccines_safe='Disagree' ";
$result = sqlsrv_query($db, $sql);
$numOfVaccineSafeDisagree = sqlsrv_num_rows($result);

$sql = "SELECT * FROM vaccine_opinion_tbl where vaccines_safe='Strongly Disagree' ";
$result = sqlsrv_query($db, $sql);
$numOfVaccineSafeSDisagree = sqlsrv_num_rows($result);

//something to do with 5G

$sql = "SELECT * FROM vaccine_opinion_tbl where something_5g='Strongly Agree' ";
$result = sqlsrv_query($db, $sql);
$numOfSomething5GSAgree = sqlsrv_num_rows($result);

$sql = "SELECT * FROM vaccine_opinion_tbl where something_5g='Agree' ";
$result = sqlsrv_query($db, $sql);
$numOfSomething5GAgree = sqlsrv_num_rows($result);

$sql = "SELECT * FROM vaccine_opinion_tbl where something_5g=' Neither Agree nor Disagree' ";
$result = sqlsrv_query($db, $sql);
$numOfSomething5GNutral = sqlsrv_num_rows($result);

$sql = "SELECT * FROM vaccine_opinion_tbl where something_5g='Disagree' ";
$result = sqlsrv_query($db, $sql);
$numOfSomething5GDisagree = sqlsrv_num_rows($result);

$sql = "SELECT * FROM vaccine_opinion_tbl where something_5g='Strongly Disagree' ";
$result = sqlsrv_query($db, $sql);
$numOfSomething5GSDisagree = sqlsrv_num_rows($result);


?>