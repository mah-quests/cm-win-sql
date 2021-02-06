 function showHideOtherTestedForCovid() {
        var noOption = document.getElementById("tested_covid").value;
        if (noOption == "Yes") {
          jQuery('#tested_covid-info').show();
          document.getElementById("tested_covid-info").style.visibility = 'visible';
          jQuery('#isolateInfo').hide();
          document.getElementById("isolateInfo").style.visibility = 'hidden';
          jQuery('#qualityCare').show();
          document.getElementById("qualityCare").style.visibility = 'vissible';
        } else {
          jQuery('#isolateInfo').show();
          document.getElementById("isolateInfo").style.visibility = 'visible';
          jQuery('#tested_covid-info').hide();
          document.getElementById("tested_covid-info").style.visibility = 'hidden';
          jQuery('#qualityCare').hide();
          document.getElementById("qualityCare").style.visibility = 'hidden';
        }
      }

      function showHideHospitalized() {
        var noOption = document.getElementById("which_hospital").value;
        if (noOption == "Private") {
          jQuery('#hospitalized-covid-info').show();
          document.getElementById("hospitalized-covid-info").style.visibility = 'visible';
          jQuery('#hospitalized-covid-inf').show();
          document.getElementById("hospitalized-covid-inf").style.visibility = 'visible';
        } else {
          jQuery('#hospitalized-covid-info').hide();
          document.getElementById("hospitalized-covid-info").style.visibility = 'hidden';
          jQuery('#hospitalized-covid-inf').hide();
          document.getElementById("hospitalized-covid-inf").style.visibility = 'hidden';
        }
      }

      function showHideOtherAccessToTest() {
        var noOption = document.getElementById("access_test").value;
        if (noOption == "Yes") {
          jQuery('#where-tested-info').show();
          document.getElementById("where-tested-info").style.visibility = 'visible';
          jQuery('#where-not-tested-info').hide();
          document.getElementById("where-not-tested-info").style.visibility = 'hidden';

        } else {
          jQuery('#where-tested-info').hide();
          document.getElementById("where-tested-info").style.visibility = 'hidden';
          jQuery('#where-not-tested-info').show();
          document.getElementById("where-not-tested-info").style.visibility = 'visible';
        }
      }


      function showHideYouHospitalized() {
        var noOption = document.getElementById("hospitalised").value;
        if (noOption == "Yes") {
          jQuery('#know-what-todo-info').show();
          document.getElementById("know-what-todo-info").style.visibility = 'visible';
        } else {
          jQuery('#know-what-todo-info').hide();
          document.getElementById("know-what-todo-info").style.visibility = 'hidden';
        }
      }

      function showHidequalityOfCare() {
        var noOption = document.getElementById("quality_of_care").value;
        if (noOption == "Yes") {
          jQuery('#services_impr_suggest_info').show();
          document.getElementById("services_impr_suggest_info").style.visibility = 'visible';
        } else {
          jQuery('#services_impr_suggest_info').hide();
          document.getElementById("services_impr_suggest_info").style.visibility = 'hidden';
        }
      }

      function showHideServiceSuportOther() {
        var noOption = document.getElementById("support_services").value;
        if (noOption == "Other") {
          jQuery('#support_services_info').show();
          document.getElementById("support_services_info").style.visibility = 'visible';
          jQuery('#services_improvement_info').hide();
          document.getElementById("services_improvement_info").style.visibility = 'hidden';
        } else {
          jQuery('#support_services_info').hide();
          document.getElementById("support_services_info").style.visibility = 'hidden';

          jQuery('#services_improvement_info').show();
          document.getElementById("services_improvement_info").style.visibility = 'visible';
        }
      }
      //Module 2
      function showHideSocialDistance() {
        var noOption = document.getElementById("social_distancing").value;
        if (noOption == "Yes") {
          jQuery('#socalDis').show();
          document.getElementById("socalDis").style.visibility = 'visible';
        } else {
          jQuery('#socalDis').hide();
          document.getElementById("socalDis").style.visibility = 'hidden';
        }
      }

      function showHideEmployementInfo() {
        var noOption = document.getElementById("applied_sassa").value;
        if (noOption == "Yes") {
          jQuery('#sassa-grant-info').show();
          document.getElementById("sassa-grant-info").style.visibility = 'visible';
        } else {
          jQuery('#sassa-grant-info').hide();
          document.getElementById("sassa-grant-info").style.visibility = 'hidden';
        }
      }

      function showHideEmploymentChanged() {
        var noOption = document.getElementById("changed_employment").value;
        if (noOption == "Yes") {
          jQuery('#employment-changed-info').show();
          document.getElementById("employment-changed-info").style.visibility = 'visible';
        } else {
          jQuery('#employment-changed-info').hide();
          document.getElementById("employment-changed-info").style.visibility = 'hidden';
        }
      }

      function showHideUnemploymentAssistance() {
        var noOption = document.getElementById("applied_assistance").value;
        if (noOption == "Yes") {
          jQuery('#applied_assistance-info').show();
          document.getElementById("applied_assistance-info").style.visibility = 'visible';
        } else {
          jQuery('#applied_assistance-info').hide();
          document.getElementById("applied_assistance-info").style.visibility = 'hidden';
        }
      }



      function showHideImproveHelthArea() {
        var noOption = document.getElementById("health_improvements").value;
        if (noOption == "Yes") {
          jQuery('#healthImprove').show();
          document.getElementById("healthImprove").style.visibility = 'visible';
        } else {
          jQuery('#healthImprove').hide();
          document.getElementById("healthImprove").style.visibility = 'hidden';
        }
      }

      function showHideTransportInfo() {
        var noOption = document.getElementById("travel_to_work").value;
        if (noOption != "Own car") {
          jQuery('#publicTransportInfo').show();
          document.getElementById("publicTransportInfo").style.visibility = 'visible';
          jQuery('#publicTransportInfo1').show();
          document.getElementById("publicTransportInfo1").style.visibility = 'visible';
        } else {
          jQuery('#publicTransportInfo').hide();
          document.getElementById("publicTransportInfo").style.visibility = 'hidden';
          jQuery('#publicTransportInfo1').hide();
          document.getElementById("publicTransportInfo1").style.visibility = 'hidden';
        }
      }

      function showHideOtherEarnALiving() {
        var noOption = document.getElementById("earning_living").value;
        if (noOption == "unemployed") {
          jQuery('#unemployed-info').show();
          document.getElementById("unemployed-info").style.visibility = 'visible';
        } else {
          jQuery('#unemployed-info').hide();
          document.getElementById("unemployed-info").style.visibility = 'hidden';
        }

        if (noOption == "self-employed") {
          jQuery('#self-employed-info').show();
          document.getElementById("self-employed-info").style.visibility = 'visible';
        } else {
          jQuery('#self-employed-info').hide();
          document.getElementById("self-employed-info").style.visibility = 'hidden';
        }

        jQuery('#employed-status-info').show();
        document.getElementById("employed-status-info").style.visibility = 'visible';
      }


      function showHideEmployAsstance() {
        var noOption = document.getElementById("which_grant").value;
        if (noOption == "Yes") {
          jQuery('#applicationSuccess').show();
          document.getElementById("applicationSuccess").style.visibility = 'visible';
        } else {
          jQuery('#applicationSuccess').hide();
          document.getElementById("applicationSuccess").style.visibility = 'hidden';
        }
      }

      function showHideEmployerActions() {
        var noOption = document.getElementById("employer_safe_environment").value;
        if (noOption == "Yes") {
          jQuery('#employer_Actions').show();
          document.getElementById("employer_Actions").style.visibility = 'visible';
        } else {
          jQuery('#employer_Actions').hide();
          document.getElementById("employer_Actions").style.visibility = 'hidden';
        }
      }

    function showHideDisabledPerson() {
      var noOption = document.getElementById("disable").value;
      if (noOption == "Yes") {
        jQuery('#disability_type-lbl').hide();
        document.getElementById("disability_type-lbl").style.visibility = 'hidden';
        jQuery('#disability_type-lbl').show();
        document.getElementById("disability_type-lbl").style.visibility = 'visible';               
      } else {
        jQuery('#disability_type-lbl').show();
        document.getElementById("disability_type-lbl").style.visibility = 'visible';
        jQuery('#disability_type-lbl').hide();
        document.getElementById("disability_type-lbl").style.visibility = 'hidden';
      }
    }