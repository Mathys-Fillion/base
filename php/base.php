<?php

    // Définit le fuseau horaire par défaut
    date_default_timezone_set('Europe/Paris');

    // Date courante
    print(date("l jS F Y") . "<br>");
    print(date("D M y") . "<br>");
    print(date("m.d.Y") . "<br>");
    print(date("j, n, y") . "<br>");
    print("<br>");

    // Heure
    print(date("G:i e") . "<br>");
    print(date("g:i A") . "<br>");
    print(date("H:i:s") . "<br>");
    print(date("h:i a") . "<br>");
    print("<br>");

?>

    <form action="" method="post">
    Votre nom :
    <input type="text" name="YourName" required><br>
    Prix du repas :
    <input type="text" name="CostOfLunch" required><br>
    Nombre de jours :
    <input type="text" name="DaysBuyingLunch" required><br>
    <input type="submit" name="Submit">
    </form>

<?php

    // Variable et formulaire
    if(isset($_POST['Submit'])) {
        $YourName = $_POST[YourName];
        $CostOfLunch = $_POST[CostOfLunch];
        $DaysBuyingLunch = $_POST[DaysBuyingLunch];
        print("$YourName, tu nous dois ");
        print($CostOfLunch * $DaysBuyingLunch);
        print(" francs pour cette semaine.<br>");
    }
    print("<br>");

    // Message conditionnel
    $Today = date("l");
    if($Today == "Friday") {
        print("Thank Goodness It's Friday !<br>");
    }
    else {
        print("Today is $Today.<br>");
    }
    print("<br>");

    // Boucle
    for($count = 1; $count <= 3; $count++) {
        print("<b>$count</b> I'm good enough, ");
        print("I'm smart enough, ");
        print("and, doggone it, people like me !<br>");
    }
    print("<br>");

    // Type de conversion
    print("<b>Using settype</b><br>");
    $AverageTemperature = "60.5 degrees";
    print("String : $AverageTemperature <br>");
    settype($AverageTemperature, "double");
    print("Double : $AverageTemperature <br>");
    settype($AverageTemperature, "integer");
    print("Integer : $AverageTemperature <br>");
    settype($AverageTemperature, "string");
    print("String : $AverageTemperature <br>");
    print("<br>");

    print("<b>Using strval, doubleval and intval</b><br>");
    $AverageTemperature = "60.5 degrees";
    print("String : ");
    print(strval($AverageTemperature));
    print("<br>");
    print("Double : ");
    print(doubleval($AverageTemperature));
    print("<br>");
    print("Integer : ");
    print(intval($AverageTemperature));
    print("<br>");
    print("String : ");
    print(strval($AverageTemperature));
    print("<br>");
    print("<br>");

    // Cibles pour les variables
    function printCity($NameOfCity) {
        print("The city is $NameOfCity.<br>");
    }
    function Calfornia() {
        $capital = "Sacramento";
        printCity($capital);
    }
    function Utah() {
        $capital = "Salt Lake City";
        printCity($capital);
    }
    function Nation() {
        global $capital;
        printCity($capital);
    }
    $capital = "Washington D.C";
    Nation();
    Calfornia();
    Utah();
    Nation();
    print("<br>");

    // Variable statique
    function useColor() {
        /*se rappeler de la dernière couleur utilisée */
        static $ColorValue;
        /*choisir la couleur suivante */
        if($ColorValue == "#00FF00") {
            $ColorValue = "#CCFFCC";
        }
        else {
            $ColorValue = "#00FF00";
        
        }
        return($ColorValue);
    }
    print "<table width=\"300\">\n";
    for($count = 0; $count < 10; $count++) {
        /*prendre la couleur de la ligne */
        $RowColor = useColor();
        /*Produire le code HTML de la ligne
        pour obtenir la couleur de fond */
        print "<tr><td bgcolor=\"$RowColor\">";
        print "Row number $count</td></tr>\n";
    }
    print "</table>\n";
    print("<br>");

    // Constante
    define("STANDARD_GREETING", "Hello, World !");
    print(STANDARD_GREETING);
    print("<br>");
    print("<br>");


    // Opérateur de concaténation
    $a = "Je ";
    $b = $a . "suis en deux variables<br>";
    print($b);
    $a = "Je ";
    $a .= "suis en une seul variable<br>";
    print($a);
    print("<br>");

    // Opérateur d'assignement
    /*Cet assignement */
    $Count = $Count + 5;
    /*est le même que le suivant */
    $Count += 5;

    // Conversion des chaînes en nombres
    print((1 + "1") . "<br>\n");
    print((1 + " 2") . "<br>\n");
    print((1 + "3extra stuff") . "<br>\n");
    print((1 + "4.5e6") . "<br>\n");
    print((1 + "a7") . "<br>\n");
    print("<br>");

    // Priorité d'exécution des parenthèses
    print ((3 + 2 * 7) . "<br>\n");
    print(((3 + 2) * 7) . "<br>\n");
    print("<br>");

    // L'opérateur "?"
    /*(Expression conditionnelle) ? (valeur si vrai) : (valeur si faux)*/
    print( ($test >= 7) ? "c'est vrai" : "c'est faux");
    print("<br>");
    print("<br>");

    // Incrémentation d'une variable
    $VisitorsToday = 1;
    /*prints 1 */
    print($VisitorsToday++);
    /*VisitorsToday is now 2 */
    print("<br>\n");
    /*prints 3 */
    print(++$VisitorsToday);
    print("<br>");
    print("<br>");

    // Instruction if-elseif-else
    /*if(expression1) {
        Ce bloc est exécuté si l'expression1 est vraie (true).
    }
    elseif(expression2) {
        Ce bloc est exécuté si l'expresion1 est fausse (false) et 
        l'expression2 est vrai (true).
    }
    else {
        Ce bloc est exécuté si l'expression1 et l'expression2 
        sont fausses (false).
    }*/
    if($name == "") {
        print("You have no name.");
    }
    elseif(($name == "leon") OR ($name == "Leon")) {
        print("Hello, Leon !");
    }
    else {
        print("Your name is '$name'.");
    }
    print("<br>");
    print("<br>");

    // Instruction if
    if(date("D") == "Mon") {
        print("Remember to put the trash out.");
    }
    print("<br>");
    print("<br>");

    // La date en allemand
    $english_Day = date("l");
    if($english_Day == "Monday") {
        $deutsch_Day = "Montag";
    }
    elseif($english_Day == "Tuesday") {
        $deutsch_Day = "Dienstag";
    }
    elseif($english_Day == "Wednesday") {
        $deutsch_Day = "Mittwoch";
    }
    elseif($english_Day == "Thursday") {
        $deutsch_Day = "Donnerstag";
    }
    elseif($english_Day == "Friday") {
        $deutsch_Day = "Freitag";
    }
    elseif($english_Day == "Saturday") {
        $deutsch_Day = "Samstag";
    }
    else {
        // On conclut que c'est dimanche (Sunday)
        $deutsch_Day = "Sonntag";
    }
    print("<h4>German Lesson : Day of the Week</h4>\n");
    print("In English : <b>" . date("l") . "</b>.<br>\n");
    print("In German : <b>$deutsch_Day</b>.<br>\n");
    print("<br>");

    // Instruction switch
    /*switch(root-expression) {
        case case-expression:
        default:
    }*/
    $english_Day = date("l");
    switch($english_Day) {
        case "Monday":
            $spanish_Day = "Lunes";
            break;
        case "Tuesday":
            $spanish_Day = "Martes";
            break;
        case "Wednesday":
            $spanish_Day = "Miércoles";
            break;
        case "Thursday":
            $spanish_Day = "Jueves";
            break;
        case "Friday":
            $spanish_Day = "Viernes";
            break;
        case "Saturday":
            $spanish_Day = "Sábado";
            break;
        default:
            // It must be Sunday
            $spanish_Day = "Domingo";
    }
    print("<h4>Spanish Lesson : Day of the Week</h4>\n");
    print("In English : <b>" . date("l") . "</b>.<br>\n");
    print("In Spanish : <b>$spanish_Day</b>.<br>\n");
    print("<br>");
    
    // Instruction while
    /*while(expression) {
        Zéro ou plusieurs instructions
    }*/
    $currentDate = time();
    print("Days left before Friday :\n");
    print("<ol>\n");
    while(date("l", $currentDate) != "Friday") {
        print("<li>" . date("l", $currentDate) . "\n");
        $currentDate += (60 * 60 * 24);
    
    }
    print("</ol>\n");

    // Instruction break
    while(true) {
        print("This line is printed.<br>");
        break;
        print("This line will never be printed.");
    }
    print("<br>");

    // Instruction do...while
    $currentDate = time();
    print("Days left before Friday :\n");
    print("<ol>\n");
    do {
        print("<li>" . date("l", $currentDate) . "\n");
        $currentDate += (60 * 60 * 24);
    }
    while(date("l", $currentDate) != "Friday");
    print("</ol>\n");

    // Instruction for
    /*for(initialisation; expression; incrémentation) {
        Zéro ou plusieurs instructions
    }*/
    for($counter = 1; $counter <= 10; $counter++) {
        print("Compteur : $counter<br>\n");
    }
    print("<br>");

    print("Day left before Friday :\n");
    print("<ol>\n");
    for($currentDate = date("U");
        date("l", $currentDate) != "Friday";
        $currentDate += (60 * 60 * 24)) {
            print("<li>" . date("l", $currentDate) . "\n");
        }
    print("</ol>\n");

    // Instruction exit
    print("This line is printed.<br>");
    print("<br>");
    /*exit;
    print("This line will never be printed.");*/

    // Fonction standard
    function printBold($inputText) {
        print("<b>" . $inputText . "</b>");
    }
    print("This Line is not Bold<br>");
    printBold("This Line is Bold");
    print("<br>");
    print("This Line is not Bold<br>");

    print("<br>");

    // Instruction "return"
    function makeBold($inputText) {
        $boldedText = "<b>";
        $boldedText .= $inputText;
        $boldedText .= "</b>";
        return($boldedText);
    }
    print("This Line is not Bold<br>");
    print(makeBold("This Line is Bold") . "<br>");
    print("This Line is not Bold<br>");

    print("<br>");

    // Argument par référence
    function stripCommas(&$inputString) {
        $inputString =
        str_replace(",", "", $inputString);
    }
    $myNumber = "10,000";
    stripCommas($myNumber);
    print($myNumber);
    print("<br>");

    print("<br>");

    // Arguments avec valeurs par défaut
    function printColored($Text, $Color="red") {
        print("<font color=\"$Color\">$Text</font>");
    }
    printColored("Voici un texte rouge");
    print("<br>");
    printColored("Voici un texte bleu", "blue");
    print("<br>");

    print("<br>");

    // Récursivité
    function checkInteger($Number) {
        if($Number > 1) {
            /*Un entier moins de 1 est encore un entier */
            return(checkInteger($Number-1));
        }
        elseif($Number < 0) {
            /*Les nombres sont symétriques, donc        */
            /*vérifier leur signe (plus ou moins)       */
            return(checkInteger((-1)*$Number-1));
        }
        else {
            if(($Number > 0) AND ($Number < 1)) {
                return("no");
            }
            else {
                /*0 et 1 sont des        */
                /*entiers par définition */
                return("yes");
            }
        }
    }
    print("Is 0 an integer ? " .
        checkInteger(0) . "<br>");
    print("Is 7 an integer ? " .
        checkInteger(7) . "<br>");
    print("And 3.5 ? " . checkInteger(3.5) . "<br>");
    print("What about -5 ? " . checkInteger(-5) . "<br>");
    print("And -9.2 ? " . checkInteger(-9.2) . "<br>");

    print("<br>");

    // Appel dynamique de fonction
    function write($text) {
        print($text);
    }
    function writeBold($text) {
        print("<b>$text</b>");
    }
    $myFunction = "write";
    $myFunction("Hello !");
    print("<br>");
    $myFunction = "writeBold";
    $myFunction("Goodbye !");
    print("<br>");

    print("<br>");

    // Array
    $Capitals = array();
    $Capitals[0] = "Washington D.C.";
    $Capitals[1] = "Paris";
    $Capitals[2] = "London";
    $Capitals[3] = "Dublin";
    print("Léon vit à $Capitals[3].<br>\n");
    print("<br>");

    // Indexation automatique
    $Cities[] = "San Francisco";
    $Cities[] = "Los Angeles";
    $Cities[] = "New York";
    $Cities[] = "Martinez";
    $indexLimit = count($Cities);
    for($index=0; $index < $indexLimit; $index++) {
        print("City $index is $Cities[$index]. <br>\n");
    }
    print("<br>");

    // Indexation avec des chaînes
    $UserInfo["Name"] = "Leon Atkinson";
    $UserInfo["Location"] = "Martinez, California";
    $UserInfo["Occupation"] = "Web Engineer";
    for(reset($UserInfo);
        $key = key($UserInfo);
        next($UserInfo)) {
            $value = pos($UserInfo);
            print("$key is $value.<br>\n");
        }
    print("<br>");
    
    // Initialisation d'un tableau
    $joursDeLaSemaine = array( 'lundi', 'mardi', 'mercredi', 'jeudi', 
    'vendredi', 'samedi', 'dimanche');
    $monthName = array(1=>"January", "Februrary", "March", "April", "May", "June", 
    "July", "August", "September", "October", "November", "December");
    print("Le premier jour est $joursDeLaSemaine[0]<br>\n");
    print("Month 5 is $monthName[5]<br>\n");
    print("<br>");

    // Correspondance "clé-valeur"
    $monthNames = array(1=>"January", "Februrary", "March", "April", "May", "June", 
    "July", "August", "September", "October", "November", "December",
    "Jan"=>"January", "Feb"=>"February", "Mar"=>"March", "Apr"=>"April",
    "May"=>"May", "Jun"=>"June", "Jul"=>"July", "Aug"=>"August",
    "Sep"=>"September", "Oct"=>"October", "Nov"=>"November", "Dec"=>"December",
    "January"=>"January", "Februray"=>"February", "March"=>"March", "April"=>"April",
    "May"=>"May", "June"=>"June", "July"=>"July", "August"=>"August",
    "September"=>"September", "October"=>"October", "November"=>"November", "December"=>"December");
    print("Month 5 is " . $monthNames[5] . "<br>\n");
    print("Month Aug is " . $monthNames["Aug"] . "<br>\n");
    print("Month June is " . $monthNames["June"] . "<br>\n");
    print("<br>");

    // Tableau multidimensionnel
    $Citie = array(
        "California"=>array(
            "Martinez",
            "San Fransisco",
            "Los Angeles"
        ),
        "New York"=>array(
            "New York",
            "Buffalo"
        )
    );
    print($Citie["California"][1]);
    print("<br>");
    print("<br>");

    // Class

    /*class Nom_de_la_classe {
        [var Déclaration d'une varaible]
        [Déclaration d'une fonction]
    }*/

    /* Définir une classe pour suivre les utilisateurs */
    class user {
        /* propriétés */
        var $name;
        var $password;
        var $last_login;

        /* méthodes */

        /* Paramétrer toutes les propriétés */
        function init($inputName, $inputPassword) {
            $this->name = $inputName;
            $this->password = $inputPassword;
            $this->last_login = time();
        }

        /* Prendre la date de la dernière connexion */
        function getLastLogin() {
            return(Date("M d Y", $this->last_login));
        }
    }

    /* Création et initialisation d'une instance */
    $currentUser = new user;
    $currentUser->init("Leon", "sdf123");

    /* Prendre la date de la dernière connexion */
    print($currentUser->getLastLogin());
    print("<br>\n");

    /* Afficher le nom de l'utilisateur */
    print($currentUser->name);
    print("<br>\n");
    print("<br>");

    // Création d'une table de multiplication

    print("<table border=\"1\">\n"); /* Début de la table */

    for($Row = 1; $Row <= 12; $Row++) {
        print("<tr>\n"); /* Début de la rangée */

        //Création de chaque colonne
        for($Column = 1; $Column <= 12; $Column++) {
            print("<td>");
            print($Row * $Column);
            print("</td>");
        }

        print("</tr>\n"); /* Fin de la rangée */
    }

    print("</table>\n"); /* Fin de la table */
    print("<br>");

    // Récupérer les données d'un formulaire

    print("<html>\n");

    /* Si la page est affichée pour la première fois on utilise le blanc */
    if (isset($_POST['submit'])) {
        $inputColor = $_POST[inputColor]; 
    } else {
        $inputColor = "FFFFFF";
    }

    /* On insère la couleur d'arrière-plan dans la balise body */
    print("<body bgcolor=\"#$inputColor\">\n");

    /* Début du formulaire, la page s'appelle elle-même */
    print("<form action=\"\" method=\"post\">\n");

    /* Prendre la couleur */
    print("<b>Enter HTML color :</b> ");
    print("<input ");
    print("type=\"text\" ");
    print("name=\"inputColor\" ");
    print("value=\"$inputColor\">\n");

    /* Construirele bouton Submit */
    print("<input ");
    print("type=\"submit\" ");
    print("name=\"submit\" ");
    print("value=\"Try It\">\n");

    print("</form>\n");

    print("</body\n");
    print("</html>\n");
    print("<br>");

    // Transférer un fichier

    /* Vérifier la présence du fichier à transférer */
    if(isset($Donnees)) {
        unlink($Donnees);
        print("Local File : $Donnees <br>\n");
        print("Name : $Donnees_name <br>\n");
        print("Size : $Donnees_size <br>\n");
        print("Type : $Donnees_type <br>\n");
        print("<hr>\n");
    }

?>

    <form enctype="multipart/form-data"
        action="" method="post">
    <input type="hidden" name="max_file_size" value="4096">
    <input name="Donnees" type="file">
    <input type="submit" value="Envoyer">
    </form>

<?php

    // Fichier incluant un autre fichier
    include("array.php"); // need only the array
    print("Month 5 is " . $monthNames[5] . "<br>\n");
    print("Month Aug is " . $monthNames["Aug"] . "<br>\n");
    print("Month June is " . $monthNames["June"] . "<br>\n");
    print("<br>");

    // Lecture et écriture des fichiers
    /* Ouvrir le fichier pour une écriture */
    $myFile = fopen("myFile.txt", "w");
    /* Vérifier le succès de l'ouverture */
    if(!($myFile)) {
        print("Error : ");
        print("'myFile.txt' could not be created\n");
        exit;
    }

    /* Ecrire quelques lignes vers le fichier */
    fputs($myFile, " Save this line for later\n");
    fputs($myFile, " Save this line too\n");
    fclose($myFile); /* fermer le fichier */

    /* Ouvrir le fichier pour lecture */
    $myFile = fopen("myFile.txt", "r");
    /* Vérifier le succès de l'ouverture */
    if(!($myFile)) {
        print("Error : ");
        print("'myFile.txt' could not be read\n");
        exit;
    }
    while(!feof($myFile)) {
        /* Lire une ligne du fichier */
        $myLine = fgets($myFile, 255);
        print("$myLine <br>\n");
    }
    fclose($myFile); /* Fermer le fichier */

?>