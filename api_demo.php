<!DOCTYPE html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="page_type" content="np-template-header-footer-from-plugin">
  <title>Civil Society Forum</title>
  <link rel="stylesheet" href="assets/nicepage.css" media="screen">
  <link rel="stylesheet" href="assets/register.css" media="screen">
  <script class="u-script" type="text/javascript" src="assets/jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="assets/nicepage.js" defer=""></script>
  <meta name="generator" content="Nicepage 2.25.0, nicepage.com">

  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": "",
      "url": "index.php"
    }
  </script>
  <meta property="og:title" content="register">
  <meta property="og:type" content="website">
  <meta name="theme-color" content="#478ac9">
  <link rel="canonical" href="index.php">
  <meta property="og:url" content="index.php">

  <style type="text/css">
    .DDlist {
      display: none;
    }
  </style>

  <script type="text/javascript">
    var categories = [];
    categories["startList"] = ["Western Cape", "Eastern Cape", 'Northern Cape', 'North West', 'Free State', 'Kwazulu Natal', 'Gauteng', 'Limpopo', 'Mpumalanga']; // Level 1  (True|False is 1 level only)

    categories["Western Cape"] = ["Cape Winelands District Municipality", "Central Karoo District Municipality", "Garden Route District Municipality", "Overberg District Municipality", "West Coast District Municipality", "City of Cape Town Metropolitan"];
    // Level 2
    categories["Cape Winelands District Municipality"] = ["Witzenberg", "Drakenstein", "Stellenbosch", "Breede Valley", "Langeberg"];
    categories["Central Karoo District Municipality"] = ["Laingsburg", "Prince Albert", "Beaufort West"];
    categories["Garden Route District Municipality"] = ["Kannaland", "Hessequa", "Mossel Bay", "George", "Oudtshoorn", "Bitou", "Knysna"];
    categories["Overberg District Municipality"] = ["Theewaterskloof", "Overstrand Cape", "Agulhas", "Swellendam"];
    categories["West Coast District Municipality"] = ["Matzikama", "Cederberg", "Bergrivier", "Saldanha Bay", "Swartland"];
    categories["City of Cape Town Metropolitan"] = ["City of Cape Town"];

    categories["Eastern Cape"] = ["Alfred Nzo District Municipality", "Amathole District Municipality", "Chris Hani District Municipality", "Joe Gqabi District Municipality", "OR Tambo District Municipality", "Sarah Baartman District Municipality", "Nelson Mandela Bay Metropolitan", "Buffalo City Metropolitan"]; // Level 2
    categories["Alfred Nzo District Municipality"] = ["Matatiele", "Mbizana", "Ntabankulu", "Umzimvubu"]; // Level 3 only
    categories["Amathole District Municipality"] = ["Mnquma", "Mbhashe", "Amahlathi", "Ngqushwa", "Great Kei", "Raymond Mhlaba"]; // Level 3 only
    categories["Chris Hani District Municipality"] = ["Intsika Yethu", "Enoch Mgijima", "Engcobo", "Emalahleni", "Inxuba Yethemba", "Sakhisizwe"];
    categories["Joe Gqabi District Municipality"] = ["Elundini", "Senqu", "Walter Sisulu"]; // Level 3 only
    categories["OR Tambo District Municipality"] = ["King Sabata Dalindyebo Local Municipality", "Nyandeni", "Ngquza Hill", "Mhlontlo", "Port St Johns"]; // Level 3 only
    categories["Sarah Baartman District Municipality"] = ["Blue Crane Route", "Dr Beyers Naudé", "Kou-Kamma", "Kouga", "Makana", "Ndlambe", "Sunday's River Valley"];
    categories["Buffalo City Metropolitan"] = ["Buffalo City"];
    categories["Nelson Mandela Bay Metropolitan"] = ["Nelson Mandela Bay Municipality"];

    categories["Northern Cape"] = ["Frances Baard District Municipality", "John Taolo Gaetsewe District Municipality", "Namakwa District Municipality", "Pixley ka Seme District Municipality", "ZF Mgcawu District Municipality"];
    categories["Frances Baard District Municipality"] = ["Sol Plaatje", "Dikgatlong", "Magareng", "Phokwane"];
    categories["John Taolo Gaetsewe District Municipality"] = ["Joe Morolong", "Ga-Segonyana", "Gamagara"];
    categories["Namakwa District Municipality"] = ["Richtersveld", "Nama Khoi", "Kamiesberg", "Hantam", "Karoo Hoogland", "Khâi-Ma"];
    categories["Pixley ka Seme District Municipality"] = ["Ubuntu", "Umsobomvu", "Emthanjeni", "Kareeberg", "Renosterberg", "Thembelihle", "Siyathemba", "Siyancuma"];
    categories["ZF Mgcawu District Municipality"] = ["Dawid Kruiper", "Kai ǃGarib", "ǃKheis", "Tsantsabane", "Kgatelopele"];

    categories["North West"] = ["Bojanala Platinum", "Ngaka Modiri Molema", "Dr Ruth Segomotsi Mompati", "Dr Kenneth Kaunda"];
    categories["Bojanala Platinum"] = ["Moretele", "Madibeng", "Rustenburg", "Kgetlengrivier", "Moses Kotane"];
    categories["Ngaka Modiri Molema"] = ["Ratlou", "Tswaing", "Mahikeng", "Ditsobotla", "Ramotshere"];
    categories["Dr Ruth Segomotsi Mompati"] = ["Naledi", "Mamusa", "Greater Taung", "Lekwa-Teemane", "Kagisano-Molopo"];
    categories["Dr Kenneth Kaunda"] = ["JB Marks", "Matlosana", "Maquassi Hills"];

    categories["Free State"] = ["Mangaung Metropolitan", "Fezile Dabi District", "Lejweleputswa District", "Thabo Mofutsanyana District", "Xhariep District"];
    categories["Mangaung Metropolitan"] = ["Mangaung Metropolitan Municipality"];
    categories["Fezile Dabi District"] = ["Moqhaka", "Ngwathe", "Metsimaholo", "Mafube"];
    categories["Lejweleputswa District"] = ["Masilonyana", "Tokologo", "Tswelopele", "Matjhabeng", "Nala"];
    categories["Thabo Mofutsanyana District"] = ["Setsoto", "Dihlabeng", "Nketoana", "Maluti-a-Phofung", "Phumelela", "Mantsopa"];
    categories["Xhariep District"] = ["Letsemeng", "Kopanong", "Mohokare", "Naledi"];

    categories["Kwazulu Natal"] = ["Amajuba District Municipality", "Harry Gwala District Municipality", "iLembe District Municipality", "King Cetshwayo District Municipality", "Ugu District Municipality", "uMgungundlovu District Municipality", "uMkhanyakude District Municipality", "uMzinyathi District Municipality", "uThukela District Municipality", "Zululand District Municipality", "eThekwini Metropolitan"];
    categories["Amajuba District Municipality"] = ["Dannhauser", "eMadlangeni", "Newcastle"];
    categories["Harry Gwala District Municipality"] = ["Dr Nkosazana Dlamini-Zuma", "Greater Kokstad", "Ubuhlebezwe", "Umzimkhulu"];
    categories["iLembe District Municipality"] = ["KwaDukuza", "Mandeni", "Maphumulo", "Ndwedwe"];
    categories["King Cetshwayo District Municipality"] = ["City of uMhlathuze", "Mthonjaneni", "Nkandla", "uMfolozi", "uMlalazi"];
    categories["Ugu District Municipality"] = ["Ray Nkonyeni", "uMdoni", "uMuziwabantu", "Umzumbe", "Vulamehlo"];
    categories["uMgungundlovu District Municipality"] = ["Impendle", "Mkhambathini", "Mpofana", "Msunduzi", "Richmond", "uMngeni", "uMshwathi"];
    categories["uMkhanyakude District Municipality"] = ["Big Five Hlabisa", "Jozini", "Mtubatuba", "uMhlabuyalingana"];
    categories["uMzinyathi District Municipality"] = ["Endumeni", "Msinga", "Nquthu", "Umvoti"];
    categories["uThukela District Municipality"] = ["Alfred Duma", "Inkosi Langalibalele", "Okhahlamba"];
    categories["Zululand District Municipality"] = ["Abaqulusi", "eDumbe", "Nongoma", "Ulundi", "uPhongolo"];
    categories["eThekwini Metropolitan"] = ["eThekwini Metropolitan Municipality"];

    categories["Gauteng"] = ["City of Johannesburg Metropolitan Municipality", "City of Tshwane Metropolitan Municipality", "Ekurhuleni Metropolitan Municipality", "Sedibeng District Municipality", "West Rand District Municipality"];
    categories["City of Johannesburg Metropolitan Municipality"] = ["Johannesburg"];
    categories["City of Tshwane Metropolitan Municipality"] = ["Tshwane"];
    categories["Ekurhuleni Metropolitan Municipality"] = ["Ekurhuleni"];
    categories["Sedibeng District Municipality"] = ["Emfuleni", "Lesedi", "Midvaal"];
    categories["West Rand District Municipality"] = ["Merafong City", "Mogale City", "Rand West City"];

    categories["Limpopo"] = ["Capricorn District Municipality", "Mopani District Municipality", "Sekhukhune District Municipality", "Vhembe District Municipality", "Waterberg District Municipality"];
    categories["Capricorn District Municipality"] = ["Blouberg", "Lepelle-Nkumpi", "Molemole", "Polokwane"];
    categories["Mopani District Municipality"] = ["Ba-Phalaborwa", "Greater Giyani", "Greater Letaba", "Greater Tzaneen", "Maruleng"];
    categories["Sekhukhune District Municipality"] = ["Elias Motsoaledi", "Ephraim Mogale", "Fetakgomo/Tubatse", "Makhuduthamaga"];
    categories["Vhembe District Municipality"] = ["Collins Chabane", "Makhado", "Musina", "Thulamela"];
    categories["Waterberg District Municipality"] = ["Bela-Bela", "Lephalale", "Mogalakwena", "Mookgophong/Modimolle", "Thabazimbi"];

    categories["Mpumalanga"] = ["Gert Sibande", "Nkangala", "Ehlanzeni"];
    categories["Gert Sibande"] = ["Albert Luthuli", "Msukaligwa", "Mkhondo", "Pixley ka Seme", "Lekwa", "Dipaleseng", "Govan Mbeki"];
    categories["Nkangala"] = ["Victor Khanye", "Emalahleni", "Steve Tshwete", "Emakhazeni", "Thembisile Hani", "Dr JS Moroka"];
    categories["Ehlanzeni"] = ["Thaba Chweu", "Mbombela", "Umjindi", "Nkomazi", "Bushbuckridge"];


    var nLists = 3; // number of lists in the set

    function fillSelect(currCat, currList) {
      var step = Number(currList.name.replace(/\D/g, ""));
      for (i = step; i < nLists + 1; i++) {
        document.forms[0]['List' + i].length = 1;
        document.forms[0]['List' + i].selectedIndex = 0;
        document.getElementById('List' + i).style.display = 'none';
        var firstP = document.getElementById('List' + i);
      }
      var nCat = categories[currCat];
      if (nCat != undefined) {
        document.getElementById('List' + step).style.display = 'inline';
        for (each in nCat) {
          var nOption = document.createElement('option');
          var nData = document.createTextNode(nCat[each]);
          nOption.setAttribute('value', nCat[each]);
          nOption.appendChild(nData);
          currList.appendChild(nOption);
        }
      }
    }

    function getValues() {
      var str = '';
      str += document.getElementById('List1').value + '\n';
      for (var i = 2; i <= nLists; i++) {
        if (document.getElementById('List' + i).selectedIndex != 0) {
          str += document.getElementById('List' + i).value + '\n';
        }
      }
      alert(str);
    }

    function init() {
      fillSelect('startList', document.forms[0]['List1']);
    }

    navigator.appName == "Microsoft Internet Explorer" ?
      attachEvent('onload', init, false) :
      addEventListener('load', init, false);
  </script>
</head>

<body class="u-body">
  <header class="u-clearfix u-header u-image u-header" id="sec-0e3f" data-image-width="2407" data-image-height="586">
    <div class="u-clearfix u-sheet u-sheet-1">
      <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
        <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0;">
          <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
            <svg>
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
            </svg>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <defs>
                <symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;">
                  <rect y="1" width="16" height="2"></rect>
                  <rect y="7" width="16" height="2"></rect>
                  <rect y="13" width="16" height="2"></rect>
                </symbol>
              </defs>
            </svg>
          </a>
        </div>
        <div class="u-custom-menu u-nav-container">
          <ul class="u-nav u-unstyled u-nav-1">
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="index.php" style="padding: 10px 32px;">Home</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="about.php" style="padding: 10px 32px;">About Communities Matter</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="survey.php" style="padding: 10px 32px;">Survey</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="contact.php" style="padding: 10px 32px;">Contact Us</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="register.php" style="padding: 10px 32px;">Register</a>
            </li>
          </ul>
        </div>
        <div class="u-custom-menu u-nav-container-collapse">
          <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
            <div class="u-menu-close"></div>
            <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
              <li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php" style="padding: 10px 32px;">Home</a>
              </li>
              <li class="u-nav-item"><a class="u-button-style u-nav-link" href="about.php" style="padding: 10px 32px;">About Communities Matter</a>
              </li>
              <li class="u-nav-item"><a class="u-button-style u-nav-link" href="survey.php" style="padding: 10px 32px;">Survey</a>
              </li>
              <li class="u-nav-item"><a class="u-button-style u-nav-link" href="contact.php" style="padding: 10px 32px;">Contact Us</a>
              </li>
              <li class="u-nav-item"><a class="u-button-style u-nav-link" href="register.php" style="padding: 10px 32px;">Register</a>
              </li>
            </ul>
          </div>
          <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
        </div>
      </nav>
    </div>
  </header>


  <section class="u-align-center u-clearfix u-section-1" id="carousel_2125">

   <div class="container">
      <a href="#" class="active">
          <?php  if(!empty($message)){ ?>
            <span style="color:red;">
                <?php echo $message; ?>
            <?php  } ?>
            </span>
        <span style="color:green;">
            <?php echo $success; ?>
        </span>
      </a>
   </div>

    <div class="u-clearfix u-sheet u-sheet-1">

<img class="u-expand-resize u-image u-image-1" src="images/diversegroupofcharacters.png" width="1120" height="370">

      <div class="u-form u-form-1">
        <div align="center">
          <h3 class="u-align-center u-text u-text-default u-text-3">
            <span style="font-weight: normal;">Registering Mobiliser Details</span>
          </h3>
        </div>


    <form action="api/users/create.php" method="post" >


        <div class="u-form-email u-form-group u-form-partition-factor-2 u-form-group-1">
          <label for="idnumber">Identification Number</label>
            <input class="u-grey-5 u-input u-input-rectangle" class="form-control" type="text" name="idnumber" id="idnumber" placeholder="Please enter your unique identification number" required>
        </div>


        <div class="u-form-email u-form-group u-form-partition-factor-2 u-form-group-1">
          <label for="password">Password</label>
          <input class="u-grey-5 u-input u-input-rectangle" type="password" class="form-control" id="password" name="password" placeholder="Please enter alternative contact person"  required>
        </div>


        <div class="row">
          <div class="col-sm-12" align="center">
            <p> 
              <input type="submit" value="Register" name="action" id="action" class="btn btn-primary"> 
            </p>
          </div>                     
        </div>

        </form>


      </div>
    </div>
  </section>


    <footer class="u-align-center u-clearfix u-footer u-valign-bottom u-white u-footer" id="sec-96c0"><img class="u-expand-resize u-expanded-width u-image u-image-1" src="images/Footerredbandv1.png" data-image-width="2998" data-image-height="262"></footer>
</body>

</html>