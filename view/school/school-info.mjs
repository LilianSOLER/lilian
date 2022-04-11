import applicationDuWebInfo from "./subject/peip2/application-du-web-info.mjs";
import arduinoInfo from "./subject/peip2/arduino-info.mjs";
import introAuWebInfo from "./subject/peip2/intro-au-web-info.mjs";

import programmationWebInfo from "./subject/info3/programmation-web-info.mjs";

const schoolInfo = 
{
  "peip2": {
    "application-du-web": applicationDuWebInfo,
    "arduino": arduinoInfo,
    "intro-au-web": introAuWebInfo,
  },
  "info3": {
    "programmation-web": programmationWebInfo,
  },
}; 

export default schoolInfo;