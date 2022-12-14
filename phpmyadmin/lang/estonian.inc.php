<?php
/* $Id: estonian.inc.php,v 1.9 2002/04/03 18:47:55 lem9 Exp $ */

$charset = 'iso-8859-1';
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
$byteUnits = array('Baiti', 'KB', 'MB', 'GB');

$day_of_week = array('P?h', 'Esm', 'Tei', 'Kol', 'Nel', 'Ree', 'Lau');
$month = array('Jan', 'Veb', 'M?r', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Det');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d.%m.%Y kell %H:%M:%S';


$strAccessDenied = 'Ligip??s keelatud';
$strAction = 'Tegevus';
$strAddDeleteColumn = 'Lisa/Kustuta v?lja veerud';
$strAddDeleteRow = 'Lisa/Kustuta kriteeriumirida';
$strAddNewField = 'Lisa uus v?li';
$strAddPriv = 'Lisa uus privileeg';
$strAddPrivMessage = 'Te lisasite uue privileegi.';
$strAddSearchConditions = 'Lisa otsinguparameetrid ("where" lause sisu):';
$strAddToIndex = 'Lisa indeksisse &nbsp;%s&nbsp;rida(ead)';
$strAddUser = 'Lisa uus kasutaja';
$strAddUserMessage = 'Te lisasite uue kasutaja.';
$strAffectedRows = 'M?jutatud read:';
$strAfter = 'Peale %s';
$strAfterInsertBack = 'Mine eelmisele lehele tagasi';
$strAfterInsertNewInsert = 'Lisa j?rgmine uus rida';
$strAll = 'K?ik';
$strAlterOrderBy = 'Muuda tabeli sorteeringut';
$strAnalyzeTable = 'Anal??si tabelit';
$strAnd = 'ja';
$strAnIndex = 'Indeks lisati %s';
$strAny = 'k?ik';
$strAnyColumn = 'K?ik v?ljad';
$strAnyDatabase = 'K?ik andmebaasid';
$strAnyHost = 'K?ik masinad';
$strAnyTable = 'K?ik tabelid';
$strAnyUser = 'K?ik kasutajad';
$strAPrimaryKey = 'Primaarne v?ti lisati %s';
$strAscending = 'Kasvav';
$strAtBeginningOfTable = 'Tabeli algusesse';
$strAtEndOfTable = 'Tabeli l?ppu';
$strAttr = 'Parameetrid';

$strBack = 'Tagasi';
$strBinary = 'Binaarne';
$strBinaryDoNotEdit = 'Binaarne - ?rge muutke';
$strBookmarkDeleted = 'M?rgistus kustutati.';
$strBookmarkLabel = 'Nimetus';
$strBookmarkQuery = 'M?rgistatud SQL p?ring';
$strBookmarkThis = 'M?rgista see SQL p?ring';
$strBookmarkView = 'Vaata ainult';
$strBrowse = 'Vaata';
$strBzip = '"bzipitud"';

$strCantLoadMySQL = 'ei suutnud lugeda MySql laiendit,<br />palun kontrollige PHP konfiguratsiooni.';
$strCantRenameIdxToPrimary = 'Ei suuda muuta indeksit PRIMAARSEKS!';
$strCardinality = 'Kasulikkus';
$strCarriage = 'Reavahetus: \\r';
$strChange = 'Muuda';
$strChangePassword = 'Muuda parooli';
$strCheckAll = 'M?rgista k?ik';
$strCheckDbPriv = 'Vaata andmebaasi privileege';
$strCheckTable = 'Kontrolli tabelit';
$strColumn = 'V?li';
$strColumnNames = 'V?ljade nimed';
$strCompleteInserts = 'T?ispikk INSERT';
$strConfirm = 'Kas Te t?esti tahate seda teha?';
$strCookiesRequired = 'K?psised(cookies) peavad alates sellest momendist lubatud olema.';
$strCopyTable = 'Kopeeri tabel (andmebaas<b>.</b>tabel):';
$strCopyTableOK = 'Tabel %s on kopeeritud andmebaasi %s.';
$strCreate = 'Loo';
$strCreateIndex = 'Loo indeks &nbsp;%s&nbsp;v?ljadest';
$strCreateIndexTopic = 'Loo uus indeks';
$strCreateNewDatabase = 'Loo uus andmebaas';
$strCreateNewTable = 'Loo uus tabel andmebaasi %s';
$strCriteria = 'Kriteerium';

$strData = 'Andmed';
$strDatabase = 'Andmebaas ';
$strDatabaseHasBeenDropped = 'Andmebaas %s kustutatud.';
$strDatabases = 'andmebaasid';
$strDatabasesStats = 'Andmebaaside statistika';
$strDatabaseWildcard = 'Andmebaas (l?hendid lubatud):';
$strDataOnly = 'Ainult andmed';
$strDefault = 'Vaikimisi';
$strDelete = 'Kustuta';
$strDeleted = 'Rida kustutatud';
$strDeletedRows = 'Kustuta read:';
$strDeleteFailed = 'Kustutamine eba?nnestus!';
$strDeleteUserMessage = 'Te kustutasite kasutaja %s.';
$strDescending = 'Kahanev';
$strDisplay = 'N?ita';
$strDisplayOrder = 'N?itamise j?rjekord:';
$strDoAQuery = 'Tee "p?ring n?ite j?rgi" (l?hend: "%")';
$strDocu = 'Dokumentatsioon';
$strDoYouReally = 'Kas te t?esti tahate ';
$strDrop = 'Kustuta';
$strDropDB = 'Kustuta andmebaas ';
$strDropTable = 'Kustuta tabel';
$strDumpingData = 'Tabeli andmete salvestamine';
$strDynamic = 'd?naamiline';

$strEdit = 'Muuda';
$strEditPrivileges = 'Muuda privileege';
$strEffective = 'Efektiivne';
$strEmpty = 'T?hjenda';
$strEmptyResultSet = 'MySQL tagastas t?hja tulemuse (s.t. null rida).';
$strEnd = 'L?pp';
$strEnglishPrivileges = ' M?rkus: MySQL privileegide nimed on ingliskeelsed ';
$strError = 'Viga';
$strExtendedInserts = 'Laiendatud lisamised';
$strExtra = 'Ekstra';

$strField = 'V?li';
$strFieldHasBeenDropped = 'V?li %s kustutatud';
$strFields = 'V?ljade arv';
$strFieldsEmpty = ' V?ljade loetelu on t?hi! ';
$strFieldsEnclosedBy = 'V?ljad ?mbritsetud';
$strFieldsEscapedBy = 'V?ljad varjatud';
$strFieldsTerminatedBy = 'V?ljad eraldatud';
$strFixed = 'parandatud';
$strFlushTable = '?htlusta tabelid ("FLUSH")';
$strFormat = 'Formaat';
$strFormEmpty = 'Puuduv v??rtus vormis !';
$strFullText = 'T?istekstid';
$strFunction = 'Funktsioon';

$strGenTime = 'Tegemisaeg';
$strGo = 'Mine';
$strGrants = '?igused';
$strGzip = '"gzipitud"';

$strHasBeenAltered = 'on muudetud.';
$strHasBeenCreated = 'on loodud.';
$strHome = 'Esileht';
$strHomepageOfficial = 'Ametlik phpMyAdmini koduleht';
$strHomepageSourceforge = 'Sourceforge phpMyAdmini allalaadimisleht';
$strHost = 'Masin';
$strHostEmpty = 'Masin on t?hi!';

$strIdxFulltext = 'T?istekst';
$strIfYouWish = 'Kui soovite lugeda ainult m?ningaid tabeli v?lju, sisestage komaga eraldatud v?ljade loetelu.';
$strIgnore = 'Ignoreeri';
$strIndex = 'Indeks';
$strIndexes = 'Indeksid';
$strIndexHasBeenDropped = 'Indeks %s kustutatud';
$strIndexName = 'Indeksi nimi&nbsp;:';
$strIndexType = 'Indeksi t??p&nbsp;:';
$strInsert = 'Lisa';
$strInsertAsNewRow = 'Lisa uue reana';
$strInsertedRows = 'Lisatud read:';
$strInsertNewRow = 'Lisa uus rida';
$strInsertTextfiles = 'Lisa andmed tekstifailist tabelisse';
$strInstructions = 'Juhendid';
$strInUse = 'kasutusel';
$strInvalidName = '"%s" on reserveeritud s?na, te ei saa seda kasutada andmebaasi/tabeli/v?lja nimena.';

$strKeepPass = '?rge muutke parooli';
$strKeyname = 'V?tme nimi';
$strKill = 'Tapa';

$strLength = 'Pikkus';
$strLengthSet = 'Pikkus/V??rtused*';
$strLimitNumRows = 'Ridade arv lehel';
$strLineFeed = 'Real?pp: \\n';
$strLines = 'Read';
$strLinesTerminatedBy = 'Read l?petatud';
$strLocationTextfile = 'tekstifaili asukoht';
$strLogin = 'Sisselogimine';
$strLogout = 'Logi v?lja';
$strLogPassword = 'Parool:';
$strLogUsername = 'Kasutajanimi:';

$strModifications = 'Muutused salvestatud';
$strModify = 'Muuda';
$strModifyIndexTopic = 'Muude indeksit';
$strMoveTable = 'Vii tabel ?le (andmebaas<b>.</b>tabel):';
$strMoveTableOK = 'Tabel %s viidu ?le andmebaasi %s.';
$strMySQLReloaded = 'MySQL uuesti laetud.';
$strMySQLSaid = 'MySQL ?tles: ';
$strMySQLServerProcess = 'MySQL %pma_s1% jookseb %pma_s2%\'is - %pma_s3%';
$strMySQLShowProcess = 'N?ita protsesse';
$strMySQLShowStatus = 'N?ita MySQL-i jooksvat informatsiooni';
$strMySQLShowVars = 'N?ita MySQL s?steemseid muutujaid';

$strName = 'Nimi';
$strNbRecords = 'Ridade arv';
$strNext = 'J?rgmine';
$strNo = 'Ei';
$strNoDatabases = 'Pole andmebaase';
$strNoDropDatabases = '"DROP DATABASE" k?sud keelatud.';
$strNoFrames = 'phpMyAdmin on s?bralikum <b>frame toetava</b> browseriga.';
$strNoIndex = 'Indeksit pole defineeritud!';
$strNoIndexPartsDefined = 'Indeksi osad pole defineeritud!';
$strNoModification = 'Ei muudetud';
$strNone = 'Pole';
$strNoPassword = 'Ilma paroolita';
$strNoPrivileges = 'Ei oma ?htegi privileegi';
$strNoQuery = '?htegi SQL p?ringut!';
$strNoRights = 'Teil pole piisavalt ?igusi, et hetkel siin olla!';
$strNoTablesFound = 'Andmebaasist ei leitud tabeleid.';
$strNotNumber = 'See pole number!';
$strNotValidNumber = ' pole korrektne reanumber!';
$strNoUsersFound = 'Ei leitud ?htegi kasutajat.';
$strNull = 'Null';

$strOftenQuotation = 'Kasuta jutum?rke koguaeg. VALIKULISELT t?hendab, et ainult char ja varchar t??pi v?ljad ?mbritsetakse m??ratud m?rkidega.';
$strOptimizeTable = 'Optimiseeri tabelit';
$strOptionalControls = 'Mittekohustuslik. Kontrollib kuidas kirjutada v?i lugeda erim?rke.';
$strOptionally = 'VALIKULISELT';
$strOr = 'v?i';
$strOverhead = '?lej??v';

$strPartialText = 'L?hendatud tekstid';
$strPassword = 'Parool';
$strPasswordEmpty = 'Parool on t?hi!';
$strPasswordNotSame = 'Paroolid ei ?hti!';
$strPHPVersion = 'PHP versioon';
$strPmaDocumentation = 'phpMyAdmini dokumentatsioon';
$strPmaUriError = '<tt>$cfgPmaAbsoluteUri</tt> konstant peab teie konfiguratsioonifailis m??ratud olema!';
$strPos1 = 'Algus';
$strPrevious = 'Eelmine';
$strPrimary = 'Primaarne';
$strPrimaryKey = 'Primaarne v?ti';
$strPrimaryKeyHasBeenDropped = 'Primaarne v?ti kustutatud';
$strPrimaryKeyName = 'Primaarse v?tme nimi peab olema... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>peab</b> olema ja <b>ainult</b> olema primaarse v?tme nimi!)';
$strPrintView = 'Tr?kivaade';
$strPrivileges = 'Privileegid';
$strProperties = 'Seaded';

$strQBE = 'P?ring n?ite j?rgi';
$strQBEDel = 'Del';
$strQBEIns = 'Ins';
$strQueryOnDb = 'SQL-p?ring andmebaasist <b>%s</b>:';

$strRecords = 'Kirjeid';
$strReferentialIntegrity = 'Kontrolli p?rinevust:'; 
$strReloadFailed = 'MySQL taaslaadimine eba?nnestus.';
$strReloadMySQL = 'Taaslae MySQL';
$strRememberReload = '?rge unustage serverit taaslaadida.';
$strRenameTable = 'Nimeta tabel ?mber';
$strRenameTableOK = 'Tabel %s on ?mber nimetatud %s';
$strRepairTable = 'Paranda tabelit';
$strReplace = 'Asenda';
$strReplaceTable = 'Asenda tabeli andmed failiga';
$strReset = 'T?hista';
$strReType = 'Sisesta uuesti';
$strRevoke = 'V?ta tagasi';
$strRevokeGrant = 'V?ta n?udmine tagasi';
$strRevokeGrantMessage = 'Te v?tsite privileegi andmise %s -le tagasi';
$strRevokeMessage = 'Te v?tsite tagasi privileegid %s-lt';
$strRevokePriv = 'V?tke privileegid';
$strRowLength = 'Rea pikkus';
$strRows = 'Ridu';
$strRowsFrom = 'read alates';
$strRowSize = ' rea suurus ';
$strRowsModeHorizontal = 'horisontaalselt';
$strRowsModeOptions = 'n?ita %s and korda pealkirju iga %s j?rel';
$strRowsModeVertical = 'vertikaalselt';
$strRowsStatistic = 'Rea statistika';
$strRunning = 'jookseb masinas %s';
$strRunQuery = 'Lae p?ring';
$strRunSQLQuery = 'P?ri SQL p?ring(uid) andmebaasist %s';

$strSave = 'Salvesta';
$strSelect = 'Vali';
$strSelectADb = 'Valige andmebaas';
$strSelectAll = 'M?rgista k?ik';
$strSelectFields = 'Vali v?ljad (v?hemalt ?ks):';
$strSelectNumRows = 'p?ringus';
$strSend = 'Salvesta failina';
$strServerChoice = 'Serveri valik';
$strServerVersion = 'Serveri versioon';
$strSetEnumVal = 'Kui v?lja t??p on "enum" v?i "set", palun sisestage v??rtused kasutades j?rgmist paigutust: \'a\',\'b\',\'c\'...<br />Kui te peate lisama kaldkriipsu ("\") v?i ?lakoma ("\'") sinna paigutusse, varjestage see tagurpidi kaldkriipsuga (n?iteks \'\\\\xyz\' v?i \'a\\\'b\').';
$strShow = 'N?ita';
$strShowAll = 'N?ita k?iki';
$strShowCols = 'N?ita v?lju';
$strShowingRecords = 'N?ita ridu';
$strShowPHPInfo = 'N?ita PHP informatsiooni';
$strShowTables = 'N?ita tabeleid';
$strShowThisQuery = ' N?ita p?ringut siin uuesti ';
$strSingly = '(?ksikult)';
$strSize = 'Suurus';
$strSort = 'Sorteeri';
$strSpaceUsage = 'Ruumiv?tt';
$strSQLQuery = 'SQL-p?ring';
$strStartingRecord = 'Algusrida';
$strStatement = 'Parameerid';
$strStrucCSV = 'CSV andmed';
$strStrucData = 'Struktuur ja andmed';
$strStrucDrop = 'Lisa \'drop table\'';
$strStrucExcelCSV = 'CSV Ms Exceli jaoks';
$strStrucOnly = 'Ainult struktuur';
$strSubmit = 'Vali';
$strSuccess = 'Teie SQL p?ring t?ideti edukalt';
$strSum = 'Summa';

$strTable = 'tabel ';
$strTableComments = 'Tabeli kommentaarid';
$strTableEmpty = 'Tabeli nimi on t?hi!';
$strTableHasBeenDropped = 'Tabel %s kustutatud';
$strTableHasBeenEmptied = 'Tabel %s t?hjendatud';
$strTableHasBeenFlushed = 'Tabel %s ?htlustatud';
$strTableMaintenance = 'Tabeli hooldus';
$strTables = '%s tabel(it)';
$strTableStructure = 'Struktuur tabelile';
$strTableType = 'Tabeli t??p';
$strTextAreaLength = ' Oma suuruse t?ttu<br /> v?ib see v?li olla mittemuudetav ';
$strTheContent = 'Teie faili sisu on lisatud.';
$strTheContents = 'Faili sisu asendab valitud tabeli sisu ridades kus on identsed primaarsed v?i unikaalsed v?tmed.';
$strTheTerminator = 'V?ljade eraldaja.';
$strTotal = 'kokku';
$strType = 'T??p';

$strUncheckAll = 'Puhasta k?ik';
$strUnique = 'Unikaalne';
$strUnselectAll = 'Puhasta k?ik';
$strUpdatePrivMessage = 'Te uuendasite privileege %s-l.';
$strUpdateProfile = 'Uuendatav profiil:';
$strUpdateProfileMessage = 'Profiil uuendatud.';
$strUpdateQuery = 'Uuenda p?ringut';
$strUsage = 'Kasutus';
$strUseBackquotes = 'Kasutage tagurpidi kaldkriipse tabelites v?i tabelinimedes';
$strUser = 'Kasutaja';
$strUserEmpty = 'Kasutajanimi on t?hi!';
$strUserName = 'Kasutajanimi';
$strUsers = 'Kasutajad';
$strUseTables = 'Kasuta tabeleid';

$strValue = 'V??rtus';
$strViewDump = 'Vaata tabeli v?ljundit(skeemi)';
$strViewDumpDB = 'Vaata andmebaasi v?ljundit (skeemi)';

$strWelcome = 'Tere tulemast %s';
$strWithChecked = 'Valitud:';
$strWrongUser = 'Vale kasutajanimi/parool. Ligip??d keelatud.';

$strYes = 'Jah';

$strZip = '"zipitud"';

// To translate
?>
