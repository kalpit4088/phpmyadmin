<?php
/* $Id$ */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// abreviatures de Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');
$timespanfmt = '%s dies, %s hores, %s minuts i %s segons';

$day_of_week = array('Diu', 'Dll', 'Dma', 'Dcr', 'Djs', 'Div', 'Dis');
$month = array('Gen', 'Feb', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Oct', 'Nov', 'Dec');
// Veure http://www.php.net/manual/es/function.strftime.php per a definir
// la variable seguent
$datefmt = '%d-%m-%Y a les %H:%M:%S';

$strAbortedClients = 'Avortat';
$strAbsolutePathToDocSqlDir = 'S\'ha d\'entrar el camí absolut en el webserver per el directori de docSQL';
$strAccessDenied = 'Accés denegat';
$strAction = 'Acció';
$strAddDeleteColumn = 'Afegir/esborrar Camps de Columna';
$strAddDeleteRow = 'Afegir/esborrar fila de criteri';
$strAddedColumnComment = 'Afegit comentari per la columna';
$strAddedColumnRelation = 'Afegida relació per la columna';
$strAddNewField = 'Afegir un camp nou';
$strAddPriv = 'Afegir un privilegi nou';
$strAddPrivMessage = 'Has afegit un privilegi nou.';
$strAddPrivilegesOnDb = 'Afegir permissos a la següent base de dades';
$strAddPrivilegesOnTbl = 'Afegir permissos a la segúent taula';
$strAddSearchConditions = 'Afegeix condicions de recerca (cos de la clàusula "where"):';
$strAddToIndex = 'Afegir columna(es) a l\'índex %s&nbsp;';
$strAddUser = 'Afegir un usuari nou';
$strAddUserMessage = 'Has afegit un usuari nou.';
$strAdministration = 'Administració';
$strAffectedRows = 'Files afectades:';
$strAfter = 'Després %s';
$strAfterInsertBack = 'Tornar';
$strAfterInsertNewInsert = 'Inserta un nou registre';
$strAll = 'Tot';
$strAllTableSameWidth = 'Mostrar totes les taules amb la mateixa amplada?';
$strAlterOrderBy = 'Altera la taula i ordena per';
$strAnIndex = 'S\'ha afegit un índex a %s';
$strAnalyzeTable = 'Analitza la taula';
$strAnd = 'I';
$strAny = 'Qualsevol';
$strAnyColumn = 'Qualsevol columna';
$strAnyDatabase = 'Qualsevol base de dades';
$strAnyHost = 'Qualsevol servidor';
$strAnyTable = 'Qualsevol taula';
$strAnyUser = 'Qualsevol usuari';
$strAPrimaryKey = 'S\'ha afegit una clau primària a %s';
$strAscending = 'Ascendent';
$strAtBeginningOfTable = 'Al principi de la taula';
$strAtEndOfTable = 'Al final de la taula';
$strAttr = 'Atributs';

$strBack = 'Enrere';
$strBeginCut = 'INICI DEL TALL';
$strBeginRaw = 'INICI DEL VOLCAT';
$strBinary = ' Binari ';
$strBinaryDoNotEdit = ' Binari - no editeu ';
$strBookmarkDeleted = 'S\'ha esborrat el bookmark.';
$strBookmarkLabel = 'Etiqueta';
$strBookmarkQuery = 'Consulta SQL registrada';
$strBookmarkThis = 'Registra aquesta consulta SQL';
$strBookmarkView = 'Només mirar';
$strBrowse = 'Navega';
$strBzError = 'phpMyAdmin és incapaç de comprimir el volcat degut a una extensió Bz2 incorrecta en aquesta versió de php. És molt recomenable posar a la directiva <code>$cfg[\'BZipDump\']</code> el valor <code>FALSE</code> al fitxer de configuració de phpMyAdmin. Si vol utilitzar les facilitats de compresió Bz2, és necessari actualitzar el php a la darrera versió disponible. Es pot consultar el informe d\'errada %s de php per a més detalls.';
$strBzip = '"comprimit amb bzip"';

$strCannotLogin = 'No podem connectar al servidor MySQL';
$strCantLoadMySQL = 'no s\'ha pogut carregar l\'extensió de MySQL,<br />verifiqueu la configuració del PHP.';
$strCantLoadRecodeIconv = 'No es pot carregar iconv o recodificar una extensió necessària per la conversió de jocs de caràcters, configura php per permetre l\'ús d\'aquestes extensions o bé desactiva la conversió de jocs de caràcters en phpMyAdmin.';
$strCantRenameIdxToPrimary = 'No pots canviar el nom d\'un índex a "PRIMARY"!';
$strCantUseRecodeIconv = 'No es pot utilitzar iconv ni libiconv ni la funció recode_string mentre es carrega l\'extensió d\'informes. Comprova la configuració de php.';
$strCardinality = 'Cardinalitat';
$strCarriage = 'Retorn de línia: \\r';
$strChange = 'Canvi';
$strChangeDisplay = 'Tria el camp a mostrar';
$strChangePassword = 'Canvi de contrasenya';
$strCharsetOfFile = 'Joc de caràcters de l\'arxiu:';
$strCheckAll = 'Verificar-ho tot';
$strCheckDbPriv = 'Verifica els privilegis de la base de dades';
$strCheckTable = 'Verifica la taula';
$strChoosePage = 'Tria una pàgina per editar';
$strColComFeat = 'Mostrant comentaris de les columnes';
$strColumn = 'Columna';
$strColumnNames = 'Nom de les columnes';
$strColumnPrivileges = 'Permissos específics de columna';
$strCommand = 'Ordre';
$strComments = 'Comentaris';
$strCompleteInserts = 'Completar insercions';
$strCompression = 'Compressió';
$strConfigFileError = 'phpMyAdmin és incapaç de llegir el fitxer de configuració!<br />Això pot succeir si php troba un error sintàctic en ell o bé php no pot trobar el fitxer.<br />Intenta obrir el fitxer de configuració directament fent servir l\'enllaç següent i comprova el(s) missatge(s) d\'error que reps. En moltes ocasions una coma o punt i coma falta en algun lloc.<br />Si reps una plana en blanc, tot està bé.';
$strConfigureTableCoord = 'Configura les coordenades per la taula %s';
$strConfirm = 'Ho vols fer realment?';
$strConnections = 'Conexions';
$strCookiesRequired = 'A partir d\'aquest punt és necessari tenir les Cookies activades.';
$strCopyTable = 'Copia taula a (basedades<b>.</b>taula):';
$strCopyTableOK = 'La taula %s ha estat copiada a %s.';
$strCouldNotKill = 'phpMyAdmin no pot cancel.lar el fil %s. Probablement, ja és tancat.';
$strCreate = 'Crear';
$strCreateIndex = 'Crea un índex a la columna:&nbsp;%s';
$strCreateIndexTopic = 'Crea un nou índex';
$strCreateNewDatabase = 'Crea una nova base de dades';
$strCreateNewTable = 'Crear una taula nova a la base de dades %s';
$strCreatePage = 'Crea una nova Pàgina';
$strCreatePdfFeat = 'Creació de PDFs';
$strCriteria = 'Criteris';

$strData = 'Dades';
$strDatabase = 'Base de dades ';
$strDatabaseHasBeenDropped = 'La Base de Dades %s s\'ha eliminat.';
$strDatabaseWildcard = 'Bases de Dades (es permeten comodins):';
$strDatabases = 'bases de dades';
$strDatabasesStats = 'Estadístiques de les bases de dades';
$strDataDict = 'Diccionari de Dades';
$strDataOnly = 'Només dades';
$strDbPrivileges = 'Permissos especifics de Base de dades';
$strDefault = 'Defecte';
$strDelete = 'Esborrar';
$strDeleteAndFlush = 'Esborra els usuaris i recarrega els permissos seguidament.';
$strDeleteAndFlushDescr = 'Aquesta és la forma més clara, pero recarregar els permissos pot tardar una mica.';
$strDeleteFailed = 'No s\'ha pogut esborrar!';
$strDeleteUserMessage = 'Has esborrat l\'usuari %s.';
$strDeleted = 'La fila ha estat esborrada';
$strDeletedRows = 'Files esborrades:';
$strDeleting = 'Esborrant %s';
$strDescending = 'Descendent';
$strDisabled = 'Desactivat';
$strDisplay = 'Mostrar';
$strDisplayFeat = 'Mostrar característiques';
$strDisplayOrder = 'Ordre del llistat:';
$strDisplayPDF = 'Mostrar esquema PDF';
$strDoAQuery = 'Fer una "petició segons exemple" (comodí: "%")';
$strDoYouReally = 'Realment vols';
$strDocu = 'Documentació';
$strDrop = 'Eliminar';
$strDropDB = 'Eliminar base de dades %s';
$strDropTable = 'Esborrar taula';
$strDropUsersDb = 'Esborra les bases de dades que tenen els mateixos noms que els usuaris.';
$strDumpXRows = 'Volcar %s files començant a la fila %s.';
$strDumpingData = 'Volcant dades de la taula';
$strDynamic = 'dinàmic';

$strEdit = 'Editar';
$strEditPDFPages = 'Editar pàgines PDF';
$strEditPrivileges = 'Editar privilegis';
$strEffective = 'Efectiu';
$strEmpty = 'Buidar';
$strEmptyResultSet = 'MySQL ha retornat un conjunt buit (p.e. cap fila).';
$strEnabled = 'Activat';
$strEnd = 'Final';
$strEndCut = 'FI DEL TALL';
$strEndRaw = 'FI DEL VOLCAT';
$strEnglishPrivileges = ' Nota: Els noms dels privilegis del MySQL són en llengua anglesa ';
$strError = 'Errada';
$strExplain = 'Explicació de l\'SQL';
$strExport = 'Exportar';
$strExportToXML = 'Exportar a format XML';
$strExtendedInserts = 'Insercions ampliades';
$strExtra = 'Extra';

$strFailedAttempts = 'Intents erronis';
$strField = 'Camp';
$strFieldHasBeenDropped = 'S\'ha esborrat el camp %s';
$strFields = 'Camps';
$strFieldsEmpty = ' El comptador de camps és buit! ';
$strFieldsEnclosedBy = 'Camps englobats per';
$strFieldsEscapedBy = 'Camps amb marca d\'escapada';
$strFieldsTerminatedBy = 'Camps acabats per';
$strFileCouldNotBeRead = 'No es pot llegir el fitxer';
$strFixed = 'fixa';
$strFlushPrivilegesNote = 'Nota: phpMyAdmin obté els permissos de l\'usuari directament de les taules de permissos de l\' MySQL. El contingut d\'aquestes taules pot diferir dels permissos que utilitza el servidor si s\'han fet canvis manualment. En aquest cas, es necessari %srecarregar els permissos%s abans de continuar.';
$strFlushTable = 'Buidar el caché de la taula ("FLUSH")';
$strFormEmpty = 'Falta un valor al formulari !';
$strFormat = 'Format';
$strFullText = 'Textos sencers';
$strFunction = 'Funció';

$strGenBy = 'Generat per';
$strGenTime = 'Temps de generació';
$strGeneralRelationFeat = 'Característiques generals de relacions';
$strGlobalPrivileges = 'Permissos generals';
$strGlobalValue = 'Valor global';
$strGo = 'Executar';
$strGrantOption = 'Atorgar';
$strGrants = 'Atorgar';
$strGzip = '"comprimit amb gzip"';

$strHasBeenAltered = 'ha estat alterada.';
$strHasBeenCreated = 'ha estat creada.';
$strHaveToShow = 'Has d\'escollir al menys una columna per mostrar';
$strHome = 'Inici';
$strHomepageOfficial = 'Plana oficial del phpMyAdmin';
$strHomepageSourceforge = 'Plana de descàrrega del phpMyAdmin a SourceForge';
$strHost = 'Servidor';
$strHostEmpty = 'El nom del servidor és buit!';

$strId = 'ID';
$strIdxFulltext = 'Text sencer';
$strIfYouWish = 'Si només vols carregar algunes columnes de la taula, especifica-ho amb una llista separada per comes.';
$strIgnore = 'Ignora';
$strIgnoringFile = 'Ignorant fitxer %s';
$strImportDocSQL = 'Importa Arxius docSQL';
$strImportFiles = 'Importar fitxers';
$strImportFinished = 'Importació finalitzada';
$strInUse = 'en ús';
$strIndex = 'Índex';
$strIndexHasBeenDropped = 'S\'ha esborrat l\'índex %s';
$strIndexName = 'Nom d\'índex:';
$strIndexType = 'Tipus d\'índex:';
$strIndexes = 'Indexos';
$strInsecureMySQL = 'El vostre fitxer de configuració té paràmetres (root sense contrasenya) que corresponen al compte privilegiat predetermitat de MySQL. El servidor MySQL està funcionant amb aquests valors, el que significa un forat de seguretat, i s\'exposa a intrusions, pel que recomanem la reparació urgent d\'aquest forat de seguretat.';
$strInsert = 'Inserta';
$strInsertAsNewRow = 'Inserir com a nova fila';
$strInsertNewRow = 'Inserir nova fila';
$strInsertTextfiles = 'Inserir fitxers de text a la taula';
$strInsertedRows = 'Files Inserides:';
$strInstructions = 'Instruccions';
$strInvalidName = '"%s" és una paraula reservada, no es pot fer servir com a nom de base de dades/taula/camp.';

$strKeepPass = 'No canviïs la contrasenya';
$strKeyname = 'Nom Clau';
$strKill = 'Finalitzar';

$strJustDelete = 'Només esborra els usuaris de les taules de permissos.';
$strJustDeleteDescr = 'Els usuaris &quot;esborrats&quot; encara tindrán accés al servidor com fins ara mentre no es recarreguin els permissos.';

$strLaTeX = 'LaTeX';
$strLandscape = 'Horitzontal';
$strLength = 'Longitud';
$strLengthSet = 'Longitud/Valors*';
$strLimitNumRows = 'registres per plana';
$strLineFeed = 'Salt de línia: \\n';
$strLines = 'Línies';
$strLinesTerminatedBy = 'Línies terminades per';
$strLinkNotFound = 'L\'enllaç no s\'ha trobat';
$strLinksTo = 'Enllaços a';
$strLocalhost = 'Local';
$strLocationTextfile = 'Ubicació del fitxer de text';
$strLogPassword = 'Contrasenya:';
$strLogUsername = 'Nom d\'Usuari:';
$strLogin = 'Identificació';
$strLoginInformation = 'Informació d\'Identificació';
$strLogout = 'Sortir';

$strMissingBracket = 'Falta una clau (\{ o bé \})';
$strModifications = 'Les modificacions han estat guardades';
$strModify = 'Modificar';
$strModifyIndexTopic = 'Modifica un índex';
$strMoreStatusVars = 'Més  variables d\'estat';
$strMoveTable = 'Mou taula a (base dades<b>.</b>taula):';
$strMoveTableOK = 'Taula %s moguda a %s.';
$strMySQLCharset = 'Joc de caràcters de MySQL';
$strMySQLReloaded = 'MySQL reiniciat.';
$strMySQLSaid = 'MySQL diu: ';
$strMySQLServerProcess = 'MySQL %pma_s1% executant-se a %pma_s2% com a %pma_s3%';
$strMySQLShowProcess = 'Mostrar processos';
$strMySQLShowStatus = 'Mostra la informació de funcionament del MySQL';
$strMySQLShowVars = 'Mostra les variables de sistema del MySQL';

$strName = 'Nom';
$strNext = 'Següent';
$strNo = 'No';
$strNoDatabases = 'No hi ha Bases de Dades';
$strNoDescription = 'Sense Descripció';
$strNoDropDatabases = 'Instrucció "DROP DATABASE" desactivada.';
$strNoExplain = 'Saltar l\'explicació de l\'SQL';
$strNoFrames = 'phpMyAdmin és més fàcil amb un navegador que <b>suporti marcs (frames)</b>.';
$strNoIndex = 'No s\'ha definit l\'índex!';
$strNoIndexPartsDefined = 'No s\'han definit parts de l\'índex!';
$strNoModification = 'Sense canvis';
$strNoPassword = 'Sense contrasenya';
$strNoPhp = 'Sense codi PHP';
$strNoPrivileges = 'Sense privilegis';
$strNoQuery = 'No és una consulta SQL!';
$strNoRights = 'No tens prou privilegis per visualitzar aquesta informació!';
$strNoTablesFound = 'Base de dades sense taules.';
$strNoUsersFound = 'No s\'han trobat usuaris.';
$strNoUsersSelected = 'No s\'han sel.leccionat usuaris.';
$strNoValidateSQL = 'Saltar la Validació de l\'SQL';
$strNone = 'Res';
$strNotNumber = 'Aquest valor no és un número!';
$strNotOK = 'Incorrecte';
$strNotSet = 'Taula <b>%s</b> no trobada o no definida a %s';
$strNotValidNumber = ' no es un número de columna vàlid!';
$strNull = 'Nul';
$strNumSearchResultsInTable = '%s resultat(s) a la taula <i>%s</i>';
$strNumSearchResultsTotal = '<b>Total:</b> <i>%s</i> resultat(s)';
$strNumTables = 'Taules';

$strOK = 'Correcte';
$strOftenQuotation = 'Marques sintàctiques. OPCIONALMENT vol dir que només els camps de tipus char i varchar van "tancats dins" "-aquest caràcter.';
$strOperations = 'Operacions';
$strOptimizeTable = 'Optimitza la taula';
$strOptionalControls = 'Opcional. Controla com llegir o escriure caràcters especials.';
$strOptionally = 'OPCIONALMENT';
$strOptions = 'Opcions';
$strOr = 'O';
$strOverhead = 'Defragmentat';

$strPageNumber = 'Número de pàgina:';
$strPartialText = 'Textos Parcials';
$strPassword = 'Contrasenya';
$strPasswordChanged = 'La contrasenya per a %s s\'ha canviat correctament.';
$strPasswordEmpty = 'La contrasenya és buida!';
$strPasswordNotSame = 'Les contrasenyes no coincideixen!';
$strPdfDbSchema = 'Esquema de la base de dades "%s" - Pàgina %s';
$strPdfInvalidPageNum = 'Número de pàgina PDF no definida!';
$strPdfInvalidTblName = 'La taula "%s" no existeix!';
$strPdfNoTables = 'No hi ha taules';
$strPerHour = 'per hora';
$strPhp = 'Crear codi PHP';
$strPHP40203 = 'S\'esta fent servir la versió 4.2.3 de PHP, que té un serios error amb cadenes de multi-byte (mbstring). Mira l\'informe d\'error 19404 de PHP. No es recomana aquesta versió de PHP per treballar amb phpMyAdmin.';
$strPHPVersion = 'PHP versió';
$strPmaDocumentation = 'Documentació de phpMyAdmin';
$strPmaUriError = 'La directiva <tt>$cfg[\'PmaAbsoluteUri\']</tt> HA d\'estar al fitxer de configuració!';
$strPortrait = 'Vertical';
$strPos1 = 'Inici';
$strPrevious = 'Anterior';
$strPrimary = 'Primària';
$strPrimaryKey = 'Clau Primària';
$strPrimaryKeyHasBeenDropped = 'S\'ha esborrat la clau principal';
$strPrimaryKeyName = 'El nom de la clau principal ha de ser ... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>ha de ser</b> el nom i <b>només</b>el nom de la clau principal!)';
$strPrint = 'Imprimir';
$strPrintView = 'Imprimir vista';
$strPrivDescAllPrivileges = 'Inclou tots els permissos excepte GRANT (atorgar).';
$strPrivDescAlter = 'Permet alterar l\'estructura de taules existents.';
$strPrivDescCreateDb = 'Permet crear noves bases de dades i taules.';
$strPrivDescCreateTbl = 'Permet crear noves taules.';
$strPrivDescCreateTmpTable = 'Permet crear taules temporals.';
$strPrivDescDelete = 'Permet esborrar dades.';
$strPrivDescDropDb = 'Permet eliminar bases de dades i taules.';
$strPrivDescDropTbl = 'Permet eliminar taules.';
$strPrivDescExecute = 'Permet executar processos enmagatzemats (stored procedures); No té efecte en aquesta versió de MySQL.';
$strPrivDescFile = 'Permet importar i exportar dades amb fitxers externs.';
$strPrivDescGrant = 'Permet afegir usuaris i permissos sense tenir que recarregar les taules de permissos.';
$strPrivDescIndex = 'Permet crear i eliminar indexos.';
$strPrivDescInsert = 'Permet inserir i modificar dades.';
$strPrivDescLockTables = 'Permet bloquejar taules per l\'actual fil d\'execució.';
$strPrivDescMaxConnections = 'Limita el numero de noves connexions que pot obrir l\'usuari per hora.';
$strPrivDescMaxQuestions = 'Limita el numero de consultes que pot enviar l\'usuari al servidor per hora.';
$strPrivDescMaxUpdates = 'Limita el numero d\'ordres que pot executar l\'usuari canviant qualsevol taula o base de dades per hora.';
$strPrivDescProcess3 = 'Permet cancel.lar processos d\'altres usuaris.';
$strPrivDescProcess4 = 'Permet veure completament les consultes a la llista de processos.';
$strPrivDescReferences = 'No té efecte en aquesta versió de MySQL.';
$strPrivDescReplClient = 'Dona el dret a l\'usuari de preguntar quins servidors mestres / esclaus hi ha.';
$strPrivDescReplSlave = 'Es necessari per a la replicació en servidors esclaus.';
$strPrivDescReload = 'Permet recarregar les configuracions del servidor i buidar les seves cachés.';
$strPrivDescSelect = 'Permet llegir dades.';
$strPrivDescShowDb = 'Dona accés a la llista completa de bases de dades.';
$strPrivDescShutdown = 'Permet parar el servidor.';
$strPrivDescSuper = 'Permet connectar, encara que s\'hagi arribat al máxim numero de connexions permés; Es necessari per moltes operacions d\'administració com ara establir variables globals o bé cancel.lar fils d\'execució d\'altres usuaris.';
$strPrivDescUpdate = 'Permet canviar dades.';
$strPrivDescUsage = 'Sense permissos.';
$strPrivileges = 'Privilegis';
$strPrivilegesReloaded = 'Els permissos s\'han recarregat correctament.';
$strProcesslist = 'Llista de processos';
$strProperties = 'Propietats';
$strPutColNames = 'Posa els noms de camp a la primera fila';

$strQBE = 'Consulta segons exemple';
$strQBEDel = 'Sup';
$strQBEIns = 'Ins';
$strQueryOnDb = 'Consulta SQL a la base de dades <b>%s</b>:';
$strQueryStatistics = '<b>Estadístiques de Consultes</b>: Des de l\'últim inici, s\'han enviat %s consultes al servidor.';
$strQueryType = 'Tipus de consulta';

$strReceived = 'Rebut';
$strRecords = 'Registres';
$strReferentialIntegrity = 'Comprova la integritat referencial:';
$strRelationalSchema = 'Esquema Relacional';
$strRelationNotWorking = 'Les característiques addicionals per treballar amb taules enllaçades s\'han desactivat. Per saber perquè clica %saquí%s.';
$strRelationView = 'Vista de Relacions';
$strReloadFailed = 'El reinici del MySQL ha fallat';
$strReloadMySQL = 'Rellegir el MySQL';
$strReloadingThePrivileges = 'Recarregant permissos';
$strRememberReload = 'Recorda reiniciar el MySQL';
$strRemoveSelectedUsers = 'Treure els usuaris sel.leccionats';
$strRenameTable = 'Renombrar les taules a';
$strRenameTableOK = 'La taula %s ha canviat de nom. Ara es diu %s';
$strRepairTable = 'Reparar taula';
$strReplace = 'Substituir';
$strReplaceTable = 'Substituir les dades de la taula pel fitxer ';
$strReset = 'Esborrar';
$strResourceLimits = 'Limit de recursos';
$strReType = 'Reescriure';
$strRevoke = 'Revocar';
$strRevokeAndDelete = 'Denega tots els permissos actius dels usuaris i els esborra després.';
$strRevokeAndDeleteDescr = 'Els usuaris encara tindran el permis USAGE fins que es recarreguin els permissos.';
$strRevokeGrant = 'Revocar garantia';
$strRevokeGrantMessage = 'Has revocat la garantia de privilegis per a %s';
$strRevokeMessage = 'Has revocat els privilegis per %s';
$strRevokePriv = 'Revocar privilegis';
$strRowLength = 'Longitud de fila';
$strRowSize = 'Mida de fila ';
$strRows = 'Fila';
$strRowsFrom = 'Files començant des de';
$strRowsModeHorizontal = 'horitzontal';
$strRowsModeOptions = ' en mode %s i repeteix capçaleres després de %s cel·les ';
$strRowsModeVertical = 'vertical';
$strRowsStatistic = 'Estadística de files';
$strRunQuery = 'Executa consulta';
$strRunSQLQuery = 'Executa consulta/s SQL a la Base de Dades %s';
$strRunning = 'funcionant a %s';

$strSQL = 'SQL';
$strSQLParserBugMessage = 'És possible que hagueu trobat un error a l\'intèrpret SQL. Si us plau, comproveu la sintaxi de la consulta i verifiqueu que les cometes estiguin al seu lloc i facin parelles. Un altra possible causa de l\'errada és que estigueu pujant un arxiu amb dades binàries per fora de l\'àrea de text delimitada. També podeu provar la consulta a la interfície de comandes de MySQL. La sortida següent generada pel servidor MySQL, si n\'hi ha, pot ajudar-vos a diagnosticar el problema. Si encara teniu problemes o si l\'intèrpret falla i l\'interfície de comandes funciona, reduïu la consulta a la part de l\'SQL que produeix l\'errada, i envieu un informe d\'error amb la cadena de dades de la secció de TALL indicada avall:';
$strSQLParserUserError = 'Sembla que hi ha un error a la consulta SQL. La sortida següent generada pel servidor MySQL, si n\'hi ha, pot ajudar-vos a diagnosticar el problema';
$strSQLQuery = 'crida SQL';
$strSQLResult = 'Resultat SQL';
$strSQPBugInvalidIdentifer = 'Identificador Incorrecte';
$strSQPBugUnclosedQuote = 'Cometes sense tancar';
$strSQPBugUnknownPunctuation = 'Signe de puntuació desconegut';
$strSave = 'Guardar';
$strScaleFactorSmall = 'El factor de l\'escala és massa petit per posar l\'esquema en una pàgina';
$strSearch = 'Cercar';
$strSearchFormTitle = 'Cercar a la base de dades';
$strSearchInTables = 'A la(les) taula(es):';
$strSearchNeedle = 'Paraula(es) o valor(s) a cercar (comodí: "%"):';
$strSearchOption1 = 'al menys una d\'aquestes paraules';
$strSearchOption2 = 'Totes les paraules';
$strSearchOption3 = 'La frase exacta';
$strSearchOption4 = 'com a expressió regular';
$strSearchResultsFor = 'Resultats de la recerca per a "<i>%s</i>" %s:';
$strSearchType = 'Trobat:';
$strSelect = 'Selecciona';
$strSelectADb = 'Selecciona una Base de Dades';
$strSelectAll = 'Selecciona Tot';
$strSelectFields = 'Selecciona els camps (un com a mínim):';
$strSelectNumRows = 'en consulta';
$strSelectTables = 'Selecciona Taules';
$strSend = 'enviar';
$strSent = 'Enviat';
$strServer = 'Servidor %s';
$strServerChoice = 'Elecció de Servidor';
$strServerStatus = 'Informació d\'execució';
$strServerStatusUptime = 'Aquest servidor MySQL és en marxa durant %s. Es va iniciar en %s.';
$strServerTabVariables = 'Variables';
$strServerTabProcesslist = 'Processos';
$strServerTrafficNotes = '<b>Ocupació de servidor</b>: Aquestes taules mostren la ocupació de la xarxa d\'aquest servidor MySQL des de l\'últim inici.';
$strServerVars = 'Variables i settings del servidor';
$strServerVersion = 'Versió del servidor';
$strSessionValue = 'Valor de sessió';
$strSetEnumVal = 'Si el tipus de camp és "enum" o "set", entra els valors fent servir el format: \'a\',\'b\',\'c\'...<br />Si mai necessites escriure la barra invertida ("\") o la cometa simple ("\'") abans d\'aquests valors, escriu barres invertides (per exemple \'\\\\xyz\' o \'a\\\'b\').';
$strShow = 'Mostra';
$strShowAll = 'Mostra tot';
$strShowColor = 'Mostra color';
$strShowCols = 'Mostra columnes';
$strShowDatadictAs = 'Format del Diccionari de Dades';
$strShowGrid = 'Mostra graella';
$strShowPHPInfo = 'Mostra informació de PHP';
$strShowTableDimension = 'Mostra dimensió de les taules';
$strShowTables = 'Mostra taules';
$strShowThisQuery = ' Mostra aquesta consulta de nou ';
$strShowingRecords = 'Mostrant registres: ';
$strSingly = '(singly)';
$strSize = 'Mida';
$strSort = 'Classificació';
$strSpaceUsage = 'Utilització d\'espai';
$strSplitWordsWithSpace = 'Paraules separades per un espai (" ").';
$strStatement = 'Sentències';
$strStatus = 'Estat';
$strStrucCSV = 'dades CSV ';
$strStrucData = 'Estructura i dades';
$strStrucDrop = 'Afegir \'drop table\'';
$strStrucExcelCSV = 'CSV per dades de Ms Excel';
$strStrucOnly = 'Només l\'estructura';
$strStructPropose = 'Proposa una estructura de taula';
$strStructure = 'Estructura';
$strSubmit = 'Enviar';
$strSuccess = 'La vostra comanda SQL ha estat executada amb èxit';
$strSum = 'Suma';

$strTable = 'Taula';
$strTableComments = 'Comentaris de la taula';
$strTableEmpty = 'El nom de la taula és buit!';
$strTableHasBeenDropped = 'S\'ha esborrat la taula %s';
$strTableHasBeenEmptied = 'S\'ha buidat la taula %s';
$strTableHasBeenFlushed = 'S\'ha buidat el caché de la taula %s';
$strTableMaintenance = 'Manteniment de la taula';
$strTableOfContents = 'Taula de continguts';
$strTableStructure = 'Estructura de la taula';
$strTableType = 'Tipus de taula';
$strTables = '%s taula(es)';
$strTblPrivileges = 'Permissos especifics de taula';
$strTextAreaLength = ' A causa de la seva longitud,<br /> aquest camp pot no ser editable ';
$strTheContent = 'El contingut del fitxer especificat ha estat inserit.';
$strTheContents = 'El contingut del fitxer substituirà els continguts de les taules seleccionades a les files que contenen la mateixa clau única o primària';
$strTheTerminator = 'El separador de camps.';
$strThisHost = 'Aquest Host';
$strThisNotDirectory = 'Aixó no és un directori';
$strThreadSuccessfullyKilled = 'Fil %s cancel.lat correctament.';
$strTime = 'Temps';
$strTotalUC = 'Total';
$strTotal = 'total';
$strTraffic = 'Tràfic';
$strType = 'Tipus';

$strUncheckAll = 'Deseleccionar tot';
$strUnique = 'Única';
$strUnselectAll = 'Deselecciona tot';
$strUpdatePrivMessage = 'Heu actualitzat els privilegis de %s.';
$strUpdateProfile = 'Actualitza perfil:';
$strUpdateProfileMessage = 'S\'ha actualitzat el perfil.';
$strUpdateQuery = 'Actualitza consulta';
$strUsage = 'Ús';
$strUseBackquotes = 'Usa "backquotes" amb taules i noms de camps';
$strUseTables = 'Usa Taules';
$strUseTextField = 'Usa camp de texte';
$strUser = 'Usuari';
$strUserAlreadyExists = 'L\'usuari %s ja existeix!';
$strUserEmpty = 'El nom d\'usuari és buit!';
$strUserName = 'Nom d\'usuari';
$strUserNotFound = 'No s\'ha trobat l\'usuari sel.leccionat a la taula de permissos.';
$strUserOverview = 'Informació general de l\'usuari';
$strUsers = 'Usuaris';
$strUsersDeleted = 'S\'han esborrat correctament els usuaris sel.leccionats.';

$strValidateSQL = 'Validar l\'SQL';
$strValidatorError = 'No s\'ha pogut iniciar el validador SQL. Si us plau, comproveu que teniu instal·lats els mòduls de PHP necessaris tal i com s\'indica a la %sdocumentació%s.';
$strValue = 'Valor';
$strVar = 'Variable';
$strViewDump = 'Veure un esquema de la taula';
$strViewDumpDB = 'Veure l\'esquema de la base de dades';

$strWebServerUploadDirectory = 'Directori de pujada d\'arxius del servidor web';
$strWebServerUploadDirectoryError = 'No està disponible el directori indicat per pujar arxius';
$strWelcome = 'Benvingut a %s';
$strWithChecked = 'Amb marca:';
$strWritingCommentNotPossible = 'No es pot gravar aquest comentari';
$strWritingRelationNotPossible = 'No es pot gravar aquesta relació';
$strWrongUser = 'Usuari i/o clau erronis. Accés denegat.';

$strYes = 'Si';

$strZeroRemovesTheLimit = 'Nota: Establint aquestes opcions a 0 (zero) treu el limit.';
$strZip = '"comprimit amb zip"';

// To translate
$strDBGModule = 'Module';  //to translate
$strDBGLine = 'Line';  //to translate
$strDBGHits = 'Hits';  //to translate
$strDBGTimePerHitMs = 'Time/Hit, ms';  //to translate
$strDBGTotalTimeMs = 'Total time, ms';  //to translate
$strDBGMinTimeMs = 'Min time, ms';  //to translate
$strDBGMaxTimeMs = 'Max time, ms';  //to translate
$strDBGContextID = 'Context ID';  //to translate
$strDBGContext = 'Context';  //to translate
$strCantLoad = 'cannot load %s extension,<br />please check PHP Configuration';  //to translate
?>
