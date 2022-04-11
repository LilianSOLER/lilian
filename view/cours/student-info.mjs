import amandineInfo from "./student/amandine-info.mjs";
import salomeInfo from "./student/salome-info.mjs";
import slimaneInfo from "./student/slimane-info.mjs";
import kevinJInfo from "./student/kevin-j-info.mjs";
import romainBInfo from "./student/romain-b-info.mjs";
import zoeBInfo from "./student/zoe-b-info.mjs";

import utilsInfo from "./utils/utils-student.mjs";

const StudentInfo = 
{
  students: {
    "amandine": amandineInfo,
    "salome": salomeInfo,
    "slimane": slimaneInfo,
    "kevin-j" : kevinJInfo,
    "romain-b": romainBInfo,
    "zoe-b": zoeBInfo,
  },
  utils: utilsInfo,
};  

export default StudentInfo;