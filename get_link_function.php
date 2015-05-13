<?php

//------------------------------------------
//	Anh Nguyen
//	EZSched Project
//	Created: April 2015
//	Last Update: 12 May 2015
//------------------------------------------

include "simple_html_dom.php";

// This function will get the college's information that offers the subject.
function get_college( & $subject, & $college, & $college_short, & $college_ID)
{
	switch ($subject) {
		case "ADGD":
		case "ANIM":
		case "ARCH":
		case "ARTH":
		case "AADM":
		case "DANC":
		case "DSMR":
		case "DIGM":
		case "EAM":
		case "EVGD":
		case "FASH":
		case "FMVD":
		case "FMST":
		case "GMAP":
		case "VSCM":
		case "INTR":
		case "MUSL":
		case "MUSC":
		case "MIP":
		case "PHTO":
		case "PTM":
		case "PROD":
		case "RETL":
		case "SCRP":
		case "SAPA":
		case "TVIE":
		case "TVIT":
		case "TVPR":
		case "TVST":
		case "TVMN":
		case "THTR":
		case "VSST":
		case "WEST":
		case "WMGD":
		case "WBDV":	// done
		$college = "Antoinette Westphal COMAD"; $college_short = "SA"; $college_ID = 0; break;
		case "AFAS":
		case "ANTH":
		case "ARBC":
		case "AS-I":
		case "BIO":
		case "CHEC":
		case "CHEM":
		case "CHIN":
		case "COM":
		case "CJ":
		case "CJS":
		case "ENGL":
		case "ESL":
		case "ENVP":
		case "ENVS":
		case "ENSS":
		case "FREN":
		case "GEO":
		case "GER":
		case "GREC":
		case "HBRW":
		case "HIST":
		case "HUM":
		case "IAS":
		case "IST":
		case "AS-A":
		case "ITAL":
		case "JAPN":
		case "JUDA":
		case "KOR":
		case "LANG":
		case "LING":
		case "MATH":
		case "PHIL":
		case "PHYS":
		case "PHEV":
		case "PSCI":
		case "PORT":
		case "PSY":
		case "PLCY":
		case "PMGT":
		case "RUSS":
		case "SOC":
		case "SPAN":
		case "WMST":
		case "WRIT": // done
		$college = "Arts and Sciences"; $college_short = "SAS"; $college_ID = 1; break;
		case "ACCT":
		case "STAT":
		case "ECON":
		case "FIN":
		case "BUSN":
		case "HRMT":
		case "INTB":
		case "BLAW":
		case "MGMT":
		case "MIS":
		case "MKTG":
		case "OPM":
		case "OPR":
		case "ORGB":
		case "TAX":
		case "POM":
		case "UNIV": // done
		$college = "Bennett S. LeBow College of Business"; $college_short = "SB"; $college_ID = 2; break;
		case "CIVC": // done
		$college = "Center for Civic Engagement"; $college_short = "SCV"; $college_ID = 3; break;
		case "ENTP": // done
		$college = "Close School of Entrepreneurship"; $college_short = "SC"; $college_ID = 4; break;
		case "CS": 
		case "CT":
		case "CI":
		case "CST":
		case "EMS":
		case "EMER":
		case "HSM":
		case "INFO":
		case "SE":
		case "UNIV": // done
		$college = "College of Computing & Informatics"; $college_short = "SCI"; $college_ID = 5; break;
		case "AE": 
		case "BET":
		case "CHE":
		case "CAE":
		case "CIVE":
		case "CAEE":
		case "CMGT":
		case "ECEC":
		case "ECEE":
		case "ECEP":
		case "ECES":
		case "ECE":
		case "ECEL":
		case "ECET":
		case "EET":
		case "EGEO":
		case "EGMT":
		case "ET":
		case "ENGR":
		case "ENVE":
		case "INDE":
		case "MET":
		case "MATE":
		case "MEM":
		case "MHT":
		case "PROJ":
		case "PRMT":
		case "REAL":
		case "SYSE": // done
		$college = "College of Engineering"; $college_short = "SE"; $college_ID = 6; break;
		case "CULA": 
		case "FDSC":
		case "HRM":
		case "SMT": // done
		$college = "Hospitality & Sport Management"; $college_short = "SSH"; $college_ID = 7; break;
		case "CIE":
		case "EXAM":
		case "MLSC":
		case "UNIV": // done
		$college = "Miscellaneous"; $college_short = "SX"; $college_ID = 8; break;
		case "ANAT":
		case "ARTS":
		case "BACS":
		case "CVPT":
		case "CIT":
		case "CFTP":
		case "HSCI":
		case "HSAD":
		case "HLSO":
		case "ICVT":
		case "IPS":
		case "MBC":
		case "MFTP":
		case "NEUR":
		case "NURS":
		case "NHP":
		case "NFS":
		case "PA":
		case "PHGY":
		case "PTRS":
		case "RADI":
		case "RHAB":
		case "RSCH":
		case "STS": // done
		$college = "Nursing & Health Professions"; $college_short = "SNH"; $college_ID = 9; break;
		case "CSDN": 
		case "UNIV":
		case "HNRS":
		case "LEAD": // done
		$college = "Pennoni Honors College"; $college_short = "SPE"; $college_ID = 10; break;
		case "BMES": // done
		$college = "School of Biomedical Engineering, Sciences & Health"; $college_short = "SR"; $college_ID = 11; break;
		case "CRTV": 
		case "ELL":
		case "EDGI":
		case "EDGE":
		case "EHRD":
		case "EDLT":
		case "EDAM":
		case "EDAE":
		case "EIT":
		case "EDLS":
		case "EDPO":
		case "EDHE":
		case "MTED":
		case "MUSM":
		case "ESTM":
		case "EDEX":
		case "EDUC": // done
		$college = "School of Education"; $college_short = "ST"; $college_ID = 12; break;
		case "PBHL": // done
		$college = "School of Public Health"; $college_short = "SPH"; $college_ID = 13; break;
		case "CAT": 
		case "CUST":
		case "GSTD":
		case "PRST": // done
		$college = "Goodwin School of Technology & Prof Studies"; $college_short = "SG"; $college_ID = 14; break;
	}
}

function get_link( & $link, & $subject, & $college)
{
	$college_short = "";
	$college_ID = "";
	get_college( $subject, $college, $college_short, $college_ID);
	// echo $college; echo "\n";
	// echo $college_short; echo "\n";
	// echo $college_ID . "\n";
	// echo $link;
	// echo $subject . "\n";
	// echo $college;
	
	$html = file_get_html('https://duapp2.drexel.edu/webtms_du/app');
	// This will find the ID in the link that we are looking for.
	foreach ($html->find('a') as $element)
	{
		if ($element->plaintext == "Spring Quarter 14-15") // Ban Nhan nghi ra dong nay
		{
			$link = "https://duapp2.drexel.edu/webtms_du/app?component=subjectDetails&page=CollegesSubjects" . substr( $element->href, 57) . "&sp=" . $college_short . "&sp=S" . $subject . "&sp=" . $college_ID;
			echo "\n";
		}
	}
	$html->root->clear();
	unset($html);
}

	