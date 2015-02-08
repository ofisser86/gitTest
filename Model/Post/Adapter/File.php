<?php
namespace Model\Post\Adapter;

class CFile
{

	public function setDataSet($filePath)
	{
    	$fileContents = file_get_contents($filePath);
    	$fileArray = explode("\n\r", $fileContents);

    	// explode each sample by strings and then by :
    	foreach ($fileArray as $sample) {
    		foreach ($linesArray as $line) {
    			$dataSample[$keyValueArray[0]] = $keyValueArray[1];
    		array_push($this->dataSet, $dataSample);

	public function getById($id)
	{

    	foreach ($this->dataSet as $record) {
    		if ($record['id'] == $id) {
    			return $record;
    		}
    	}

    	return null;
	}