<?php
 /**
 * index_3.7.10.php
 *
 * ANTEEO WCF Web Services call example in PHP language
 *
 */
 /****************************************************************************************
 * ///////////////////////////////////////////////////////////////////////////////////// *
 * ////////// Przykłady wywołania usług internetowych ANTEEO WCF w języku PHP ////////// *
 * ///////////////////////////////////////////////////////////////////////////////////// *
 *                                                                                       *
 *   Wyłączenie odpowiedzialności:                                                       *
 *     Autor oświadcza, że nie bierze żadnej odpowiedzialności za nieprawidłowe/błędne   *
 *     działanie wykorzystywanego kodu i metod zamieszczonych w przykładzie.             *
 *                                                                                       *
 *****************************************************************************************/
?>

<html>
<head>
<meta name="author" content="ANTEEO WCF Web Services call example in PHP language">
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>ANTEEO WCF Web Services call example in PHP language</title>
</head>
    <body style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;font-size:11px;">
    <?php
	ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
    include_once('AnteeoServicesXml_WMS_3.7.10.php');
    // WebServicesClient
    $wsClient = null;
    // ID dokumentu (operacji) systemu ANTEEO WMS
    $trnid = 'WZ-492/MAGIA/2020';
    $options = array(
        'soap_version'=>SOAP_1_1,
        'exceptions'=>true,
        'trace'=>1,
        'cache_wsdl'=>WSDL_CACHE_NONE
    );
    try
    {
        $wsClient =  new WebServicesClient
        (
            "http://eanteeo.pov.com.pl:3395/AnteeoServicesXml_WMS.svc?wsdl", 
            new AuthData('8dda8f84becf08f9cfb4864e21d7c357560670cf', 'MAGIAPOLNOCY_API', 'G$32bvcP)SJ*gfsrT5RrfDESc'), 
            $options
        );
    }
    catch (SoapFault $e)
    {
        echo "<h2>SoapFault Error!</h2>";
        echo $e->getMessage();
    }
    catch (Exception $e) {
        echo "<h2>Exception Error!</h2>";
        echo $e->getMessage();
    }
    ?>
        <div style="position:relative;right:0px;background-color:whitesmoke;padding:15px;width:auto;height:auto;">
            <div style="position:absolute; float:right; right:20px; height:200px; width:500px">
                <form action="" method="post" enctype="multipart/form-data">
                    <label for="fileUpload">Nazwa pliku:</label>
                    <input type="file" name="fileUpload" id="fileUpload" />
                    <br />
                    <input type="submit" name="submit" value="Submit" />
                </form>
            </div>

        <?php

        /////////////////////////////// 17. Dodawanie pliku (PDF) - addXmlOperationsFile (FileServices->uploadFileByParts(...)) ///////////////////////////////

        if(!is_null($wsClient))
        {
            if(!empty($_FILES["fileUpload"]))
            {
                echo '<BR />Usługa wysyłania plików PDF:<BR /><BR />';

                if ($_FILES["fileUpload"]["error"] > 0)
                {
                    echo "Error: " . $_FILES["fileUpload"]["error"] . "<br>";
                }
                else
                {

                    $file_tmp_name = $_FILES["fileUpload"]["tmp_name"];
                    $file_name = $_FILES["fileUpload"]["name"];

                    echo "Upload: " . $file_name . "<br>";
                    echo "Type: " . $_FILES["fileUpload"]["type"] . "<br>";
                    echo "Size: " . ($_FILES["fileUpload"]["size"] / 1024) . " kB<br>";
                    echo "Stored in: " . $file_tmp_name;

                    // utworzenie tablicy bajtów
                    $bytesArray = file_get_contents($file_tmp_name);

                    if(!is_null($bytesArray) && count($bytesArray)>0)
                    {
                        $fileServices = new FileServices();
                        // po pierwszym błędzie zatrzymuje przesyłanie
                        $stopOnError = true;
                        // wywołanie
                        $xmlResult = $fileServices->uploadFileByParts($wsClient, $trnid, $bytesArray, $file_name, $stopOnError);
                        echo '<pre>', htmlentities($xmlResult), '</pre>';
                    }
                }
            }
        }
        ?>
        </div>
        <div style="background-color:whitesmoke;padding:15px;width:auto;height:auto;">
        <?php

        if(!is_null($wsClient))
        {
            /////////////////////////////// * Lista dostępnych usług ///////////////////////////////

            echo '<BR />Lista dostępnych usług:<BR /><BR />';

            try{
                $array = $wsClient->__getFunctions();
                $idx = 1;

                foreach ($array as $value)
                {
                    echo "* nr $idx - $value<BR />";
                    $idx++;
                }
                echo'<BR />';
            }
            catch (Exception $e)
            {
                echo "<h2>Exception Error!</h2>";
                echo $e->getMessage();
            }

            /////////////////////////////// * Dane połączenia ///////////////////////////////

            $url = $wsClient->GetWSDLUrl();
            echo "<BR />Połączenie:<BR />";
            echo "<BR />&emsp;Wersja WS:&emsp;3.7.10<BR />";
            echo "&emsp;WSDL:&emsp;&emsp;&emsp;$url<BR />";


            /************************** Przykładowe wywołania usług w PHP *************************/

            /////////////////////////////// 1. Informacja o systemie ///////////////////////////////

            echo '<BR /><BR />Usługa getXmlSysInfo (1. Informacja o systemie):<BR />';

            $getXmlSysInfo = new getXmlSysInfo();
            $getXmlSysInfo->authData = $wsClient->GetAuthData();

            try {
                $getXmlSysInfoResponse = $wsClient->getXmlSysInfo($getXmlSysInfo);
                echo '<pre>', htmlentities($getXmlSysInfoResponse->getXmlSysInfoResult), '</pre>';
            }
            catch (Exception $e)
            {
                echo "<h2>Exception Error!</h2>";
                echo $e->getMessage();
            }

            /////////////////////////////// 18. Słowniki ///////////////////////////////

            echo '<BR /><BR />Usługa getXmlDictionariesList (18. Słowniki):<BR />';

            try
            {
                $getXmlDictionariesList = new getXmlDictionariesList();
                $getXmlDictionariesList->authData = $wsClient->GetAuthData();
                $getXmlDictionariesList->xmlGetDictionariesList = '<?xml version="1.0" encoding="UTF-8"?><ROOT><NAGLOWEK><FILTR><SLOWNIK>PRZEWOZNICY</SLOWNIK><SLOWNIK>ASORTYMENTY</SLOWNIK></FILTR></NAGLOWEK></ROOT>';
                $getXmlDictionariesListResponse = $wsClient->getXmlDictionariesList($getXmlDictionariesList);
                echo '<pre>', htmlentities($getXmlDictionariesListResponse->getXmlDictionariesListResult), '</pre>';
            }
            catch (Exception $e)
            {
                echo "<h2>Exception Error!</h2>";
                echo $e->getMessage();
            }

            /////////////////////////////// 11. Lista produktów (kartoteki) ///////////////////////////////

            echo '<BR /><BR />Usługa getXmlProductsList (11. Lista produktów (kartoteki)):<BR />';
/*
            try
            {
                $getXmlProductsList = new getXmlProductsList();
                $getXmlProductsList->authData = $wsClient->GetAuthData();
                $getXmlProductsList->xmlGetProdList = '<?xml version="1.0" encoding="UTF-8"?><ROOT><NAGLOWEK><FILTR></FILTR></NAGLOWEK></ROOT>';
                $getXmlProductsListResponse = $wsClient->getXmlProductsList($getXmlProductsList);
                echo '<pre>', htmlentities($getXmlProductsListResponse->getXmlProductsListResult), '</pre>';
            }
            catch (Exception $e)
            {
                echo "<h2>Exception Error!</h2>";
                echo $e->getMessage();
            }
*/

            /////////////////////////////// 7. Stany magazynowe ///////////////////////////////

            /*echo '<BR /><BR />Usługa getXmlStock (7. Stany magazynowe):<BR />';

            try
            {
                $getXmlStock = new getXmlStock();
                $getXmlStock->authData = $wsClient->GetAuthData();
                $getXmlStock->xmlGetStock = '<?xml version="1.0" encoding="UTF-8"?><ROOT><NAGLOWEK><FILTR></FILTR></NAGLOWEK></ROOT>';
                $getXmlStockResponse = $wsClient->getXmlStock($getXmlStock);
                echo '<pre>', htmlentities($getXmlStockResponse->getXmlStockResult), '</pre>';
            }
            catch (Exception $e)
            {
                echo "<h2>Exception Error!</h2>";
                echo $e->getMessage();
            }
            

            /////////////////////////////// 2. Awizacja - dodawanie nagłówka lub awizacji uproszczonej ///////////////////////////////

*/
            echo '<BR /><BR />Usługa generateXmlAdvice (2. Awizacja - dodawanie nagłówka lub awizacji uproszczonej):<BR />';

            try
            {
                $xmlAdvice = '<?xml version="1.0" encoding="UTF-8"?>
                <ROOT>
                <NAGLOWEK>
                <GENERATOR>ERP</GENERATOR>
                <TYP_DOKUMENTU>420</TYP_DOKUMENTU>
                <NUMER_PELNY>WZ/17/2016</NUMER_PELNY>
                <CECHA />
                <DATA_DOKUMENTU>2016-12-02</DATA_DOKUMENTU>
                <DATA_WYSTAWIENIA>2016-12-02</DATA_WYSTAWIENIA>
                <DATA_OPERACJI>2016-12-02</DATA_OPERACJI>
                <OPIS>Opis dla magazynu ŚĆćśŁłęĘ</OPIS>
                <KONTRAHENT>
                <KOD>SOFTSOL2</KOD>
                <NIP>5862040690</NIP>
                <NAZWA>Software Sołutions</NAZWA>
                <ADRES>
                <KOD_POCZTOWY>00-170</KOD_POCZTOWY>
                <MIASTO>Warszawa</MIASTO>
                <ULICA>ul. Choćimska 31/2</ULICA>
                <KRAJ>PL</KRAJ>
                </ADRES>
                </KONTRAHENT>
                </NAGLOWEK>
                </ROOT>';


                $generateXmlAdvice = new generateXmlAdvice();
                $generateXmlAdvice->authData = $wsClient->GetAuthData();
                $generateXmlAdvice->xmlGenAdvice = $xmlAdvice;
                $generateXmlAdviceResponse = $wsClient->generateXmlAdvice($generateXmlAdvice);

                //Pobieranie wartości identifikatora operacji (TRNID) powinno nastąpić po pwawidłowym założeniu nagłówka awizacji
                echo '<pre>', htmlentities($generateXmlAdviceResponse->generateXmlAdviceResult), '</pre>';

                /////////////////////////////// 4. Dodawanie pozycji do awizacji  ///////////////////////////////

                // TRNID -> ID zwotne z nagłówka awizacji

                echo '<BR /><BR />Usługa addXmlAdvicePositions (4. Dodawanie pozycji do awizacji):<BR />';

                $xmlAddAdvicePositions = '<?xml version="1.0" encoding="utf-8"?>
                <ROOT>
                <NAGLOWEK>
                <TRNID>'.$trnid.'</TRNID>
                <POZYCJE>
                <POZYCJA>
                <LP>1</LP>
                <TWRID>16364</TWRID>
                <ILOSC>10.0000</ILOSC>
                <MAG>MAG</MAG>
                <JM>szt</JM>
                </POZYCJA>
                <POZYCJA>
                <LP>1</LP>
                <TWRID>16374</TWRID>
                <ILOSC>10.0000</ILOSC>
                <MAG>MAG</MAG>
                <JM>szt</JM>
                </POZYCJA>
                </POZYCJE>
                </NAGLOWEK>
                </ROOT>';

                $addXmlAdvicePositions = new addXmlAdvicePositions();
                $addXmlAdvicePositions->authData = $wsClient->GetAuthData();
                $addXmlAdvicePositions->xmlAddAdvicePositions = $xmlAddAdvicePositions;
                $addXmlAdvicePositionsResponse = $wsClient->addXmlAdvicePositions($addXmlAdvicePositions);
                echo '<pre>', htmlentities($addXmlAdvicePositionsResponse->addXmlAdvicePositionsResult), '</pre>';


                /////////////////////////////// 6. Awizacja - ustawienie statusu operacji ///////////////////////////////

                // TRNID -> ID zwotne z nagłówka awizacji

                echo '<BR /><BR />Usługa setXmlAdviceStatus (6. Awizacja - ustawienie statusu operacji):<BR />';

                $xmlAdviceStatus = '<?xml version="1.0" encoding="utf-8"?>
                <ROOT>
                <NAGLOWEK>
                <TRNID>'.$trnid.'</TRNID>
                <STATUS>20</STATUS>
                <AWIZACJA>20</AWIZACJA>
                </NAGLOWEK>
                </ROOT>';

                $setXmlAdviceStatus = new setXmlAdviceStatus();
                $setXmlAdviceStatus->authData = $wsClient->GetAuthData();
                $setXmlAdviceStatus->xmlSetAdviceStatus = $xmlAdviceStatus;
                $setXmlAdviceStatusResponse = $wsClient->setXmlAdviceStatus($setXmlAdviceStatus);
                echo '<pre>', htmlentities($setXmlAdviceStatusResponse->setXmlAdviceStatusResult), '</pre>';

            }
            catch (Exception $e)
            {
                echo "<h2>Exception Error!</h2>";
                echo $e->getMessage();
            }
/*
            /////////////////////////////// 14. Dane operacji ///////////////////////////////

            echo '<BR /><BR />Usługa getXmlOperationsData (14. Dane operacji):<BR />';

            try
            {
                $getXmlOperationsData = new getXmlOperationsData();
                $getXmlOperationsData->authData = $wsClient->GetAuthData();
                $getXmlOperationsData->xmlGetOperData = '<?xml version="1.0" encoding="UTF-8"?>
                <ROOT>
                <NAGLOWEK>
                <FILTR>
                <TRNID>'.$trnid.'</TRNID>
                </FILTR>
                </NAGLOWEK>
                </ROOT>';
                $getXmlOperationsDataResponse = $wsClient->getXmlOperationsData($getXmlOperationsData);
                echo '<pre>', htmlentities($getXmlOperationsDataResponse->getXmlOperationsDataResult), '</pre>';
            }
            catch (Exception $e)
            {
                echo "<h2>Exception Error!</h2>";
                echo $e->getMessage();
            }*/
        }
        ?>
        </div>
    </body>
</html>
