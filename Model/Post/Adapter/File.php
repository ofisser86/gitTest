<?php
namespace Model\Post\Adapter;

class CFile
{	private $dataSet = array();

	public function setDataSet($filePath)
	{    	$dataSample = array();
    	$fileContents = file_get_contents($filePath);
    	$fileArray = explode("\n\r", $fileContents);

    	// explode each sample by strings and then by :
    	foreach ($fileArray as $sample) {    		$linesArray = explode("\n", $sample);
    		foreach ($linesArray as $line) {    			$line = trim($line);    			if (strstr($line, ":") != false) {    				$keyValueArray = explode(":", $line);    			}
    			$dataSample[$keyValueArray[0]] = $keyValueArray[1];    		}
    		array_push($this->dataSet, $dataSample);    	}	}

	public function getById($id)
	{

    	foreach ($this->dataSet as $record) {
    		if ($record['id'] == $id) {
    			return $record;
    		}
    	}

    	return null;
	}}