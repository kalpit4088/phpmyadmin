<?php
/* $Id$ */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Байт', 'кБ', 'МБ', 'ГБ');

$day_of_week = array('Нд', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб');
$month = array('Січ', 'Лют', 'Бер', 'Квт', 'Трв', 'Чрв', 'Лип', 'Сер', 'Вер', 'Жов', 'Лис', 'Гру');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d %Y р., %H:%M';

$timespanfmt = '%s днів, %s годин, %s хвилин і %s секунд';

$strAPrimaryKey = 'Було додано первинний ключ до %s';
$strAbortedClients = 'Перервано';
$strAccessDenied = 'Доступ заборонено';
$strAction = 'Дія';
$strAddDeleteColumn = 'Додати/забрати колонку критерію';
$strAddDeleteRow = 'Додати/забрати рядок критерію';
$strAddNewField = 'Додати нове поле';
$strAddPriv = 'Додати нові привілеї';
$strAddPrivMessage = 'Було додано новий привілей';
$strAddPrivilegesOnDb = 'Додати права для цієї бази даних';
$strAddPrivilegesOnTbl = 'Додати права для цієї таблиці';
$strAddSearchConditions = 'Додати умови пошуку (тіло для умови "where"):';
$strAddToIndex = 'Додати до індексу&nbsp;%s&nbsp;колоноку(и)';
$strAddUser = 'Додати нового користувача';
$strAddUserMessage = 'Було додано нового користувача.';
$strAdministration = 'Адміністратор';
$strAffectedRows = 'Задіяні рядки:';
$strAfter = 'Після %s';
$strAfterInsertBack = 'Повернутись';
$strAfterInsertNewInsert = 'Вставити новий запис';
$strAll = 'Все';
$strAllTableSameWidth = 'показувати всі таблиці однакової ширини?';
$strAlterOrderBy = 'Змінити порядок таблиці';
$strAnIndex = 'Було додано індекс для %s';
$strAnalyzeTable = 'Аналіз таблиці';
$strAnd = 'І';
$strAny = 'Довільний';
$strAnyColumn = 'Довільна колонка';
$strAnyDatabase = 'Довільн база даних';
$strAnyHost = 'Довільний хост';
$strAnyTable = 'Довільна таблиця';
$strAnyUser = 'Довільний користувач';
$strAscending = 'Зростаючий';
$strAtBeginningOfTable = 'На початку таблиці';
$strAtEndOfTable = 'У кінці таблиці';
$strAttr = 'Атрибути';

$strBack = 'Назад';
$strBeginCut = 'BEGIN CUT';
$strBeginRaw = 'BEGIN RAW';
$strBinary = ' Двійковий ';
$strBinaryDoNotEdit = ' Двійкові дані - не редагуються ';
$strBookmarkDeleted = 'Закладку було видалено.';
$strBookmarkLabel = 'Мітка';
$strBookmarkQuery = 'Закладка на SQL-запит';
$strBookmarkThis = 'Закладка на даний SQL-запит';
$strBookmarkView = 'Лише перегляд';
$strBrowse = 'Переглянути';
$strBzError = 'phpMyAdmin не може скомпресувати dump через пошкоджене Bz2 доповнення у цій версії PHP. Наполегливо рекомендуєм встановити у конфіґураційному файлі Вашого phpMyAdmin директиву <code>$cfg[\'BZipDump\']</code> на <code>FALSE</code>. Якщо Ви хочете використовувати можливості Bz2 компресування, Вам необхідно поновити версію PHP. Див. детальніше у повідомленнях про помилки %s.';
$strBzip = 'запакувати в "bzip"';

$strCannotLogin = 'Не можу зареєструватися на MySQL сервері';
$strCantLoadMySQL = 'розширення MySQL не завантажено,<br />перевірте конфігурацію PHP.';
$strCantLoadRecodeIconv = 'Не можу завантажити iconv чи recode extension необхідні для зміни charset-у, сконфігуруйте php так, щоб можна було використовувати ці extensions, або забороніть зміну charset-у у phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Неможливо перейменувати індекс в PRIMARY!';
$strCantUseRecodeIconv = 'Не можу  використати ні/або iconv, ні/або libiconv, ні/або функцію recode_string поки буде завантажено extension reports. Перевірте Вашу php конфігурацію.';
$strCardinality = 'Кількість елементів';
$strCarriage = 'Повернення каретки: \\r';
$strChange = 'Змінити';
$strChangeDisplay = 'Виберіть поля для відображення';
$strChangePassword = 'Змінити пароль';
$strCharsetOfFile = 'Кодування файлу:';
$strCheckAll = 'Відмітити все';
$strCheckDbPriv = 'Перевірити привілеї бази даних';
$strCheckTable = 'Перевірити таблицю';
$strChoosePage = 'Прошу вибрати сторінку для редагування';
$strColComFeat = 'Показувати коментарі стовпців';
$strColumn = 'Колонка';
$strColumnNames = 'Назви колонок';
$strColumnPrivileges = 'Права, які стосуються колонок таблиці';
$strCommand = 'Команда';
$strComments = 'Коментарі';
$strCompleteInserts = 'Повна вставка';
$strConfigFileError = 'phpMyAdmin не може прочитати конфігураційний файл <br />Це може статися у тому випадку, коли php натрапить на синтаксичну помилку (parse error) у ньому, або не може знайти самого файлу.<br />Завантажте конфігураційний файл безпосередньо за допомогою посилання поданого нижче і прочитайте отримані повідомлення про помилки (php error messages). Найчастіше десь у файлі просто бракує лапок чи двокрапки.  <br />Якщо Ви отримаєте порожню сторінку, - значить все в порядку.';
$strConfigureTableCoord = 'Прошу сконфіґурувати координати таблиці %s';
$strConfirm = 'Ви насправді хочете це зробити?';
$strConnections = 'З\'єднань';
$strCookiesRequired = 'З цього моменту Cookies повинні бути дозволені.';
$strCopyTable = 'Скопіювати таблицю в (база даних<b>.</b>таблиця):';
$strCopyTableOK = 'Таблицю %s було скопійовано в %s.';
$strCouldNotKill = 'phpMyAdmin не може припинити процес %s. Він вже напевно був зупинений.';
$strCreate = 'Створити';
$strCreateIndex = 'Створити індекс на&nbsp;%s&nbsp;колонках';
$strCreateIndexTopic = 'Створити новий індекс';
$strCreateNewDatabase = 'Створити нову БД';
$strCreateNewTable = 'Створити нову таблицю в БД %s';
$strCreatePage = 'Створити нову сторінку';
$strCreatePdfFeat = 'Створити PDF-файл';
$strCriteria = 'Критерій';

$strData = 'Дані';
$strDataDict = 'Словник даних';
$strDataOnly = 'Лише дані';
$strDatabase = 'БД ';
$strDatabaseHasBeenDropped = 'Базу даних %s знищено.';
$strDatabaseWildcard = 'База даних (дозволено використання шаблонів):';
$strDatabases = 'Бази Даних';
$strDatabasesStats = 'Статистика баз даних';
$strDbPrivileges = 'Права, які стосуються бази даних';
$strDefault = 'По замовчуванню';
$strDelete = 'Видалити';
$strDeleteAndFlush = 'Усунути користувачів і перезавантажити права після цього.';
$strDeleteAndFlushDescr = 'Це кращий спосіб, проте перезавантаження прав може потривати певний час.';
$strDeleteFailed = 'Видалення не вдалося!';
$strDeleteUserMessage = 'Видалено користувача %s.';
$strDeleted = 'Рядок видалено';
$strDeletedRows = 'Видалено наступні рядки:';
$strDeleting = 'Усунути %s';
$strDescending = 'Спадаючий';
$strDisabled = 'заблоковано';
$strDisplay = 'Показати';
$strDisplayFeat = 'Показати можливості';
$strDisplayOrder = 'Порядок перегляду:';
$strDisplayPDF = 'Показати PDF схему';
$strDoAQuery = 'Виконати "запит згідно прикладу" (символ підставновки: "%")';
$strDoYouReally = 'Ви насправді хочете ';
$strDocu = 'Документація';
$strDrop = 'Знищити';
$strDropDB = 'Знищити БД %s';
$strDropTable = 'Видалити таблицю';
$strDumpXRows = 'Зґенерувати дамп %s рядків починаючи з %s -го.';
$strDumpingData = 'Дамп даних таблиці';
$strDynamic = 'динамічний';

$strEdit = 'Редагувати';
$strEditPDFPages = 'Редагувати PDF Сторінки';
$strEditPrivileges = 'Редагування привілеїв';
$strEffective = 'Ефективність';
$strEmpty = 'Очистити';
$strEmptyResultSet = 'MySQL повернула пустий результат (тобто нуль рядків).';
$strEnabled = 'дозволено';
$strEnd = 'Кінець';
$strEndCut = 'END CUT';
$strEndRaw = 'END RAW';
$strEnglishPrivileges = ' Зауваження: привілеї MySQL задаються по-англійськи ';
$strError = 'Помилка';
$strExplain = 'Тлумачити SQL';
$strExport = 'Експорт';
$strExportToXML = 'Експортувати у XML формат';
$strExtendedInserts = 'Розширена вставка';
$strExtra = 'Додатково';

$strFailedAttempts = 'Невдалих спроб';
$strField = 'Поле';
$strFieldHasBeenDropped = 'Поле %s було видалено';
$strFields = 'Поля';
$strFieldsEmpty = ' Порожній перелік полів! ';
$strFieldsEnclosedBy = 'Поля взято в';
$strFieldsEscapedBy = 'Поля екрануються';
$strFieldsTerminatedBy = 'Поля розділені';
$strFixed = 'фіксований';
$strFlushPrivilegesNote = 'Примітка: phpMyAdmin отримує права користувачів безпосередньо з таблиці прав MySQL. Зміст цієї таблиці може відрізнятися від прав, які використовуються сервером, якщо в цю таблицю вносилися зміни вручну. У цьому випадку Вам необхідно %sперезавантажити права%s перед продовженням.';
$strFlushTable = 'Очистити кеш таблиці ("FLUSH")';
$strFormEmpty = 'Не задано значення для форми!';
$strFormat = 'Формат';
$strFullText = 'Повні тексти';
$strFunction = 'Функція';

$strGenBy = 'Згенеровано';
$strGenTime = 'Час створення';
$strGeneralRelationFeat = 'Загальні можливості';
$strGlobalPrivileges = 'Глобальні права';
$strGlobalValue = 'Загальне значення';
$strGo = 'Вперед';
$strGrantOption = 'Grant';
$strGrants = 'Права';
$strGzip = 'запакувати в "gzip"';

$strHasBeenAltered = 'була змінена.';
$strHasBeenCreated = 'була створена.';
$strHaveToShow = 'Необхідно вибрати принаймі один Стовпчик для показу';
$strHome = 'На початок';
$strHomepageOfficial = 'Офіційна сторінка phpMyAdmin';
$strHomepageSourceforge = 'Завантаження phpMyAdmin з Sourceforge';
$strHost = 'Хост';
$strHostEmpty = 'Порожнє ім\'я хоста!';

$strId = 'ID';
$strIdxFulltext = 'ПовнТекст';
$strIfYouWish = 'Якщо Ви бажаєте завантажити лише деякі колонки таблиці, задайте розділений комами список полів.';
$strIgnore = 'Ігноруровати';
$strImportDocSQL = 'Імпортувати docSQL файли';
$strInUse = 'використовується';
$strIndex = 'Індекс';
$strIndexHasBeenDropped = 'Індекс %s було знищено';
$strIndexName = 'Назва індекса&nbsp;:';
$strIndexType = 'Тип індекса&nbsp;:';
$strIndexes = 'Індекси';
$strInsecureMySQL = 'Ваш файл конфіґурації містить параметри (root без паролю) які відповідають привілейованому користувачу MySQL. Ваш MySQL сервер у цьому випадку відкритий для вторгнення і тому Вам обов\'язково слід виправити цю прогалину у безпеці.';
$strInsert = 'Вставити';
$strInsertAsNewRow = 'Вставити як новий рядок';
$strInsertNewRow = 'Вставити новий рядок';
$strInsertTextfiles = 'Вставити текстові файли в таблицю';
$strInsertedRows = 'Додані рядки:';
$strInstructions = 'Інструкції';
$strInvalidName = '"%s" - зарезервоване слово, ви не можете використовувати його для назви бази даних/таблиці/поля.';

$strJustDelete = 'Щойно усунуто користувачів з таблиці прав.';
$strJustDeleteDescr = '&quot;Усунуті&quot; користувачі все ще матимуть доступ до сервера до тих пір, поки не будуть перезавантажені права.';

$strKeepPass = 'Не змінювати пароль';
$strKeyname = 'Ім\'я ключа';
$strKill = 'Вбити';

$strLaTeX = 'LaTeX';
$strLandscape = 'Landscape';
$strLength = 'Довжина';
$strLengthSet = 'Довжини/Значення*';
$strLimitNumRows = 'записів на сторінці';
$strLineFeed = 'Символ кінця рядка: \\n';
$strLines = 'Рядки';
$strLinesTerminatedBy = 'Рядки розділено';
$strLinkNotFound = 'Лінк не знайдено';
$strLinksTo = 'Лінки до';
$strLocalhost = 'Локальний';
$strLocationTextfile = 'вкажіть розташування текстового файлу';
$strLogPassword = 'Пароль:';
$strLogUsername = 'Ім\'я користувача:';
$strLogin = 'Вхід в систему';
$strLoginInformation = 'Вхідна інформація (Login)';
$strLogout = 'Вийти з системи';

$strMissingBracket = 'бракує дужки';
$strModifications = 'Модифікації було збережено';
$strModify = 'Змінити';
$strModifyIndexTopic = 'Змінити індекс';
$strMoreStatusVars = 'Додаткові статусні змінні';
$strMoveTable = 'Перенести таблицю в (база даних<b>.</b>таблиця):';
$strMoveTableOK = 'Таблицю %s було перенесено в %s.';
$strMySQLCharset = 'MySQL Charset';
$strMySQLReloaded = 'MySQL перезавантажено.';
$strMySQLSaid = 'Відповідь MySQL: ';
$strMySQLServerProcess = 'MySQL %pma_s1% на %pma_s2% як %pma_s3%';
$strMySQLShowProcess = 'Показати процеси';
$strMySQLShowStatus = 'Показати стан MySQL';
$strMySQLShowVars = 'Показати системні змінні MySQL';

$strName = 'Назва';
$strNext = 'Дальше';
$strNo = 'Ні';
$strNoDatabases = 'БД відсутні';
$strNoDescription = 'без опису';
$strNoDropDatabases = 'Оператори "DROP DATABASE" заборонені.';
$strNoExplain = 'Не тлумачити SQL';
$strNoFrames = 'Для роботи phpMyAdmin потрібно браузер з підтримкою <b>фреймів</b>.';
$strNoIndex = 'Індекс не визначено!';
$strNoIndexPartsDefined = 'Не визначено частини індекса!';
$strNoModification = 'Змін немає';
$strNoPassword = 'Без паролю';
$strNoPhp = 'без PHP коду';
$strNoPrivileges = 'Без привілеїв';
$strNoQuery = 'Не задано SQL-запит!';
$strNoRights = 'Ви для цього маєте недостатньо прав!';
$strNoTablesFound = 'В БД не виявлено таблиць.';
$strNoUsersFound = 'Не знайдено користувача.';
$strNoValidateSQL = 'Не перевіряти SQL';
$strNone = 'Немає';
$strNotNumber = 'Це не число!';
$strNotOK = 'не OK';
$strNotSet = 'Таблицю <b>%s</b> не знайдено або не визначено у %s';
$strNotValidNumber = ' недопустима кількість рядків!';
$strNull = 'Нуль';
$strNumSearchResultsInTable = '%s співпадіння у таблиці <i>%s</i>';
$strNumSearchResultsTotal = '<b>Разом:</b> <i>%s</i> співпадіння';
$strNumTables = 'Таблиць';

$strOK = 'OK';
$strOftenQuotation = 'Звичайно лапки. ПО ВИБОРУ означає, що лише поля char і varchar беруться в лапки.';
$strOperations = 'Операцій';
$strOptimizeTable = 'Оптимізувати таблицю';
$strOptionalControls = 'По вибору. Контролює читання та написання спеціальних символів.';
$strOptionally = 'ПО ВИБОРУ';
$strOptions = 'Параметри';
$strOr = 'або';
$strOverhead = 'Надмірні видатки';

$strPHP40203 = 'Ви використовуєте версію PHP 4.2.3, яка має серйозну помилку при роботі з multi-byte strings (mbstring). Див PHP bug report 19404. Цю версію PHP не рекомендується використовувати з phpMyAdmin.';
$strPHPVersion = 'Версія PHP';
$strPageNumber = 'Номер сторінки:';
$strPartialText = 'Часткові тексти';
$strPassword = 'Пароль';
$strPasswordChanged = 'Пароль для %s успішно змінено.';
$strPasswordEmpty = 'Порожній пароль!';
$strPasswordNotSame = 'Паролі не однакові!';
$strPdfDbSchema = 'Схема бази даних "%s" - Сторінка %s';
$strPdfInvalidPageNum = 'Не встановлено номер PDF сторінки!';
$strPdfInvalidTblName = 'Таблиці "%s" не існує!';
$strPdfNoTables = 'Таблиць немає';
$strPerHour = 'за годину';
$strPhp = 'Створити PHP код';
$strPmaDocumentation = 'Документація по phpMyAdmin';
$strPmaUriError = 'Змінна <tt>$cfg[\'PmaAbsoluteUri\']</tt> ПОВИННА бути встановлена у Вашому конфіґураційному файлі!';
$strPortrait = 'Portrait';
$strPos1 = 'Початок';
$strPrevious = 'Назад';
$strPrimary = 'Первинний';
$strPrimaryKey = 'Первинний ключ';
$strPrimaryKeyHasBeenDropped = 'Первинний ключ було знищено';
$strPrimaryKeyName = 'Ім\'я первинного ключа повинно бути PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>повинно</b> бути іменем <b>лише</b> первинного ключа!)';
$strPrint = 'Друк';
$strPrintView = 'Версія для друку';
$strPrivDescAllPrivileges = 'Дозволити всі права за винятком GRANT.';
$strPrivDescAlter = 'Дозволити змінювати структуру наявних таблиць.';
$strPrivDescCreateDb = 'Дозволити створювати нові бази даних та таблиці.';
$strPrivDescCreateTbl = 'Дозволити створювати нові таблиці.';
$strPrivDescCreateTmpTable = 'Дозволити створювати тимчасові таблиці.';
$strPrivDescDelete = 'Дозволити знищувати дані з таблиць.';
$strPrivDescDropDb = 'Дозволити знищувати бази даних та таблиці.';
$strPrivDescDropTbl = 'Дозволити знищувати таблиці.';
$strPrivDescExecute = 'Дозволити виконання збережених процедур; Неефективно для цієї версії MySQL.';
$strPrivDescFile = 'Дозволити імпорт даних з файлів, та експорт у файли.';
$strPrivDescGrant = 'Дозволити додавання користувачів та прав без перезавантаження таблиці прав.';
$strPrivDescIndex = 'Дозволити створення та знищення індексів.';
$strPrivDescInsert = 'Дозволити вставку та заміну даних.';
$strPrivDescLockTables = 'Дозволити блокування таблиць для біжучих потоків.';
$strPrivDescMaxConnections = 'Обмежити кількість нових під\'єднань, які користувач може створювати протягом години.';
$strPrivDescMaxQuestions = 'Обмежити кількість запитів, які користувач може надіслати серверу протягом години.';
$strPrivDescMaxUpdates = 'Обмежити кількість команд, що вносять зміни до будь-якої таблиці чи бази даних, які користувач може виконати протягом години.';
$strPrivDescProcess3 = 'Дозволити припиняти процеси інших користувачів.';
$strPrivDescProcess4 = 'Дозволити перегляд повних запитів у списку процесів.';
$strPrivDescReferences = 'Неефективно для цієї версії MySQL.';
$strPrivDescReload = 'Дозволити перезавантаження установок та очищення кешу сервера.';
$strPrivDescReplClient = 'Надати користувачу право запитувати де є slaves / masters.';
$strPrivDescReplSlave = 'Необхідно для реплікації slaves.';
$strPrivDescSelect = 'Дозволити читання даних.';
$strPrivDescShowDb = 'Надати доступ до повного списку баз даних.';
$strPrivDescShutdown = 'Дозволити вимкнення сервера.';
$strPrivDescSuper = 'Дозволити під\'єднання, навіть якщо досягнуто максимальної кількості під\'єднань; Обов\'язково для більшості адміністративних операцій таких як встановлення ґлобальних змінних чи припинення процесів інших користувачів.';
$strPrivDescUpdate = 'Дозволити зміну даних.';
$strPrivDescUsage = 'Немає прав.';
$strPrivileges = 'Привілеї';
$strPrivilegesReloaded = 'Права успішно перезавантажено.';
$strProcesslist = 'Список процесів';
$strProperties = 'Властивості';
$strPutColNames = 'Дати назви полів у першому рядку';

$strQBE = 'Запит згідно прикладу';
$strQBEDel = 'Видалити';
$strQBEIns = 'Вставити';
$strQueryOnDb = 'SQL-запит до БД <b>%s</b>:';
$strQueryStatistics = '<b>Статистика запитів</b>: З моменту запуску, до сервера було надіслано %s запитів.';
$strQueryType = 'Тип запиту';

$strReType = 'Підтвердження';
$strReceived = 'Отримано';
$strRecords = 'Записи';
$strReferentialIntegrity = 'Перевір цілісність даних на рівні посилань:';
$strRelationNotWorking = 'Додаткова можливість роботи із залінкованими таблицями деактивована. Для того, щоб довідатись чому, натисніть %sтут%s.';
$strRelationView = 'Перегляд залежностей';
$strRelationalSchema = 'Схема зв\'язків';
$strReloadFailed = 'Не вдалось перезавантажити MySQL.';
$strReloadMySQL = 'Перезавантажити MySQL';
$strReloadingThePrivileges = 'Перезавантаження прав';
$strRememberReload = 'Не забудьте перезавантажити сервер.';
$strRemoveSelectedUsers = 'Усунути відмічених користувачів';
$strRenameTable = 'Перейменувати таблицю в';
$strRenameTableOK = 'Таблицю %s було перейменовано в %s';
$strRepairTable = 'Ремонтувати таблицю';
$strReplace = 'Замінити';
$strReplaceTable = 'Замінити дані таблиці даними з файлу';
$strReset = 'Перевстановити';
$strResourceLimits = 'Обмеження ресурсів';
$strRevoke = 'Відмінити';
$strRevokeAndDelete = 'Відмінити всі активні права користувачів та усунути їх після цього.';
$strRevokeAndDeleteDescr = 'Користувачі все ще будуть мати право КОРИСТУВАННЯ (USAGE) до тих пір, поки не будуть перезавантажені права.';
$strRevokeGrant = 'Відмінити надання прав';
$strRevokeGrantMessage = 'Було відмінено надання прав для %s';
$strRevokeMessage = 'Ви змінили привілеї для %s';
$strRevokePriv = 'Відмінити привілеї';
$strRowLength = 'Довжина рядка';
$strRowSize = ' Розмір рядка ';
$strRows = 'Рядки';
$strRowsFrom = 'рядків з';
$strRowsModeHorizontal = ' горизонтально ';
$strRowsModeOptions = '-го %s і дублювати заголовки через кожні %s рядків ';
$strRowsModeVertical = ' вертикально ';
$strRowsStatistic = 'Статистика рядка';
$strRunQuery = 'Виконати запит';
$strRunSQLQuery = 'Виконати SQL запит(и) до БД %і';
$strRunning = 'на %s';

$strSQL = 'SQL';
$strSQLParserBugMessage = 'Можливо Ви знайшли помилку в парсері SQL. Прошу детальніше перевірити чи коректно вжиті і не пропущені лапки у Вашому запиті. Іншою можливою причиною помилки може бути те що Ви завантажили файл з двійковими даними розміщеними поза взятим в лапки текстом. Спробуйте виконати Ваш запит за допомогою оболонки MySQL з командної стрічки. Повідомлення MySQL сервера про помилку подане нижче (якщо є таке) також може допомогти Вам у визначенні проблеми. Якщо у Вас все ще виникають проблеми чи парсер видає помилку, а з командної стрічки запити виконуються, прошу скоротити Ваш ввідний SQL запит до одного запиту, який власне і викликає проблеми, і відішліть повідомлення про помилку з порцією даних у розділі CUT нижче:';
$strSQLParserUserError = 'There seems to be an error in your SQL query. Повідомлення MySQL сервера про помилку подане нижче (якщо є таке) також може допомогти Вам у визначенні проблеми.';
$strSQLQuery = 'SQL-запит';
$strSQLResult = 'SQL result';
$strSQPBugInvalidIdentifer = 'Некоректний ідентифікатор';
$strSQPBugUnclosedQuote = 'Не закриті лапки';
$strSQPBugUnknownPunctuation = 'Невідомий символ пунктуації';
$strSave = 'Зберегти';
$strScaleFactorSmall = 'Занадто малий масштаб щоб схема займала цілу сторінку';
$strSearch = 'Шукати';
$strSearchFormTitle = 'Шукати в базі даних';
$strSearchInTables = 'Всередині таблиць:';
$strSearchNeedle = 'Слова чи значення, які потрібно знайти (маска: "%"):';
$strSearchOption1 = 'принаймі одне з слів';
$strSearchOption2 = 'всі слова';
$strSearchOption3 = 'точну фразу';
$strSearchOption4 = 'регулярний вираз';
$strSearchResultsFor = 'Результати пошуку "<i>%s</i>" %s:';
$strSearchType = 'Знайти:';
$strSelect = 'Вибрати';
$strSelectADb = 'Прошу вибрати БД';
$strSelectAll = 'Відмітити все';
$strSelectFields = 'Вибрати поля (щонайменше одне):';
$strSelectNumRows = 'по запиту';
$strSelectTables = 'Вибрати таблиці';
$strSend = 'Відіслати';
$strSent = 'Відправлено';
$strServer = 'Сервер %s';
$strServerChoice = 'Вибір сервера';
$strServerStatus = 'Інформація про роботу сервера';
$strServerStatusUptime = 'Цей MySQL сервер працює %s. Стартував %s.';
$strServerTabProcesslist = 'Процеси';
$strServerTabVariables = 'Змінні';
$strServerTrafficNotes = '<b>Трафік сервера</b>: таблиці показують статистику завантаження мережі цим MySQL сервером з моменту його запуску.';
$strServerVars = 'Змінні сервера та налаштування';
$strServerVersion = 'Версія сервера';
$strSessionValue = 'Значення сесії';
$strSetEnumVal = 'Для типів поля "enum" та "set", введіть значення згідно такого формату: \'a\',\'b\',\'c\'...<br />Якщо вам буде потрібно ввести зворотню косу риску ("\"") або поодинокі лапки ("\'") посеред цих значень, поставте перед ними зворотню косу риску (наприклад, \'\\\\xyz\' чи \'a\\\'b\').';
$strShow = 'Показати';
$strShowAll = 'Показати все';
$strShowColor = 'Показати колір';
$strShowCols = 'Показати колонки';
$strShowDatadictAs = 'Формат словника';
$strShowGrid = 'Показати сітку';
$strShowPHPInfo = 'Показати інформацію про PHP';
$strShowTableDimension = 'Показати розміри таблиць';
$strShowTables = 'Показати таблиці';
$strShowThisQuery = ' Показати даний запит знову ';
$strShowingRecords = 'Показано записи ';
$strSingly = '(окремо)';
$strSize = 'Розмір';
$strSort = 'Посортувати';
$strSpaceUsage = 'Простір, що використовується';
$strSplitWordsWithSpace = 'Слова розділені пробілом (" ").';
$strStatement = 'Параметр';
$strStatus = 'Статус';
$strStrucCSV = 'CSV дані';
$strStrucData = 'Структуру і дані';
$strStrucDrop = 'Додати видалення таблиці';
$strStrucExcelCSV = 'CSV для даних MS Excel';
$strStrucOnly = 'Лише структуру';
$strStructPropose = 'Запропонувати структуру таблиці';
$strStructure = 'Структура';
$strSubmit = 'Виконати';
$strSuccess = 'Ваш SQL-запит було успішно виконано';
$strSum = 'Всього';

$strTable = 'таблиця ';
$strTableComments = 'Коментар до таблиці';
$strTableEmpty = 'Порожня назва таблиці!';
$strTableHasBeenDropped = 'Таблицю %s було знищено';
$strTableHasBeenEmptied = 'Таблицю %s було очищено';
$strTableHasBeenFlushed = 'Було очищено кеш таблиці %s';
$strTableMaintenance = 'Обслговування таблиці';
$strTableOfContents = 'Зміст';
$strTableStructure = 'Структура таблиці';
$strTableType = 'Тип таблиці';
$strTables = '%s таблиц(і)';
$strTblPrivileges = 'Права, які стосуються таблиці';
$strTextAreaLength = ' Через велику довжину,<br /> це поле не може бути відредаговано ';
$strTheContent = 'Вміст файлу було імпортовано.';
$strTheContents = 'Вміст файлу заміняє вміст таблиці для рядків з ідентичними первинним або унікальними ключами.';
$strTheTerminator = 'Символ закінчення полів.';
$strThisHost = 'Цей хост';
$strThreadSuccessfullyKilled = 'Процес %s припинено.';
$strTime = 'Час';
$strTotal = 'всього';
$strTotalUC = 'Разом';
$strTraffic = 'Трафік';
$strType = 'Тип';

$strUncheckAll = 'Зняти усі відмітки';
$strUnique = 'Унікальне';
$strUnselectAll = 'Зняти всі відмітки';
$strUpdatePrivMessage = 'Було змінено привілеї для';
$strUpdateProfile = 'Поновити профіль:';
$strUpdateProfileMessage = 'Профіль було поновлено.';
$strUpdateQuery = 'Доповнити запит';
$strUsage = 'Використання';
$strUseBackquotes = 'Зворотні лапки в назвах таблиць і полів';
$strUseTables = 'Використовувати таблиці';
$strUseTextField = 'Використовувати текстове поле';
$strUser = 'Користувач';
$strUserAlreadyExists = 'Користувач %s вже існує!';
$strUserEmpty = 'Порожнє і\'мя користувача!';
$strUserName = 'Ім\'я користувача';
$strUserNotFound = 'Вказаного користувача не знайдено в таблиці прав.';
$strUserOverview = 'Огляд користувачів';
$strUsers = 'Користувачі';
$strUsersDeleted = 'Відмічених користувачів успішно усунуто.';

$strValidateSQL = 'Перевірити SQL';
$strValidatorError = 'Не можу запустити перевірку SQL. Прошу проконтролювати чи заінстальовано необхідні php extensions як описано в %sдокументації%s.';
$strValue = 'Значення';
$strVar = 'Змінна';
$strViewDump = 'Переглянути дамп (схему) таблиці';
$strViewDumpDB = 'Переглянути дамп (схему) БД';

$strWebServerUploadDirectory = 'каталог веб-сервера для завантаження файлів (upload directory)';
$strWebServerUploadDirectoryError = 'Встановлений Вами каталог для завантаження файлів недоступний';
$strWelcome = 'Ласкаво просимо до %s';
$strWithChecked = 'З відміченими:';
$strWrongUser = 'Невірний логін/пароль. Доступ не дозволено.';

$strYes = 'Так';

$strZeroRemovesTheLimit = 'Примітка: Встановлення цієї опції у 0 (нуль) знімає обмеження.';
$strZip = 'запакувати в "zip"';
// To translate

$strCompression = 'Compression'; //to translate

$strDropUsersDb = 'Drop the databases that have the same names as the users.'; //to translate

$strNoUsersSelected = 'No users selected.'; //to translate


$strAddedColumnComment = 'Added comment for column';  //to translate
$strWritingCommentNotPossible = 'Writing of comment not possible';  //to translate
$strAddedColumnRelation = 'Added relation for column';  //to translate
$strWritingRelationNotPossible = 'Writing of relation not possible';  //to translate
$strImportFinished = 'Import finished';  //to translate
$strFileCouldNotBeRead = 'File could not be read';  //to translate
$strIgnoringFile = 'Ignoring file %s';  //to translate
$strThisNotDirectory = 'This was not a directory';  //to translate
$strAbsolutePathToDocSqlDir = 'Please enter the absolute path on webserver to docSQL directory';  //to translate
$strImportFiles = 'Import files';  //to translate
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
