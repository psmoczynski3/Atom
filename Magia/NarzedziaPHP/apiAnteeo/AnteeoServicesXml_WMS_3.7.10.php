<?php

/**
 * AnteeoServicesXml_WMS_3.7.10.php
 *
 * ANTEEO WCF Web Services Client
 *
 * @category   Web Services Client
 * @package    ANTEEO_WMS_WCF_PHP_3.7.10
 * @author     Ryszard Ćwikła
 * @copyright  2017 Software Solutions
 * @version    3.7.10
 * @since      File available since Release 3.7.X
 * @deprecated File deprecated in Release 3.5.X
 */

//////////////////////////// Uwieżytelnienie ////////////////////////////

if (!class_exists("AuthData"))
{
	/**
	 * AuthData
	 */
	class AuthData
	{
		/* @Pole typu string */
		private $login;
		/* @Pole typu string */
		private $loginError;
		/* @Pole typu string */
		private $masterFid;
		/* @Pole typu string */
		private $pass;
		/* @Pole typu integer */
		private $usrId;

        function __construct($masterFid, $login, $pass)
        {
            $this->masterFid = $masterFid;
            $this->login = $login;
            $this->pass = $pass;
        }
	}
}

//////////////////////////// 1. Informacja o systemie ////////////////////////////

if (!class_exists("getXmlSysInfo"))
{
	/**
     * getXmlSysInfo
     */
	class getXmlSysInfo {
		/* @Pole typu AuthData */
		public $authData;
	}
}

if (!class_exists("getXmlSysInfoResponse"))
{
	/**
     * getXmlSysInfoResponse
     */
	class getXmlSysInfoResponse {
		/* @Pole typu base64Binary */
		public $getXmlSysInfoResult;
	}
}

//////////////////////////// 2. Awizacja - dodawanie nagłówka lub awizacji uproszczonej ////////////////////////////

if (!class_exists("generateXmlAdvice"))
{
	/**
	 * generateXmlAdvice
	 */
	class generateXmlAdvice {
		/* @Pole typu base64Binary */
		public $xmlGenAdvice;
		/* @Pole typu AuthData */
		public $authData;
	}
}

if (!class_exists("generateXmlAdviceResponse"))
{
	/**
	 * generateXmlAdviceResponse
	 */
	class generateXmlAdviceResponse {
		/* @Pole typu base64Binary */
		public $generateXmlAdviceResult;
	}
}

//////////////////////////// 3. Awizacja - modyfikaca nagłówka ////////////////////////////

if (!class_exists("modifyXmlAdvice"))
{
	/**
	 * modifyXmlAdvice
	 */
	class modifyXmlAdvice {
		/* @Pole typu base64Binary */
		public $xmlModifyAdvice;
		/* @Pole typu AuthData */
		public $authData;
	}
}

if (!class_exists("modifyXmlAdviceResponse"))
{
	/**
	 * modifyXmlAdviceResponse
	 */
	class modifyXmlAdviceResponse {
		/* @Pole typu base64Binary */
		public $generateXmlAdviceResult;
	}
}

//////////////////////////// 4. Dodawanie pozycji do awizacji ////////////////////////////

if (!class_exists("addXmlAdvicePositions"))
{
	/**
	 * addXmlAdvicePositions
	 */
	class addXmlAdvicePositions {
		/* @Pole typu base64Binary */
		public $xmlAddAdvicePositions;
		/* @Pole typu AuthData */
		public $authData;
	}
}

if (!class_exists("addXmlAdvicePositionsResponse"))
{
	/**
	 * addXmlAdvicePositionsResponse
	 */
	class addXmlAdvicePositionsResponse {
		/* @Pole typu base64Binary */
		public $addXmlAdvicePositionsResult;
	}
}

//////////////////////////// 5. Modyfikacja pozycji awizacji ////////////////////////////

if (!class_exists("modifyXmlAdvicePositions"))
{
	/**
	 * modifyXmlAdvicePositions
	 */
	class modifyXmlAdvicePositions {
		/* @Pole typu base64Binary */
		public $xmlModifyAdvicePositions;
		/* @Pole typu AuthData */
		public $authData;
	}
}

if (!class_exists("modifyXmlAdvicePositionsResponse"))
{
	/**
	 * modifyXmlAdvicePositionsResponse
	 */
	class modifyXmlAdvicePositionsResponse {
		/* @Pole typu base64Binary */
		public $modifyXmlAdvicePositionsResult;
	}
}

//////////////////////////// 6. Awizacja - ustawienie statusu operacji ////////////////////////////

if (!class_exists("setXmlAdviceStatus"))
{
	/**
     * setXmlAdviceStatus
     */
	class setXmlAdviceStatus {
		/* @Pole typu base64Binary */
		public $xmlSetAdviceStatus;
		/* @Pole typu AuthData */
		public $authData;
	}
}

if (!class_exists("setXmlAdviceStatusResponse"))
{
	/**
     * setXmlAdviceStatusResponse
     */
	class setXmlAdviceStatusResponse {
		/* @Pole typu base64Binary */
		public $setXmlAdviceStatusResult;
	}
}

//////////////////////////// 7. Stany magazynowe ////////////////////////////

if (!class_exists("getXmlStock"))
{
	/**
	 * getXmlStock
	 */
	class getXmlStock {
		/* @Pole typu base64Binary */
		public $xmlGetStock;
		/* @Pole typu AuthData */
		public $authData;
	}
}

if (!class_exists("getXmlStockResponse"))
{
	/**
	 * getXmlStockResponse
	 */
	class getXmlStockResponse {
		/* @Pole typu base64Binary */
		public $getXmlStockResult;
	}
}

//////////////////////////// 8. Dodawanie produktu (kartoteka) ////////////////////////////

if (!class_exists("addXmlProduct"))
{
	/**
	 * addXmlProduct
	 */
	class addXmlProduct {
		/* @Pole typu base64Binary */
		public $xmlAddProd;
		/* @Pole typu AuthData */
		public $authData;
	}
}

if (!class_exists("addXmlProductResponse"))
{
	/**
	 * addXmlProductResponse
	 */
	class addXmlProductResponse {
		/* @Pole typu base64Binary */
		public $addXmlProductResult;
	}
}

//////////////////////////// 9. Modyfikacja produktu (kartoteka) ////////////////////////////

if (!class_exists("modifyXmlProduct"))
{
	/**
	 * modifyXmlProduct
	 */
	class modifyXmlProduct {
		/* @Pole typu base64Binary */
		public $xmlModifyProd;
		/* @Pole typu AuthData */
		public $authData;
	}
}

if (!class_exists("modifyXmlProductResponse")) {
	/**
	 * modifyXmlProductResponse
	 */
	class modifyXmlProductResponse {
		/* @Pole typu base64Binary */
		public $modifyXmlProductResult;
	}
}

//////////////////////////// 10. Usuwanie produktu (kartoteka) ////////////////////////////

if (!class_exists("removeXmlProduct"))
{
	/**
	 * removeXmlProduct
	 */
	class removeXmlProduct {
		/* @Pole typu base64Binary */
		public $xmlRemoveProd;
		/* @Pole typu AuthData */
		public $authData;
	}
}

if (!class_exists("removeXmlProductResponse"))
{
	/**
	 * removeXmlProductResponse
	 */
	class removeXmlProductResponse {
		/* @Pole typu base64Binary */
		public $removeXmlProductResult;
	}
}

//////////////////////////// 11. Lista produktów (kartoteki) ////////////////////////////

if (!class_exists("getXmlProductsList"))
{
	/**
	 * getXmlProductsList
	 */
	class getXmlProductsList {
		/* @Pole typu base64Binary */
		public $xmlGetProdList;
		/* @Pole typu AuthData */
		public $authData;
	}
}

if (!class_exists("getXmlProductsListResponse"))
{
	/**
	 * getXmlProductsListResponse
	 */
	class getXmlProductsListResponse {
		/* @Pole typu base64Binary */
		public $getXmlProductsListResult;
	}
}

//////////////////////////// 12. Raport trwałości produktów ////////////////////////////

if (!class_exists("getXmlExpiredProductsList"))
{
	/**
	 * getXmlExpiredProductsList
	 */
	class getXmlExpiredProductsList {
		/* @Pole typu base64Binary */
		public $xmlGetExpiredProdList;
		/* @Pole typu AuthData */
		public $authData;
	}
}

if (!class_exists("getXmlExpiredProductsListResponse"))
{
	/**
	 * getXmlExpiredProductsListResponse
	 */
	class getXmlExpiredProductsListResponse {
		/* @Pole typu base64Binary */
		public $getXmlExpiredProductsListResult;
	}
}

//////////////////////////// 13. Status operacji ////////////////////////////

if (!class_exists("getXmlOperationsStatus"))
{
	/**
	 * getXmlOperationsStatus
	 */
	class getXmlOperationsStatus {
		/* @Pole typu base64Binary */
		public $xmlGetOperStatus;
		/* @Pole typu AuthData */
		public $authData;
	}
}

if (!class_exists("getXmlOperationsStatusResponse"))
{
	/**
	 * getXmlOperationsStatusResponse
	 */
	class getXmlOperationsStatusResponse {
		/* @Pole typu base64Binary */
		public $getXmlOperationsStatusResult;
	}
}

//////////////////////////// 14. Dane operacji ////////////////////////////

if (!class_exists("getXmlOperationsData"))
{
	/**
	 * getXmlOperationsData
	 */
	class getXmlOperationsData {
		/* @Pole typu base64Binary */
		public $xmlGetOperData;
		/* @Pole typu AuthData */
		public $authData;
	}
}

if (!class_exists("getXmlOperationsDataResponse"))
{
	class getXmlOperationsDataResponse {
		/* @Pole typu base64Binary */
		public $getXmlOperationsDataResult;
	}
}

//////////////////////////// 15. Ustawienie operacji zrealizowanych ////////////////////////////

if (!class_exists("setXmlOperationsCollected"))
{
	/**
	 * setXmlOperationsCollected
	 */
	class setXmlOperationsCollected {
		/* @Pole typu base64Binary */
		public $xmlSetOperCollected;
		/* @Pole typu AuthData */
		public $authData;
	}
}

if (!class_exists("setXmlOperationsCollectedResponse")) {
	/**
	 * setXmlOperationsCollectedResponse
	 */
	class setXmlOperationsCollectedResponse {
		/* @Pole typu base64Binary */
		public $setXmlOperationsCollectedResult;
	}
}

//////////////////////////// 16. Lista rozliczeń usług magazynowych ////////////////////////////

if (!class_exists("getXmlBillingsList"))
{
	/**
	 * getXmlBillingsList
	 */
	class getXmlBillingsList {
		/* @Pole typu base64Binary */
		public $xmlGetBillingsList;
		/* @Pole typu AuthData */
		public $authData;
	}
}

if (!class_exists("getXmlBillingsListResponse")) {
	/**
	 * getXmlBillingsListResponse
	 */
	class getXmlBillingsListResponse {
		/* @Pole typu base64Binary */
		public $getXmlBillingsListResult;
	}
}

//////////////////////////// 17. Dodawanie pliku (PDF) ////////////////////////////

if (!class_exists("addXmlOperationsFile"))
{
	/**
	 * addXmlOperationsFile
	 */
	class addXmlOperationsFile {
		/* @Pole typu base64Binary */
		public $xmlAddOperFilePart;
		/* @Pole typu AuthData */
		public $authData;
	}
}

if (!class_exists("addXmlOperationsFileResponse"))
{
	/**
	 * addXmlOperationsFileResponse
	 */
	class addXmlOperationsFileResponse {
		/* @Pole typu base64Binary */
		public $addXmlOperationsFileResult;
	}
}

//////////////////////////// 18. Słowniki ////////////////////////////

if (!class_exists("getXmlDictionariesList"))
{
	/**
     * getXmlDictionariesList
	 */
	class getXmlDictionariesList {
		/* @Pole typu base64Binary */
		public $xmlGetDictionariesList;
		/* @Pole typu AuthData */
		public $authData;
	}
}

if (!class_exists("getXmlDictionariesListResponse"))
{
	/**
     * getXmlDictionariesListResponse
	 */
	class getXmlDictionariesListResponse {
		/* @Pole typu base64Binary */
		public $getXmlDictionariesListResult;
	}
}

if (!class_exists("AnteeoServicesXml_WMS")) {
	/**
	 * AnteeoServicesXml_WMS
	 * @Author Ryszard Ćwikła
	 */
	class AnteeoServicesXml_WMS extends SoapClient
	{

		/**
		 * Konstruktor korzystający z definicji WSDL i opcji array
		 * @Parametr typu string $wsdl - lokalizacja definicji WSDL
		 * @Parametr typu array $options - opcje dla SoapClient
		 */
		public function __construct($wsdl=null, $options=array()) {
			parent::__construct($wsdl, $options);
		}

		/**
		 * Sprawdza czy lista przekazanych parametrów pasuje do walidowanych typów z listy argumentów
		 * @Parametr typu array $arguments - argumenty przeznaczone do walidacji
		 * @Parametr typu array $validParameters - lista walidowanych parametrów
		 * @Zwraca typ boolean - zwraca wartość true jeżeli argument pasuje do listy walidowanych parametrów - $validParameters
		 * @Zwaraca wyjątek nieprawidłowej sygnatury funkcji
		 */
		public function _checkArguments($arguments, $validParameters) {
			$variables = "";
			foreach ($arguments as $arg) {
				$type = gettype($arg);
				if ($type == "object"){
					$type = get_class($arg);
				}
				$variables .= "(".$type.")";
			}
			if (!in_array($variables, $validParameters)) {
				throw new Exception("Invalid parameter types: ".str_replace(")(", ", ", $variables));
			}
			return true;
		}

		/**
		 * Wołanie usługi: generateXmlAdvice
		 *
		 * (generateXmlAdvice) parameters
		 * @Parametry mieszane,... Patrz opis funkcji opcji parametrów
		 * @return generateXmlAdviceResponse
		 * @Zwaraca wyjątek nieprawidłowej sygnatury funkcji lub wynik działania usługi
		 */
		public function generateXmlAdvice($mixed = null) {
			$validParameters = array(
				"(generateXmlAdvice)",
			);
			$args = func_get_args();
			$this->_checkArguments($args, $validParameters);
			return $this->__soapCall("generateXmlAdvice", $args);
		}

		 /**
		 * Wołanie usługi: modifyXmlAdvice
		 *
		 * (modifyXmlAdvice) parameters
		 * @Parametry mieszane,... Patrz opis funkcji opcji parametrów
		 * @return modifyXmlAdviceResponse
		 * @Zwaraca wyjątek nieprawidłowej sygnatury funkcji lub wynik działania usługi
		 */
		public function modifyXmlAdvice($mixed = null) {
			$validParameters = array(
				"(modifyXmlAdvice)",
			);
			$args = func_get_args();
			$this->_checkArguments($args, $validParameters);
			return $this->__soapCall("modifyXmlAdvice", $args);
		}

		/**
		 * Wołanie usługi: setXmlAdviceStatus
		 *
		 * (setXmlAdviceStatus) parameters
		 * @Parametry mieszane,... Patrz opis funkcji opcji parametrów
		 * @return setXmlAdviceStatusResponse
		 * @Zwaraca wyjątek nieprawidłowej sygnatury funkcji lub wynik działania usługi
		 */
		public function setXmlAdviceStatus($mixed = null) {
			$validParameters = array(
				"(setXmlAdviceStatus)",
			);
			$args = func_get_args();
			$this->_checkArguments($args, $validParameters);
			return $this->__soapCall("setXmlAdviceStatus", $args);
		}


		/**
		 * Wołanie usługi: addXmlAdvicePositions
		 *
		 * (addXmlAdvicePositions) parameters
		 * @Parametry mieszane,... Patrz opis funkcji opcji parametrów
		 * @return addXmlAdvicePositionsResponse
		 * @Zwaraca wyjątek nieprawidłowej sygnatury funkcji lub wynik działania usługi
		 */
		public function addXmlAdvicePositions($mixed = null) {
			$validParameters = array(
				"(addXmlAdvicePositions)",
			);
			$args = func_get_args();
			$this->_checkArguments($args, $validParameters);
			return $this->__soapCall("addXmlAdvicePositions", $args);
		}

				/**
		 * Wołanie usługi: modifyXmlAdvicePositions
		 *
		 * (modifyXmlAdvicePositions) parameters
		 * @Parametry mieszane,... Patrz opis funkcji opcji parametrów
		 * @return modifyXmlAdvicePositionsResponse
		 * @Zwaraca wyjątek nieprawidłowej sygnatury funkcji lub wynik działania usługi
		 */
		public function modifyXmlAdvicePositions($mixed = null) {
			$validParameters = array(
				"(modifyXmlAdvicePositions)",
			);
			$args = func_get_args();
			$this->_checkArguments($args, $validParameters);
			return $this->__soapCall("modifyXmlAdvicePositions", $args);
		}

		/**
		 * Wołanie usługi: getXmlStock
		 *
		 * (getXmlStock) parameters
		 * @Parametry mieszane,... Patrz opis funkcji opcji parametrów
		 * @return getXmlStockResponse
		 * @Zwaraca wyjątek nieprawidłowej sygnatury funkcji lub wynik działania usługi
		 */
		public function getXmlStock($mixed = null) {
			$validParameters = array(
				"(getXmlStock)",
			);
			$args = func_get_args();
			$this->_checkArguments($args, $validParameters);
			return $this->__soapCall("getXmlStock", $args);
		}

		/**
		 * Wołanie usługi: addXmlProduct
		 *
		 * (addXmlProduct) parameters
		 * @Parametry mieszane,... Patrz opis funkcji opcji parametrów
		 * @return addXmlProductResponse
		 * @Zwaraca wyjątek nieprawidłowej sygnatury funkcji lub wynik działania usługi
		 */
		public function addXmlProduct($mixed = null) {
			$validParameters = array(
				"(addXmlProduct)",
			);
			$args = func_get_args();
			$this->_checkArguments($args, $validParameters);
			return $this->__soapCall("addXmlProduct", $args);
		}

		 /**
		 * Wołanie usługi: modifyXmlProduct
		 *
		 * (modifyXmlProduct) parameters
		 * @Parametry mieszane,... Patrz opis funkcji opcji parametrów
		 * @return modifyXmlProductResponse
		 * @Zwaraca wyjątek nieprawidłowej sygnatury funkcji lub wynik działania usługi
		 */
		public function modifyXmlProduct($mixed = null) {
			$validParameters = array(
				"(modifyXmlProduct)",
			);
			$args = func_get_args();
			$this->_checkArguments($args, $validParameters);
			return $this->__soapCall("modifyXmlProduct", $args);
		}

		/**
		 * Wołanie usługi: removeXmlProduct
		 *
		 * (removeXmlProduct) parameters
		 * @Parametry mieszane,... Patrz opis funkcji opcji parametrów
		 * @return removeXmlProductResponse
		 * @Zwaraca wyjątek nieprawidłowej sygnatury funkcji lub wynik działania usługi
		 */
		public function removeXmlProduct($mixed = null) {
			$validParameters = array(
				"(removeXmlProduct)",
			);
			$args = func_get_args();
			$this->_checkArguments($args, $validParameters);
			return $this->__soapCall("removeXmlProduct", $args);
		}

		/**
		 * Wołanie usługi: getXmlProductsList
		 *
		 * (getXmlProductsList) parameters
		 * @Parametry mieszane,... Patrz opis funkcji opcji parametrów
		 * @return getXmlProductsListResponse
		 * @Zwaraca wyjątek nieprawidłowej sygnatury funkcji lub wynik działania usługi
		 */
		public function getXmlProductsList($mixed = null) {
			$validParameters = array(
				"(getXmlProductsList)",
			);
			$args = func_get_args();
			$this->_checkArguments($args, $validParameters);
			return $this->__soapCall("getXmlProductsList", $args);
		}

		/**
		 * Wołanie usługi: getXmlExpiredProductsList
		 *
		 * (getXmlExpiredProductsList) parameters
		 * @Parametry mieszane,... Patrz opis funkcji opcji parametrów
		 * @return getXmlExpiredProductsListResponse
		 * @Zwaraca wyjątek nieprawidłowej sygnatury funkcji lub wynik działania usługi
		 */
		public function getXmlExpiredProductsList($mixed = null) {
			$validParameters = array(
				"(getXmlExpiredProductsList)",
			);
			$args = func_get_args();
			$this->_checkArguments($args, $validParameters);
			return $this->__soapCall("getXmlExpiredProductsList", $args);
		}

		/**
		 * Wołanie usługi: getXmlOperationsStatus
		 *
		 * (getXmlOperationsStatus) parameters
		 * @Parametry mieszane,... Patrz opis funkcji opcji parametrów
		 * @return getXmlOperationsStatusResponse
		 * @Zwaraca wyjątek nieprawidłowej sygnatury funkcji lub wynik działania usługi
		 */
		public function getXmlOperationsStatus($mixed = null) {
			$validParameters = array(
				"(getXmlOperationsStatus)",
			);
			$args = func_get_args();
			$this->_checkArguments($args, $validParameters);
			return $this->__soapCall("getXmlOperationsStatus", $args);
		}

		/**
		 * Wołanie usługi: getXmlOperationsData
		 *
		 * (getXmlOperationsData) parameters
		 * @Parametry mieszane,... Patrz opis funkcji opcji parametrów
		 * @return getXmlOperationsDataResponse
		 * @Zwaraca wyjątek nieprawidłowej sygnatury funkcji lub wynik działania usługi
		 */
		public function getXmlOperationsData($mixed = null) {
			$validParameters = array(
				"(getXmlOperationsData)",
			);
			$args = func_get_args();
			$this->_checkArguments($args, $validParameters);
			return $this->__soapCall("getXmlOperationsData", $args);
		}

		/**
		 * Wołanie usługi: setXmlOperationsCollected
		 *
		 * (setXmlOperationsCollected) parameters
		 * @Parametry mieszane,... Patrz opis funkcji opcji parametrów
		 * @return setXmlOperationsCollectedResponse
		 * @Zwaraca wyjątek nieprawidłowej sygnatury funkcji lub wynik działania usługi
		 */
		public function setXmlOperationsCollected($mixed = null) {
			$validParameters = array(
				"(setXmlOperationsCollected)",
			);
			$args = func_get_args();
			$this->_checkArguments($args, $validParameters);
			return $this->__soapCall("setXmlOperationsCollected", $args);
		}

		 /**
		 * Wołanie usługi: getXmlBillingsList
		 *
		 * (getXmlBillingsList) parameters
		 * @Parametry mieszane,... Patrz opis funkcji opcji parametrów
		 * @return getXmlBillingsListResponse
		 * @Zwaraca wyjątek nieprawidłowej sygnatury funkcji lub wynik działania usługi
		 */
		public function getXmlBillingsList($mixed = null) {
			$validParameters = array(
				"(getXmlBillingsList)",
			);
			$args = func_get_args();
			$this->_checkArguments($args, $validParameters);
			return $this->__soapCall("getXmlBillingsList", $args);
		}

		/**
		 * Wołanie usługi: addXmlOperationsFile
		 *
		 * (addXmlOperationsFile) parameters
		 * @Parametry mieszane,... Patrz opis funkcji opcji parametrów
		 * @return addXmlOperationsFileResponse
		 * @Zwaraca wyjątek nieprawidłowej sygnatury funkcji lub wynik działania usługi
		 */
		public function addXmlOperationsFile($mixed = null) {
			$validParameters = array(
				"(addXmlOperationsFile)",
			);
			$args = func_get_args();
			$this->_checkArguments($args, $validParameters);
			return $this->__soapCall("addXmlOperationsFile", $args);
		}

        /**
         * Wołanie usługi: getXmlDictionariesList
         *
         * (getXmlDictionariesList) parameters
         * @Parametry mieszane,... Patrz opis funkcji opcji parametrów
         * @return getXmlDictionariesListResponse
         * @Zwaraca wyjątek nieprawidłowej sygnatury funkcji lub wynik działania usługi
         */
		public function getXmlDictionariesList($mixed = null) {
			$validParameters = array(
				"(getXmlDictionariesList)",
			);
			$args = func_get_args();
			$this->_checkArguments($args, $validParameters);
			return $this->__soapCall("getXmlDictionariesList", $args);
		}

        /**
         * Wołanie usługi: getXmlSysInfo
         *
         * (getXmlSysInfo) parameters
         * @Parametry mieszane,... Patrz opis funkcji opcji parametrów
         * @return getXmlSysInfoResponse
         * @Zwaraca wyjątek nieprawidłowej sygnatury funkcji lub wynik działania usługi
         */
		private function getXmlSysInfo($mixed = null) {
			$validParameters = array(
				"(getXmlSysInfo)",
			);
			$args = func_get_args();
			$this->_checkArguments($args, $validParameters);
			return $this->__soapCall("getXmlSysInfo", $args);
		}
	}
}

if (!class_exists("FileService"))
{
    class FileServices
    {
        public function uploadFileByParts($wsClient, $trnid, $bytesArray, $fileName, $stopOnError)
        {
            $resStr = "";
            if(!is_null($wsClient))
            {
                try
                {
                    $base64String = "";
                    $md5 = "";
                    // wyliczanie sumy kontrolnej
                    if($bytesArray != null)
                        $md5 = FileServices::MD5_CheckSum($bytesArray);
                    // konwersja bajtów w ciąg Base64
                    if($bytesArray != null)
                        $base64String = base64_encode($bytesArray);
                    if (strlen($md5) > 0 && strlen($base64String) > 0)
                    {
                        // tworzenie tablicy zakodowanych ciągów BASE64 do przesłania (metodą dzieląca ciąg jest dostarczoną w tym przykładzie)
                        $base64Table  = FileServices::Chop($base64String, 15000); // ustawienie liczby znaków (15000) wysyłanych jednorazowo
                        $loopNr = 1;
                        $loops = count($base64Table);
                        // przesyłanie kolejno części pliku
                        foreach ($base64Table as &$base64)
                        {
                            // podstawowa część dokumentu
                            $xml = new SimpleXMLElement("<?xml version=\"1.0\" encoding=\"utf-8\" ?><ROOT/>"); // początek ROOT
                            // Początek dokumentu
                            $current = $xml->addChild("NAGLOWEK");
                            $current->addChild("TRNID", $trnid);
                            $current = $current->addChild("PLIK");
                            $current->addChild("LP", $loopNr);
                            // nazwa pliku podawana jest w pierwszej i ostaniej pętli
                            if ($loopNr == 1 || $loopNr == $loops)
                            {
                                $current->addChild("NAZWA", $fileName);
                                $current->addChild("RODZAJ", "B"); // typ dokumentu: A –> Kurier B –> Dokumenty - służy skierowaniu wydruku na odpowiednie urządzenie drukujące.
                            }
                            // suma kontrolna pliku podawana jest w ostaniej pętli
                            if ($loopNr == $loops)
                                $current->addChild("MD5", $md5);

                            // zapis do węzła CIAGBASE64 części pliku zakodowanej w BASE64
                            $current->addChild("CIAGBASE64", $base64);

                            // utworzenie pakietu XML
                            $xmlFilePart = $xml->asXML();

                            //wyświetlanie testowe wysyłanego dokumentu XML
                            echo '<pre>', htmlentities($xmlFilePart), '</pre>';

                            //$xmlFilePart = unpack('C*',utf8_encode($xmlFilePart));
                            //echo '<pre>', htmlentities(count($xmlFilePart)), '</pre>';

                            // przygotowanie pakietu XML do przesłania
                            $addXmlOperationsFile = new addXmlOperationsFile();
                            $addXmlOperationsFile->authData = $wsClient->GetAuthData();
                            $addXmlOperationsFile->xmlAddOperFilePart = $xmlFilePart;
                            // przesyłanie pakietu XML
                            $addXmlOperationsFileResponse = $wsClient->addXmlOperationsFile($addXmlOperationsFile);
                            // odbiór zwrotnej odpowiedzi
                            $result = $addXmlOperationsFileResponse->addXmlOperationsFileResult;

                            // Odpowiedź jest pusta jeśli prawidło przesłano część dokumentu. Jeżeli wystąpił błąd to odpowiedź zawiera jego opis.
                            // Odpowiedź zawiera również wynik przetwarzania pliku po zakończeniu operacji w ostatniej pętli.

                            if (!is_null($result) && strlen($result)>0)
                            {
                                $resStr .= $result;
                                if($stopOnError && $loopNr != $loops)
                                {
                                    break;
                                }
                            }
                            $loopNr++;
                        }
                    }
                }
                catch (Exception $ex)
                {
                    // UWAGA - część wyłapująca błędy wymaga rozszerzenia oraz dostosowania do własnych potrzeb
                    $resStr = '<ROOT><NAGLOWEK><STATUS>ERR_UNKNOWN</STATUS><OPIS><![CDATA[Nieznany błąd: ' . $ex->getMessage() . ']]></OPIS></NAGLOWEK><STATUS>ERR_UNKNOWN</STATUS></ROOT>';
                }
                finally
                {
                }
            }
            return $resStr;
        }

        private static function MD5_CheckSum($bytesInput)
        {
            // hash MD5 z parametru wejściowego
            $hash = strtoupper(md5($bytesInput));
            return $hash;
        }

        private static function Chop($value, $chunkLength)
        {
            $strLength = strlen($value);
            $strCount = ($strLength + $chunkLength - 1) / $chunkLength;
            $result = array();
            for ($i = 0; $i < $strCount; ++$i)
            {
                $strChopped = substr($value, $i * $chunkLength, min($chunkLength, $strLength));
                array_push($result, $strChopped);
                $strLength = $strLength - $chunkLength;
            }
            return $result;
        }
    }
}

//////////////////////////// Klient Usług Internetowych ANTEEO WCF ////////////////////////////

class WebServicesClient extends AnteeoServicesXml_WMS
{
	private $WSDLUrl = null;
    private $authData = null;

    function __construct($wsdl, $authData, $options)
    {
        $this->WSDLUrl = $wsdl;
        $this->authData = $authData;
        parent::__construct($wsdl, $options);
    }

    public function GetWSDLUrl()
    {
        return $this->WSDLUrl;
    }

    public function GetAuthData()
    {
        return $this->authData;
    }
}

?>