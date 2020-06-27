<?php
   session_start();

   // count number the rows
$row_cnt = mysqli_num_rows($conn->query("SELECT * FROM admin"));

$row_cnt_gp = mysqli_num_rows($conn->query("SELECT * FROM gp"));

$row_cnt_ald = mysqli_num_rows($conn->query("SELECT * FROM ald"));

$row_cnt_aus = mysqli_num_rows($conn->query("SELECT * FROM aus"));

$row_cnt_dal = mysqli_num_rows($conn->query("SELECT * FROM dal"));

$row_cnt_fw = mysqli_num_rows($conn->query("SELECT * FROM fw"));

$row_cnt_hill = mysqli_num_rows($conn->query("SELECT * FROM hill"));

$row_cnt_hou = mysqli_num_rows($conn->query("SELECT * FROM hou"));

$row_cnt_nc = mysqli_num_rows($conn->query("SELECT * FROM nc"));

$row_cnt_sa = mysqli_num_rows($conn->query("SELECT * FROM sa"));

// finding the average total of admin table
$mean = number_format((float)$conn->query("SELECT AVG(Olrsc) mean FROM admin ")->fetch_assoc()['mean'], 2, '.', '');

// finding the standard deviation of admin table
$std = number_format((float)$conn->query("SELECT STDDEV(Olrsc) std FROM admin ")->fetch_assoc()['std'], 2, '.', '');
// finding number of sites
$nsite=$conn->query("SELECT COUNT(DISTINCT(Site)) nsite FROM admin")->fetch_assoc()['nsite'];

//finding average of each label
$gst=number_format((float)$conn->query("SELECT AVG(`Goal_Setting`) AS fullgs FROM `admin`")->fetch_assoc()['fullgs'], 2, '.', '');


$mot=number_format((float)$conn->query("SELECT AVG(`Monitoring`) AS fullmo FROM `admin`")->fetch_assoc()['fullmo'], 2, '.', '');

$tmt=number_format((float)$conn->query("SELECT AVG(`Time_Management`) AS fulltm FROM `admin`")->fetch_assoc()['fulltm'], 2, '.', '');

$smt=number_format((float)$conn->query("SELECT AVG(`Space_Management`) AS fullsm FROM `admin`")->fetch_assoc()['fullsm'], 2, '.', '');

$temt=number_format((float)$conn->query("SELECT AVG(`Technology_Management`) AS fulltem FROM `admin`")->fetch_assoc()['fulltem'], 2, '.', '');

$iit=number_format((float)$conn->query("SELECT AVG(`Instructor_Interaction`) AS fullii FROM `admin`")->fetch_assoc()['fullii'], 2, '.', '');

$pit=number_format((float)$conn->query("SELECT AVG(`Peer_Interaction`) AS fullpi FROM `admin`")->fetch_assoc()['fullpi'], 2, '.', '');

$ert=number_format((float)$conn->query("SELECT AVG(`Effort_Regulation`) AS fuller FROM `admin`")->fetch_assoc()['fuller'], 2, '.', '');

$mst=number_format((float)$conn->query("SELECT AVG(`Mastery_Self-Talk`) AS fullmst FROM `admin`")->fetch_assoc()['fullmst'], 2, '.', '');

// finding standard deviation for each label
$std_gs = number_format((float)$conn->query("SELECT STDDEV(Goal_Setting) Goal_Setting FROM admin ")->fetch_assoc()['Goal_Setting'], 2, '.', '');

$std_mo = number_format((float)$conn->query("SELECT STDDEV(Monitoring) Monitoring FROM admin ")->fetch_assoc()['Monitoring'], 2, '.', '');

$std_tm = number_format((float)$conn->query("SELECT STDDEV(Time_Management) Time_Management FROM admin ")->fetch_assoc()['Time_Management'], 2, '.', '');

$std_sm = number_format((float)$conn->query("SELECT STDDEV(Space_Management) Space_Management FROM admin ")->fetch_assoc()['Space_Management'], 2, '.', '');

$std_tem = number_format((float)$conn->query("SELECT STDDEV(Technology_Management) Technology_Management FROM admin ")->fetch_assoc()['Technology_Management'], 2, '.', '');

$std_ii = number_format((float)$conn->query("SELECT STDDEV(Instructor_Interaction) Instructor_Interaction FROM admin ")->fetch_assoc()['Instructor_Interaction'], 2, '.', '');

$std_pi = number_format((float)$conn->query("SELECT STDDEV(Peer_Interaction) Peer_Interaction FROM admin ")->fetch_assoc()['Peer_Interaction'], 2, '.', '');

$std_er = number_format((float)$conn->query("SELECT STDDEV(Effort_Regulation) Effort_Regulation FROM admin ")->fetch_assoc()['Effort_Regulation'], 2, '.', '');

$std_mst = number_format((float)$conn->query("SELECT STDDEV(`Mastery_Self-Talk`) mst FROM admin ")->fetch_assoc()['mst'], 2, '.', '');

// finding average olr score of each site
$avg_gp = number_format((float)$conn->query("SELECT AVG(Olrsc) gp FROM gp ")->fetch_assoc()['gp'], 2, '.', '');

$avg_dal = number_format((float)$conn->query("SELECT AVG(Olrsc) dal FROM dal ")->fetch_assoc()['dal'], 2, '.', '');

$avg_hou = number_format((float)$conn->query("SELECT AVG(Olrsc) hou FROM hou ")->fetch_assoc()['hou'], 2, '.', '');

$avg_aus = number_format((float)$conn->query("SELECT AVG(Olrsc) aus FROM aus ")->fetch_assoc()['aus'], 2, '.', '');

$avg_ald = number_format((float)$conn->query("SELECT AVG(Olrsc) ald FROM ald ")->fetch_assoc()['ald'], 2, '.', '');

$avg_fw = number_format((float)$conn->query("SELECT AVG(Olrsc) fw FROM fw ")->fetch_assoc()['fw'], 2, '.', '');

$avg_hill = number_format((float)$conn->query("SELECT AVG(Olrsc) hill FROM hill ")->fetch_assoc()['hill'], 2, '.', '');

$avg_sa = number_format((float)$conn->query("SELECT AVG(Olrsc) sa FROM sa ")->fetch_assoc()['sa'], 2, '.', '');

$avg_nc = number_format((float)$conn->query("SELECT AVG(Olrsc) nc FROM nc ")->fetch_assoc()['nc'], 2, '.', '');

// finding the standard deviation of each site
$std_gp = number_format((float)$conn->query("SELECT STDDEV(Olrsc) std FROM gp ")->fetch_assoc()['std'], 2, '.', '');

$std_dal = number_format((float)$conn->query("SELECT STDDEV(Olrsc) std FROM dal ")->fetch_assoc()['std'], 2, '.', '');

$std_hou = number_format((float)$conn->query("SELECT STDDEV(Olrsc) std FROM hou ")->fetch_assoc()['std'], 2, '.', '');

$std_aus = number_format((float)$conn->query("SELECT STDDEV(Olrsc) std FROM aus ")->fetch_assoc()['std'], 2, '.', '');

$std_ald = number_format((float)$conn->query("SELECT STDDEV(Olrsc) std FROM ald ")->fetch_assoc()['std'], 2, '.', '');

$std_fw = number_format((float)$conn->query("SELECT STDDEV(Olrsc) std FROM fw ")->fetch_assoc()['std'], 2, '.', '');

$std_hill = number_format((float)$conn->query("SELECT STDDEV(Olrsc) std FROM hill")->fetch_assoc()['std'], 2, '.', '');

$std_sa = number_format((float)$conn->query("SELECT STDDEV(Olrsc) std FROM sa ")->fetch_assoc()['std'], 2, '.', '');

$std_nc = number_format((float)$conn->query("SELECT STDDEV(Olrsc) std FROM nc ")->fetch_assoc()['std'], 2, '.', '');

//finding the  average of each label for gp site
$gsgp=number_format((float)$conn->query("SELECT AVG(`Goal_Setting`) AS fullgs FROM `gp`")->fetch_assoc()['fullgs'], 2, '.', '');

$mogp=number_format((float)$conn->query("SELECT AVG(`Monitoring`) AS fullmo FROM `gp`")->fetch_assoc()['fullmo'], 2, '.', '');

$tmgp=number_format((float)$conn->query("SELECT AVG(`Time_Management`) AS fulltm FROM `gp`")->fetch_assoc()['fulltm'], 2, '.', '');

$smgp=number_format((float)$conn->query("SELECT AVG(`Space_Management`) AS fullsm FROM `gp`")->fetch_assoc()['fullsm'], 2, '.', '');

$temgp=number_format((float)$conn->query("SELECT AVG(`Technology_Management`) AS fulltem FROM `gp`")->fetch_assoc()['fulltem'], 2, '.', '');

$iigp=number_format((float)$conn->query("SELECT AVG(`Instructor_Interaction`) AS fullii FROM `gp`")->fetch_assoc()['fullii'], 2, '.', '');

$pigp=number_format((float)$conn->query("SELECT AVG(`Peer_Interaction`) AS fullpi FROM `gp`")->fetch_assoc()['fullpi'], 2, '.', '');

$ergp=number_format((float)$conn->query("SELECT AVG(`Effort_Regulation`) AS fuller FROM `gp`")->fetch_assoc()['fuller'], 2, '.', '');

$msgp=number_format((float)$conn->query("SELECT AVG(`Mastery_Self-Talk`) AS fullmst FROM `gp`")->fetch_assoc()['fullmst'], 2, '.', '');

//finding the  average of each label for dal site
$gsdal=number_format((float)$conn->query("SELECT AVG(`Goal_Setting`) AS fullgs FROM `dal`")->fetch_assoc()['fullgs'], 2, '.', '');

$modal=number_format((float)$conn->query("SELECT AVG(`Monitoring`) AS fullmo FROM `dal`")->fetch_assoc()['fullmo'], 2, '.', '');

$tmdal=number_format((float)$conn->query("SELECT AVG(`Time_Management`) AS fulltm FROM `dal`")->fetch_assoc()['fulltm'], 2, '.', '');

$smdal=number_format((float)$conn->query("SELECT AVG(`Space_Management`) AS fullsm FROM `dal`")->fetch_assoc()['fullsm'], 2, '.', '');

$temdal=number_format((float)$conn->query("SELECT AVG(`Technology_Management`) AS fulltem FROM `dal`")->fetch_assoc()['fulltem'], 2, '.', '');

$iidal=number_format((float)$conn->query("SELECT AVG(`Instructor_Interaction`) AS fullii FROM `dal`")->fetch_assoc()['fullii'], 2, '.', '');

$pidal=number_format((float)$conn->query("SELECT AVG(`Peer_Interaction`) AS fullpi FROM `dal`")->fetch_assoc()['fullpi'], 2, '.', '');

$erdal=number_format((float)$conn->query("SELECT AVG(`Effort_Regulation`) AS fuller FROM `dal`")->fetch_assoc()['fuller'], 2, '.', '');

$msdal=number_format((float)$conn->query("SELECT AVG(`Mastery_Self-Talk`) AS fullmst FROM `dal`")->fetch_assoc()['fullmst'], 2, '.', '');

//finding the  average of each label for hou site
$gshou=number_format((float)$conn->query("SELECT AVG(`Goal_Setting`) AS fullgs FROM `hou`")->fetch_assoc()['fullgs'], 2, '.', '');

$mohou=number_format((float)$conn->query("SELECT AVG(`Monitoring`) AS fullmo FROM `hou`")->fetch_assoc()['fullmo'], 2, '.', '');

$tmhou=number_format((float)$conn->query("SELECT AVG(`Time_Management`) AS fulltm FROM `hou`")->fetch_assoc()['fulltm'], 2, '.', '');

$smhou=number_format((float)$conn->query("SELECT AVG(`Space_Management`) AS fullsm FROM `hou`")->fetch_assoc()['fullsm'], 2, '.', '');

$temhou=number_format((float)$conn->query("SELECT AVG(`Technology_Management`) AS fulltem FROM `hou`")->fetch_assoc()['fulltem'], 2, '.', '');

$iihou=number_format((float)$conn->query("SELECT AVG(`Instructor_Interaction`) AS fullii FROM `hou`")->fetch_assoc()['fullii'], 2, '.', '');

$pihou=number_format((float)$conn->query("SELECT AVG(`Peer_Interaction`) AS fullpi FROM `hou`")->fetch_assoc()['fullpi'], 2, '.', '');

$erhou=number_format((float)$conn->query("SELECT AVG(`Effort_Regulation`) AS fuller FROM `hou`")->fetch_assoc()['fuller'], 2, '.', '');

$mshou=number_format((float)$conn->query("SELECT AVG(`Mastery_Self-Talk`) AS fullmst FROM `hou`")->fetch_assoc()['fullmst'], 2, '.', '');

//finding the  average of each label for aus site
$gsaus=number_format((float)$conn->query("SELECT AVG(`Goal_Setting`) AS fullgs FROM `aus`")->fetch_assoc()['fullgs'], 2, '.', '');

$moaus=number_format((float)$conn->query("SELECT AVG(`Monitoring`) AS fullmo FROM `aus`")->fetch_assoc()['fullmo'], 2, '.', '');

$tmaus=number_format((float)$conn->query("SELECT AVG(`Time_Management`) AS fulltm FROM `aus`")->fetch_assoc()['fulltm'], 2, '.', '');

$smaus=number_format((float)$conn->query("SELECT AVG(`Space_Management`) AS fullsm FROM `aus`")->fetch_assoc()['fullsm'], 2, '.', '');

$temaus=number_format((float)$conn->query("SELECT AVG(`Technology_Management`) AS fulltem FROM `aus`")->fetch_assoc()['fulltem'], 2, '.', '');

$iiaus=number_format((float)$conn->query("SELECT AVG(`Instructor_Interaction`) AS fullii FROM `aus`")->fetch_assoc()['fullii'], 2, '.', '');

$piaus=number_format((float)$conn->query("SELECT AVG(`Peer_Interaction`) AS fullpi FROM `aus`")->fetch_assoc()['fullpi'], 2, '.', '');

$eraus=number_format((float)$conn->query("SELECT AVG(`Effort_Regulation`) AS fuller FROM `aus`")->fetch_assoc()['fuller'], 2, '.', '');

$msaus=number_format((float)$conn->query("SELECT AVG(`Mastery_Self-Talk`) AS fullmst FROM `aus`")->fetch_assoc()['fullmst'], 2, '.', '');

//finding the  average of each label for ald site
$gsald=number_format((float)$conn->query("SELECT AVG(`Goal_Setting`) AS fullgs FROM `ald`")->fetch_assoc()['fullgs'], 2, '.', '');

$moald=number_format((float)$conn->query("SELECT AVG(`Monitoring`) AS fullmo FROM `ald`")->fetch_assoc()['fullmo'], 2, '.', '');

$tmald=number_format((float)$conn->query("SELECT AVG(`Time_Management`) AS fulltm FROM `ald`")->fetch_assoc()['fulltm'], 2, '.', '');

$smald=number_format((float)$conn->query("SELECT AVG(`Space_Management`) AS fullsm FROM `ald`")->fetch_assoc()['fullsm'], 2, '.', '');

$temald=number_format((float)$conn->query("SELECT AVG(`Technology_Management`) AS fulltem FROM `ald`")->fetch_assoc()['fulltem'], 2, '.', '');

$iiald=number_format((float)$conn->query("SELECT AVG(`Instructor_Interaction`) AS fullii FROM `ald`")->fetch_assoc()['fullii'], 2, '.', '');

$piald=number_format((float)$conn->query("SELECT AVG(`Peer_Interaction`) AS fullpi FROM `ald`")->fetch_assoc()['fullpi'], 2, '.', '');

$erald=number_format((float)$conn->query("SELECT AVG(`Effort_Regulation`) AS fuller FROM `ald`")->fetch_assoc()['fuller'], 2, '.', '');

$msald=number_format((float)$conn->query("SELECT AVG(`Mastery_Self-Talk`) AS fullmst FROM `ald`")->fetch_assoc()['fullmst'], 2, '.', '');

//finding the  average of each label for fw site
$gsfw=number_format((float)$conn->query("SELECT AVG(`Goal_Setting`) AS fullgs FROM `fw`")->fetch_assoc()['fullgs'], 2, '.', '');

$mofw=number_format((float)$conn->query("SELECT AVG(`Monitoring`) AS fullmo FROM `fw`")->fetch_assoc()['fullmo'], 2, '.', '');

$tmfw=number_format((float)$conn->query("SELECT AVG(`Time_Management`) AS fulltm FROM `fw`")->fetch_assoc()['fulltm'], 2, '.', '');

$smfw=number_format((float)$conn->query("SELECT AVG(`Space_Management`) AS fullsm FROM `fw`")->fetch_assoc()['fullsm'], 2, '.', '');

$temfw=number_format((float)$conn->query("SELECT AVG(`Technology_Management`) AS fulltem FROM `fw`")->fetch_assoc()['fulltem'], 2, '.', '');

$iifw=number_format((float)$conn->query("SELECT AVG(`Instructor_Interaction`) AS fullii FROM `fw`")->fetch_assoc()['fullii'], 2, '.', '');

$pifw=number_format((float)$conn->query("SELECT AVG(`Peer_Interaction`) AS fullpi FROM `fw`")->fetch_assoc()['fullpi'], 2, '.', '');

$erfw=number_format((float)$conn->query("SELECT AVG(`Effort_Regulation`) AS fuller FROM `fw`")->fetch_assoc()['fuller'], 2, '.', '');

$msfw=number_format((float)$conn->query("SELECT AVG(`Mastery_Self-Talk`) AS fullmst FROM `fw`")->fetch_assoc()['fullmst'], 2, '.', '');

//finding the  average of each label for hill site
$gshill=number_format((float)$conn->query("SELECT AVG(`Goal_Setting`) AS fullgs FROM `hill`")->fetch_assoc()['fullgs'], 2, '.', '');

$mohill=number_format((float)$conn->query("SELECT AVG(`Monitoring`) AS fullmo FROM `hill`")->fetch_assoc()['fullmo'], 2, '.', '');

$tmhill=number_format((float)$conn->query("SELECT AVG(`Time_Management`) AS fulltm FROM `hill`")->fetch_assoc()['fulltm'], 2, '.', '');

$smhill=number_format((float)$conn->query("SELECT AVG(`Space_Management`) AS fullsm FROM `hill`")->fetch_assoc()['fullsm'], 2, '.', '');

$temhill=number_format((float)$conn->query("SELECT AVG(`Technology_Management`) AS fulltem FROM `hill`")->fetch_assoc()['fulltem'], 2, '.', '');

$iihill=number_format((float)$conn->query("SELECT AVG(`Instructor_Interaction`) AS fullii FROM `hill`")->fetch_assoc()['fullii'], 2, '.', '');

$pihill=number_format((float)$conn->query("SELECT AVG(`Peer_Interaction`) AS fullpi FROM `hill`")->fetch_assoc()['fullpi'], 2, '.', '');

$erhill=number_format((float)$conn->query("SELECT AVG(`Effort_Regulation`) AS fuller FROM `hill`")->fetch_assoc()['fuller'], 2, '.', '');

$mshill=number_format((float)$conn->query("SELECT AVG(`Mastery_Self-Talk`) AS fullmst FROM `hill`")->fetch_assoc()['fullmst'], 2, '.', '');

//finding the  average of each label for sa site
$gssa=number_format((float)$conn->query("SELECT AVG(`Goal_Setting`) AS fullgs FROM `sa`")->fetch_assoc()['fullgs'], 2, '.', '');

$mosa=number_format((float)$conn->query("SELECT AVG(`Monitoring`) AS fullmo FROM `sa`")->fetch_assoc()['fullmo'], 2, '.', '');

$tmsa=number_format((float)$conn->query("SELECT AVG(`Time_Management`) AS fulltm FROM `sa`")->fetch_assoc()['fulltm'], 2, '.', '');

$smsa=number_format((float)$conn->query("SELECT AVG(`Space_Management`) AS fullsm FROM `sa`")->fetch_assoc()['fullsm'], 2, '.', '');

$temsa=number_format((float)$conn->query("SELECT AVG(`Technology_Management`) AS fulltem FROM `sa`")->fetch_assoc()['fulltem'], 2, '.', '');

$iisa=number_format((float)$conn->query("SELECT AVG(`Instructor_Interaction`) AS fullii FROM `sa`")->fetch_assoc()['fullii'], 2, '.', '');

$pisa=number_format((float)$conn->query("SELECT AVG(`Peer_Interaction`) AS fullpi FROM `sa`")->fetch_assoc()['fullpi'], 2, '.', '');

$ersa=number_format((float)$conn->query("SELECT AVG(`Effort_Regulation`) AS fuller FROM `sa`")->fetch_assoc()['fuller'], 2, '.', '');

$mssa=number_format((float)$conn->query("SELECT AVG(`Mastery_Self-Talk`) AS fullmst FROM `sa`")->fetch_assoc()['fullmst'], 2, '.', '');

//finding the  average of each label for nc site
$gsnc=number_format((float)$conn->query("SELECT AVG(`Goal_Setting`) AS fullgs FROM `nc`")->fetch_assoc()['fullgs'], 2, '.', '');

$monc=number_format((float)$conn->query("SELECT AVG(`Monitoring`) AS fullmo FROM `nc`")->fetch_assoc()['fullmo'], 2, '.', '');

$tmnc=number_format((float)$conn->query("SELECT AVG(`Time_Management`) AS fulltm FROM `nc`")->fetch_assoc()['fulltm'], 2, '.', '');

$smnc=number_format((float)$conn->query("SELECT AVG(`Space_Management`) AS fullsm FROM `nc`")->fetch_assoc()['fullsm'], 2, '.', '');

$temnc=number_format((float)$conn->query("SELECT AVG(`Technology_Management`) AS fulltem FROM `nc`")->fetch_assoc()['fulltem'], 2, '.', '');

$iinc=number_format((float)$conn->query("SELECT AVG(`Instructor_Interaction`) AS fullii FROM `nc`")->fetch_assoc()['fullii'], 2, '.', '');

$pinc=number_format((float)$conn->query("SELECT AVG(`Peer_Interaction`) AS fullpi FROM `nc`")->fetch_assoc()['fullpi'], 2, '.', '');

$ernc=number_format((float)$conn->query("SELECT AVG(`Effort_Regulation`) AS fuller FROM `nc`")->fetch_assoc()['fuller'], 2, '.', '');

$msnc=number_format((float)$conn->query("SELECT AVG(`Mastery_Self-Talk`) AS fullmst FROM `nc`")->fetch_assoc()['fullmst'], 2, '.', '');

//finding the  Standard Deviation of each label for gp site
$std_gp_gs = number_format((float)$conn->query("SELECT STDDEV(Goal_Setting) Goal_Setting FROM gp ")->fetch_assoc()['Goal_Setting'], 2, '.', '');

$std_gp_mo = number_format((float)$conn->query("SELECT STDDEV(Monitoring) Monitoring FROM gp ")->fetch_assoc()['Monitoring'], 2, '.', '');

$std_gp_tm = number_format((float)$conn->query("SELECT STDDEV(Time_Management) Time_Management FROM gp ")->fetch_assoc()['Time_Management'], 2, '.', '');

$std_gp_sm = number_format((float)$conn->query("SELECT STDDEV(Space_Management) Space_Management FROM gp ")->fetch_assoc()['Space_Management'], 2, '.', '');

$std_gp_tem = number_format((float)$conn->query("SELECT STDDEV(Technology_Management) Technology_Management FROM gp ")->fetch_assoc()['Technology_Management'], 2, '.', '');

$std_gp_ii = number_format((float)$conn->query("SELECT STDDEV(Instructor_Interaction) Instructor_Interaction FROM gp ")->fetch_assoc()['Instructor_Interaction'], 2, '.', '');

$std_gp_pi = number_format((float)$conn->query("SELECT STDDEV(Peer_Interaction) Peer_Interaction FROM gp ")->fetch_assoc()['Peer_Interaction'], 2, '.', '');

$std_gp_er = number_format((float)$conn->query("SELECT STDDEV(Effort_Regulation) Effort_Regulation FROM gp ")->fetch_assoc()['Effort_Regulation'], 2, '.', '');

$std_gp_mst = number_format((float)$conn->query("SELECT STDDEV(`Mastery_Self-Talk`) mst FROM gp ")->fetch_assoc()['mst'], 2, '.', '');

//finding the  Standard Deviation of each label for dal site
$std_dal_gs = number_format((float)$conn->query("SELECT STDDEV(Goal_Setting) Goal_Setting FROM admin ")->fetch_assoc()['Goal_Setting'], 2, '.', '');

$std_dal_mo = number_format((float)$conn->query("SELECT STDDEV(Monitoring) Monitoring FROM admin ")->fetch_assoc()['Monitoring'], 2, '.', '');

$std_dal_tm = number_format((float)$conn->query("SELECT STDDEV(Time_Management) Time_Management FROM admin ")->fetch_assoc()['Time_Management'], 2, '.', '');

$std_dal_sm = number_format((float)$conn->query("SELECT STDDEV(Space_Management) Space_Management FROM admin ")->fetch_assoc()['Space_Management'], 2, '.', '');

$std_dal_tem = number_format((float)$conn->query("SELECT STDDEV(Technology_Management) Technology_Management FROM admin ")->fetch_assoc()['Technology_Management'], 2, '.', '');

$std_dal_ii = number_format((float)$conn->query("SELECT STDDEV(Instructor_Interaction) Instructor_Interaction FROM admin ")->fetch_assoc()['Instructor_Interaction'], 2, '.', '');

$std_dal_pi = number_format((float)$conn->query("SELECT STDDEV(Peer_Interaction) Peer_Interaction FROM admin ")->fetch_assoc()['Peer_Interaction'], 2, '.', '');

$std_dal_er = number_format((float)$conn->query("SELECT STDDEV(Effort_Regulation) Effort_Regulation FROM admin ")->fetch_assoc()['Effort_Regulation'], 2, '.', '');

$std_dal_mst = number_format((float)$conn->query("SELECT STDDEV(`Mastery_Self-Talk`) mst FROM admin ")->fetch_assoc()['mst'], 2, '.', '');

//finding the  Standard Deviation of each label for hou site
$std_hou_gs = number_format((float)$conn->query("SELECT STDDEV(Goal_Setting) Goal_Setting FROM admin ")->fetch_assoc()['Goal_Setting'], 2, '.', '');

$std_hou_mo = number_format((float)$conn->query("SELECT STDDEV(Monitoring) Monitoring FROM admin ")->fetch_assoc()['Monitoring'], 2, '.', '');

$std_hou_tm = number_format((float)$conn->query("SELECT STDDEV(Time_Management) Time_Management FROM admin ")->fetch_assoc()['Time_Management'], 2, '.', '');

$std_hou_sm = number_format((float)$conn->query("SELECT STDDEV(Space_Management) Space_Management FROM admin ")->fetch_assoc()['Space_Management'], 2, '.', '');

$std_hou_tem = number_format((float)$conn->query("SELECT STDDEV(Technology_Management) Technology_Management FROM admin ")->fetch_assoc()['Technology_Management'], 2, '.', '');

$std_hou_ii = number_format((float)$conn->query("SELECT STDDEV(Instructor_Interaction) Instructor_Interaction FROM admin ")->fetch_assoc()['Instructor_Interaction'], 2, '.', '');

$std_hou_pi = number_format((float)$conn->query("SELECT STDDEV(Peer_Interaction) Peer_Interaction FROM admin ")->fetch_assoc()['Peer_Interaction'], 2, '.', '');

$std_hou_er = number_format((float)$conn->query("SELECT STDDEV(Effort_Regulation) Effort_Regulation FROM admin ")->fetch_assoc()['Effort_Regulation'], 2, '.', '');

$std_hou_mst = number_format((float)$conn->query("SELECT STDDEV(`Mastery_Self-Talk`) mst FROM admin ")->fetch_assoc()['mst'], 2, '.', '');

//finding the  Standard Deviation of each label for aus site
$std_aus_gs = number_format((float)$conn->query("SELECT STDDEV(Goal_Setting) Goal_Setting FROM admin ")->fetch_assoc()['Goal_Setting'], 2, '.', '');

$std_aus_mo = number_format((float)$conn->query("SELECT STDDEV(Monitoring) Monitoring FROM admin ")->fetch_assoc()['Monitoring'], 2, '.', '');

$std_aus_tm = number_format((float)$conn->query("SELECT STDDEV(Time_Management) Time_Management FROM admin ")->fetch_assoc()['Time_Management'], 2, '.', '');

$std_aus_sm = number_format((float)$conn->query("SELECT STDDEV(Space_Management) Space_Management FROM admin ")->fetch_assoc()['Space_Management'], 2, '.', '');

$std_aus_tem = number_format((float)$conn->query("SELECT STDDEV(Technology_Management) Technology_Management FROM admin ")->fetch_assoc()['Technology_Management'], 2, '.', '');

$std_aus_ii = number_format((float)$conn->query("SELECT STDDEV(Instructor_Interaction) Instructor_Interaction FROM admin ")->fetch_assoc()['Instructor_Interaction'], 2, '.', '');

$std_aus_pi = number_format((float)$conn->query("SELECT STDDEV(Peer_Interaction) Peer_Interaction FROM admin ")->fetch_assoc()['Peer_Interaction'], 2, '.', '');

$std_aus_er = number_format((float)$conn->query("SELECT STDDEV(Effort_Regulation) Effort_Regulation FROM admin ")->fetch_assoc()['Effort_Regulation'], 2, '.', '');

$std_aus_mst = number_format((float)$conn->query("SELECT STDDEV(`Mastery_Self-Talk`) mst FROM admin ")->fetch_assoc()['mst'], 2, '.', '');

//finding the  Standard Deviation of each label for ald site
$std_ald_gs = number_format((float)$conn->query("SELECT STDDEV(Goal_Setting) Goal_Setting FROM admin ")->fetch_assoc()['Goal_Setting'], 2, '.', '');

$std_ald_mo = number_format((float)$conn->query("SELECT STDDEV(Monitoring) Monitoring FROM admin ")->fetch_assoc()['Monitoring'], 2, '.', '');

$std_ald_tm = number_format((float)$conn->query("SELECT STDDEV(Time_Management) Time_Management FROM admin ")->fetch_assoc()['Time_Management'], 2, '.', '');

$std_ald_sm = number_format((float)$conn->query("SELECT STDDEV(Space_Management) Space_Management FROM admin ")->fetch_assoc()['Space_Management'], 2, '.', '');

$std_ald_tem = number_format((float)$conn->query("SELECT STDDEV(Technology_Management) Technology_Management FROM admin ")->fetch_assoc()['Technology_Management'], 2, '.', '');

$std_ald_ii = number_format((float)$conn->query("SELECT STDDEV(Instructor_Interaction) Instructor_Interaction FROM admin ")->fetch_assoc()['Instructor_Interaction'], 2, '.', '');

$std_ald_pi = number_format((float)$conn->query("SELECT STDDEV(Peer_Interaction) Peer_Interaction FROM admin ")->fetch_assoc()['Peer_Interaction'], 2, '.', '');

$std_ald_er = number_format((float)$conn->query("SELECT STDDEV(Effort_Regulation) Effort_Regulation FROM admin ")->fetch_assoc()['Effort_Regulation'], 2, '.', '');

$std_ald_mst = number_format((float)$conn->query("SELECT STDDEV(`Mastery_Self-Talk`) mst FROM admin ")->fetch_assoc()['mst'], 2, '.', '');

//finding the  Standard Deviation of each label for fw site
$std_fw_gs = number_format((float)$conn->query("SELECT STDDEV(Goal_Setting) Goal_Setting FROM admin ")->fetch_assoc()['Goal_Setting'], 2, '.', '');

$std_fw_mo = number_format((float)$conn->query("SELECT STDDEV(Monitoring) Monitoring FROM admin ")->fetch_assoc()['Monitoring'], 2, '.', '');

$std_fw_tm = number_format((float)$conn->query("SELECT STDDEV(Time_Management) Time_Management FROM admin ")->fetch_assoc()['Time_Management'], 2, '.', '');

$std_fw_sm = number_format((float)$conn->query("SELECT STDDEV(Space_Management) Space_Management FROM admin ")->fetch_assoc()['Space_Management'], 2, '.', '');

$std_fw_tem = number_format((float)$conn->query("SELECT STDDEV(Technology_Management) Technology_Management FROM admin ")->fetch_assoc()['Technology_Management'], 2, '.', '');

$std_fw_ii = number_format((float)$conn->query("SELECT STDDEV(Instructor_Interaction) Instructor_Interaction FROM admin ")->fetch_assoc()['Instructor_Interaction'], 2, '.', '');

$std_fw_pi = number_format((float)$conn->query("SELECT STDDEV(Peer_Interaction) Peer_Interaction FROM admin ")->fetch_assoc()['Peer_Interaction'], 2, '.', '');

$std_fw_er = number_format((float)$conn->query("SELECT STDDEV(Effort_Regulation) Effort_Regulation FROM admin ")->fetch_assoc()['Effort_Regulation'], 2, '.', '');

$std_fw_mst = number_format((float)$conn->query("SELECT STDDEV(`Mastery_Self-Talk`) mst FROM admin ")->fetch_assoc()['mst'], 2, '.', '');

//finding the  Standard Deviation of each label for hill site
$std_hill_gs = number_format((float)$conn->query("SELECT STDDEV(Goal_Setting) Goal_Setting FROM admin ")->fetch_assoc()['Goal_Setting'], 2, '.', '');

$std_hill_mo = number_format((float)$conn->query("SELECT STDDEV(Monitoring) Monitoring FROM admin ")->fetch_assoc()['Monitoring'], 2, '.', '');

$std_hill_tm = number_format((float)$conn->query("SELECT STDDEV(Time_Management) Time_Management FROM admin ")->fetch_assoc()['Time_Management'], 2, '.', '');

$std_hill_sm = number_format((float)$conn->query("SELECT STDDEV(Space_Management) Space_Management FROM admin ")->fetch_assoc()['Space_Management'], 2, '.', '');

$std_hill_tem = number_format((float)$conn->query("SELECT STDDEV(Technology_Management) Technology_Management FROM admin ")->fetch_assoc()['Technology_Management'], 2, '.', '');

$std_hill_ii = number_format((float)$conn->query("SELECT STDDEV(Instructor_Interaction) Instructor_Interaction FROM admin ")->fetch_assoc()['Instructor_Interaction'], 2, '.', '');

$std_hill_pi = number_format((float)$conn->query("SELECT STDDEV(Peer_Interaction) Peer_Interaction FROM admin ")->fetch_assoc()['Peer_Interaction'], 2, '.', '');

$std_hill_er = number_format((float)$conn->query("SELECT STDDEV(Effort_Regulation) Effort_Regulation FROM admin ")->fetch_assoc()['Effort_Regulation'], 2, '.', '');

$std_hill_mst = number_format((float)$conn->query("SELECT STDDEV(`Mastery_Self-Talk`) mst FROM admin ")->fetch_assoc()['mst'], 2, '.', '');

//finding the  Standard Deviation of each label for sa site
$std_sa_gs = number_format((float)$conn->query("SELECT STDDEV(Goal_Setting) Goal_Setting FROM admin ")->fetch_assoc()['Goal_Setting'], 2, '.', '');

$std_sa_mo = number_format((float)$conn->query("SELECT STDDEV(Monitoring) Monitoring FROM admin ")->fetch_assoc()['Monitoring'], 2, '.', '');

$std_sa_tm = number_format((float)$conn->query("SELECT STDDEV(Time_Management) Time_Management FROM admin ")->fetch_assoc()['Time_Management'], 2, '.', '');

$std_sa_sm = number_format((float)$conn->query("SELECT STDDEV(Space_Management) Space_Management FROM admin ")->fetch_assoc()['Space_Management'], 2, '.', '');

$std_sa_tem = number_format((float)$conn->query("SELECT STDDEV(Technology_Management) Technology_Management FROM admin ")->fetch_assoc()['Technology_Management'], 2, '.', '');

$std_sa_ii = number_format((float)$conn->query("SELECT STDDEV(Instructor_Interaction) Instructor_Interaction FROM admin ")->fetch_assoc()['Instructor_Interaction'], 2, '.', '');

$std_sa_pi = number_format((float)$conn->query("SELECT STDDEV(Peer_Interaction) Peer_Interaction FROM admin ")->fetch_assoc()['Peer_Interaction'], 2, '.', '');

$std_sa_er = number_format((float)$conn->query("SELECT STDDEV(Effort_Regulation) Effort_Regulation FROM admin ")->fetch_assoc()['Effort_Regulation'], 2, '.', '');

$std_sa_mst = number_format((float)$conn->query("SELECT STDDEV(`Mastery_Self-Talk`) mst FROM admin ")->fetch_assoc()['mst'], 2, '.', '');

//finding the  Standard Deviation of each label for nc site
$std_nc_gs = number_format((float)$conn->query("SELECT STDDEV(Goal_Setting) Goal_Setting FROM admin ")->fetch_assoc()['Goal_Setting'], 2, '.', '');

$std_nc_mo = number_format((float)$conn->query("SELECT STDDEV(Monitoring) Monitoring FROM admin ")->fetch_assoc()['Monitoring'], 2, '.', '');

$std_nc_tm = number_format((float)$conn->query("SELECT STDDEV(Time_Management) Time_Management FROM admin ")->fetch_assoc()['Time_Management'], 2, '.', '');

$std_nc_sm = number_format((float)$conn->query("SELECT STDDEV(Space_Management) Space_Management FROM admin ")->fetch_assoc()['Space_Management'], 2, '.', '');

$std_nc_tem = number_format((float)$conn->query("SELECT STDDEV(Technology_Management) Technology_Management FROM admin ")->fetch_assoc()['Technology_Management'], 2, '.', '');

$std_nc_ii = number_format((float)$conn->query("SELECT STDDEV(Instructor_Interaction) Instructor_Interaction FROM admin ")->fetch_assoc()['Instructor_Interaction'], 2, '.', '');

$std_nc_pi = number_format((float)$conn->query("SELECT STDDEV(Peer_Interaction) Peer_Interaction FROM admin ")->fetch_assoc()['Peer_Interaction'], 2, '.', '');

$std_nc_er = number_format((float)$conn->query("SELECT STDDEV(Effort_Regulation) Effort_Regulation FROM admin ")->fetch_assoc()['Effort_Regulation'], 2, '.', '');

$std_nc_mst = number_format((float)$conn->query("SELECT STDDEV(`Mastery_Self-Talk`) mst FROM admin ")->fetch_assoc()['mst'], 2, '.', '');
?>